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
<div class="uk-section in-content-3 uk-background-contain uk-background-center" data-src="img/in-equity-2-bg.png" data-uk-img="" style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-2-bg.png&quot;);">
    <div class="uk-container uk-margin-top">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-1-1">
                <h4 class="uk-text-center">
                    <span class="in-highlight ">Filosofi Logo</span>
                </h4>
                <h2 class="uk-text-center uk-text-uppercase">Logo hummatech</h2>
            </div>
            <div class="uk-width-1-1 uk-margin-large-top uk-margin-large-bottom">
                <div class="uk-grid uk-child-width-1-2@m uk-child-width-1-1@s uk-text-center in-feature-box" data-uk-grid="">
                    <div class="uk-first-column">
                        <img src="{{ asset('assets/images/about-logo.png') }}">
                    </div>
                    <div class="uk-text-left">
                        <p>
                            <ol>
                                <li>Huruf H sebagai huruf inisial dari Hummatech.</li>
                                <li>Terdapat simbol genteng diatas huruf H sehingga membentuk rumah sebagai simbol untuk rumah produksi teknologi.</li>
                                <li>Warna biru merupakan warna yang menjelaskan tentang profesionalitas.</li>
                                <li>Nama Humma berasal dari bahasa arab yang berarti "bersama" yang bermakna bahwa Hummatech ini perusahaan yang dikembangkan bersama-sama, baik pihak internal maupun bersama pihak eksternal, sehingga membentuk ekosistem kolaborasi untuk berkembang bersama.</li>
                                <li>Tech merupakan inisial nama dari Technology yang merupakan core business (bisnis utama) dari perusahaan Hummatech.</li>
                            </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection