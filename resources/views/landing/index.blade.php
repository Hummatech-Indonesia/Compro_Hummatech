@extends('landing.layouts.app')
@section('title' , 'PT Cakra Parama Indonesia')
@section('seo')
    <meta name="title" content="PT Cakra Parama Indonesia - Layanan Outsourcing Profesional" />
    <meta name="description"
        content="PT Cakra Parama Indonesia menawarkan solusi outsourcing terbaik, termasuk penyediaan tenaga kerja, manajemen penggajian, dan dukungan logistik. Kami memastikan layanan yang efisien dan hemat biaya yang disesuaikan dengan kebutuhan bisnis Anda." />
    <meta name="og:description"
        content="PT Cakra Parama Indonesia menawarkan solusi outsourcing terbaik, termasuk penyediaan tenaga kerja, manajemen penggajian, dan dukungan logistik. Kami memastikan layanan yang efisien dan hemat biaya yang disesuaikan dengan kebutuhan bisnis Anda." />
    <meta name="og:image" content="{{ asset('icon.png') }}" />
    <meta name="twitter:image" content="{{ asset('icon.png') }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="{{ url('/') }}" />

@endsection

@section('style')

<style>
    .uk-section {
    }
    #particles-js {
        position: relative;
        background-size: cover;
        background-position: center;
    }

    #particles-js::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
    .uk-slideshow-items,
    .uk-container,
    .in-slide-img,
    .uk-slideshow-nav {
        position: relative;
        z-index: 1;
    }
    .in-slide-img img {
        max-width: 100%;
        height: auto;
    }
    @media screen and (max-width: 768px) {
        #particles-js {
            height: 100vh;
            margin-bottom: 20%
        }
        .uk-slideshow-items li {
            height: auto;
        }
        .in-slide-text {
            margin-top: 20%;
        }
    }

    @media screen and (max-width: 576px) {
        #particles-js {
            height: 100vh;
            margin-bottom: 50%
        }
        .uk-slideshow-items li {
            height: auto;
        }
        .in-slide-text {
            margin-top: 50%;
        }
    }
    .news-title,
    .news-description {
        word-wrap: break-word;
        word-break: break-word;
        overflow-wrap: break-word;
    }
    .uk-grid > div article {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .slide-background {
        background-size: cover;
        background-position: center;
    }
    .image-container {
        position: relative;
        width: 100%;
        padding-top: 100%;
    }
    .image-background,
    .image-foreground {
        position: absolute;
        top: 0;
        left: 0;
        width: 90%;
        height: 90%;
        object-fit: cover;
    }
    .image-background {
        z-index: 1;
        transform: translate(10%, -10%);
    }
    .image-foreground {
        z-index: 1;
    }
    .uk-slideshow-items li::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }


    @media (max-width: 768px) {
        .image-container {
            padding-top: 100%;
        }
        .image-background {
            width: 80%;
            height: 80%;
            transform: translate(10%, -10%);
        }
        .image-foreground {
            width: 80%;
            height: 80%;
        }
    }
    @media (max-width: 480px) {
        .image-container {
            padding-top: 100%;
        }
        .image-background {
            width: 70%;
            height: 70%;
            transform: translate(15%, -15%);
        }
        .image-foreground {
            width: 70%;
            height: 70%;
        }
    }


</style>

<style>
    @media screen and (max-width: 959px) {
        .uk-width-3-5\@m {
            width: 100%;
        }
        .uk-width-2-5\@m {
            width: 100%;
            margin-top: 2rem;
        }
    }

    @media screen and (max-width: 767px) {
        /* Styles for small devices */
        .uk-width-3-5\@m,
        .uk-width-2-5\@m {
            width: 100%;
            margin-top: 2rem;
        }
    }
</style>

<style>
    @media screen and (max-width: 1000px) {
        .uk-slideshow-items li {
            height: 60vh;
        }
        .in-slide-text {
            padding: 20px;
        }
        .in-slide-text {
            text-align: center;
        }
        .uk-margin-xlarge-top {
            margin-top: 150px !important;
        }
        .image-foreground {
            max-width: 100%;
        }
    }
    </style>


    <style>
        .portfolio-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: inherit;
        }
        .news-article {
            width: 100%;
        }

        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .mitra-image {
            width: 170px;
            height: auto;
            object-fit: contain;
            border-radius: 10px;
        }
        .news-container {
            display: flex;
            justify-content: center;
        }
    </style>

@endsection
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
        <div id="particles-js" class="uk-light in-slideshow uk-background-contain uk-slideshow" data-uk-img data-uk-slideshow role="region" aria-roledescription="carousel" autoplay>
            <ul class="uk-slideshow-items" aria-live="off" role="presentation" style="height: 90vh">
                @forelse ($section as $key => $sectionItem)
                    <li class="uk-flex uk-flex-middle uk-active uk-transition-active" role="tabpanel" aria-label="1 of 2" tabindex="-1" style="background-image: url('{{ asset('storage/' . $sectionItem->image) }}'); background-size: cover; background-position: center; height: 800px; width: auto; margin: 0; padding: 0;">
                        <div class="uk-container" style="height: 100%;">
                            <div class="uk-grid-large uk-flex-middle uk-grid" data-uk-grid style="height: 100%;">
                                <div class="uk-width-1-2@s in-slide-text">
                                    <h1 class="uk-heading-small">
                                        <span class="in-highlight">{{ $sectionItem->title }}</span>
                                    </h1>
                                    <p class="uk-text-lead uk-visible@m">
                                        {{ $sectionItem->subtitle }}
                                    </p>
                                    <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s uk-grid" data-uk-grid>
                                        <div>
                                            @if (!empty($sectionItem->link))
                                                <a href="{{ $sectionItem->link }}" class="uk-button uk-button-primary uk-border-rounded" style="background-color:#d7ac53; color:white">
                                                    Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <li class="uk-flex uk-flex-middle uk-active uk-transition-active" role="tabpanel" aria-label="1 of 2" tabindex="-1" style="background-image: url('{{ asset('assets/images/default-background.jpg') }}'); background-size: cover; background-position: center; height: 100vh; width: 100%; margin: 0; padding: 0;">
                        <div class="uk-container" style="height: 100%;">
                            <div class="uk-grid-large uk-flex-middle uk-grid" data-uk-grid style="height: 100%;">
                                <div class="uk-width-1-2@s in-slide-text">
                                    <h1 class="uk-heading-small">
                                        The world's most
                                        <span class="in-highlight">powerful</span>
                                        trade app.
                                    </h1>
                                    <p class="uk-text-lead uk-visible@m">
                                        Get the most accurate market data, alerts, conversions, tools and more — all within the same app.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>



    <!-- section content begin -->
    @forelse ($profile as $profile)
        <div class="uk-section in-content-3 uk-background-contain uk-background-center uk-margin-xlarge-top" data-src="img/in-equity-2-bg.png"
            data-uk-img="" style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-2-bg.png&quot;);">
            <div class="uk-container">
                <div class="uk-grid uk-grid-stack uk-flex-middle uk-margin-medium-top" data-uk-grid>
                    <div class="uk-width-3-5@m uk-first-column uk-margin-xlarge-top">
                        <h1>{{ $profile->title }}</h1>
                        <p class="uk-text-justify">
                            {!! $profile->subtitle !!}
                        </p>
                        @if ($profile->proposal)
                        <a href="/about/profile"
                            class="uk-button uk-button-primary uk-border-rounded uk-margin-xlarge-bottom">Lihat
                            Profil Lengkap
                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                        </a>
                        @endif
                    </div>
                    <div class="uk-width-2-5@m uk-grid-margin uk-first-column uk-margin-large-top">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/circle_black.png') }}" class="image-background"
                                alt="">
                            <img src="{{ asset('storage/' . $profile->image) }}" class="image-foreground" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="uk-flex uk-flex-center uk-margin-xlarge-top">
            <img src="{{ asset('empty.png') }}" alt="" srcset="">
        </div>
        <h2 class="uk-text-center">
            Belum ada data
        </h2>
    @endforelse
    <!-- section content end -->




    <!-- section content begin -->
        <div class="uk-section uk-section-primary uk-preserve-color in-equity-1 ">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h1>Layanan Kami</h1>
                    </div>
                </div>
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom" data-uk-grid>
                    @forelse ($service as $index => $serviceItem)
                        @if ($index < 6)
                            <div>
                                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <span class="in-product-name red">{{ strtoupper(Str::substr($serviceItem->name, 0, 2)) }}</span>
                                        <h5 class="uk-margin-remove">{{ $serviceItem->name }}</h5>
                                    </div>
                                    <div style="word-break: break-all;">
                                        <p class="uk-text-break uk-margin-remove">{!! $serviceItem->short_description !!}</p>
                                    </div>
                                    <a href="/services/{{ $serviceItem->slug }}" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">
                                        Lihat Selengkapnya
                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @empty
                    <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                        <div class="uk-text-center">
                            <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                            <h2>Belum ada data</h2>
                        </div>
                    </div>
                    @endforelse
                </div>

                @if ($service->count() > 3)
                    <div class="uk-width-1-1 uk-flex uk-flex-center uk-text-center uk-margin-samll-bottom">
                        <a href="/all" class="uk-button uk-border-rounded custom-button" style="color: #edeff1">
                            Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                        </a>
                    </div>
                @endif

            </div>
        </div>



    <!-- section content end -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                <div class="uk-width-1-1">
                    <h1 class="uk-margin-remove uk-text-center">Menghadirkan produk dengan kualitas dan inovasi terbaik</h1>
                    <p class="uk-text-center">
                        Kami berkomitmen untuk menghadirkan produk-produk berkualitas tinggi yang dipadukan dengan inovasi
                        terdepan, memenuhi kebutuhan dan harapan konsumen dengan sempurna.
                    </p>
                </div>

                @forelse ($product as $index => $produk)
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light
                            @if($index % 3 == 0)
                                in-card-green
                            @elseif($index % 3 == 1)
                                in-card-blue
                            @else
                                in-card-purple
                            @endif">
                            <div class="in-icon-wrap uk-margin-bottom">
                                <i class="fas fa-seedling fa-lg"></i>
                            </div>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('detail.product', $produk->slug) }}">{{ $produk->name }}<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>
                                {!! Str::words(html_entity_decode($produk->description), 160, '') !!}
                            </p>
                        </div>
                    </div>
                @empty
                <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                    <div class="uk-text-center">
                        <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                        <h2>Belum ada data</h2>
                    </div>
                </div>
                @endforelse


            </div>
        </div>
    </div>




        <!-- section content begin -->

        <div class="uk-section" style="background-color: #edeff1">
                <div class="uk-width-1-1@m uk-text-center">
                    <h1><span class="in-highlight">MITRA KAMI</span></h1>
                    <p class="uk-text-lead uk-margin-remove-top">Tumbuh bersama: Kolaborasi menuju kesuksesan</p>
                </div>
                <div class="uk-container uk-padding-remove-vertical in-equity-18">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-1-1">
                            <div class="uk-card uk-card-body uk-border-rounded">
                                <div uk-slider="autoplay: true; autoplay-interval: 2000">
                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                        <div class="uk-slider-items uk-flex uk-flex-center uk-grid-collapse uk-child-width-1-6@m uk-child-width-1-2@s uk-text-center in-client-logo-6" data-uk-grid>
                                            @forelse ($mitras as $mitra)
                                            <div class="uk-first-column uk-flex uk-flex-center" style="background-color: transparent">
                                                <img class="uk-margin-remove mitra-image" src="{{ asset('storage/' . $mitra->image) }}" alt="{{ $mitra->name }}">
                                            </div>
                                            @empty
                                            <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                                                <div class="uk-text-center">
                                                    <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                                                    <h2 style="color: black">Belum ada data</h2>
                                                </div>
                                            </div>
                                            @endforelse
                                        </div>
                                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @if (count($mitras) > 6)
                <div class="uk-width-1-1@m uk-text-center uk-margin-medium-top">
                    <a href="/mitra" class="uk-button uk-button-primary uk-border-rounded" style="background-color:#d7ac53; color:white">
                        Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                </div>
            @endif
        </div>




    <!-- section content begin -->
    <div class="uk-section in-equity-13">
        <div class="uk-container uk-margin-medium-bottom">
            <div class="uk-grid uk-flex uk-flex-center uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-text-center">
                    <h1 class="uk-margin-small-bottom">
                        <span class="in-highlight">BERITA</span>
                    </h1>
                    <p class="uk-text-lead uk-margin-remove-top">
                        Melangkah Ke Depan: Kabar Terbaru Mengenai Perkembangan Perusahaan Kami
                    </p>
                </div>
            </div>
            <div class="uk-width-5-6@m uk-margin-auto-vertical uk-margin-xlarge-left">
                <div class="uk-child-width-1-3@m uk-margin-top uk-flex uk-flex-center" uk-grid>
                    @forelse ($news as $index => $newsItem)
                    @if ($index < 3)
                    <div>
                        <span class="uk-label in-label-small uk-margin-remove-bottom">News</span>
                        <article class="news-article">
                            <img class="uk-border-rounded uk-width-1-1 in-offset-bottom-20 news-image" src="assets_landing/img/in-lazy.gif"
                                data-src="{{ asset('storage/' . $newsItem->thumbnail) }}" alt="news" uk-img>
                            <h5 class="news-title">
                                <a href="/news/{{ $newsItem->slug }}">{{ $newsItem->title }}</a>
                            </h5>
                            <div class="uk-flex uk-flex-middle">
                                <div>
                                    <i class="fas fa-clock fa-xs"></i>
                                </div>
                                <div>
                                    <span class="uk-text-small uk-text-uppercase uk-text-muted uk-margin-small-left">
                                        {{ \Carbon\Carbon::parse($newsItem->date)->locale('id_ID')->isoFormat('D MMMM Y') }}
                                    </span>
                                </div>
                            </div>
                            <p class="news-description">
                                {!! Str::limit(strip_tags($newsItem->description), 100) !!}
                            </p>
                        </article>
                    </div>
                    @endif
                    @empty
                    <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                        <div class="uk-text-center">
                            <img src="{{ asset('empty.png') }}" alt="No data">
                            <h2>Belum ada data</h2>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>



        @if ($news->count() > 3)
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-text-center uk-margin-large-bottom">
                <a href="/news" class="uk-button uk-button-default uk-button-primary uk-border-rounded custom-button">
                    Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                </a>
            </div>
        @endif


    <!-- section content begin -->

    <div class="uk-section" style="background-color: #edeff1">
        <div class="uk-width-1-1@m uk-text-center">
            <h1><span class="in-highlight">PORTOFOLIO</span></h1>
            <h3 class="uk-text-lead uk-margin-remove-top">Inspirasi dari Karya: Portfolio Hummatech Menggambarkan Keunggulan Produk</h3>
        </div>
        <div class="uk-container">
            <ul class="uk-grid-small uk-flex uk-flex-center uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center" data-uk-grid="masonry: true">
                @forelse ($portfolios as $index => $portfolio)
                    @if ($index < 6)
                    <li>
                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded" tabindex="0">
                            <a href="{{ route('detail.portfolio', $portfolio->slug) }}">
                                <img class="uk-transition-scale-up uk-transition-opaque portfolio-image" src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->name }}">
                            </a>
                        </div>
                    </li>

                    @endif
                @empty
                <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                    <div class="uk-text-center">
                        <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                        <h2>Belum ada data</h2>
                    </div>
                </div>
                @endforelse
            </ul>
        </div>

        @if (count($portfolios) > 6)
            <div class="uk-width-1-1@m uk-text-center uk-margin-medium-top">
                <a href="/portfolio" class="uk-button uk-button-primary uk-border-rounded" style="background-color:#d7ac53; color:white">
                    Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                </a>
            </div>
        @endif
    </div>




    <!-- section content end -->
@endsection

@section('script')
<script>
    // Inisialisasi corousel untuk setiap elemen dengan class "uk-slideshow"
    document.querySelectorAll('.uk-slideshow').forEach(function(element) {
        UIkit.slideshow(element);
    });
</script>
@endsection
