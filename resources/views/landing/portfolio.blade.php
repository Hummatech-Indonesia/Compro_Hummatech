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

    <div class="uk-section">
        <div class="uk-container uk-margin-top uk-margin-large-bottom">
            @forelse ($portfolios as $key => $portfolio)
                {{-- @dd($compact) --}}
                @if ($key % 2 === 1)
                    <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom">
                            <div class="in-equity-video">
                                <img class="uk-border-rounded uk-width-1-1"
                                    src="{{ asset('storage/' . $portfolio->image) }}"
                                    data-src="{{ asset('storage/' . $portfolio->image) }}"
                                    alt="sample-images" width="433" height="255" data-uk-img>
                            </div>
                        </div>
                        <div class="uk-width-2-5@m uk-flex uk-flex-middle">
                            <div>
                                <h1 style="color: black">
                                    <a style="color: black" href="/portfolio/{{ $portfolio->slug }}">{{ $portfolio->name }}</a>
                                </h1>
                                <p class="uk-text-justify">  {{ $portfolio->description }}</p>
                                <a href="/portfolio/{{ $portfolio->slug }}"
                                    class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                                <a target="_blank"
                                href="{{ $portfolio->link }}"
                                    class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi
                                    Website
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-2-5@m uk-flex uk-flex-middle">
                            <div>
                                <h1 style="color: black">
                                    <a style="color: black" href="/portfolio/{{ $portfolio->slug }}">{{ $portfolio->name }}</a>
                                </h1>
                                <p class="uk-text-justify">{{ $portfolio->description }}</p>
                                <a href="/portfolio/{{ $portfolio->slug }}"
                                    class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top uk-margin-small-right">Detail
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                                <a target="_blank"
                                href="{{ $portfolio->link }}"
                                    class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi
                                    Website
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="uk-width-3-5@m uk-flex uk-flex-middle uk-margin-large-bottom">
                            <div class="in-equity-video">
                                <img class="uk-border-rounded uk-width-1-1"
                                    src="{{ asset('storage/' . $portfolio->image) }}"
                                    data-src="{{ asset('storage/' . $portfolio->image) }}"
                                    alt="sample-images" width="433" height="255" data-uk-img>
                            </div>
                        </div>
                    </div>
                @endif
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



@endsection
