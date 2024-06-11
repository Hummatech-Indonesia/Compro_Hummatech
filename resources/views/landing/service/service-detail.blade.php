@extends('landing.layouts.layouts.app')
@section('title', $slugs->name)
@section('seo')
    <meta name="publisher" content="hummatech.com" />
    <meta name="keywords" content="Hummatech,Layanan Hummatech,{{ $slugs->name }}," />
    <meta name="description" itemprop="description"
        content="{!! strip_tags($slugs->description)!!}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dailysocial" />
    <meta name="twitter:creator" content="@dailysocial" />
    <meta name="twitter:url"
        content="/services/{{ $slugs->slug }}" />
    <meta name="twitter:title"
        content="{{ $slugs->name }} - Layanan Hummatech" />
    <meta name="twitter:description"
        content="{!! strip_tags($slugs->description)!!}" />
    <meta name="twitter:image"
        content="{{ asset('storage/' . $slugs->image) }}" />
    <meta property="og:title"
        content="{{ $slugs->name }}" />
    <meta property="og:description"
        content="{!! strip_tags($slugs->description)!!}" />
    <meta property="og:type" content="website" />
    <meta property="og:url"
        content="/services/{{ $slugs->slug }}" />
    <meta property="og:image"
        content="{{ asset('storage/' . $slugs->image) }}" />
@endsection
@section('header')
<!-- header start -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li><a href="/">Beranda</a></li>
                    <li><span>Layanan</span></li>
                    <li><span class="uk-text-capitalize">{{ $slugs->name }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- header end -->
@endsection

@section('style')
<style>
.active-card {
    background-color: #D7AC53;
    color: #ffffff;
}

.active-card .black-color i {
    color: #000000;
}

</style>
@endsection

@section('content')
<main data-title="blog">
    <!-- blog content begin -->
    <div class="uk-section uk-margin-small-top">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid="">
                <div class="uk-width-2-3@m uk-first-column">
                    {{-- service start --}}
                    <div class="in-blog-1 uk-grid uk-grid-stack" data-uk-grid="">
                        <div class="in-stretch uk-first-column">
                            <img src="{{ asset('storage/' . $slugs->image) }}">
                            <div class="">
                                <h3>
                                    <h3>{{ $slugs->name }}</h3>
                                </h3>
                                <p>{!! $slugs->description !!}</p>
                                @if ($slugs->link)
                                    <a href="{{ $slugs->link }}" target="_blank" class="uk-button uk-button-primary uk-border-rounded"
                                        href="">Kunjungi website
                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- service end --}}

                    {{-- products start --}}
                    @if (!$products->isEmpty())
                    <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                        <h4 class="uk-text-left">
                            <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">produk yang dihasilkan</span>
                        </h4>
                        @forelse ($products as $key => $product)
                            <div class="uk-grid uk-grid-large uk-flex uk-flex-top" data-uk-grid>
                                <div class="uk-width-2-5@m uk-flex uk-flex-top uk-margin-small-bottom {{ $key % 2 == 1 ? 'uk-flex-last@m' : '' }}">
                                    <div class="in-equity-video">
                                        <img class="uk-border-rounded uk-width-1-1" src="{{ asset('storage/' . $product->image) }}" data-src="{{ asset('storage/' . $product->image) }}" alt="sample-images" width="433" height="255" data-uk-img>
                                    </div>
                                </div>
                                <div class="uk-width-3-5@m uk-flex uk-flex-top {{ $key % 2 == 1 ? 'uk-flex-first@m': '' }}">
                                    <div>
                                        <h3 class="uk-margin-remove">{{ $product->name }}</h3>
                                        <p class="uk-margin-remove">{{ $product->description }}</p>
                                        <a class="uk-padding-small uk-button uk-button-text" href="/product/{{ $product->slug }}">Lihat Detail<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        <a href="{{ $product->link }}" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                    @endif

                    {{-- products end --}}

                    {{-- terms and conditions start --}}

                    @if (!$products->isEmpty())
                    <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                        <h4 class="uk-text-left">
                            <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Syarat dan Ketentuan</span>
                        </h4>
                        @forelse ($termsconditions as $key => $termscondition)
                        <div class="uk-grid uk-grid-large uk-flex uk-flex-top" data-uk-grid>
                            <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                <div class="uk-width-auto">
                                <div class="in-icon-wrap primary-color">
                                    <i class="">0{{ ++$key }}</i>
                                </div>
                                </div>
                                <div class="uk-width-expand">
                                    <p>{{$termscondition->termcondition}}</p>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>

                    @endif
                    {{-- terms and conditions end --}}

                    {{-- training list start --}}

                    {{-- <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                        <h4 class="uk-text-left">
                            <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Daftar Pelatihan</span>
                        </h4>
                        <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                            @foreach (range(1, 2) as $item)
                            <div>
                                <div class="uk-card uk-card-body uk-border-rounded uk-card-default uk-padding-small">
                                    <img class="uk-border-rounded uk-width-1-1 uk-card-title" src="{{ asset('assets_landing/img/blockit/in-gallery-image-5.jpg') }}" data-src="{{ asset('assets_landing/img/blockit/in-gallery-image-5.jpg') }}" width="340" height="400" data-uk-img="">
                                    <h5 class="uk-margin-small">Inflation and sanctions weaken ruble against the dollar</h5>
                                    <p class="uk-text-small uk-text-muted uk-margin-remove">Lorem ipsum dolor sit amet consectetur. Lacinia nulla tortor interdum mauris in interdum risus. Laoreet arcu neque blandit vulputate auctor diam.</p>
                                    <div class="uk-flex uk-flex-middle uk-flex-between">
                                        <a class="uk-padding-small uk-button uk-button-text" href="/services/magang-pkl/training">Lihat Detail<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Ajukan proposal
                                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> --}}

                    {{-- training list end --}}

                    {{-- mitra start --}}
                    @if (!$servicemitras->isEmpty())
                        <div class="uk-container uk-margin-large-top uk-margin-large-bottom in-equity-18">
                            <h4 class="uk-text-left">
                                <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Mitra Kami</span>
                            </h4>
                            <div class="uk-card uk-card-body uk-border-rounded">
                                <div uk-slider="autoplay: true; autoplay-interval: 2000">
                                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                        <div class="uk-slider-items uk-grid-collapse uk-child-width-2-6@s uk-child-width-1-4@m uk-text-center in-client-logo-6 uk-grid"
                                            data-uk-grid>
                                            @forelse ($servicemitras as $mitra)
                                                <div class="uk-tile" style="background-color: transparent">
                                                    <img class="uk-margin-remove" src="{{ asset('storage/' . $mitra->mitra->image) }}" alt="mitra" width="167" height="55">
                                                </div>
                                            @empty

                                            @endforelse

                                        </div>
                                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
                                    </div>
                                    {{-- <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul> --}}
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- mitra end --}}

                    {{-- procedure start --}}
                    @if (!$procedures->isEmpty())
                        <div class="uk-container uk-margin-large-top uk-margin-large-bottom in-equity-9">
                            <h4 class="uk-text-left">
                                <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Prosedur</span>
                            </h4>
                            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center in-register" data-uk-grid="">
                                <div class="uk-width-1-1 in-h-line uk-first-column">
                                    <span class="uk-padding"></span>
                                </div>
                                @forelse ($procedures as $index => $procedure)
                                    <div class="uk-grid-margin uk-first-column">
                                        <span class="in-icon-wrap circle">{{++$index}}</span>
                                        <p>{{ $procedure->description }}</p>
                                    </div>
                                @empty

                                @endforelse
                            </div>
                        </div>
                    @endif
                    {{-- procedure end --}}

                    {{-- gallery start --}}
                    @if (!$galeries->isEmpty())
                        <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                            <h4 class="uk-text-left">
                                <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Galeri</span>
                            </h4>
                            <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                                @forelse ($galeries as $galery)
                                <div>
                                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('storage/' . $galery->image) }}" data-src="{{ asset('storage/' . $galery->image) }}" width="340" height="400" data-uk-img="">
                                </div>
                                @empty

                                @endforelse
                            </div>
                        </div>
                    @endif
                    {{-- gallery end --}}
                </div>
                <div class="uk-width-expand@m">
                    <h4 class="uk-text-left">
                        <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">daftar layanan</span>
                    </h4>
                    <!-- widget lates begin -->
                    @forelse ($services as $service)
                    <aside class="uk-margin-small-bottom">
                        <a href="/services/{{ $service->slug }}" class="uk-text-decoration-none">
                            <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-border-rounded {{ request()->is('services/' . $service->slug) ? 'active-card' : '' }}">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                        <div class="in-icon-wrap black-color">
                                            <i class="fas fa-users fa-lg"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>{{ $service->name }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </aside>


                    @empty

                    @endforelse
                    <!-- widget lates end -->
                    <!-- widget tags begin -->
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Bantuan</h5>
                            <div class="uk-margin-top widget-tag">
                                <b>Perlu bantuan?</b>
                                <p class="uk-margin-remove">Kami siap melayani 24 jam, silahkan hubungi layanan call center kami melalui:</p>
                                <ul type="none" class="uk-padding-remove-left">
                                    <li>
                                        @if (isset($profile) && $profile->type != null)
                                    @php
                                        $cleanPhone = str_replace(['+', '-', ' '], '', $profile->phone);

                                        if (substr($cleanPhone, 0, 2) === '62') {
                                            $phoneNumber = '0' . substr($cleanPhone, 2);
                                            $waNumber = $cleanPhone;
                                        } elseif (substr($cleanPhone, 0, 1) === '0') {
                                            $waNumber = '62' . substr($cleanPhone, 1);
                                            $phoneNumber = $cleanPhone;
                                        } else {
                                            $phoneNumber = $cleanPhone;
                                        }
                                    @endphp
                                    <p class="mb-0 pb-0 uk-text-emphasis">{{ $profile->type == 'wa' ? 'WhatsApp: ' : 'Phone:' }}
                                        <a href="{{ $profile->type == 'wa' ? 'https://wa.me/' . $waNumber : 'tel: ' . $phoneNumber }}" class="uk-text-emphasis"
                                            target="_blank">{{ $phoneNumber }}</a>
                                    </p>
                                @else
                                    <p class="mb-0 pb-0 ">Phone:
                                        <a href="https://wa.me/6285176777785" class="uk-text-emphasis text-decpration-none">085176777785</a>
                                    </p>
                                @endif
                                    </li>
                                    <li>Email: <b>
                                        @isset($profile)
                                            <a href="mailto:{{ $profile->email }}" class="uk-text-emphasis">{{ $profile->email }}</a>
                                        @else
                                            <a href="mailto:info@hummatech.com" class="uk-text-emphasis">info@hummatech.com</a>
                                        @endisset
                                    </b></li>
                                    @if ($instagram)
                                         <li>DM Instagram:
                                            <b><a href="{{ $instagram->link }}" class="uk-text-emphasis"
                                                target="_blank">{{ '@' . Illuminate\Support\Str::after($instagram->link, 'instagram.com/') }}</a></b>
                                        </li>
                                    @endif
                                </ul>
                                <p class="uk-margin-remove">Alamat:
                                    @isset($profile)
                                        {{ $profile->address }}
                                    @else
                                        Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang
                                        Ploso, Kabupaten Malang, Jawa Timur 65152.
                                    @endisset
                                </p>
                            </div>
                        </div>
                    </aside>
                    <!-- widget tags end -->
                </div>
            </div>
        </div>
    </div>
    <!-- blog content end -->
</main>
@endsection
@section('script')
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
          "name": "Layanan",
          "item": "{{ url('/service') }}"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": $slugs->name,
          "item": "{{ url('/'. $slugs->name) }}"
        },
      ]
    }
</script>
@endsection
