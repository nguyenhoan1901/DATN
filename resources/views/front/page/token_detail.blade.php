@extends('front.layouts.master')

@section('head')
    @include('front.partial.head')
@endsection
@section('web_title')
    {{ $token->name }}
@endsection
@section('content')
    <div class="default">
        @include('front.partial.header')


        <div class="nft nft--light">
            <div class="action-bar">
                <div class="action-bar__breadcrumbs breadcrumbs breadcrumbs--light">
                    <div class="breadcrumbs__scrollable">
                        <div class="breadcrumbs__wrapper">
                            <ol itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList"
                                class="breadcrumbs__list">
                                <li itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                        href="{{ route('home') }}" itemprop="item"
                                        class="breadcrumbs__link"><span itemprop="name"
                                                                        class="breadcrumbs__title">NFTs</span></a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                        href="{{ route('dapps') }}" itemprop="item"
                                        class="breadcrumbs__link"><span itemprop="name"
                                                                        class="breadcrumbs__title">Dapps</span></a>
                                    <meta itemprop="position" content="2">
                                </li>
                                <li itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                        href="{{ url()->current() }}" aria-current="page"
                                        itemprop="item"
                                        class="breadcrumbs__link nuxt-link-exact-active active-link"><span
                                            itemprop="name" class="breadcrumbs__title">{{ $token->name }}</span></a>
                                    <meta itemprop="position" content="4">
                                </li>
                            </ol>
                        </div>
                        <span class="breadcrumbs__left-gradient"></span> <span
                            class="breadcrumbs__right-gradient"></span></div>
                </div>
                <div class="action-buttons action-buttons--light">
                    <div class="action-buttons__wrapper">
                        <div class="action-buttons__item">
                            <button class="share-button action-button action-button--light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18">
                                    <g fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="2">
                                        <path
                                            d="m4 8s-.997 0-1 0c-.933 0-2 .767-2 1.7v5.3c0 .933 1.067 2 2 2h10c.933 0 2-1.067 2-2v-5c0-.933-1.067-2-2-2-.003 0-1 0-1 0"></path>
                                        <path d="m8 1.5v10.5"></path>
                                        <path d="m4.5 4.5 3.5-3.5 3.5 3.5"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div class="action-buttons__item">
                            <button class="action-button action-button--light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                     fill="#002358" stroke="#002358">
                                    <circle cx="8" cy="8" r="7" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"></circle>
                                    <path d="M8 15A7 7 0 0 0 8 1" stroke="none"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nft__hero" style="background-color:#f1f6ff;">
                <img src="{{ asset($token->thumb) }}"
                              alt="{{ $token->name }}"
                              class="nft__image"></div>
            <section class="nft__grid">
                <section class="nft__profile"><h2 class="nft__caption">Non-fungible token (NFT)</h2>
                    <h1 class="nft__title">{{ $token->name }}</h1>
                    <div class="nft__id"><a href="{{ route('dapps_detail', $token->dappSlug) }}" class="nft__dapplink">
                        {{ $token->dappName }}
                        </a>
                        <div class="nft__tokenid">
                            <div class="copy copy--light">
                                <div class="copy__value">#{{ $token->dappName }}</div>
                            </div>
                        </div>
                    </div>
                    {{--<a target="_blank"
                       href="https://app.rarible.com/token/0xd07dc4262bcdbf85190c01c996b4c06a461d2430:166266"
                       class="nft__button">
                        Xem trên {{ $token->dappName }}
                        <img src="https://cdn.coinranking.com/assets/2f318f1c6eca4b81869fac4cea946b5e.svg" alt
                             width="15" height="15" class="nft__external"></a>--}}
                </section>
                <section class="nft__price"><h2 class="nft__subtitle">Last price</h2>
                    <div class="price">
                        <div class="price__title">Sold for</div>
                        <div class="price__value">
                            $ {{ $token->price }}
                        </div>
                        <div class="price__date">
                            {{ timeAgo($token->updated_at) }}
                        </div>
                    </div>
                </section>
                <section class="token__description"><h2 class="nft__subtitle">Token description</h2>
                    <p class="nft__description">
                        {{ $token->token }}
                    </p></section>
                <section class="ntf__details"><h2 class="nft__subtitle">Details</h2>
                    <table class="detailtable">
                        <tbody class="detailtable__tbody">
                        <tr class="detailtable__row">
                            <th class="detailtable__head">Token name</th>
                            <td class="detailtable__cell">
                                {{ $token->name }}
                            </td>
                        </tr>
                        <tr class="detailtable__row">
                            <th class="detailtable__head">Token ID</th>
                            <td class="detailtable__cell">
                                <div class="copy copy--light">
                                    <div class="copy__value">#{{ $token->token }}</div>
                                </div>
                            </td>
                        </tr>
                        <tr class="detailtable__row">
                            <th class="detailtable__head">
                                Registry contract address
                            </th>
                            <td class="detailtable__cell">
                                <div class="copy copy--light">
                                    <div class="copy__value">
                                        <div class="detailtable__abbreviate">
                                            {{ $token->registryContractAddress }}
                                        </div>
                                    </div>
                                    {{--<button data-content="Copied" class="copy__button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                             viewBox="0 0 17 18">
                                            <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                <path d="M 5,5 H16 V17 H5 z"></path>
                                                <g stroke-linecap="round">
                                                    <path d="m9 9l3 0"></path>
                                                    <path d="m9 13l3 0"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>--}}
                                </div>
                            </td>
                        </tr>
                        <tr class="detailtable__row">
                            <th class="detailtable__head">
                                Issuance blockchain
                            </th>
                            <td class="detailtable__cell"><a
                                    href="javascript:;"
                                    class="detailtable__link">
                                    {{ $token->registryBlockchain }}
                                </a></td>
                        </tr>
                        <tr class="detailtable__row">
                            <th class="detailtable__head">Issuance date</th>
                            <td class="detailtable__cell">
                                {{ isset($token->metaData->birthDate) ? date('Y-m-d', $token->metaData->birthDate) : '' }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </section>
            </section>
            {{--<div class="leaderboard leaderboard--light">
                <div></div>
                <div class="leaderboard__wrapper"><a href="https://coinranking.com/page/advertise"
                                                     class="leaderboard__link">
                        Advertise here
                    </a>
                    <div class="leaderboard__holder"><!----></div>
                </div>
            </div>--}}
            {{--<section class="nft__section">
                <div class="dapp-block dapp-block--light"><img srcset="
      https://cdn.coinranking.com/dapp/rarible.png?size=autox100 1x,
      https://cdn.coinranking.com/dapp/rarible.png?size=autox200 2x,
      https://cdn.coinranking.com/dapp/rarible.png?size=autox300 3x
    " src="../../cdn.coinranking.com/dapp/rariblede2d.png?size=autox100" alt="Rarible logo" class="dapp-block__image">
                    <div class="dapp-block__profile"><h2 class="dapp-block__title">
                            Rarible
                        </h2>
                        <div class="dapp-block__caption">DAPP</div>
                    </div>
                    <p class="dapp-block__description">
                        Rarible is a NFT marketplace and gives a platform to artists and collectors to create, collect,
                        and trade digital collectibles.
                    </p> <a href="https://coinranking.com/dapp/rarible"
                            class="dapp-block__button button button--blue-theme"><span class="button__content">
    View dapp
    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" class="button__next-icon"><path
            fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" d="M1.5 12 7 6.5 1.5 1"></path></svg></span></a>
                </div>
            </section>--}}
            {{--<section class="nft__section"><h2 class="nft__subtitle">Transaction history</h2>
                <div class="nft-transaction-history nft-transaction-history--light">
                    <div class="nft-transaction-history__scrollable">
                        <div class="nft-transaction-history__wrapper">
                            <table class="nft-transaction-history__table">
                                <thead>
                                <tr class="nft-transaction-history__row">
                                    <th class="nft-transaction-history__header">
                                        Date
                                    </th>
                                    <th class="nft-transaction-history__header">
                                        Events
                                    </th>
                                    <th class="nft-transaction-history__header">
                                        Price
                                    </th>
                                    <th class="nft-transaction-history__header">
                                        From
                                    </th>
                                    <th class="nft-transaction-history__header">
                                        To
                                    </th>
                                    <th class="nft-transaction-history__header">
                                        Transaction ID
                                    </th>
                                    <th class="nft-transaction-history__header"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="nft-transaction-history__row">
                                    <td class="nft-transaction-history__value">
                                        April 11, 2021
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        Transfer
                                    </td>
                                    <td class="nft-transaction-history__value nft-transaction-history__price">

                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0xC143572e7fae57f4d7854F38cA535FC5cE9021eF</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0x6e8B86F83D1f991B14374633E14A7A5911468a6A</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0x68d609546a0c73d2c2ab4b391fac9079a29d02ac1d6b48859b7d899fefa3945a</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value"><a target="_blank"
                                                                                  rel="noopener nofollow"
                                                                                  href="https://etherscan.io/tx/0x68d609546a0c73d2c2ab4b391fac9079a29d02ac1d6b48859b7d899fefa3945a"
                                                                                  class="nft-transaction-history__view-link">
                                            View
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                 viewBox="0 0 15 15" stroke="#fff"
                                                 class="nft-transaction-history__external-svg">
                                                <g fill="none" stroke-linejoin="round" stroke-linecap="round"
                                                   stroke-width="2">
                                                    <path
                                                        d="M13,10v2.54A1.46,1.46,0,0,1,11.54,14H2.46A1.46,1.46,0,0,1,1,12.54V3.46A1.46,1.46,0,0,1,2.46,2H5"></path>
                                                    <path d="m6 9l8-8"></path>
                                                    <path d="m9 1l5 0 0 5"></path>
                                                </g>
                                            </svg>
                                        </a></td>
                                </tr>
                                <tr class="nft-transaction-history__row">
                                    <td class="nft-transaction-history__value">
                                        March 2, 2021
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        Transfer
                                    </td>
                                    <td class="nft-transaction-history__value nft-transaction-history__price">

                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0xC143572e7fae57f4d7854F38cA535FC5cE9021eF</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0x80909ce21A0432e7Df8666393d3b580b7dB2891B</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0x6a10b93acd3ad254adb73291cd33e2aa4702cd65e7e3ff56cf41a29b4bdfc4ab</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value"><a target="_blank"
                                                                                  rel="noopener nofollow"
                                                                                  href="https://etherscan.io/tx/0x6a10b93acd3ad254adb73291cd33e2aa4702cd65e7e3ff56cf41a29b4bdfc4ab"
                                                                                  class="nft-transaction-history__view-link">
                                            View
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                 viewBox="0 0 15 15" stroke="#fff"
                                                 class="nft-transaction-history__external-svg">
                                                <g fill="none" stroke-linejoin="round" stroke-linecap="round"
                                                   stroke-width="2">
                                                    <path
                                                        d="M13,10v2.54A1.46,1.46,0,0,1,11.54,14H2.46A1.46,1.46,0,0,1,1,12.54V3.46A1.46,1.46,0,0,1,2.46,2H5"></path>
                                                    <path d="m6 9l8-8"></path>
                                                    <path d="m9 1l5 0 0 5"></path>
                                                </g>
                                            </svg>
                                        </a></td>
                                </tr>
                                <tr class="nft-transaction-history__row">
                                    <td class="nft-transaction-history__value">
                                        February 25, 2021
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        Birth
                                    </td>
                                    <td class="nft-transaction-history__value nft-transaction-history__price">

                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0x0000000000000000000000000000000000000000</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0xC143572e7fae57f4d7854F38cA535FC5cE9021eF</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value">
                                        <div class="nft-transaction-history__value-wrapper"><span
                                                class="nft-transaction-history__value-shortened">0xe536f400528b629cdc37be62ae283f2f14546385c34e61849022faf84bdab657</span>
                                            <div class="copy copy--light">
                                                <div class="copy__value"></div>
                                                <button data-content="Copied" class="copy__button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                         viewBox="0 0 17 18">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="2">
                                                            <path d="m5 13l-4 0 0-12 11 0 0 4"></path>
                                                            <path d="M 5,5 H16 V17 H5 z"></path>
                                                            <g stroke-linecap="round">
                                                                <path d="m9 9l3 0"></path>
                                                                <path d="m9 13l3 0"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nft-transaction-history__value"><a target="_blank"
                                                                                  rel="noopener nofollow"
                                                                                  href="https://etherscan.io/tx/0xe536f400528b629cdc37be62ae283f2f14546385c34e61849022faf84bdab657"
                                                                                  class="nft-transaction-history__view-link">
                                            View
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                 viewBox="0 0 15 15" stroke="#fff"
                                                 class="nft-transaction-history__external-svg">
                                                <g fill="none" stroke-linejoin="round" stroke-linecap="round"
                                                   stroke-width="2">
                                                    <path
                                                        d="M13,10v2.54A1.46,1.46,0,0,1,11.54,14H2.46A1.46,1.46,0,0,1,1,12.54V3.46A1.46,1.46,0,0,1,2.46,2H5"></path>
                                                    <path d="m6 9l8-8"></path>
                                                    <path d="m9 1l5 0 0 5"></path>
                                                </g>
                                            </svg>
                                        </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="nft-transaction-history__left-gradient"></span> <span
                            class="nft-transaction-history__right-gradient"></span></div>
                </div>
            </section>--}}
           {{-- <div class="api-promotion api-promotion--light">
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
                            href="https://developers.coinranking.com/api/documentation/nfts#get-nft" target="_blank"
                            rel="noopener nofollow" class="button button--green-theme"><span class="button__content">
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
            </div>
            <div class="breadcrumbs breadcrumbs--light breadcrumbs--bottom">
                <div class="breadcrumbs__scrollable">
                    <div class="breadcrumbs__wrapper">
                        <ol itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList"
                            class="breadcrumbs__list">
                            <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"
                                class="breadcrumbs__item"><a href="https://coinranking.com/nfts" itemprop="item"
                                                             class="breadcrumbs__link"><span itemprop="name"
                                                                                             class="breadcrumbs__title">NFTs</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"
                                class="breadcrumbs__item"><a href="https://coinranking.com/dapps" itemprop="item"
                                                             class="breadcrumbs__link"><span itemprop="name"
                                                                                             class="breadcrumbs__title">Dapps</span></a>
                                <meta itemprop="position" content="2">
                            </li>
                            <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"
                                class="breadcrumbs__item"><a href="https://coinranking.com/dapp/rarible" itemprop="item"
                                                             class="breadcrumbs__link"><span itemprop="name"
                                                                                             class="breadcrumbs__title">Rarible</span></a>
                                <meta itemprop="position" content="3">
                            </li>
                            <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"
                                class="breadcrumbs__item"><a href="d755c1c165-rarible-blockchain-soup-.html"
                                                             aria-current="page" itemprop="item"
                                                             class="breadcrumbs__link nuxt-link-exact-active active-link"><span
                                        itemprop="name" class="breadcrumbs__title">Blockchain Soup 🔗🥫</span></a>
                                <meta itemprop="position" content="4">
                            </li>
                        </ol>
                    </div>
                    <span class="breadcrumbs__left-gradient"></span> <span class="breadcrumbs__right-gradient"></span>
                </div>
            </div>
        </div>--}}

        @include('front.partial.footer')
        <div class="vue-portal-target"></div>
    </div>
@endsection
