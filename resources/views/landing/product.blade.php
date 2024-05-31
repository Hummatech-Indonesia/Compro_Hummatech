@extends('landing.layouts.layouts.app')
@section('title', 'Product')

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

        @media screen and (max-width: 992px) {
            .about-items .btn {
                padding: 1rem 1.5rem;
            }
        }
    </style>
    <style>
        .custom-tabs {
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: hidden;
            overflow-x: auto;
            padding-top: 2rem;
            flex-wrap: nowrap;
        }

        .custom-tabs li a {
            margin-right: 1rem;
            text-transform: uppercase;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            white-space: nowrap;
        }

        .custom-tabs li:last-child a {
            margin-right: 0;
        }

        .custom-tabs li.active a {
            border-bottom: 4px solid #1273eb;
            color: #1273eb;
        }
    </style>
@endsection

@section('seo')
    <meta name="description" content="Product Hummatech adalah product terbaik." />
    <meta name="title" content="Produk - Hummatech" />
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

<div class="uk-section in-equity-16">
    <div class="uk-container uk-margin-top uk-margin-large-bottom">
        <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
            <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom">
                <div class="in-equity-video">
                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/in-gallery-image-2.jpg') }}" data-src="{{ asset('assets_landing/img/blockit/in-gallery-image-2.jpg') }}" alt="sample-images" width="433" height="255" data-uk-img>
                </div>
            </div>
            <div class="uk-width-2-5@m uk-flex uk-flex-middle">
                <div>
                    <h3>Milink.id</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut. Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut Baca Selengkapnya...</p>
                    <a href="/product/detail" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                    <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
            <div class="uk-width-2-5@m uk-flex uk-flex-middle">
                <div>
                    <h3>Milink.id</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut. Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut Baca Selengkapnya...</p>
                    <a href="/product/detail" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                    <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                </div>
            </div>
            <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom">
                <div class="in-equity-video">
                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/in-gallery-image-2.jpg') }}" data-src="{{ asset('assets_landing/img/blockit/in-gallery-image-2.jpg') }}" alt="sample-images" width="433" height="255" data-uk-img>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
