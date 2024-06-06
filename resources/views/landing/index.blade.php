@extends('landing.layouts.app')
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
        }
    }
    @media screen and (max-width: 576px) {
        #particles-js {
            height: 100vh;
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
    @media screen and (max-width: 768px) {
    .uk-slideshow-items li {
        background-size: contain;
        background-position: top;
    }
}
@media screen and (max-width: 768px) {
    li.uk-slideshow-items {
        background-size: contain;
    }
}

</style>


@endsection
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
        <div id="particles-js" class="uk-light in-slideshow uk-background-contain uk-slideshow" data-uk-img data-uk-slideshow role="region" aria-roledescription="carousel" autoplay>
            <ul class="uk-slideshow-items" aria-live="off" role="presentation">
                @forelse ($section as $key => $sectionItem)
                    <li class="uk-flex uk-flex-middle uk-active uk-transition-active" role="tabpanel" aria-label="1 of 2" tabindex="-1" style="background-image: url('{{ asset('storage/' . $sectionItem->image) }}'); background-size: cover; background-position: center; height: 100vh; width: 100%; margin: 0; padding: 0;">
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
    <div class="uk-section in-content-3 uk-background-contain uk-background-center uk-margin-large-top" data-src="img/in-equity-2-bg.png"
        data-uk-img=""style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-2-bg.png&quot;);">
        <div class="uk-container">
            <div class="uk-grid uk-grid-stack uk-flex-middle uk-margin-medium-top" data-uk-grid>
                <div class="uk-width-3-5@m uk-first-column uk-margin-xlarge-top">
                    <h1>{{ $profile->title }}</h1>
                    <p class="uk-text-justify">
                        {!! $profile->description !!}
                    </p>
                    @if ($profile->proposal)
                    <a target="_blank" href="{{ $profile->proposal }}"
                        class="uk-button uk-button-primary uk-border-rounded uk-margin-xlarge-bottom">Lihat
                        Profil Lengkap
                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                    @endif
                </div>
                <div class="uk-width-2-5@m uk-grid-margin uk-first-column">
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

    @endforelse
    <!-- section content end -->




    <!-- section content begin -->
    @php
    $hasServices = $service->isNotEmpty();
    @endphp

    @if ($hasServices)
        <div class="uk-section uk-section-primary uk-preserve-color in-equity-1 ">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h1>Layanan Kami</h1>
                    </div>
                </div>
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom" data-uk-grid>
                    @forelse ($service as $serviceItem)
                        <div>
                            <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                                <div class="uk-flex uk-flex-middle">
                                    <span class="in-product-name red">{{ strtoupper(Str::substr($serviceItem->name, 0, 2)) }}</span>
                                    <h5 class="uk-margin-remove">{{ $serviceItem->name }}</h5>
                                </div>
                                <p>{!! Str::limit(strip_tags($serviceItem->description), 200) !!}</p>
                                <a href="/services/{{ $serviceItem->slug }}" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">
                                    Lihat Selengkapnya
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <!-- Tidak ada layanan -->
                    @endforelse
                </div>
            </div>
        </div>
    @endif



    <!-- section content end -->
    @if ($product->isNotEmpty())
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
                            in-card-red
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
                <!-- Tidak ada produk -->
            @endforelse


            </div>
        </div>
    </div>
@endif



        <!-- section content begin -->
        @if ($mitras->isNotEmpty())
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
                                                <div class="uk-tile uk-tile-default " style="background-color: transparent">
                                                    <img class="uk-margin-remove" src="{{ asset('storage/' . $mitra->image) }}" alt="{{ $mitra->name }}" width="167" height="55">
                                                </div>
                                            @empty
                                                <!-- Tidak ada data mitra -->
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
            @endif

            @if (count($mitras) > 6)
                <div class="uk-width-1-1@m uk-text-center uk-margin-medium-top">
                    <a href="/mitra" class="uk-button uk-button-primary uk-border-rounded" style="background-color:#d7ac53; color:white">
                        Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                </div>
            @endif
        </div>




    <!-- section content begin -->
    @if ($news->count() > 0)
        <div class="uk-section in-equity-13">
            <div class="uk-container uk-margin-medium-bottom">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m uk-text-center">
                        <h1 class="uk-margin-small-bottom">
                            <span class="in-highlight">BERITA</span>
                        </h1>
                        <p class="uk-text-lead uk-margin-remove-top">
                            Melangkah Ke Depan: Kabar Terbaru Mengenai Perkembangan Perusahaan Kami
                        </p>
                    </div>
                </div>
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-top uk-flex uk-flex-center" data-uk-grid>
                        @foreach ($news as $index => $newsItem)
                            @if ($index < 3)
                                <div>
                                    <span class="uk-label in-label-small uk-margin-remove-bottom">News</span>
                                    <article>
                                        <img class="uk-border-rounded uk-width-1-1 in-offset-bottom-20" src="assets_landing/img/in-lazy.gif"
                                            data-src="{{ asset('storage/' . $newsItem->thumbnail) }}" alt="news" width="340" height="170" data-uk-img>
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @if ($news->count() > 3)
            <div class="uk-width-1-1 uk-flex uk-flex-center uk-text-center uk-margin-medium-top">
                <a href="/news" class="uk-button uk-button-default uk-button-primary uk-border-rounded custom-button">
                    Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                </a>
            </div>
        @endif
    @else

    @endif

    <!-- section content begin -->
    @if (count($portfolios) > 0)
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
                                <a href="{{ route('detail.portfolio', $portfolio->slug) }}"> <!-- Tautan ke halaman detail portofolio -->
                                    <img class="uk-transition-scale-up uk-transition-opaque" src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->name }}">
                                </a>
                            </div>
                        </li>
                    @endif
                @empty
                    <!-- Tidak ada data portofolio -->
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
@endif




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
