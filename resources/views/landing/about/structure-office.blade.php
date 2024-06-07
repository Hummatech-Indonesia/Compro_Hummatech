@extends('landing.layouts.layouts.app')
@section('title' , 'Company Structure')

@section('seo')
<meta name="title" content="Struktur Perusahaan" />

<meta name="og:image" content="{{ asset('storage/'. $imageStructure->image) }}" />
<meta name="twitter:image" content="{{ asset('storage/'. $imageStructure->image) }}" />
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
      ]
    }
</script>

<meta name="description" content="PT Cakra Parama Indonesia menawarkan solusi outsourcing terbaik, termasuk penyediaan tenaga kerja, manajemen penggajian, dan dukungan logistik. Kami memastikan layanan yang efisien dan hemat biaya yang disesuaikan dengan kebutuhan bisnis Anda." />
<meta name="og:description" content="PT Cakra Parama Indonesia menawarkan solusi outsourcing terbaik, termasuk penyediaan tenaga kerja, manajemen penggajian, dan dukungan logistik. Kami memastikan layanan yang efisien dan hemat biaya yang disesuaikan dengan kebutuhan bisnis Anda." />
@endsection
@section('header')
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="" style="padding-top: 13px;padding-bottom: 16px;color:white">
                        <li ><a href="#" style="color: white">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
@endsection
@section('content')
<div class="uk-section in-content-3">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-1-1">
                <h4 class="uk-text-center "> <span class="in-highlight">Struktur Perusahaan</span></h4>
                <h2 class="uk-text-center">
                    Struktur perusahaan yang Membawa Inovasi dan Keberlanjutan
                </h2>
                @if ($imageStructure)
                <div class="uk-flex uk-flex-center">
                    <img src="{{ asset('storage/'.$imageStructure->image) }}" alt="" srcset="">
                </div>
                @else
                <div class="uk-flex uk-flex-center">
                    <img src="{{ asset('empty.png') }}" alt="" srcset="">
                </div>
                <h2 class="uk-text-center">Data masih kosong</h2>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
