@extends('front.layouts.master')

@section('web_title')
    Home
@endsection

@section('head')
    @include('front.partial.head')
@endsection
@section('content')
    <div class="default">
        {{--<div class="newsbox newsbox--light">1000+ new&nbsp;<a
                href="https://coinranking.com/page/cryptocurrency-api">API</a> users!&nbsp;🥳&nbsp;
        </div>
        <div class="top-leaderboard top-leaderboard--light">
            <div class="top-leaderboard__holder"><!----></div>
        </div>--}}
        @include('front.partial.header')
        <section class="nfts-tokens nfts-tokens--light">
            <div class="hero hero--light">
                <div class="hero__header"><!----> <h1 class="hero__title">
                        NFTs (non-fungible tokens)
                    </h1></div>
                <p class="hero__description">
                    Explore a list of non-fungible tokens ranked by the latest price.
                    <!----></p> <!---->
                <div class="hero__buttons"></div>
            </div>
            {{--<div class="tabs tabs--light">
                <div class="tabs__scrollable">
                    <ul class="tabs__list">
                        <li class="tabs__item"><a href="https://coinranking.com/nfts"
                                                  class="active-link tabs__tab tabs__link"><span class="tabs__text">
        Overview
      </span> <!----></a></li>
                        <li class="tabs__item"><a href="tokens.html" aria-current="page"
                                                  class="nuxt-link-exact-active active-link tabs__tab tabs__link tabs__link--selected"><span
                                    class="tabs__text">
        All tokens
      </span> <!----></a></li>
                        <li class="tabs__item"><a href="https://coinranking.com/dapps" class="tabs__tab tabs__link"><span
                                    class="tabs__text">
        Dapps
      </span> <!----></a></li>
                    </ul>
                </div>
                <span class="tabs__bottom-border"></span> <span class="tabs__left-gradient"></span> <span
                    class="tabs__right-gradient"></span>
            </div>--}}
            <div class="nfts-tokens__section">
                <div class="nfts-tokens__section-head"><h2 class="nfts-tokens__title">{{ __('Latest prices of NFT tokens')}}</h2>
                    <div class="nfts-tokens__filters">
                        <div class="nfts-tokens__search-box">
                            <form method="get">
                                <div class="searchbox searchbox--light">
                                    <div class="searchbox__wrapper">
                                        <div class="searchbox__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="20"
                                                 height="20">
                                                <path stroke="none"
                                                      d="M36 16L32 16L32 12L36 12L36 16ZM36 12L40 12L40 8L36 8L36 12ZM36 8L40 8L40 4L36 4L36 8ZM36 4L40 4L40 0L36 0L36 4ZM32 4L36 4L36 0L32 0L32 4ZM28 4L32 4L32 0L28 0L28 4ZM28 24L24 24L24 20L28 20L28 24ZM36 36L32 36L32 32L36 32L36 36ZM36 40L40 40L40 36L36 36L36 40ZM36 28L40 28L40 24L36 24L36 28ZM8 8L4 8L4 4L8 4L8 8ZM12 4L16 4L16 0L12 0L12 4ZM0 4L4 4L4 0L0 0L0 4ZM24 28L20 28L20 24L24 24L24 28ZM32 20L28 20L28 16L32 16L32 20ZM28 8L24 8L24 4L28 4L28 8ZM20 16L16 16L16 12L20 12L20 16ZM16 20L12 20L12 16L16 16L16 20ZM20 32L16 32L16 28L20 28L20 32ZM24 36L20 36L20 32L24 32L24 36ZM16 28L12 28L12 24L16 24L16 28ZM12 24L8 24L8 20L12 20L12 24ZM16 32L12 32L12 28L16 28L16 32ZM20 36L16 36L16 32L20 32L20 36ZM12 28L8 28L8 24L12 24L12 28ZM12 32L8 32L8 28L12 28L12 32ZM12 36L8 36L8 32L12 32L12 36ZM8 36L4 36L4 32L8 32L8 36ZM8 32L4 32L4 28L8 28L8 32ZM0 36L4 36L4 32L0 32L0 36ZM4 40L8 40L8 36L4 36L4 40ZM0 40L4 40L4 36L0 36L0 40ZM8 24L4 24L4 20L8 20L8 24ZM8 20L4 20L4 16L8 16L8 20ZM24 12L20 12L20 8L24 8L24 12Z"></path>
                                            </svg>
                                        </div>
                                        <input name="search" autocomplete="off" autocorrect="off"
                                               autocapitalize="off" spellcheck="false"
                                               placeholder="Search by name, dapp or token ID" type="search" value="{{ \request()->get('search') }}"
                                               class="searchbox__input">
                                        <button type="submit" class="searchbox__button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                 viewBox="0 0 20 20"
                                                 class="searchbox__action searchbox__action--light">
                                                <g fill="none" stroke-linejoin="round" stroke-linecap="round"
                                                   stroke-width="2">
                                                    <path d="m14 14l5 5"></path>
                                                    <circle cx="8.5" cy="8.5" r="7.5"></circle>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="nfts-tokens__order-by">
                            <div small="" class="select select--standard-bordered" id="clickSelectSort"><!---->
                                <div class="select__wrapper">
                                    <button class="select__value" onclick="openSelectSort()">
                                        @php
                                            $sortTitle = "Latest Prices";
                                            if(request()->get('latest')){
                                                if(request()->get('latest') == "price"){
                                                    $sortTitle = "Most expensive";
                                                }else{
                                                    $sortTitle = "New tokens";
                                                }
                                            }
                                        @endphp
                                        {{ $sortTitle }}
                                        <span></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11"
                                             viewBox="0 0 20 11" class="select__caret">
                                            <path fill="none" stroke-linejoin="round" stroke-linecap="round"
                                                  stroke-width="2" d="m1 1l9 9 9-9"></path>
                                        </svg> <!----></button>
                                    <div class="select__popup">
                                        <button type="button" class="select__close" onclick="openSelectSort()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                 viewBox="0 0 15 15" class="select__cross">
                                                <g fill="none" stroke-linecap="round" stroke-width="2"
                                                   stroke-miterlimit="10" shape-rendering="crispEdges">
                                                    <path d="m1 14l13-13"></path>
                                                    <path d="m1 1l13 13"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="select__placeholder">
                                            {{ $sortTitle }}
                                        </div>
                                        <div class="select__options">
                                            <ul class="select__list">
                                                <li class="select__item">
                                                    <a href="{{ url()->current() }}?orderBy=price&sort=desc" class="select__button"><!---->
                                                        Most expensive
                                                    </a>
                                                </li>
                                                <li class="select__item">
                                                    <a href="{{ url()->current() }}?latest=price" class="select__button"><!---->
                                                        Latest prices
                                                    </a>
                                                </li>
                                                <li class="select__item">
                                                    <a class="select__button" href="{{ url()->current() }}?latest=date"><!---->
                                                        New tokens
                                                    </a>
                                                </li>
                                            </ul> <!----> <!----></div>
                                    </div>
                                </div>
                                <div role="presentation" class="select__mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nfts-tokens__list">
                    @foreach($tokens as $token)
                        <div class="nft-item nft-item--light">
                            <a
                                href="{{ route('token_detail', $token->slug) }}"
                                class="nft-item__image-holder" style="background-color:#{{ $token->backgroundColor }};">
                                <img
                                    src="{{ asset($token->thumb) }}"
                                    alt="{{ $token->name }}"
                                    class="nft-item__image">
                            </a>
                            <div class="nft-item__profile">
                                <a href="{{ route('dapps_detail', $token->dappSlug) }}"
                                                              class="nft-item__dapp-name">
                                    {{ $token->dappName }}
                                </a>
                                <h2 class="nft-item__name"><a
                                        href="{{ route('token_detail', $token->slug) }}"
                                        class="nft-item__name-link">
                                    {{ $token->name }}
                                    </a></h2>
                                <div class="nft-item__token-id"><p>
                                    {{ $token->tokenId }}
                                    </p></div>
                                <div class="nft-item__label">
                                    Last Price
                                </div>
                                <div class="nft-item__price">
                                    $ {{ number_format_short($token->priceInDollar, 2) }}
                                </div>
                                <div class="nft-item__created-at">
                                    {{ timeAgo($token->updated_at) }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $tokens->appends(request()->query())->links() }}
            {{--<div class="leaderboard leaderboard--light">
                <div></div>
                <div class="leaderboard__wrapper"><a href="https://coinranking.com/page/advertise"
                                                     class="leaderboard__link">
                        Advertise here
                    </a>
                    <div class="leaderboard__holder"><!----></div>
                </div>
            </div>--}}
            {{--<div class="api-promotion api-promotion--light">
                <div class="api-promotion__left">
                    <div class="api-promotion__logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <g fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="18">
                                <path d="m9 9h22v22" opacity=".35"></path>
                                <path d="M31,9,9,31"></path>
                            </g>
                        </svg>
                        Coinranking API
                    </div>
                </div>
                <div class="api-promotion__content">
                    <div class="api-promotion__payoff">
                        Show NFT data on your website or app
                    </div>
                    <div class="api-promotion__cta"><a
                            href="https://developers.coinranking.com/api/documentation/nfts#get-nfts"
                            target="_blank" rel="noopener nofollow" class="button button--green-theme"><span
                                class="button__content">
View API docs
<svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" class="button__next-icon"><path
        fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" d="M1.5 12 7 6.5 1.5 1"></path></svg></span></a>
                        <a href="https://coinranking.com/page/key-generator" target="_blank" rel="noopener nofollow"
                           class="button button--dark-theme"><span class="button__content">
Generate API key
<svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" class="button__next-icon"><path
        fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" d="M1.5 12 7 6.5 1.5 1"></path></svg></span></a>
                    </div>
                </div>
            </div>--}}
            {{-- <div class="breadcrumbs breadcrumbs--light breadcrumbs--bottom">
                 <div class="breadcrumbs__scrollable">
                     <div class="breadcrumbs__wrapper">
                         <ol itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList"
                             class="breadcrumbs__list">
                             <li itemprop="itemListElement" itemscope="itemscope"
                                 itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                     href="https://coinranking.com/nfts" itemprop="item"
                                     class="breadcrumbs__link active-link"><span itemprop="name"
                                                                                 class="breadcrumbs__title">NFTs</span></a>
                                 <meta itemprop="position" content="1">
                             </li>
                             <li itemprop="itemListElement" itemscope="itemscope"
                                 itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                     href="tokens.html" aria-current="page" itemprop="item"
                                     class="breadcrumbs__link nuxt-link-exact-active active-link"><span
                                         itemprop="name" class="breadcrumbs__title">Tokens</span></a>
                                 <meta itemprop="position" content="2">
                             </li>
                             <li itemprop="itemListElement" itemscope="itemscope"
                                 itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                     href="tokens3161.html?order-by=latest-prices" itemprop="item"
                                     class="breadcrumbs__link"><span itemprop="name" class="breadcrumbs__title">Latest prices</span></a>
                                 <meta itemprop="position" content="3">
                             </li>
                         </ol>
                     </div>
                     <span class="breadcrumbs__left-gradient"></span> <span
                         class="breadcrumbs__right-gradient"></span></div>
             </div>--}}
        </section>

        @include('front.partial.footer')
        <div class="vue-portal-target"></div>
    </div>
@endsection
