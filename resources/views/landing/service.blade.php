@extends('landing.layouts.layouts.app')
@section('title', 'Layanan - Cakra')
{{-- @section('seo')
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
@endsection --}}
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
        {{-- {
          "@type": "ListItem",
          "position": 3,
          "name": $slugs->name,
          "item": "{{ url('/'. $slugs->name) }}"
        }, --}}
      ]
    }
</script>
@section('header')
<!-- header start -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li><a href="/">Beranda</a></li>
                    <li><span>Layanan</span></li>
                    {{-- <li><span class="uk-text-capitalize">{{ $slugs->name }}</span></li> --}}
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
                    @foreach ($services as $service)
                        <div class="in-blog-1 uk-grid uk-grid-stack uk-margin-xlarge-bottom" data-uk-grid="">
                            <div class="in-stretch uk-first-column">
                                <img src="{{ asset('storage/' . $service->image) }}" style="width: 500px">
                                <div class="">
                                    <h3>
                                        <h3>{{ $service->name }}</h3>
                                    </h3>
                                    <p>{!! $service->description !!}</p>
                                    <a href="/services/{{ $service->slug }}" class="uk-button uk-button-text uk-float-left">
                                        Lihat Detail
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                    {{-- @if ($service->link)
                                        <a href="{{ $service->link }}" target="_blank" class="uk-button uk-button-primary uk-border-rounded"
                                            href="">Kunjungi website
                                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- service end --}}

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
                    {{-- <aside class="uk-margin-medium-bottom">
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
                    </aside> --}}
                    <!-- widget tags end -->
                </div>
            </div>
        </div>
    </div>
    <!-- blog content end -->
</main>
@endsection
