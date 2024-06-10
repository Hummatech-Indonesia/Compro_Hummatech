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
                    <ul class="uk-breadcrumb-custom">
                        <li href="/">Home</li>
                        <li>
                            <span>Lowongan</span>
                        </li>
                        <li>
                            <span>{{ $jobVacancy->name }}</span>
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
                            Lowongan Pekerjaan
                        </span>
                    </h1>
                </div>
            </div>
        </div>
            <div class="uk-grid uk-grid-stack">
                <div class="uk-width-expand@m uk-grid-margin uk-first-column">
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-text-uppercase uk-text-left">Rincian</h5>
                            <ul class="uk-list widget-categories uk-margin-remove">
                                <li class="uk-margin-remove">
                                    <h6 class="uk-text-left uk-margin-remove">Gaji</h6>
                                    <p class="uk-text-left uk-margin-remove">Rp. {{ number_format($jobVacancy->salary, 0, ',', '.') }}</p>
                                </li>
                            </ul>
                            <div class="uk-width-1-1@m uk-text-center uk-margin-medium-top">
                                <a href="https://wa.me/{{ $jobVacancy->whatsapp }}" class="uk-button uk-button-primary uk-border-rounded" target="_blank" style="background-color:#d7ac53; color:white">
                                    Lamar <i class="fas fa-file uk-margin-small-left"></i>
                                </a>
                            </div>

                        </div>
                    </aside>
                </div>
                <div class="uk-width-2-3@m uk-first-column">
                    <h3 class="uk-margin-remove">{{$jobVacancy->name}}</h3>
                    <hr>
                    <h5>Deskripsi</h5>
                    <p class="uk-text-lead uk-text-muted">
                        {!! $jobVacancy->description !!}
                    </p>
                    <h5>Kualifikasi</h5>
                    <p class="uk-text-lead uk-text-muted">
                        {!! $jobVacancy->qualification !!}
                    </p>
                </div>
            </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container">

    </div>
</div>
@endsection
