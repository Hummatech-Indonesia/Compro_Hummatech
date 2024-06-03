@extends('landing.layouts.layouts.app')
@section('header')
<!-- header start -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li><a href="/">Beranda</a></li>
                    <li><span>Layanan</span></li>
                    <li><span class="uk-text-capitalize">magang pkl</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- header end -->
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
                            <img src="{{ asset('assets/images/banner/2.jpg') }}">
                            <div class="">
                                <h3>
                                    <h3>Magang PKL</h3>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut. Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut</p>
                                <a class="uk-button uk-button-primary uk-border-rounded" href="#">
                                    Kunjungi website
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                            </div>                           
                        </div>
                    </div>
                    {{-- service end --}}

                    {{-- products start --}}
                    <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                        <h4 class="uk-text-left">
                            <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">produk yang dihasilkan</span>
                        </h4>
                        @foreach (range(1,2) as $key => $item)
                            <div class="uk-grid uk-grid-large uk-flex uk-flex-top" data-uk-grid>
                                <div class="uk-width-2-5@m uk-flex uk-flex-top uk-margin-small-bottom {{ $key % 2 == 1 ? 'uk-flex-last@m' : '' }}">
                                    <div class="in-equity-video">
                                        <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets/images/banner/3.jpg') }}" data-src="{{ asset('assets/images/banner/3.jpg') }}" alt="sample-images" width="433" height="255" data-uk-img>
                                    </div>
                                </div>
                                <div class="uk-width-3-5@m uk-flex uk-flex-top {{ $key % 2 == 1 ? 'uk-flex-first@m': '' }}">
                                    <div>
                                        <h3 class="uk-margin-remove">Milink.id</h3>
                                        <p class="uk-margin-remove">Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. mattis quisque ut. Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. mattis quisque ut Baca Selengkapnya...</p>
                                        <a class="uk-padding-small uk-button uk-button-text" href="#">Lihat Detail<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Kunjungi Website
                                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- products end --}}

                    {{-- terms and conditions start --}}
                    <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                        <h4 class="uk-text-left">
                            <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Syarat dan Ketentuan</span>
                        </h4>
                        @foreach (range(1, 2) as $key => $item)
                            <div class="uk-grid uk-grid-large uk-flex uk-flex-top" data-uk-grid>
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                    <div class="in-icon-wrap primary-color">
                                        <i class="">0{{ ++$key }}</i>
                                    </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <p>Condimentum vitae sapien pellentesque habitant. Lectus sit amet est placerat. Vitae proin sagittis nisl rhoncus mattis rhoncus urna
                                            neque. General Disclaimer</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- terms and conditions end --}}

                    {{-- training list start --}}
                    <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
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
                    </div>
                    {{-- training list end --}}

                    {{-- mitra start --}}
                    <div class="uk-container uk-margin-large-top uk-margin-large-bottom in-equity-18">
                        <h4 class="uk-text-left">
                            <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Mitra Kami</span>
                        </h4>
                        <div class="uk-card uk-card-body uk-border-rounded">
                            <div uk-slider="autoplay: true; autoplay-interval: 2000">
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                    <div class="uk-slider-items uk-grid-collapse uk-child-width-2-6@s uk-child-width-1-4@m uk-text-center in-client-logo-6 uk-grid"
                                        data-uk-grid>
                                       @foreach (range(1,10) as $item)
                                            <div class="uk-tile" style="background-color: transparent">
                                                <img class="uk-margin-remove" src="{{ asset('assets_landing/img/mitra-1.png') }}" alt="mitra" width="167" height="55">
                                            </div>
                                       @endforeach
                                    </div>
                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                                {{-- <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul> --}}
                            </div>
                        </div>
                    </div>
                    {{-- mitra end --}}

                    {{-- procedure start --}}
                    <div class="uk-container uk-margin-large-top uk-margin-large-bottom in-equity-9">
                        <h4 class="uk-text-left">
                            <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Prosedur</span>
                        </h4>
                        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center in-register" data-uk-grid="">
                            <div class="uk-width-1-1 in-h-line uk-first-column">
                                <span class="uk-padding"></span>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <span class="in-icon-wrap circle">1</span>
                                <p>Choose an account tier and submit your application</p>
                            </div>
                            <div class="uk-grid-margin">
                                <span class="in-icon-wrap circle">2</span>
                                <p>Add funds quickly and securely via debit card or bank transfer</p>
                            </div>
                            <div class="uk-grid-margin">
                                <span class="in-icon-wrap circle">3</span>
                                <p>Access 40,000+ instruments across all asset classes</p>
                            </div>
                        </div>
                    </div>
                    {{-- procedure end --}}

                    {{-- gallery start --}}
                    <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                        <h4 class="uk-text-left">
                            <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">Galeri</span>
                        </h4>
                        <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                            @foreach (range(1, 4) as $item)
                            <div>
                                <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/in-gallery-image-2.jpg') }}" data-src="{{ asset('assets_landing/img/blockit/in-gallery-image-2.jpg') }}" width="340" height="400" data-uk-img="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- gallery end --}}
                </div>
                <div class="uk-width-expand@m">
                    <h4 class="uk-text-left">
                        <span class="in-highlight uk-padding-small uk-padding-remove-left uk-text-capitalize">daftar layanan</span>
                    </h4>
                    <!-- widget lates begin -->
                    <aside class="uk-margin-medium-bottom">
                        <a href="" class="uk-text-decoration-none">
                            <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                                <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                    <div class="uk-width-auto">
                                      <div class="in-icon-wrap primary-color">
                                        <i class="fas fa-users fa-lg"></i>
                                      </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4>Magang PKL</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </aside>
                    <!-- widget lates end -->
                    <!-- widget tags begin -->
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Bantuan</h5>
                            <div class="uk-margin-top widget-tag">
                                <b>Perlu bantuan?</b>
                                <p class="uk-margin-remove">Kami siap melayani 24 jam, silahkan hubungi layanan call center kami melalui:</p>
                                <ul type="none" class="uk-padding-remove-left">
                                    <li>WhatsApp: <b>085176777785</b></li>
                                    <li>Email: <b>info@hummatech.com</b></li>
                                    <li>DM Instagram: <b>@hummatech</b></li>
                                </ul>
                                <p class="uk-margin-remove">Alamat: Perum. Permata Regency 1 Blok 10 No. 28 Ngijo, Kec. Karang Ploso, Kab. Malang, Jawa Timur, Indonesia, 65152</p>
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