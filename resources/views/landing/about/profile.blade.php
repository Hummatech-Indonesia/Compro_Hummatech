@extends('landing.layouts.layouts.app')
@section('title' , 'About Company')
@section('seo')
@section('seo')
@foreach ($profiles as $profile)
<meta name="title" content="{{ $profile->title }}" />
<meta name="description"
    content="{{ $profile->subtitle }}" />
<meta name="og:image" content="{{ asset('mobilelogo.png') }}" />
<meta name="twitter:image" content="{{ asset('mobilelogo.png') }}" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="website" />
<link rel="canonical" href="{{ url('/') }}" />
@endforeach
@endsection
@endsection

@section('style')

<style>
    .image-container {
        position: relative;
        width: 100%;
        padding-top: 100%;
    }

    .image-background,
    .image-foreground {
        position: absolute;
        top: 0;
        left: 0;
        width: 90%;
        height: 90%;
        object-fit: cover;
    }

    .image-background {
        z-index: 1;
        transform: translate(10%, -10%);
    }

    .image-foreground {
        z-index: 1;
    }

    @media (max-width: 768px) {
        .image-container {
            padding-top: 100%;
        }

        .image-background {
            width: 80%;
            height: 80%;
            transform: translate(10%, -10%);
        }

        .image-foreground {
            width: 80%;
            height: 80%;
        }
    }

    @media (max-width: 480px) {
        .image-container {
            padding-top: 100%;
        }

        .image-background {
            width: 70%;
            height: 70%;
            transform: translate(15%, -15%);
        }

        .image-foreground {
            width: 70%;
            height: 70%;
        }
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
                        <span>Profil</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="uk-section in-content-3 uk-background-contain uk-background-center" data-src="img/in-equity-2-bg.png" data-uk-img="" style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-2-bg.png&quot;);">
    <div class="uk-container">
        <div class="uk-grid uk-grid-stack uk-flex-middle" data-uk-grid>
            <div class="uk-width-3-5@m uk-first-column">
                <h3 class="uk-margin-remove">
                    <span class="in-highlight">
                        Profile Perusahaan
                    </span>
                </h3>
                <h1>PT Humma Teknologi Indonesia</h1>
                <p>
                    <span class="uk-text-warning">HUMMATECH</span> merupakan perusahaan yang bergerak di bidang teknologi informasi yang berdiri sejak 21 Mei 2013. Hummatech dinaungi oleh badan hukum
                    <span class="uk-text-warning">PT. HUMMA TEKNOLOGI INDONESIA</span> dan telah disahkan oleh KEMENKUMHAM Republik Indonesia Nomor AHU-0057079.AH.01.01.
                </p>
                <p>
                    Hummatech melayani jasa pengembangan perangkat lunak, baik berbasis desktop, web, dan mobile apps. Mitra kami meliputi perorangan, swasta, bahkan juga lembaga pemerintahan.
                </p>
                <p>
                    Kini Hummatech bertransformasi menjadi perusahaan yang mampu menjawab tantangan di era revolusi industri 4.0 dengan menciptakan produk berbasis integrated system berupa perangkat lunak berbasis web dan mobile, Internet of Things (IoT), Artificial Intelligence (AI), Game, dan Augmented Reality.
                </p>
                <p>
                    Hummatech juga telah melebarkan sayapnya, tidak hanya dikenal di Indonesia, tetapi juga dipercaya oleh mitra dari luar negeri, yaitu Belanda dalam mengembangan software dan integrated system.
                </p>
                <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-xlarge-bottom">Lihat Profil Lengkap
                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                </a>
            </div>
            <div class="uk-width-2-5@m uk-grid-margin uk-first-column">
                <div class="image-container">
                    <img src="{{ asset('assets/images/circle_black.png') }}" class="image-background" alt="">
                    <img src="{{ asset('logo cakra.png') }}" class="image-foreground" alt="">
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
