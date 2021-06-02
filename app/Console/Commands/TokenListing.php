<?php

namespace App\Console\Commands;

use App\Helpers\CrawlerHelper;
use App\Models\Dapps;
use App\Models\Token;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TokenListing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'token:listing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get token list';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $root = env('CENTER');
        $url_api = $root.'api/nft';
        $dapps = Dapps::all();
        $tokens = CrawlerHelper::curl_api($url_api);
        if (isset($tokens['data'])) {
            $tokens = $tokens['data'];
            foreach ($tokens as $item) {
                $exist = Token::where('tokenId', $item['tokenId'])->first();
                if (!$exist) {
                    $item['raw_data'] = json_encode($item);
                    $websiteURL = $item['coinrankingUrl'];
                    $slug_arr = explode('/', $websiteURL);
                    $item['slug'] = end($slug_arr);
                    $url_thumb = $root.$item['thumb'];
                    $item['source_id'] = $item['id'];
                    $dapp = $dapps->where('slug', $item['dappSlug'])->first();
                    if ($dapp) {
                        $item['dapps_id'] = $dapp->id;
                        $img = 'uploads/tokens';
                        if (!is_dir(public_path($img))) {
                            mkdir(public_path($img), 0777, true);
                        }
                        $imageNameOriginal = explode('.', $url_thumb);
                        $ext = end($imageNameOriginal);
                        $path = public_path($img) . '/' . $item['slug'] . '.' . $ext;
                        if (!file_exists($path)) {
                            try {
                                file_put_contents($path, file_get_contents($url_thumb));
                            } catch (\Exception $e) {
                                Log::warning('Token: khong save duoc hinh: ' . $item['slug']);
                            }
                        }
                        $item['thumb'] = $img . '/' . $item['slug'] . '.' . $ext;
                        Token::create($item);
                    }
                } else {
                    $exist->update($item);
                }
            }
        }
        Log::info('End NFT Listing');
    }
}
