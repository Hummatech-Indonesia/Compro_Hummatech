@extends('landing.layouts.layouts.app')
@section('title', 'Vision & Mision')
@section('seo')
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

    <meta name="og:image" content="{{ asset('icon.png') }}" />
    <meta name="twitter:image" content="{{ asset('icon.png') }}" />
    <meta name="title"
        content="Visi Misi
        @isset($profile)
        - {{ $profile->title }}
@else
Company
@endisset" />
    <meta name="description" content="PT Cakra Parama Indonesia menawarkan solusi outsourcing terbaik, termasuk penyediaan tenaga kerja, manajemen penggajian, dan dukungan logistik. Kami memastikan layanan yang efisien dan hemat biaya yang disesuaikan dengan kebutuhan bisnis Anda." />
    <meta name="og:description" content="PT Cakra Parama Indonesia menawarkan solusi outsourcing terbaik, termasuk penyediaan tenaga kerja, manajemen penggajian, dan dukungan logistik. Kami memastikan layanan yang efisien dan hemat biaya yang disesuaikan dengan kebutuhan bisnis Anda." />
    <meta property="og:url" content="{{ url('https://compro.mijurnal.com/about/vision-mision') }}" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="{{ url('https://compro.mijurnal.com/about/vision-mision') }}" />
@endsection

@section('header')
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="" style="padding-top: 13px;padding-bottom: 16px;color:white">
                        <li><a href="#" style="color: white">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
@endsection
@section('content')
    <div class="uk-section uk-padding-remove in-equity-9">
        <div class="uk-container uk-margin-medium-top uk-margin-bottom">
            <div class="uk-flex uk-flex-center">
                <div class="uk-width-1-2">
                    <h4 class="uk-text-center">
                        <span class="in-highlight ">Visi Misi</span>
                    </h4>
                    <h3 class="uk-text-center uk-text-uppercase">Mewujudkan Visi Kami Melalui Misi yang Berkelanjutan dan
                        Tindakan Nyata</h3>
                </div>
            </div>
            {{-- <h4 class="uk-text-center "> <span class="in-highlight">Visi Misi</span></h4>
        <h2 class="uk-text-center">
            Mewujudkan Visi Kami Melalui Misi yang Berkelanjutan dan Tindakan Nyata
        </h2> --}}
            @forelse ($visionMisions as $visionMission)
                <div class="uk-grid-medium uk-child-width-1-2@m uk-grid uk-padding-large uk-padding-remove-left uk-padding-remove-right"
                    data-uk-grid="">
                    <div class="uk-first-column">
                        <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right"
                            data-src="img/in-equity-9-bg-1.png" data-uk-img=""
                            style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-9-bg-1.png&quot;);">
                            <div class="uk-flex uk-flex-middle">
                                <div>
                                    <h4 class="uk-margin-remove">Visi</h4>
                                </div>
                            </div>
                            <p class="uk-margin-remove uk-width-3-4">{{ $visionMission->vision }}</p>
                        </div>
                    </div>
                    @forelse ($missions as $mission)
                        <div>
                            <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right"
                                data-src="img/in-equity-9-bg-2.png" data-uk-img=""
                                style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-9-bg-2.png&quot;);">
                                <div class="uk-flex uk-flex-middle">
                                    <div>
                                        <h4 class="uk-margin-remove">Misi</h4>
                                    </div>
                                </div>
                                <p class="uk-margin-remove uk-width-3-4">{{ $mission->mission }}</p>
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
                @empty
                    <div class="uk-flex uk-flex-center">
                        <img src="{{ asset('empty.png') }}" alt="" srcset="">
                    </div>
                    <h2 class="uk-text-center">
                        No data
                    </h2>
                </div>
            @endforelse
            {{-- <div class="uk-grid-medium uk-child-width-1-2@m" data-uk-grid>
            <div>
                <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right" data-src="assets_landing/img/in-equity-9-bg-1.png" data-uk-img>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-right">
                            <i class="fas fa-landmark fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="uk-margin-remove">Visi</h4>
                        </div>
                    </div>
                    <p class="uk-margin-top uk-width-3-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right" data-src="assets_landing/img/in-equity-9-bg-2.png" data-uk-img>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-right">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="uk-margin-remove">Misi</h4>
                        </div>
                    </div>
                    <p class="uk-margin-top uk-width-3-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div> --}}
        </div>
    </div>
@endsection
