@extends('landing.layouts.layouts.app')
@section('title', 'Mitra')

@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

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
            /* padding-right: 50px; */
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

        .pagination {
            display: flex !important;
            gap: .5rem;
        }

        .pagination .page-item {
            margin: 0 !important;
        }

        .pagination .page-item .page-link {
            padding: .75rem 1rem !important;
            border-radius: 8px;
            margin: 0;
        }
    </style>
@endsection

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
@endsection

@section('header')
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li href="/">Mitra</li>
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
    @forelse ($mitraCategories as $mitraCategory)
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-5@m uk-text-center">
                            <h1 class="uk-margin-remove-bottom">
                                <span class="in-highlight">
                                    Mitra Kami
                                </span>
                            </h1>
                            <h4 class=" uk-margin-small-top">{{ $mitraCategory->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-section uk-padding-remove-vertical in-equity-10">
                <div class="uk-container">
                    <div class="uk-grid uk-grid-stack" data-uk-grid>
                        <div class="uk-width-1-1 uk-first-column">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <div class="uk-grid-divider uk-grid uk-grid-stack" data-uk-grid>
                                    <div class="uk-width-expand@m uk-grid-margin uk-first-column">
                                        <div
                                            class="uk-grid-medium uk-child-width-1-6@m uk-child-width-1-2@s uk-text-center in-client-logo-3 uk-grid uk-grid-stack">
                                            @forelse ($mitraCategory->collab as $collab)
                                                <div class="uk-tile uk-tile-default uk-first-column uk-flex uk-flex-center">
                                                    <img class="uk-margin-remove"
                                                        src="{{ asset('storage/' . $collab->image) }}" alt="equity-press"
                                                        width="170" height="68">
                                                    <p class="uk-text-center">
                                                        {{ $collab->name }}
                                                    </p>
                                                </div>
                                            @empty
                                                <h4 class="text-center text-dark" style="font-weight:600">
                                                    Belum ada Mitra
                                                </h4>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h4 class="text-center text-dark" style="font-weight:600">
            Belum ada Mitra
        </h4>
    @endforelse


@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var delay = 500;
            $('[class^="wow fadeInRight"]').each(function(index) {
                $(this).attr('data-wow-delay', delay + 'ms');
                delay += 300;
            });
        });
    </script>
@endsection
