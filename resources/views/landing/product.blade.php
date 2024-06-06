@extends('landing.layouts.layouts.app')
@section('title', 'Product')

@section('style')
<style>
    .uk-tab > li.uk-active > a {
        color: #D7AC53;
        border-radius: 5px;
        position: relative;
    }

    .uk-tab > li.uk-active > a::after {
        content: "";
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #D7AC53;
    }

    .uk-tab > li > a {
        position: relative;
        padding-bottom: 4px;
    }

    @media (max-width: 768px) {
        .uk-tab {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .uk-tab > li {
            flex: 1 1 auto;
            text-align: center;
        }

        .uk-tab > li > a {
            padding: 10px 5px;
            font-size: 14px;
        }

        .uk-tab > li.uk-active > a::after {
            bottom: -2px;
            height: 1px;
        }
    }

    @media (max-width: 480px) {
        .uk-tab > li > a {
            padding: 8px 3px;
            font-size: 12px;
        }

        .uk-tab > li.uk-active > a::after {
            bottom: -1px;
            height: 1px;
        }
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


<div class="uk-section uk-container uk-margin-top uk-margin-large-bottom">
    <ul class="uk-child-width-expand" uk-tab>
        <li><a href="#"><b>Semua</b></a></li>
        @forelse ($categories as $category)
            <li><a href="#{{ $category->slug }}"><b>{{ $category->name }}</b></a></li>
        @empty

        @endforelse
    </ul>

    <ul class="uk-switcher uk-margin uk-margin-large-top">
        <li>
            @forelse ($products as $key => $product)
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
                                    <a href="{{ $compact == $comingProducts ? '/product/coming-soon/' . $product->slug : 'product/'. $product->slug }}"
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
    </ul>
</div>


@endsection

