@extends('landing.layouts.layouts.app')
@section('title', 'Contact')
@section('seo')
    <meta name="title" content="Hubungi Kami - Layanan Hummatech" />
    <meta name="og:image" content="{{ asset('mobilelogo.png') }}" />
    <meta name="description"
        content="Hummatech adalah perusahaan software development terbaik di Malang. Kami menyediakan solusi perangkat lunak yang inovatif dan berkualitas tinggi." />
    <meta name="twitter:image" content="{{ asset('mobilelogo.png') }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="{{ url('/') }}" />
@endsection
@section('style')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #maps1 {
            height: 400px;
        }
    </style>

    <style>
        .popup-content {
            margin-top: 10px;
        }
    </style>
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
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center in-contact-6">
            <div class="uk-width-1-1">

                @if ($branches->count() > 0)
                <!-- Star Google Maps ============================================= -->
                <div class="maps-area">
                    <div class="google-maps">
                        <div id="maps1"></div>
                    </div>
                </div>
                <!-- End Google Maps -->
                @endif
            </div>

            <div class="uk-width-3-5@m">
                <hr class="uk-margin-medium">
                <p class="uk-margin-remove-bottom uk-text-lead uk-text-muted uk-text-center">Punya Pertanyaan?</p>
                <h1 class="uk-margin-small-top uk-text-center">
                    <span class="in-highlight">
                        Hubungi Kami
                    </span>
                </h1>
            </div>

            <div class="uk-section">
                <div class="uk-container uk-margin-top uk-margin-medium-bottom">
                    <div class="uk-grid uk-child-width-1-2@m uk-grid-stack" data-uk-grid>
                        <div class="uk-margin-medium-top " data-uk-grid>
                            <div class="uk-width-1-1">
                                <h5 class="uk-margin-remove-bottom">
                                    <i class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>
                                    Alamat
                                </h5>
                                <p class="uk-margin-small-top uk-text-left">
                                    @isset($profile)
                                        {{ $profile->address }}
                                    @else
                                        Juanda Regency D 22, Sidoarjo
                                    @endisset
                                </p>
                            </div>
                            <div class="uk-width-1-1">
                                <h5 class="uk-margin-remove-bottom">
                                    <i class="fas fa-envelope fa-sm uk-margin-small-right"></i>
                                    Email
                                </h5>
                                @isset($profile)
                                    <p class="uk-margin-small-top uk-text-left uk-margin-remove-bottom">{{ $profile->email }}</p>
                                @else
                                    <p class="uk-margin-small-top uk-text-left uk-margin-remove-bottom">cakra.paramaindonesia@gmail.com</p>
                                @endisset
                                <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top uk-text-left">for public inquiries</p>
                            </div>
                            <div class="uk-width-1-1">
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
                                    <h5 class="uk-margin-remove-bottom">
                                        <i class="fas fa-phone-alt fa-sm uk-margin-small-right"></i>
                                        {{ $profile->type == 'wa' ? 'WhatsApp: ' : 'Phone:' }}
                                    </h5>
                                    <a class="uk-margin-small-top uk-text-left uk-margin-remove-bottom" href="{{ $profile->type == 'wa' ? 'https://wa.me/' . $waNumber : 'tel: ' . $phoneNumber }}" class="uk-text-emphasis"
                                    target="_blank">{{ $phoneNumber }}</a>
                                @else
                                    <p class="mb-0 pb-0 ">Phone:
                                        <a href="https://wa.me/6285176777785" class="uk-text-emphasis text-decpration-none">085176777785</a>
                                    </p>
                                @endif
                                <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top uk-text-left">Mon - Fri, 9am - 5pm</p>
                            </div>
                        </div>
                        <div>
                            <form action="{{ route('contact.send') }}" method="post" class="uk-form uk-grid-small uk-margin-medium-top uk-grid uk-grid-stack" data-uk-grid>
                                @csrf
                                <div class="uk-width-3-5@s uk-inline">
                                    <span class="uk-form-icon fas fa-user fa-sm"></span>
                                    <input type="text" class="uk-input uk-border-rounded" id="name" name="name" placeholder="Nama lengkap">
                                </div>
                                <div class="uk-width-2-5@s uk-inline">
                                    <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                    <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Alamat email">
                                </div>
                                <div class="uk-width-1-1 uk-inline">
                                    <span class="uk-form-icon fas fa-pen fa-sm"></span>
                                    <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Judul">
                                </div>
                                <div class="uk-width-1-1">
                                    <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Pesan"></textarea>
                                </div>
                                <div class="uk-width-1-1">
                                    <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" type="submit" name="submit">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection


@section('script')
    <style>
        .leaflet-marker-icon {
            background-image: url('{{ asset('marker1.png') }}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            object-fit:contain;
            width: 50px;
            height: 50px;
        }
    </style>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>

    @if ($branches->count() > 0)
        <script>
            var map = L.map('maps1');

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            }).addTo(map);

            var markers = [];
            var bounds = L.latLngBounds();

            @foreach ($branches as $branch)
                var marker = L.marker([{{ $branch->latitude }}, {{ $branch->lotitude }}]).addTo(map);
                marker.setIcon(L.icon({
                    iconUrl: '{{ asset('marker1.png') }}',
                    iconSize: [60, 60],
                    iconAnchor: [20, 20]
                }));
                marker.bindPopup("<div class='popup-content'><b>{{ $branch->name }}</b><br>{{ $branch->address }}</div>");
                markers.push(marker);
                bounds.extend(marker.getLatLng());

                @if ($branch->type === 'center')
                    map.setView(marker.getLatLng(), 12);
                    marker.openPopup();
                @endif
            @endforeach

            map.fitBounds(bounds);
        </script>
    @endif

    {{-- For Cloudflare Turnstile --}}
    <script>
        window.onloadTurnstileCallback = function() {
            turnstile.render('#cf-turnstile', {
                sitekey: "{{ config('turnstile.site_key') }}",
            });
        };
    </script>
@endsection
