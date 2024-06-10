@extends('landing.layouts.layouts.app')
@section('title' , 'Detail Portofolio')
@section('style')
    <style>
        .subtitle {
            text-transform: uppercase;
            font-weight: 600;
            color: #1273eb;
            margin-top: -5px;
            display: inline-block;
            background: linear-gradient(90deg, rgba(18, 115, 235, 1) 30%, rgba(4, 215, 242, 1) 100%);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-us-area .thumb {
            padding-left: unset;
            padding-right: 50px;
        }

        .about-us-area .thumb::after {
            right: 0;
            top: 5rem !important;
            left: unset !important;
        }

        .about-us-area .container {
            position: relative;
        }

        .about-us-area .about-triangle {
            position: absolute;
            z-index: -1;
            top: -7.5rem;
            right: -7.5rem;
        }

        @media screen and (max-width: 992px) {
            .about-us-area .about-triangle {
                right: 0;
            }

            .about-us-area .thumb {
                padding-top: 50px;
                padding-right: unset;
            }
        }
    </style>
@endsection

@section('seo')
    
    
@endsection

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
            "name": "Produk",
            "item": "{{ url('/product') }}"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Coming Soon",
            "item": "{{ url('/coming-soon') }}"
        },
        {
            "@type": "ListItem",
            "position": 4,
            "name": "detail.comming-soon",
            "item": "{{ url('/' . $ComingSoonProduct->slug) }}"
        }
    ]
}
    </script>
    
        
    @section('header')
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb-custom">
                        <li href="/">Home</li>
                        <li>
                            <span>Produk</span>
                        </li>
                        <li>
                            <span>Segera hadir</span>
                        </li>
                        <li>
                            <span>{{ $ComingSoonProduct->name }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('content')
<div class="uk-section uk-margin-large-top uk-margin-large-bottom">
    <div class="uk-container uk-margin-top uk-margin-large-bottom">
        <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
            <div class="uk-width-2-5@m uk-flex uk-flex-middle uk-margin-large-bottom">
                <div class="in-equity-video">
                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('storage/'. $ComingSoonProduct->image) }}" data-src="{{ asset('storage/'. $ComingSoonProduct->image) }}" alt="sample-images" width="433" height="255" data-uk-img>
                </div>
            </div>
            <div class="uk-width-3-5@m uk-flex uk-flex-middle">
                <div>
                    <h3>{{ $ComingSoonProduct->name }}</h3>
                    <p>{!! $ComingSoonProduct->description !!}</p>
                    @if ($ComingSoonProduct->link != null)
                        <a href="{{ $ComingSoonProduct->link }}" target="_blank" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
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
