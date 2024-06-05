@extends('landing.layouts.layouts.app')
@section('header')
    <!-- header start -->
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="/">Beranda</a></li>
                        <li><span>Tentang</span></li>
                        <li><span>Logo</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->
@endsection
@section('content')
    <div class="uk-section in-content-3 uk-background-contain uk-background-center" data-src="img/in-equity-2-bg.png"
        data-uk-img=""
        style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-2-bg.png&quot;);">
        <div class="uk-container uk-margin-top">
            @forelse ($logos as $logo)
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-1">
                        <h4 class="uk-text-center">
                            <span class="in-highlight ">Filosofi Logo</span>
                        </h4>
                        <h2 class="uk-text-center uk-text-uppercase">{{ $logo->title }}</h2>
                    </div>
                    <div class="uk-width-1-1 uk-margin-large-top uk-margin-large-bottom">
                        <div class="uk-grid uk-child-width-1-2@m uk-child-width-1-1@s
uk-text-center in-feature-box"
                            data-uk-grid="">
                            <div class="uk-first-column">
                                <div class="image-container">
                                    <img src="{{ asset('assets/images/circle_black.png') }}" class="image-background"
                                        alt="">
                                    <img src="{{ asset('storage/' . $profile->image) }}" class="image-foreground"
                                        alt="">
                                </div>
                            </div>
                            <div class="uk-text-left">
                                <p>
                                    {!! $logo->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="uk-flex uk-flex-center">
                    <img src="{{ asset('empty.png') }}" alt="" srcset="">
                </div>
                <h2 class="uk-text-center">
                    No data
                </h2>
            @endforelse
        </div>
    </div>
@endsection
