@extends('landing.layouts.layouts.app')
@section('title', 'Job Vacancy')
@section('style')
    <style>
        .number-above-image {
            position: relative;
            display: inline-block;
            width: 120px;
            height: 130px;
            margin-bottom: 30px;
        }

        .number-above-image h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
        }

        .number-above-image img {
            width: 100%;
            height: 100%;
        }

        .uk-card {
            padding: 20px;
            text-align: center;
        }
    </style>
@endsection

@section('seo')
    <meta name="title" content="Lowongan - Layanan Hummatech" />
    <meta name="og:image" content="{{ asset('mobilelogo.png') }}" />
    <meta name="description"
        content="Hummatech adalah perusahaan software development terbaik di Malang. Kami menyediakan solusi perangkat lunak yang inovatif dan berkualitas tinggi." />
    <meta name="twitter:image" content="{{ asset('mobilelogo.png') }}" />
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
          "name": "Lowongan",
          "item": "{{ url('/data/lowongan') }}"
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
                        <li href="/">Hubungi</li>
                        <li>
                            <span>Hubungi</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="uk-section ">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m uk-text-center">
                        <h1 class="uk-margin-remove-bottom">
                            <span class="in-highlight">
                                Lowongan
                            </span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <table class="uk-table uk-table-middle uk-table-divider uk-table-responsive">
                        <tbody>
                            <tr>
                                <td class="uk-width-1-3@m">
                                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                        <div class="uk-width-expand">
                                            <h3>Staf Marketing</h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="uk-width-1-5@m uk-text-right@m">
                                    <a href="#"
                                        class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">
                                        Lamar
                                        <i class="fas fa-file uk-margin-small-left"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-width-1-3@m">
                                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                        <div class="uk-width-expand">
                                            <h3>Resepsionis</h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="uk-width-1-5@m uk-text-right@m">
                                    <a href="#"
                                        class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">
                                        Lamar
                                        <i class="fas fa-file uk-margin-small-left"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section in-equity-4">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m uk-text-center">
                        <h1 class="uk-margin-remove-bottom">
                            <span class="in-highlight">
                                Alur Kerja
                            </span>
                        </h1>
                        <h4>Kendalikan Alur Kerja Anda: Strategi Efektif untuk Produktivitas dan Efisiensi</h4>
                    </div>
                </div>
            </div>
            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-grid"
                data-uk-grid>
                @forelse ($workflows as $index=>$workflow)
                    <div>
                        <div
                            class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium uk-text-center">
                            <div class="number-above-image">
                                <h1 class="uk-margin-medium-top">{{ $index + 1 }}</h1>
                                <img class="uk-align-center" src="{{ asset('assets_landing/img/in-equity-7-icon-1.png') }}"
                                    data-src="{{ asset('assets_landing/img/in-equity-7-icon-1.png') }}" alt="icon-1"
                                    data-uk-img>
                            </div>
                            <h4 class="uk-margin-remove">{{ $workflow->name }}</h4>
                            <p class="uk-margin-small-top uk-margin-small-bottom">{{ $workflow->description }}</p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            @if ($workflows)

            @else

            <div class="uk-flex uk-flex-center">
                <img src="{{ asset('empty.png') }}" alt="" srcset="">
            </div>
            <h2 class="uk-text-center">
                No data
            </h2>
            @endif

        </div>
    </div>
@endsection
