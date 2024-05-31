@extends('landing.layouts.layouts.app')
@section('title', 'Team')
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

@endsection

@section('seo')
    <meta name="title" content="Team - Profil Hummatech" />
    <meta name="og:image" content="{{ asset('mobilelogo.png') }}" />
    <meta name="twitter:image" content="{{ asset('mobilelogo.png') }}" />
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

    <meta name="description" content="Perusahaan Software House terbaik se-Jawa Timur" />
    <meta name="og:description" content="Perusahaan Software House terbaik se-Jawa Timur" />
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
            <div class="uk-width-3-4@m uk-text-center">
                <h4>
                    <span class="in-highlight uk-margin-small">
                        Tim Kami
                    </span>
                </h4>
                <h2>Bersatu Demi Kesuksesan: Introducing Tim Kami yang Berdedikasi dan Profesional</h2>
            </div>
        </div>
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m"
                    style="background-image: url('img/blockit/in-team-background-1.png'); will-change: background-position-y; background-position-y: calc(50% + 0px);" data-uk-parallax="bgy: -100">
                    <div class="uk-card-body">
                        <div class="uk-child-width-1-3@m uk-text-center uk-margin-small-bottom uk-grid" data-uk-grid>
                            @foreach (range(1,6) as $item)
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
        </div>

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
