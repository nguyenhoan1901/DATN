@extends('front.layouts.master')

@section('web_title')
    {{ $detail->name }}
@endsection

@section('head')
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/css/9f0d872.css') }}" as="style">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/7c0fc6c.js') }}" as="script">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/css/e2560df.css') }}" as="style">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/9dcf88c.js') }}" as="script">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/css/ba459fe.css') }}" as="style">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/eacd103.js') }}" as="script">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/css/2777ac9.css') }}" as="style">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/dd55827.js') }}" as="script">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/css/f0f96c3.css') }}" as="style">
    <link rel="preload" href="{{ asset('cdn.coinranking.com/assets/8528d59.js') }}" as="script">
    <link rel="stylesheet" href="{{ asset('cdn.coinranking.com/assets/css/9f0d872.css') }}">
    <link rel="stylesheet" href="{{ asset('cdn.coinranking.com/assets/css/e2560df.css') }}">
    <link rel="stylesheet" href="{{ asset('cdn.coinranking.com/assets/css/ba459fe.css') }}">
    <link rel="stylesheet" href="{{ asset('cdn.coinranking.com/assets/css/2777ac9.css') }}">
    <link rel="stylesheet" href="{{ asset('cdn.coinranking.com/assets/css/f0f96c3.css') }}">
@endsection
@section('content')
    <div class="default">
        @include('front.partial.header')


        <div class="dapp dapp--light">
            <div class="action-bar">
                <div class="action-bar__breadcrumbs breadcrumbs breadcrumbs--light">
                    <div class="breadcrumbs__scrollable">
                        <div class="breadcrumbs__wrapper">
                            <ol itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList"
                                class="breadcrumbs__list">
                                <li itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                        href="{{ route('home') }}" itemprop="item" class="breadcrumbs__link"><span
                                            itemprop="name" class="breadcrumbs__title">Home</span></a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                        href="{{ route('dapps') }}" itemprop="item" class="breadcrumbs__link"><span
                                            itemprop="name" class="breadcrumbs__title">Dapps</span></a>
                                    <meta itemprop="position" content="2">
                                </li>
                                <li itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="https://schema.org/ListItem" class="breadcrumbs__item"><a
                                        href="{{ url()->current() }}" aria-current="page" itemprop="item"
                                        class="breadcrumbs__link nuxt-link-exact-active active-link"><span
                                            itemprop="name" class="breadcrumbs__title">{{ $detail->name }}</span></a>
                                    <meta itemprop="position" content="3">
                                </li>
                            </ol>
                        </div>
                        <span class="breadcrumbs__left-gradient"></span> <span
                            class="breadcrumbs__right-gradient"></span></div>
                </div>
                <div class="action-buttons action-buttons--light">
                    {{--<div class="action-buttons__wrapper">
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
                    </div>--}}
                </div>
            </div>
            <div class="dapp-hero dapp-hero--light"><img
                    src="{{ asset($detail->thumb) }}" width="130" height="130" alt="CryptoKitties logo" class="dapp-hero__logo">
                <h1 class="dapp-hero__title">{{ $detail->name }}</h1>
                <div class="dapp-hero__caption">DApp</div>
            </div>
            <div class="tabs tabs--light">
                <div class="tabs__scrollable">
                    <ul class="tabs__list">
                        <li class="tabs__item"><a href="{{ url()->current() }}" aria-current="page"
                                                  class="nuxt-link-exact-active active-link tabs__tab tabs__link tabs__link--selected"><span
                                    class="tabs__text">
            Overview
          </span> <!----></a></li>
                        {{--<li class="tabs__item"><a href="cryptokitties/tokens.html" class="tabs__tab tabs__link"><span
                                    class="tabs__text">
            Tokens
          </span> <!----></a></li>--}}
                    </ul>
                </div>
                <span class="tabs__bottom-border"></span> <span class="tabs__left-gradient"></span> <span
                    class="tabs__right-gradient"></span></div>
            <div class="dapp-overview dapp-overview--light">
                <div class="dapp-overview__section dapp-overview__section--grid">
                    <div class="stats stats--light">
                        <div class="stats__top"><h2 class="stats__header">Dapp statistics</h2>
                            <p class="stats__description">{{ $detail->description }}</p> <!----></div>
                        <table class="stats__list">
                            <tbody>
                            <tr class="stats__item">
                                <td class="stats__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24"
                                         stroke="#126bff">
                                        <g fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="2">
                                            <path
                                                d="M17,15a8.1,8.1,0,0,1-8,8,8.1,8.1,0,0,1-8-8C1,10,9,1,9,1S17,10,17,15Z"></path>
                                            <path d="M13,15.5a3.64,3.64,0,0,1-3,3"></path>
                                        </g>
                                    </svg>
                                </td>
                                <th class="stats__label">
                                    Trading volume (30 days)
                                </th>
                                <td class="stats__value">
                                    $
                                    <abbr title="540,350.40" class="abbr"><!----> <span>
    540,350.40
  </span></abbr> <!----></td> <!----></tr>
                            <tr class="stats__item">
                                <td class="stats__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="20" height="20">
                                        <path stroke="none"
                                              d="M36 16L32 16L32 12L36 12L36 16ZM36 12L40 12L40 8L36 8L36 12ZM36 8L40 8L40 4L36 4L36 8ZM36 4L40 4L40 0L36 0L36 4ZM32 4L36 4L36 0L32 0L32 4ZM28 4L32 4L32 0L28 0L28 4ZM28 24L24 24L24 20L28 20L28 24ZM36 36L32 36L32 32L36 32L36 36ZM36 40L40 40L40 36L36 36L36 40ZM36 28L40 28L40 24L36 24L36 28ZM8 8L4 8L4 4L8 4L8 8ZM12 4L16 4L16 0L12 0L12 4ZM0 4L4 4L4 0L0 0L0 4ZM24 28L20 28L20 24L24 24L24 28ZM32 20L28 20L28 16L32 16L32 20ZM28 8L24 8L24 4L28 4L28 8ZM20 16L16 16L16 12L20 12L20 16ZM16 20L12 20L12 16L16 16L16 20ZM20 32L16 32L16 28L20 28L20 32ZM24 36L20 36L20 32L24 32L24 36ZM16 28L12 28L12 24L16 24L16 28ZM12 24L8 24L8 20L12 20L12 24ZM16 32L12 32L12 28L16 28L16 32ZM20 36L16 36L16 32L20 32L20 36ZM12 28L8 28L8 24L12 24L12 28ZM12 32L8 32L8 28L12 28L12 32ZM12 36L8 36L8 32L12 32L12 36ZM8 36L4 36L4 32L8 32L8 36ZM8 32L4 32L4 28L8 28L8 32ZM0 36L4 36L4 32L0 32L0 36ZM4 40L8 40L8 36L4 36L4 40ZM0 40L4 40L4 36L0 36L0 40ZM8 24L4 24L4 20L8 20L8 24ZM8 20L4 20L4 16L8 16L8 20ZM24 12L20 12L20 8L24 8L24 12Z"></path>
                                    </svg>
                                </td>
                                <th class="stats__label">
                                    Number of NFTs
                                </th>
                                <td class="stats__value">
                                    {{ number_format($detail->numberOfNfts) }}
                                </td> <!----></tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <h2 class="dapp-overview__subtitle dapp-overview__subtitle--chart">
                            Dapp trading volume
                        </h2>
                        <p class="dapp-overview__chart-description">
                            The historical trading volume of CryptoKitties.
                        </p>
                        <div class="nft-volume-chart nft-volume-chart--light">
                            <div class="bar-chart-holder"></div>
                            <div class="nft-volume-chart__time-periods">
                                <button class="nft-volume-chart__time-period">
                                    7d
                                </button>
                                <button class="nft-volume-chart__time-period nft-volume-chart__time-period--selected">
                                    30d
                                </button>
                                <button class="nft-volume-chart__time-period">
                                    1y
                                </button>
                                <button class="nft-volume-chart__time-period">
                                    All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dapp-overview__section dapp-overview__section--grid">
                    <div><h2 class="dapp-overview__subtitle">
                            About {{ $detail->name }}
                        </h2>
                        <div class="dapp-overview__description">
                            {!! $detail->metaData ? $detail->metaData->fullDescription : '' !!}
                        </div>
                        {{--<a href="cryptokitties/tokens.html" class="button button--blue-theme"><span
                                class="button__content">
    Danh sách token
    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" class="button__next-icon"><path
            fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" d="M1.5 12 7 6.5 1.5 1"></path></svg></span></a>--}}
                    </div>
                    <div><h2 class="dapp-overview__subtitle">
                            Project links
                        </h2>
                        <table class="link-list link-list--light">
                            <tbody>
                            @foreach($detail->metaData->links as $link)
                            @if($link->type == "website")
                            <tr onclick="return window.open('{{ $link->url}}', '_blank').focus();" class="link-list__link">
                                <td class="link-list__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="12" viewBox="0 0 24 12">
                                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2">
                                            <g fill="none">
                                                <path d="m7 6l10 0"></path>
                                                <path d="M9,1H6A5,5,0,0,0,6,11H8"></path>
                                                <path d="M15,1h3a5,5,0,0,1,0,10H16"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </td>
                                <th class="link-list__type">
                                    Website
                                </th>
                                <td class="link-list__name">{{ $detail->websiteUrl }}</td>
                            </tr>
                            @endif
                            @if($link->type == "twitter")
                            <tr onclick="return window.open('{{ $link->url}}', '_blank').focus();" class="link-list__link">
                                <td class="link-list__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21">
                                        <g>
                                            <path
                                                d="M24,2.49a9.31,9.31,0,0,1-2.84.84,5.25,5.25,0,0,0,2.16-3A9.5,9.5,0,0,1,20.2,1.62,4.76,4.76,0,0,0,16.62,0a5.14,5.14,0,0,0-4.94,5.3,6.24,6.24,0,0,0,.14,1.21A13.67,13.67,0,0,1,1.67,1,5.43,5.43,0,0,0,1,3.63,5.39,5.39,0,0,0,3.2,8,4.67,4.67,0,0,1,1,7.38V7.5a5.22,5.22,0,0,0,4,5.15,4.63,4.63,0,0,1-2.22.09,5,5,0,0,0,4.6,3.69,9.43,9.43,0,0,1-6.13,2.26,11.41,11.41,0,0,1-1.17,0A13.2,13.2,0,0,0,7.5,21c9,0,14-8.08,14-15.09V5.22A10.62,10.62,0,0,0,24,2.49Z"
                                                stroke="none"></path>
                                        </g>
                                    </svg>
                                </td>
                                <th class="link-list__type">
                                    Twitter
                                </th>
                                <td class="link-list__name">{{ $detail->name }}</td>
                            </tr>
                            @endif
                            @if($link->type == "reddit")
                            <tr onclick="return window.open('{{ $link->url}}', '_blank').focus();" class="link-list__link">
                                <td class="link-list__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g>
                                            <g stroke="none">
                                                <circle cx="9.21" cy="13.2" r="1.2"></circle>
                                                <path
                                                    d="M14.51 16.07A4 4 0 0 1 12 16.8a3.9 3.9 0 0 1 -2.49 -.75A.34 .34 0 1 0 9 16.5a4.62 4.62 0 0 0 3 .93 4.62 4.62 0 0 0 3 -.93 .34 .34 0 1 0 -.47 -.48"></path>
                                                <path
                                                    d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm7,13.59a4.68,4.68,0,0,1,0,.53c0,2.68-3.14,4.87-7,4.87s-7-2.17-7-4.86a4.68,4.68,0,0,1,0-.53,1.64,1.64,0,0,1-.54-.32,1.75,1.75,0,0,1,2.4-2.55,8.53,8.53,0,0,1,4.68-1.5l.88-4.17h0a.37.37,0,0,1,.45-.29h0l3,.59A1.2,1.2,0,1,1,18,6.59a1.2,1.2,0,0,1-2.22-.5L13.2,5.58l-.78,3.75A8.49,8.49,0,0,1,17,10.83a1.74,1.74,0,1,1,2,2.81Z"></path>
                                                <path d="M14.76,12a1.2,1.2,0,1,0,0,2.4,1.23,1.23,0,0,0,0-2.4"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </td>
                                <th class="link-list__type">
                                    Reddit
                                </th>
                                <td class="link-list__name">{{ $detail->name }}</td>
                            </tr>
                            @endif
                            @if($link->type == "youtube")
                            <tr onclick="return window.open('{{ $link->url}}', '_blank').focus();" class="link-list__link">
                                <td class="link-list__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18">
                                        <g>
                                            <path
                                                d="M23.5,5.81a3.11,3.11,0,0,0-2.12-2.27C19.51,3,12,3,12,3s-7.51,0-9.38.54A3.11,3.11,0,0,0,.5,5.81,35.94,35.94,0,0,0,0,12a35.94,35.94,0,0,0,.5,6.19,3.11,3.11,0,0,0,2.12,2.27C4.49,21,12,21,12,21s7.51,0,9.38-.54a3.11,3.11,0,0,0,2.12-2.27A35.94,35.94,0,0,0,24,12,35.94,35.94,0,0,0,23.5,5.81ZM10,16V8l6.5,4Z"
                                                transform="translate(0-3)" stroke="none"></path>
                                        </g>
                                    </svg>
                                </td>
                                <th class="link-list__type">
                                    YouTube
                                </th>
                                <td class="link-list__name">{{ $detail->name }}</td>
                            </tr>
                            @endif
                            @if($link->type == "facebook")
                            <tr onclick="return window.open('{{ $link->url}}', '_blank').focus();" class="link-list__link">
                                <td class="link-list__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g>
                                            <path
                                                d="M22.65,0H1.35A1.35,1.35,0,0,0,0,1.34H0v21.3A1.35,1.35,0,0,0,1.34,24H12.9V14.7H9.75V11.1H12.9V8.4c0-3.15,1.95-4.8,4.65-4.8,1.35,0,2.4.15,2.85.15v3.3H18.45c-1.5,0-1.8.75-1.8,1.8V11.1h3.6l-.45,3.6H16.5V24h6.15A1.35,1.35,0,0,0,24,22.66h0V1.35A1.35,1.35,0,0,0,22.66,0Z"
                                                stroke="none"></path>
                                        </g>
                                    </svg>
                                </td>
                                <th class="link-list__type">
                                    Facebook
                                </th>
                                <td class="link-list__name">{{ $detail->name }}</td>
                            </tr>
                            @endif
                            @if($link->type == "instagram")
                            <tr onclick="return window.open('{{ $link->url}}', '_blank').focus();" class="link-list__link">
                                <td class="link-list__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g>
                                            <path
                                                d="M8,12a4,4,0,1,1,4,4,4,4,0,0,1-4-4M6,12a6,6,0,1,0,6-6,6,6,0,0,0-6,6M17,5.5A1.5,1.5,0,1,0,18.5,4,1.5,1.5,0,0,0,17,5.5ZM7.07,21.93a6.78,6.78,0,0,1-2.26-.42,4,4,0,0,1-2.32-2.32,6.78,6.78,0,0,1-.42-2.26C2,15.64,2,15.26,2,12s0-3.64.07-4.93a7.06,7.06,0,0,1,.42-2.26A4,4,0,0,1,4.81,2.49a6.78,6.78,0,0,1,2.26-.42C8.36,2,8.74,2,12,2s3.64,0,4.93.07a7.06,7.06,0,0,1,2.26.42,4,4,0,0,1,2.32,2.32,6.78,6.78,0,0,1,.42,2.26C22,8.36,22,8.74,22,12s0,3.64-.07,4.93a6.78,6.78,0,0,1-.42,2.26,4,4,0,0,1-2.32,2.32,6.78,6.78,0,0,1-2.26.42C15.64,22,15.26,22,12,22s-3.64,0-4.93-.07M7.05.07A8.76,8.76,0,0,0,4.14.63,5.82,5.82,0,0,0,2,2,5.82,5.82,0,0,0,.63,4.14,8.71,8.71,0,0,0,.07,7.05C0,8.33,0,8.74,0,12S0,15.67.07,17a8.76,8.76,0,0,0,.56,2.91A5.82,5.82,0,0,0,2,22a5.82,5.82,0,0,0,2.12,1.39,8.76,8.76,0,0,0,2.91.56C8.33,24,8.74,24,12,24s3.67,0,4.95-.07a8.76,8.76,0,0,0,2.91-.56,6.22,6.22,0,0,0,3.51-3.51A8.76,8.76,0,0,0,23.93,17C24,15.67,24,15.26,24,12s0-3.67-.07-4.95a8.76,8.76,0,0,0-.56-2.91A5.82,5.82,0,0,0,22,2,5.82,5.82,0,0,0,19.86.63,8.76,8.76,0,0,0,17,.07C15.67,0,15.26,0,12,0S8.33,0,7.05.07"
                                                stroke="none"></path>
                                        </g>
                                    </svg>
                                </td>
                                <th class="link-list__type">
                                    Instagram
                                </th>
                                <td class="link-list__name">{{ $detail->name }}</td>
                            </tr>
                            @endif
                            @if($link->type == "discord")
                            <tr onclick="return window.open('{{ $link->url}}', '_blank').focus();" class="link-list__link">
                                <td class="link-list__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24">
                                        <g>
                                            <path
                                                d="M19.45,0H2.4A2.5,2.5,0,0,0,0,2.55V18.6A2.37,2.37,0,0,0,2.4,21H16.5L16,18.9,22,24V2.55A2.63,2.63,0,0,0,19.45,0m-5,15.75a7,7,0,0,1-.75-.9,3.94,3.94,0,0,0,2.1-1.35,6.08,6.08,0,0,1-1.35.75,7.53,7.53,0,0,0-1.8.3,11,11,0,0,1-3.15,0A5.37,5.37,0,0,1,7.85,14a2.13,2.13,0,0,1-.9-.3H6.8c-.3-.3-.45-.3-.45-.3a3.94,3.94,0,0,0,2.1,1.35c-.3.45-.75,1.05-.75,1.05A4.19,4.19,0,0,1,4.1,13.8a16.85,16.85,0,0,1,1.65-7,4.94,4.94,0,0,1,3.3-1.2l.15.15A8.93,8.93,0,0,0,6.05,7.2a6.31,6.31,0,0,1,.75-.3,9.77,9.77,0,0,1,2.7-.6h.15a6.46,6.46,0,0,1,2.4,0,8.53,8.53,0,0,1,3.6,1.2,7.29,7.29,0,0,0-3-1.5l.15-.15a6.16,6.16,0,0,1,3.3,1.2,16.85,16.85,0,0,1,1.65,7.05c.3-.3-.75,1.5-3.3,1.65m-5.7-5.7a1.23,1.23,0,0,0-1.2,1.35,1.32,1.32,0,0,0,1.2,1.35A1.23,1.23,0,0,0,10,11.4a1.15,1.15,0,0,0-1.2-1.35m4.5,0A1.34,1.34,0,0,0,11.9,11.4a1.32,1.32,0,0,0,1.2,1.35,1.23,1.23,0,0,0,1.2-1.35,1.12,1.12,0,0,0-1.05-1.35"
                                                stroke="none"></path>
                                        </g>
                                    </svg>
                                </td>
                                <th class="link-list__type">
                                    Discord
                                </th>
                                <td class="link-list__name">{{ $detail->name }}</td>
                            </tr>
                            @endif
                            @if($link->type == "twitch")
                            <tr onclick="return window.open('{{ $link->url}}', '_blank').focus();" class="link-list__link">
                                <td class="link-list__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24">
                                        <g>
                                            <path stroke="none"
                                                  d="M2,0,0,4V21H5v3H8.5L12,21h4l6-6.43V0ZM19,13.5,16,17H11L8,20.5V17H4V3H19Z"></path>
                                            <rect stroke="none" x="14" y="6" width="3" height="7"></rect>
                                            <rect stroke="none" x="8" y="6" width="3" height="7"></rect>
                                        </g>
                                    </svg>
                                </td>
                                <th class="link-list__type">
                                    Twitch
                                </th>
                                <td class="link-list__name">{{ $detail->name }}</td>
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="dapp-overview__section">
                    <div class="dapp-overview__section-head">
                        <h2 class="dapp-overview__subtitle dapp-overview__subtitle--no-margin">
                            Most expensive tokens
                            <div class="dapp-overview__since">
                            </div>
                        </h2>
                        {{--<a href="cryptokitties/tokens8aa8.html?order-by=most-expensive" class="dapp-overview__view-all">
                            View all
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13"
                                 class="dapp-overview__arrow">
                                <path fill="none" stroke="#fff" stroke-linejoin="round" stroke-linecap="round"
                                      stroke-width="2" d="M1.5 12 7 6.5 1.5 1"></path>
                            </svg>
                        </a>--}}
                    </div>
                    <div class="dapp-overview__list">
                        @foreach($mostExpensive as $token)
                        <div class="nft-item nft-item--light"><a
                                href="{{ route('token_detail', $token->slug) }}" class="nft-item__image-holder"
                                style="background-color:#{{ $token->backgroundColor }};">
                                <img src="{{ asset($token->thumb) }}" alt="{{ $token->name }}"
                                                                       class="nft-item__image"></a>
                            <div class="nft-item__profile"><a href="{{ route('dapps_detail', $token->dappSlug) }}" aria-current="page"
                                                              class="nft-item__dapp-name nuxt-link-exact-active active-link">
                                {{ $token->name }}
                                </a>
                                <h2 class="nft-item__name"><a href="{{ route('token_detail', $token->slug) }}"
                                                              class="nft-item__name-link">
                                    {{ $token->name }}
                                    </a></h2>
                                <div class="nft-item__token-id"><p>
                                    {{ $token->name }}
                                    </p></div>
                                <div class="nft-item__label">
                                    Last Price
                                </div>
                                <div class="nft-item__price">
                                    $ {{ number_format($token->price) }}
                                </div>
                                <div class="nft-item__created-at">
                                    {{ timeAgo($token->updated_at) }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="dapp-overview__section">
                    <div class="dapp-overview__section-head"><h2
                            class="dapp-overview__subtitle dapp-overview__subtitle--no-margin">
                            Latest prices
                        </h2>
                        {{--<a href="cryptokitties/tokens3161.html?order-by=latest-prices"
                                 class="dapp-overview__view-all">
                            Xem tất cả
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13"
                                 class="dapp-overview__arrow">
                                <path fill="none" stroke="#fff" stroke-linejoin="round" stroke-linecap="round"
                                      stroke-width="2" d="M1.5 12 7 6.5 1.5 1"></path>
                            </svg>
                        </a>--}}
                    </div>
                    <div class="dapp-overview__list">
                        @foreach($latestPrice as $token)
                            <div class="nft-item nft-item--light"><a
                                    href="{{ route('token_detail', $token->slug) }}" class="nft-item__image-holder"
                                    style="background-color:#{{ $token->backgroundColor }};">
                                    <img src="{{ asset($token->thumb) }}" alt="{{ $token->name }}"
                                         class="nft-item__image"></a>
                                <div class="nft-item__profile"><a href="{{ route('dapps_detail', $token->dappSlug) }}" aria-current="page"
                                                                  class="nft-item__dapp-name nuxt-link-exact-active active-link">
                                        {{ $token->name }}
                                    </a>
                                    <h2 class="nft-item__name"><a href="{{ route('token_detail', $token->slug) }}"
                                                                  class="nft-item__name-link">
                                            {{ $token->name }}
                                        </a></h2>
                                    <div class="nft-item__token-id"><p>
                                            {{ $token->name }}
                                        </p></div>
                                    <div class="nft-item__label">
                                        Last Price
                                    </div>
                                    <div class="nft-item__price">
                                        $ {{ number_format($token->price) }}
                                    </div>
                                    <div class="nft-item__created-at">
                                        {{ timeAgo($token->updated_at) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{--<div class="leaderboard leaderboard--light">
                    <div></div>
                    <div class="leaderboard__wrapper"><a href="../page/advertise.html" class="leaderboard__link">
                            Advertise here
                        </a>
                        <div class="leaderboard__holder"><!----></div>
                    </div>
                </div>
                <div class="dapp-overview__spacing"></div>--}}
            </div>
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
                        Show dapp data on your website or app
                    </div>
                    <div class="api-promotion__cta"><a
                            href="https://developers.coinranking.com/api/documentation/nfts#get-dapp" target="_blank"
                            rel="noopener nofollow" class="button button--green-theme"><span class="button__content">
    View API docs
    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" class="button__next-icon"><path
            fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" d="M1.5 12 7 6.5 1.5 1"></path></svg></span></a>
                        <a href="../page/key-generator.html" target="_blank" rel="noopener nofollow"
                           class="button button--dark-theme"><span class="button__content">
    Generate API key
    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" class="button__next-icon"><path
            fill="none" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" d="M1.5 12 7 6.5 1.5 1"></path></svg></span></a>
                    </div>
                </div>
            </div>--}}
        </div>


        @include('front.partial.footer')
        <div class="vue-portal-target"></div>
    </div>
@endsection
