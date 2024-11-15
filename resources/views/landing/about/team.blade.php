@extends('landing.layouts.layouts.app')
@section('title', 'Team')
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <style>
        .team-member {
            position: relative;
            text-align: center;
        }

        .icon-stack {
            position: absolute;
            top: 60%;
            left: 40%;
            transform: translateX(-50%);
        }

        .icon-stack a {
            display: inline-block;
            margin-right: 5px;
        }
    </style>
@endsection

@section('seo')
    <meta name="title" content="Team - Profil" />
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
                    <ul class="uk-breadcrumb">
                        <li href="/">Beranda</li>
                        <li href="#">Tentang</li>
                        <li>
                            <span>Tim</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m uk-text-center uk-margin-large-bottom">
                    <h4>
                        <span class="in-highlight uk-margin-small">
                            Tim Kami
                        </span>
                    </h4>
                    <h2>Bersatu Demi Kesuksesan: Introducing Tim Kami yang Berdedikasi dan Profesional</h2>
                </div>
            </div>
        </div>
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m uk-text-center uk-margin-large-bottom">
                        <div class="uk-child-width-1-3@m uk-text-center uk-margin-small-bottom uk-grid" data-uk-grid>
                            @forelse ($teams as $team)
                                <div class="team-member">
                                    <img src="{{ url(Storage::url($team->image)) }}" alt="{{ $team->name }}"
                                        width="150" height="150">
                                    <h4 class="uk-margin-small-top uk-margin-remove-bottom">{{ $team->name }}</h4>
                                    </h4>
                                    <span
                                        class="uk-label uk-text-small uk-border-rounded uk-margin-small-top uk-margin-small-bottom">{{ $team->position->name }}</span>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            @if (count($teams) == 0)
                <div class="uk-flex uk-flex-center">
                    <img src="{{ asset('empty.png') }}" alt="" srcset="">
                </div>
                <h2 class="uk-text-center">
                    No data
                </h2>
            @endif
            {{-- <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m"
                    style="background-image: url('img/blockit/in-team-background-1.png'); will-change: background-position-y; background-position-y: calc(50% + 0px);" data-uk-parallax="bgy: -100">
                    <div class="uk-card-body">
                        <div class="uk-child-width-1-3@m uk-text-center uk-margin-small-bottom uk-grid" data-uk-grid>
                            @foreach (range(1, 6) as $item)
                            <div>
                                <img src="{{ asset('assets_landing/img/blockit/in-team-1.png') }}" alt="image-team" width="200" height="200">
                                <h4 class="uk-margin-small-top uk-margin-remove-bottom">Cynthia Dixon</h4>
                                <span class="uk-label uk-text-small uk-border-rounded uk-margin-small-top uk-margin-small-bottom">Chief Executive Officer</span>
                                <p>Omnis voluptas assumenda est dolor repellendus autem debit officiis</p>
                                <div>
                                    <a href="#" class="uk-link-muted">
                                        <i class="fab fa-facebook-f uk-margin-small-right"></i>
                                    </a>
                                    <a href="#" class="uk-link-muted">
                                        <i class="fab fa-twitter uk-margin-small-right"></i>
                                    </a>
                                    <a href="#" class="uk-link-muted">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        </div>
    </div>
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
