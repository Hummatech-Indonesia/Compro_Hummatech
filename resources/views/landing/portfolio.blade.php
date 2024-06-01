@extends('landing.layouts.layouts.app')
@section('title', 'Portofolio')

@section('style')

@endsection

@section('seo')
<meta name="description" content="Portofolio Hummatech." />
<meta name="title" content="Portofolio - Hummatech" />
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
                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/image.png') }}" data-src="{{ asset('assets_landing/img/blockit/image.png') }}" alt="sample-images" width="433" height="255" data-uk-img>
                </div>
            </div>
            <div class="uk-width-2-5@m uk-flex uk-flex-middle">
                <div>
                    <h3>Tracer Study SMKN 2 Penajam Paser Utara</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut. Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut Baca Selengkapnya...</p>
                    <a href="/portfolio/detail" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
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
                    <h3>Tracer Study SMKN 2 Penajam Paser Utara</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut. Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut Baca Selengkapnya...</p>
                    <a href="/portfolio/detail" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                    <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                    </a>
                </div>
            </div>
            <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom">
                <div class="in-equity-video">
                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/image.png') }}" data-src="{{ asset('assets_landing/img/blockit/image.png') }}" alt="sample-images" width="433" height="255" data-uk-img>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
