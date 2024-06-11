@extends('landing.layouts.layouts.app')
@section('title', 'Product')

@section('style')
<style>
    .uk-tab {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        white-space: nowrap;
        padding: 0;
        margin: 0;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }

    .uk-tab li {
        flex: 0 0 auto;
        list-style-type: none;
        text-align: center;
        margin-right: 10rem;
    }

    .uk-tab li:last-child {
        margin-right: 0px;
    }

    .uk-tab li a {
        padding: 10px 5px;
        font-size: 14px;
        white-space: nowrap;
        position: relative;
    }

    .uk-tab > li.uk-active > a::after {
        content: "";
        position: absolute;
        bottom: 0px;
        left: 50%;
        transform: translateX(-50%);
        width: 300%;
        height: 2px;
        background-color: #D7AC53;
    }

    .uk-tab li.active a {
        color: #D7AC53;
        border-radius: 5px;
        position: relative;
    }

    @media screen and (max-width: 768px) {
        .uk-tab li {
            margin-right: 8rem;
            max-width: 150px;
            white-space: normal;
            text-overflow: ellipsis;
            overflow-wrap: break-word;
        }

        .uk-tab li a {
            font-size: 0.75rem;
            padding: 5px 10px;
        }

        .uk-tab {
            scrollbar-width: auto;
        }
    }

</style>

@endsection

@section('seo')
<meta name="title" content="Produk" />
<meta name="description" content="Produk PT CAKRA PARAMA INDONESIA" />
<meta name="og:image" content="{{ asset('icon.png') }}" />
<meta name="twitter:image" content="{{ asset('icon.png') }}" />
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


<div class="uk-section uk-container uk-margin-top uk-margin-large-bottom">
    <ul class="uk-child-width-expand" uk-tab>
        <li><a href="#"><b>Semua</b></a></li>
        @forelse ($categories as $category)
            <li><a href="#{{ $category->slug }}"><b>{{ $category->name }}</b></a></li>
        @empty
        @endforelse
        @if ($comingProducts != null)
            <li><a href="#"><b>Segera hadir</b></a></li>
        @endif
    </ul>

    <ul class="uk-switcher uk-margin uk-margin-large-top">
        <li>
            @foreach ($comingProducts as $key=> $comingProduct)
                <div class="uk-container uk-margin-top uk-margin-large-bottom">
                    <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom {{ $key % 2 == 1 ? 'uk-flex-last@m' : '' }}">
                            <div class="in-equity-video">
                                <img class="uk-border-rounded uk-width-1-1" src="{{ asset('storage/'. $comingProduct->image) }}" data-src="{{ asset('storage/'. $comingProduct->image) }}" alt="sample-images" width="433" height="255" data-uk-img>
                            </div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex uk-flex-middle {{ $key % 2 == 1 ? 'uk-flex-first@m': '' }}">
                            <div>
                                <h3>{{ $comingProduct->name }} <span class="uk-label uk-label-success in-label-small uk-margin-small-left">Segera hadir</span></h3>
                                <p>{!! $comingProduct->description !!}</p>
                                <a href="/product/coming-soon/{{ $comingProduct->slug }}"class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                                @if ($comingProduct->link != null)
                                    <a href="{{ $comingProduct->link }}" target="_blank" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @forelse ($products as $key => $product)
                <div class="uk-container uk-margin-top uk-margin-large-bottom">
                    <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom {{ $key % 2 == 0 ? 'uk-flex-last@m' : '' }}">
                            <div class="in-equity-video">
                                <img class="uk-border-rounded uk-width-1-1" src="{{ asset('storage/'. $product->image) }}" data-src="{{ asset('storage/'. $product->image) }}" alt="sample-images" width="433" height="255" data-uk-img>
                            </div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex uk-flex-middle {{ $key % 2 == 0 ? 'uk-flex-first@m': '' }}">
                            <div>
                                <h3>{{ $product->name }}</h3>
                                <p>{!! $product->description !!}</p>
                                <a href="/product/{{ $product->slug }}"class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                                @if ($product->link != null)
                                    <a href="{{ $product->link }}" target="_blank" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="uk-flex uk-flex-center">
                    <img src="{{ asset('empty.png') }}" alt="" width="300px" srcset="">
                </div>
                <h4 class="uk-text-center">No Data</h4>
            @endforelse
        </li>


        @forelse ($categories as $key => $category)
            <li>
                @forelse (App\Models\Product::where('type', '!=', 'portfolio')->where('category_product_id', $category->id)->get() as $product)
                    <div class="uk-container uk-margin-top uk-margin-large-bottom">
                        <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom {{ $key % 2 == 1 ? 'uk-flex-last@m' : '' }}">
                                <div class="in-equity-video">
                                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('storage/'. $product->image) }}" data-src="{{ asset('storage/'. $product->image) }}" alt="sample-images" width="433" height="255" data-uk-img>
                                </div>
                            </div>
                            <div class="uk-width-2-5@m uk-flex uk-flex-middle {{ $key % 2 == 1 ? 'uk-flex-first@m': '' }}">
                                <div>
                                    <h3>{{ $product->name }}</h3>
                                    <p>{!! $product->description !!}</p>
                                    <a href="/product/{{ $product->slug }}"
                                        class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </a>
                                    <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="uk-flex uk-flex-center">
                        <img src="{{ asset('empty.png') }}" alt="" width="300px" srcset="">
                    </div>
                    <h4 class="uk-text-center">No Data</h4>
                @endforelse
            </li>
        @empty
        @endforelse

        @if ($comingProducts != null)
            @forelse ($comingProducts as $key => $comingProduct)
                <li>
                    <div class="uk-container uk-margin-top uk-margin-large-bottom">
                        <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom {{ $key % 2 == 1 ? 'uk-flex-last@m' : '' }}">
                                <div class="in-equity-video">
                                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('storage/'. $comingProduct->image) }}" data-src="{{ asset('storage/'. $comingProduct->image) }}" alt="sample-images" width="433" height="255" data-uk-img>
                                </div>
                            </div>
                            <div class="uk-width-2-5@m uk-flex uk-flex-middle {{ $key % 2 == 1 ? 'uk-flex-first@m': '' }}">
                                <div>
                                    <h3>{{ $comingProduct->name }}</h3>
                                    <p>{!! $comingProduct->description !!}</p>
                                    <a href="/product/{{ $comingProduct->slug }}"
                                        class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </a>
                                    <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @empty
            @endforelse
        @endif
    </ul>
</div>


@endsection

