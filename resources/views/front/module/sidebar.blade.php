
    <!-- Widget -->
    {{--<div class="widget">
        <div class="banner-title">Advertisement</div>
        <a href="#" class="banner">
            <img src="images\250x250_banner.jpg" alt="">
        </a>
    </div>--}}
    <!-- Widget -->
    {{--<div class="widget">
        <h6 class="widget-title">Most read</h6>
        <ul class="most-read">
            <li>
                <h6>
                    <a href="#">Coinbase to Probe for Breach in Bitcoin Cash Listing</a>
                </h6>
            </li>
            <li>
                <h6>
                    <a href="#">How Low Can Bitcoin Go? Charts Hint $11k in Play</a>
                </h6>
            </li>
            <li>
                <h6>
                    <a href="#">Singapore Central Bank Urges 'Extreme Caution' on Bitcoin Investment</a>
                </h6>
            </li>
            <li>
                <h6>
                    <a href="#">Morgan Stanley: Hedge Funds Poured $2 Billion into Cryptos in 2017</a>
                </h6>
            </li>
            <li>
                <h6>
                    <a href="#">The 2017 Tapscott Blockchain Prediction Scorecard</a>
                </h6>
            </li>
        </ul>
    </div>--}}
    <!-- Widget -->
    <div class="widget">
        <h6 class="widget-title">Bài xem nhiều</h6>
        <div class="entry-box">
            <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
            @foreach($most_views as $post)
            <div class="entry entry-small">
                <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                <div class="thumbnail-attachment">
                    <a href="{{ route('news', $post->slug) }}">
                        <img src="{{ asset($post->thumb) }}" alt="{{ $post->title }}">
                    </a>
                    {{--<a href="{{ route('news', $post->category->slug) }}" class="entry-label">{{ $post->category->title }}</a>--}}
                </div>
                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                <div class="entry-body">
                    <h6 class="entry-title">
                        <a href="{{ route('news', $post->slug) }}">{{ $post->title }}</a>
                    </h6>
                    <div class="entry-meta">
                        <time class="entry-date" datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('Y-m-d') }}</time>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</aside>
