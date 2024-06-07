@extends('landing.layouts.layouts.app')
@section('title' , 'Detail Portofolio {{ $product->name }}')
@section('style')
    <style>
        .uk-slider-items > div {
            padding: 0 10px; /* Optional: adjust padding between slides */
            margin-right: 20px; /* Adjust margin between slides */

        }
        .uk-slider-items * {
            color: black !important;
        }
    </style>

@endsection

@section('seo')
    <meta name="title" content="{{ $product->name }}" />
    <meta name="og:image" content="{{ asset('storage/' . $product->image) }}" />
    <meta name="og:description" content="{!! $product->description !!}" />
    <meta name="twitter:image" content="{{ asset('storage/' . $product->image) }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="{{ url('/') }}" />
    <!-- ========== Breadcrumb Markup (JSON-LD) ========== -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Beranda",
          "item": "{{ url('/') }}"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Tentang Kami",
          "item": "{{ url('/about-us') }}"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Produk",
          "item": "{{ url('/produk') }}"
        },
      ]
    }
    </script>
@endsection

@section('header')
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li href="/">Beranda</li>
                    <li>
                        <span>Produk</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="uk-section">
    <div class="uk-container uk-margin-top uk-margin-large-bottom">
        <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
            <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom">
                <div class="in-equity-video">
                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('storage/'. $product->image) }}" data-src="{{ asset('storage/'. $product->image) }}" alt="sample-images" width="433" height="255" data-uk-img>
                </div>
            </div>
            <div class="uk-width-2-5@m uk-flex uk-flex-middle">
                <div>
                    <h3>{{ $product->name }}</h3>
                    <p>{!! $product->description !!}</p>
                    @if ($product->link != null)
                        <a href="{{ $product->link }}" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@if (!$product->features->isEmpty())

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-3-5@m uk-text-center">
                    <h1 class="uk-margin-remove-bottom">
                        <span class="in-highlight">
                            Fitur - Fitur
                        </span>
                    </h1>
                    <p class="uk-text-lead">Fitur - Fitur {{ $product->name }} yang mungkin dapat membantu anda</p>
                </div>
            </div>
            <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top uk-grid-stack uk-flex-center" data-uk-grid>
                @foreach ($product->features as $feature)
                    <div class="uk-flex uk-flex-left uk-first-column">
                        <div class="uk-margin-right">
                            <div class="in-icon-wrap primary-color">
                                {{-- <i class="fas fa-leaf fa-lg"></i> --}}
                                {{ str_pad($loop->iteration, 1, '0', STR_PAD_LEFT) }}
                            </div>
                        </div>
                        <div>
                            <h3>{{ $feature->title }}</h3>
                            <p class="uk-margin-remove-bottom">{{ $feature->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif

@if (!$testimonials->isEmpty())
<div class="uk-section in-equity-4">
    <div class="uk-container uk-margin-top uk-margin-medium-bottom">
        <div class="uk-grid uk-child-width-1-2@m in-testimonial-2 uk-grid-stack uk-slider-container-offset">

            <div class="uk-width-1-1@m uk-text-center uk-first-column">
                <h1><span class="in-highlight">Testimoni</span></h1>
                <p class="uk-text-lead">Testimoni Membuktikan Kualitas produk Kami</p>
            </div>

            @foreach ($testimonials as $testimonial)
                <div class="uk-grid-margin uk-first-column">
                    <div class="uk-background-contain uk-background-top-left" data-src="img/in-equity-4-blob-1.svg" data-uk-img style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-4-blob-1.svg&quot;);">
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <div class="uk-background-primary uk-border-pill">
                                    <img class="uk-align-center uk-border-pill" src="{{ asset('storage/'. $testimonial->image) }}" data-src="{{ asset('storage/'. $testimonial->image) }}" alt="client-1" width="100" height="100" data-uk-img>
                                </div>
                            </div>
                            <div>
                                <h5 class="uk-margin-remove-bottom">{{ $testimonial->name }}</h5>
                                <p class="uk-text-muted uk-margin-remove-top">{{ \Carbon\Carbon::parse($testimonial->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')  }}</p>
                            </div>
                        </div>
                        <blockquote>
                            <p>{{ $testimonial->description }}</p>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif


{{-- <div uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-2@m">
            <div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="uk-background-contain uk-background-top-left" data-src="img/in-equity-4-blob-2.svg" data-uk-img style="background-image: url('https://www.indonez.com/html-demo/equity/img/in-equity-4-blob-2.svg');">
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <div class="uk-background-primary uk-border-pill">
                                    <img class="uk-align-center uk-border-pill" src="{{ asset('assets_landing/img/blockit/in-team-6.png') }}" data-src="{{ asset('assets_landing/img/blockit/in-team-6.png') }}" alt="client-2" width="100" height="100" data-uk-img>
                                </div>
                            </div>
                            <div>
                                <h5 class="uk-margin-remove-bottom">Wade Palmer</h5>
                                <p class="uk-text-muted uk-margin-remove-top">from Germany</p>
                            </div>
                        </div>
                        <blockquote>
                            <p>Very convenience for trader, spread for gold is relatively low compare to other broker</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="uk-background-contain uk-background-top-left" data-src="img/in-equity-4-blob-2.svg" data-uk-img style="background-image: url('https://www.indonez.com/html-demo/equity/img/in-equity-4-blob-2.svg');">
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <div class="uk-background-primary uk-border-pill">
                                    <img class="uk-align-center uk-border-pill" src="{{ asset('assets_landing/img/blockit/in-team-6.png') }}" data-src="{{ asset('assets_landing/img/blockit/in-team-6.png') }}" alt="client-2" width="100" height="100" data-uk-img>
                                </div>
                            </div>
                            <div>
                                <h5 class="uk-margin-remove-bottom">Wade Palmer</h5>
                                <p class="uk-text-muted uk-margin-remove-top">from Germany</p>
                            </div>
                        </div>
                        <blockquote>
                            <p>Very convenience for trader, spread for gold is relatively low compare to other broker</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="uk-background-contain uk-background-top-left" data-src="img/in-equity-4-blob-2.svg" data-uk-img style="background-image: url('https://www.indonez.com/html-demo/equity/img/in-equity-4-blob-2.svg');">
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <div class="uk-background-primary uk-border-pill">
                                    <img class="uk-align-center uk-border-pill" src="{{ asset('assets_landing/img/blockit/in-team-6.png') }}" data-src="{{ asset('assets_landing/img/blockit/in-team-6.png') }}" alt="client-2" width="100" height="100" data-uk-img>
                                </div>
                            </div>
                            <div>
                                <h5 class="uk-margin-remove-bottom">Wade Palmer</h5>
                                <p class="uk-text-muted uk-margin-remove-top">from Germany</p>
                            </div>
                        </div>
                        <blockquote>
                            <p>Very convenience for trader, spread for gold is relatively low compare to other broker</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div> --}}

@if (!$faqs->isEmpty())
<div class="uk-section">
    <div class="uk-width-1-1 uk-flex uk-flex-center">
        <div class="uk-width-3-5@m uk-text-center">
            <h1 class="uk-margin-remove-bottom">
                <span class="in-highlight">
                    FAQ
                </span>
            </h1>
            <p class="uk-text-lead">FAQ Kami Memudahkan Anda Memahami Layanan Kami</p>
        </div>
    </div>
    <aside class="uk-child-width-1-2 uk-flex uk-flex-center">
        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
            <ul class="uk-list uk-list-divider uk-list-large widget-latest">
                @foreach ($faqs as $faq)
                    <li>
                        <h5 class="uk-text-uppercase uk-margin-remove-bottom">
                            {{ $faq->question }}
                        </h5>
                        <p>{{ $faq->answer }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>
</div>
@endif


@endsection


@section('script')
    <script>
        $('.testimonials-carousel').owlCarousel({
            loop: false,
            nav: true,
            margin: 30,
            dots: false,
            autoplay: false,
            items: 1,
            navText: [
                "<i class='arrow_left'></i>",
                "<i class='arrow_right'></i>"
            ]
        });
    </script>
@endsection
