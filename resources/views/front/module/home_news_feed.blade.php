<section class='news-feed slate'>

    @if($news_latest->onFirstPage())
    <div class='split-featured clearfix'>
        <div class='list-feed full-width'>
            @php
                $firstNews = $news_home->first();
                if($firstNews){
                    unset($news_home[0]);
                }
            @endphp
            @if($firstNews)
                <div class='widget-title'>
                    <h3>{{ date("Y-m-d") }}</h3>
                </div>
                <div class='list-post clearfix '>
                    <article id="post-{{ $firstNews->id }}">
                        <a href="{{ route('news', $firstNews->slug) }}" title="{{ $firstNews->title }}"
                           class='img-link'>
                            <div class='cover'>
                                <img class="lazyload" alt="{{ $firstNews->title }}"
                                     src="{{ asset($firstNews->thumb) }}">
                            </div>
                        </a>
                        <div class='content'>
                            <div class='title clearfix'>
                                <h2>
                                    <a href="{{ route('news', $firstNews->slug) }}"
                                       title="{{ $firstNews->title }}"> {{ $firstNews->title }}</a>
                                </h2>
                                <span class='post-meta'>
										{{--<strong>Shaurya Malwa</strong>--}} &middot; {{ timeAgo($firstNews->created_at) }} &middot;
										{{--<span class='span-reading-time'> 2 min</span> read--}}
									</span>
                            </div>
                        </div>
                    </article>
                </div>
            @endif
        </div>
        <div class='list-feed stories'>
            <div class='widget-title'>
                <h3>🔥 {{ __('Trending') }}</h3>
            </div>
            @foreach($news_home as $news)
                <div class='list-post-excerpt clearfix '>
                    <article id="post-183882">
                        <a href="{{ route('news', $news->slug) }}" title="{{ $news->title }}">
                            <div class='content'>
                                <h2>{{ $news->title }}</h2>
                                <div class='post-meta'> {{--Samuel Wan--}} &middot;
                                    {{ timeAgo($news->created_at) }} &middot;
                                    {{--<span class='span-reading-time'> 2 min</span> read--}}
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
    @endif
    {{--<div class='widget-title'>
        <h3>Trending Asset Sectors</h3>
    </div>
    <div class='trending-sectors'>
        <ul class='clearfix'>
            <li>
                <a href='cryptos/defi/index.html'>DeFi</a>
            </li>
            <li>
                <a href='cryptos/nft/index.html'>NFTs</a>
            </li>
        </ul>
    </div>--}}
    <div class='widget-title'>
        <h3>{{ __('Tin mới cập nhật') }}</h3>
    </div>
    <div class='list-feed slate news clearfix'>
        @foreach($news_latest as $news)
            <div class='list-post clearfix '>
                <article id="post-184097">
                    <a href="{{ route('news', $news->slug) }}" title="{{ $news->title }}" class='clearfix'>
                        <div class='content'>
                            <div class='title'>
                                <h2>{{ $news->title }}</h2>
                                <span class='post-meta'>
										{{--<strong>News Desk</strong>--}} &middot; {{ timeAgo($news->created_at) }} &middot;
										{{--<span class='span-reading-time'> 1 </span> read--}}
									</span>
                            </div>
                        </div>
                        <div class='excerpt'>
                            <p>{{ $news->desc }}</p>
                        </div>
                        <div class='cover'>
                            <img class="lazyload" alt="{{ $news->title }}" src="{{ asset($news->thumb) }}">
                        </div>
                    </a>
                </article>
            </div>
        @endforeach
        {{--<div class='edge-cta'>
            <h2>Get an
                <span>edge</span> on the cryptoasset market 👇
            </h2>
            <p>Access more crypto insights in every article as a paid member of
                <span>CryptoSlate Edge</span>.
            </p>
            <a href='https://cryptoslate.memberful.com/checkout?plan=43765' class='btn join'>Join now for $19/month</a>
            <a href='edge/index.html' class='btn'>Explore all benefits</a>
        </div>--}}

        @if($news_latest->onFirstPage())
            <div class='btn-container'>
                @if($news_latest->nextPageUrl())
                    <a href="{{ $news_latest->nextPageUrl() }}" class='btn load-more'
                       title=''>{{ __('Xem thêm') }} &rsaquo;</a>
                @endif
            </div>
        @else
                <div class="container">
                    {{ $news_latest->links() }}
                </div>
        @endif
</section>
