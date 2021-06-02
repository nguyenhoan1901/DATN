@extends('front.layouts.master')

@section('head')
    @include('front.partial.head')
@endsection
@section('content')
    <div class="default">
        @include('front.partial.header')

        <section class="dapps">
            <div class="hero hero--light">
                <div class="hero__header"><h1 class="hero__title">
                        NFT dapps
                    </h1></div>
                <p class="hero__description">
                    A list of all NFT (non-fungible token) dapps listed on Coinranking.
                </p>
                <div class="hero__buttons"></div>
            </div>
            <table class="table table--light">
                <thead class="thead thead--light">
                <tr class="thead__row thead__row--full-width">
                    <th class="thead__cell thead__cell--6-of-10"><span class="thead__no-sort">
        NFT dapp
      </span></th>
                    <th class="thead__cell thead__cell--4-of-10 thead__cell--right"><span class="thead__no-sort">
        NUMBER OF TOKENS
      </span></th>
                </tr>
                </thead>
                <tbody class="table__body">

                @foreach($dapps as $index=> $dapp)
                    <tr class="table__row table__row--click table__row--full-width">
                        <td class="table__cell table__cell--6-of-10">
                            <div class="profile profile--light"><span class="profile__rank">
    {{ ++$index }}
  </span> <span class="profile__logo-background">
                                    <img
                                        src="{{ asset($dapp->thumb) }}" width="30" height="30"
                                        class="table__logo"></span>
                                <span class="profile__name">
                                    <a href="{{ route('dapps_detail', $dapp->slug) }}" class="profile__link">{{ $dapp->name }}</a></span></div>
                        </td>
                        <td class="table__cell table__cell--4-of-10 table__cell--right">  <span
                                class="table__text">
            {{ $dapp->numberOfNfts }}
          </span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{--<section class="pagination pagination--light">
                <div class="pagination__buttons"><a href="coin/Sr5fHHDo0uNx%2bpovertyeradicationcoin-pec/exchanges.html"
                                                    class="pagination__button pagination__button--disabled"><img
                            src="https://cdn.coinranking.com/assets/32c1c836dbf078819a93f4e02db36db1.svg" alt="Previous"
                            width="8" height="13" class="pagination__img">
                        Previous
                    </a></div>
                <div class="pagination__list"><a
                        href="coin/Sr5fHHDo0uNx%2bpovertyeradicationcoin-pec/exchanges2679.html?page=1"
                        class="pagination__page pagination__page--selected"><span>1</span></a>
                </div>
                <div class="pagination__buttons"><a href="coin/Sr5fHHDo0uNx%2bpovertyeradicationcoin-pec/exchanges.html"
                                                    class="pagination__button pagination__button--disabled">
                        Next
                        <img src="https://cdn.coinranking.com/assets/a8f0fe8189796d2039ce3b6bb277fa50.svg" alt="Next"
                             width="8" height="13" class="pagination__img"></a></div>
                <div class="pagination__buttons--mobile"><a
                        href="coin/Sr5fHHDo0uNx%2bpovertyeradicationcoin-pec/exchanges.html"
                        class="pagination__button pagination__button--disabled"><img
                            src="https://cdn.coinranking.com/assets/32c1c836dbf078819a93f4e02db36db1.svg" alt="Previous"
                            width="8" height="13" class="pagination__img">
                        Previous
                    </a> <a href="coin/Sr5fHHDo0uNx%2bpovertyeradicationcoin-pec/exchanges.html"
                            class="pagination__button pagination__button--disabled">
                        Next
                        <img src="https://cdn.coinranking.com/assets/a8f0fe8189796d2039ce3b6bb277fa50.svg" alt="Next"
                             width="8" height="13" class="pagination__img"></a></div>
            </section>
            <div class="leaderboard leaderboard--light">
                <div></div>
                <div class="leaderboard__wrapper"><a href="page/advertise.html" class="leaderboard__link">
                        Advertise here
                    </a>
                    <div class="leaderboard__holder"></div>
                </div>
            </div>

            <div class="breadcrumbs breadcrumbs--light breadcrumbs--bottom">
                <div class="breadcrumbs__scrollable">
                    <div class="breadcrumbs__wrapper">
                        <ol itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList"
                            class="breadcrumbs__list">
                            <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"
                                class="breadcrumbs__item"><a href="nfts.html" itemprop="item" class="breadcrumbs__link"><span
                                        itemprop="name" class="breadcrumbs__title">NFTs</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem"
                                class="breadcrumbs__item"><a href="dapps.html" aria-current="page" itemprop="item"
                                                             class="breadcrumbs__link nuxt-link-exact-active active-link"><span
                                        itemprop="name" class="breadcrumbs__title">Dapps</span></a>
                                <meta itemprop="position" content="2">
                            </li>
                        </ol>
                    </div>
                    <span class="breadcrumbs__left-gradient"></span> <span class="breadcrumbs__right-gradient"></span>
                </div>
            </div>
            --}}
        </section>

        @include('front.partial.footer')
        <div class="vue-portal-target"></div>
    </div>
@endsection
