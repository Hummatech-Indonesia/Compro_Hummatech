@extends('landing.layouts.app')
@section('style')

<style>
    .uk-section {
    }
    #particles-js {
        position: relative;
        background-image: url('{{ asset('assets/images/mischool.jpg') }}');
        background-size: cover;
        background-position: center;
    }
    #particles-js::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
    .uk-container,
    .uk-slideshow-nav {
        position: relative;
        z-index: 1;
    }
    .in-slide-img img {
        max-width: 100%;
        height: 100%;
    }
    .uk-slideshow-items {
    height: 100vh;
}

.in-slide-img img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
}

    @media screen and (max-width: 768px) {
        #particles-js {
            height: 500px;
        }
    }

    .news-title,
    .news-description {
        word-wrap: break-word;
        word-break: break-word;
        overflow-wrap: break-word;
    }

    .uk-grid > div {
        display: flex;
        flex-direction: column;
    }

    .uk-grid > div article {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

</style>

@endsection
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
        <div id="particles-js" class="uk-light in-slideshow uk-background-contain" data-src="{{ asset('assets/images/mischool.jpg') }}"
            data-uk-img data-uk-slideshow>
            <hr>
            <ul class="uk-slideshow-items">
                <li class="uk-flex uk-flex-middle">
                    <div class="uk-container">
                        <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2@s in-slide-text">
                                <h1 class="uk-heading-small">Maju Bersama Berkembang Bersama.</h1>
                                <p class="uk-text-lead uk-visible@m">bertransformasi menjadi perusahaan yang mampu menjawab
                                    tantangan di era revolusi industri 4.0.</p>
                                <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                    data-uk-grid>
                                    <div class="uk-visible@m">
                                        <button class="uk-button uk-button-primary uk-border-rounded"
                                            style="background-color:#FCB42D; color:">
                                            Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="in-slide-img">
                                <img src="assets_landing/img/in-lazy.gif"
                                    data-src="{{ asset('assets_landing/img/in-equity-slide-1.png') }}" alt="image-slide"
                                    width="500" height="746" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="uk-container">
                <div class="uk-position-relative" data-uk-grid>
                    <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- slideshow content begin -->
    @forelse ($section as $key => $sectionItem)

        <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
            <div id="particles-js"  class="uk-light in-slideshow uk-background-contain uk-slideshow" data-src="{{ asset('storage/' . $sectionItem->image) }}" data-uk-img data-uk-slideshow role="region"
            ariaroledescription="carousel" style="background-image: url('{{ asset('storage/' . $sectionItem->image) }}');">
                <hr>
                <ul class="uk-slideshow-items" aria-live="off" role="presentation" style="min-height: 440px;">
                    <li class="uk-flex uk-flex-middle" role="tabpanel" aria-label="1 of 2" tabindex="-1" id="uk-slideshow-7-item-0" style>
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle uk-grid uk-grid-stack" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text uk-first-column">
                                    <h1 class="uk-heading-small">

                                        <span class="in-highlight">{{ $sectionItem->title }} </span>
                                    </h1>
                                    <p class="uk-text-lead uk-visible@m">
                                        {{ $sectionItem->subtitle }}
                                    </p>
                                    <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s uk-grid uk-grid-stack" data-uk-grid>
                                        <div>
                                            @if (!empty($sectionItem->link))
                                                <a href="{{ $sectionItem->link }}" class="uk-button uk-button-primary uk-border-rounded"
                                                    style="background-color:#d7ac53; color:white">
                                                    Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                            @endif

                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    @empty
    <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
        <div id="particles-js"  class="uk-light in-slideshow uk-background-contain uk-slideshow" data-src="img/in-equity-decor-1.svg" data-uk-img data-uk-slideshow role="region"
        ariaroledescription="carousel" style="background-image: url('{{ asset('assets/images/mischool.jpg') }}');">
            <hr>
            <ul class="uk-slideshow-items" aria-live="off" role="presentation" style="min-height: 440px;">
                <li class="uk-flex uk-flex-middle" role="tabpanel" aria-label="1 of 2" tabindex="-1" id="uk-slideshow-7-item-0" style>
                    <div class="uk-container">
                        <div class="uk-grid-large uk-flex-middle uk-grid uk-grid-stack" data-uk-grid>
                            <div class="uk-width-1-2@s in-slide-text uk-first-column">
                                <h1 class="uk-heading-small">
                                    Maju Bersama
                                    <span class="in-highlight">Berkembang </span>
                                    Bersama
                                </h1>
                                <p class="uk-text-lead uk-visible@m">
                                    bertransformasi menjadi perusahaan yang mampu menjawab
                                    tantangan di era revolusi industri 4.0                                </p>
                                <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s uk-grid uk-grid-stack" data-uk-grid>
                                    <div>
                                        <button class="uk-button uk-button-primary uk-border-rounded"
                                        style="background-color:#d7ac53; color:white">
                                        Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="in-slide-img uk-first-column">
                                <img src="{{ asset('assets_landing/img/in-equity-slide-1.png') }}" data-src="{{ asset('assets_landing/img/in-equity-slide-1.png') }}" alt="image-slide" width="500" height="746" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endforelse
    <!-- slideshow content end -->

    <!-- section content begin -->
    <div class="uk-section in-equity-3 in-offset-top-65">
        <div class="uk-container uk-margin-large-bottom">
            @forelse ($profile as $profile)
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-expand@m">
                    <h1 class="uk-margin-small-bottom"><span class="in-highlight">{{$profile->title}}</span></h1>
                    <p class="uk-margin-top">Kini Hummatech bertransformasi menjadi perusahaan yang mampu
                        {{$profile->subtitle}}</p>
                        <a href="/about/profile" class="uk-button uk-button-primary uk-border-rounded" style="background-color:#d7ac53; color:white">
                            Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                        </a>
                        <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                </div>
                <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">
                    <div class="">
                        <img src="{{ asset('storage/' . $profile->image) }}" style="width:400px;" alt="">
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
    <!-- section content end -->




    <!-- section content begin -->
    <div class="uk-section uk-section-primary uk-preserve-color in-equity-1">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h1 cl>Layanan Kami</h1>
                </div>
            </div>
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom"
                data-uk-grid>
                @forelse ($service as $service)
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name red" style="background-image: url('{{ asset('storage/' . $service->image) }}');"></span>
                                <h5 class="uk-margin-remove">{{$service->name}}</h5>
                            </div>
                            <p>{!! Str::limit(strip_tags($service->description), 200) !!}</p>
                            <a href="/services/{{ $service->slug }}" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Lihat
                                Selengkapnya<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                @empty
                <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                    <div class="uk-text-center">
                        <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                        <h2>No data</h2>
                    </div>
                </div>
                @endforelse
            </div>
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
                @forelse ($product as $produk)

                    <div>
                        <div
                            class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green">
                            <div class="in-icon-wrap uk-margin-bottom">
                                <i class="fas fa-seedling fa-lg"></i>
                            </div>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('detail.product', $produk->slug) }}">{{ $produk->name }}<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>
                                {!! Str::words(html_entity_decode($produk['description']), 160, '') !!}
                            </p>
                        </div>
                    </div>
                    @empty
                    <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                        <div class="uk-text-center">
                            <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                            <h2>No data</h2>
                        </div>
                    </div>
                    @endforelse
            </div>
        </div>
    </div>
    <!-- section content begin -->
    <div class="uk-section" style="background-color: #edeff1">
        <div class="uk-width-1-1@m uk-text-center ">
            <h1><span class="in-highlight">MITRA KAMI</span></h1>
            <p class="uk-text-lead uk-margin-remove-top "> Tumbuh bersama: Kolaborasi menuju kesuksesan</p>
        </div>
        <div class="uk-container  uk-padding-remove-vertical in-equity-18">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-body uk-border-rounded">
                        <div uk-slider="autoplay: true; autoplay-interval: 2000">
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                <div class="uk-slider-items uk-flex uk-flex-center uk-grid-collapse uk-child-width-1-6@m uk-child-width-1-2@s uk-text-center in-client-logo-6"
                                    data-uk-grid>
                                    @forelse ($mitras as $mitra)
                                        <div class="uk-tile uk-tile-default" style="background-color: transparent">
                                            <img class="uk-margin-remove" src="{{ asset('storage/' . $mitra->image) }}" alt="{{ $mitra->name }}" width="167" height="55">
                                        </div>
                                    @empty
                                    <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                                        <div class="uk-text-center">
                                            <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                                            <h2 style="color: black">No data</h2>
                                        </div>
                                    </div>
                                    @endforelse
                                </div>
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
                            </div>
                            {{-- <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul> --}}
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
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m uk-text-center">
                    <h1 class="uk-margin-small-bottom"> <span class="in-highlight">BERITA</span></h1>
                    <p class="uk-text-lead uk-margin-remove-top ">Melangkah Ke Depan: Kabar Terbaru Mengenai Perkembangan
                        Perusahaan Kami</p>
                </div>
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-top uk-flex uk-flex-center" data-uk-grid>
                        @if ($news->count() > 0)
                            @forelse ($news as $index => $newsItem)
                                @if ($index < 3)
                                    <div>
                                        <span class="uk-label in-label-small uk-margin-remove-bottom">News</span>
                                        <article>
                                            <img class="uk-border-rounded uk-width-1-1 in-offset-bottom-20" src="assets_landing/img/in-lazy.gif"
                                                data-src="{{ asset('storage/' . $newsItem->thumbnail) }}" alt="news" width="340" height="170" data-uk-img>
                                            <h5 class="news-title">
                                                <a href="/news/{{ $newsItem->slug }}">Inflation and sanctions weaken ruble against the dollar</a>
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
                                        <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                                        <h2>No data</h2>
                                    </div>
                                </div>
                            @endforelse

                            @if ($news->count() > 3)
                                <div class="uk-width-1-5@m uk-flex uk-flex-center uk-text-center uk-margin-medium-top">
                                    <button class="uk-button uk-button-default uk-button uk-button-primary uk-border-rounded custom-button">
                                        Selengkapnya <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </button>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- section content begin -->
    <div class="uk-section" style="background-color: #edeff1">
        <div class="uk-width-1-1@m uk-text-center ">
            <h1><span class="in-highlight">PORTOFOLIO</span></h1>
            <h3 class="uk-text-lead uk-margin-remove-top ">Inspirasi dari Karya: Portfolio Hummatech Menggambarkan Keunggulan Produk</h3>
        </div>
        <div class="uk-container">
            <ul class="uk-grid-small uk-flex uk-flex-center uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center" data-uk-grid="masonry: true">
                @forelse ($portfolios as $index => $portfolio)
                    @if ($index < 6)
                    <li>
                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded " tabindex="0">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->name }}" data-width data-height>
                        </div>
                    </li>
                    @endif
                @empty
                <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                    <div class="uk-text-center">
                        <img src="{{ asset('empty.png') }}" alt="No data" srcset="">
                        <h2>No data</h2>
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
