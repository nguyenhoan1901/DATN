<?php

namespace App\Console\Commands;

use App\Models\Dapps;
use Illuminate\Console\Command;

class DappsListing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dapps:listing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get dapps list';

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
        $url = $root.'api/dapps';
        $dapps = json_decode(file_get_contents($url), true);
        if (isset($dapps['data'])) {
            $dapps = $dapps['data'];
            foreach ($dapps as $item) {
                $exist = Dapps::where('slug', $item['slug'])->first();
                if(!$exist){
                    $url = $root.'/'.$item['image'];
                    $img = 'uploads/dapps';
                    if (!is_dir(public_path($img))){
                        mkdir(public_path($img), 0777, true);
                    }
                    $imageNameOriginal = explode('.', $url);
                    $ext = end($imageNameOriginal);
                    $path = public_path($img). '/' . $item['slug'].'.'.$ext;
                    if(!file_exists($path)){
                        file_put_contents($path, file_get_contents($url));
                    }
                    $item['thumb'] = $img.'/'.$item['slug'].'.'.$ext;
                    Dapps::create($item);
                }else{
                    $exist->update($item);
                }
            }
        }
    }
}
