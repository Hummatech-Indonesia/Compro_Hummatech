@extends('landing.layouts.layouts.app')
@section('header')
<!-- header start -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li><a href="/">Beranda</a></li>
                    <li><span>Berita</span></li>
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
                    <div class="in-blog-1 uk-grid uk-grid-stack" data-uk-grid="">
                       {{-- @foreach (range(1, 2) as $item)
                            <div class="in-stretch uk-first-column">
                                <article class="uk-card uk-card-default uk-border-rounded">
                                    <div class="uk-card-media-top">
                                        <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/in-gallery-image-3.jpg') }}" alt="The typical U.S. household is spending $445 more a month due to inflation">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3>
                                            <a href="/news/Lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-Quia-nesciunt" class="link-primary text-decoration-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, nesciunt.</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ducimus! Dignissimos id porro consequuntur quos voluptatem maiores deserunt dolore omni...</p>
                                        <div class="uk-flex">
                                            <div class="uk-margin-small-right">
                                                <img class="uk-border-pill uk-background-muted" src="{{ asset('mobilelogo.png') }}" alt="image-team" width="32" height="32">
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    31 Mei 2024
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-footer uk-clearfix">
                                        <div class="uk-float-left">
                                            <span class="uk-label uk-label-warning in-label-small">Prestasi</span>
                                        </div>
                                        <div class="uk-float-right">
                                            <a href="/news/Lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-Quia-nesciunt" class="uk-button uk-button-text">Baca selengkapnya<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                       @endforeach --}}
                       @foreach (range(1, 4) as $item)
                            <div class="uk-width-1-2@m uk-first-column">
                                <article class="uk-card uk-card-default uk-border-rounded">
                                    <div class="uk-card-media-top">
                                        <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/in-gallery-image-3.jpg') }}" alt="The typical U.S. household is spending $445 more a month due to inflation">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3>
                                            <a href="/news/Lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-Quia-nesciunt" class="link-primary text-decoration-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, nesciunt.</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ducimus! Dignissimos id porro consequuntur quos voluptatem maiores deserunt dolore omni...</p>
                                        <div class="uk-flex">
                                            <div class="uk-margin-small-right">
                                                <img class="uk-border-pill uk-background-muted" src="{{ asset('mobilelogo.png') }}" alt="image-team" width="32" height="32">
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    31 Mei 2024
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-footer uk-clearfix">
                                        <div class="uk-float-left">
                                            <span class="uk-label uk-label-warning in-label-small">Prestasi</span>
                                        </div>
                                        <div class="uk-float-right">
                                            <a href="/news/Lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-Quia-nesciunt" class="uk-button uk-button-text">Baca selengkapnya<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                       @endforeach
                    </div>
                    <!-- pagination begin -->
                    <ul class="uk-pagination uk-flex-center uk-margin-medium-top"><li class="uk-active"><a href="">1</a></li><li><a href="">2</a></li><li><a href="">3</a></li><li><a href="">4</a></li><li><a href="" aria-label="next"><span aria-hidden="true">»</span></a></li></ul>
                    <!-- pagination end -->
                </div>
                <div class="uk-width-expand@m">
                    <!-- widget search begin -->
                    <aside class="uk-margin-medium-bottom">
                        <form name="blog-search" class="uk-search uk-search-default uk-width-1-1">
                            <a href="" class="uk-search-icon-flip uk-icon uk-search-icon" data-uk-search-icon="" aria-label="Submit Search"><svg width="20" height="20" viewBox="0 0 20 20"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"></path></svg></a>
                            <input class="uk-input uk-border-rounded" type="search" placeholder="Cari berita...">
                        </form>
                    </aside>
                    <!-- widget search end -->
                    <!-- widget categories begin -->
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">        
                            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Kategori</h5>
                            <ul class="uk-list widget-categories">
                                <li><a href="#">Semua<span class="uk-label in-label-small uk-float-right">8</span></a></li>
                                <li><a href="#">Prestasi<span class="uk-label in-label-small uk-float-right">2</span></a></li>
                                <li><a href="#">Kunjungan industri<span class="uk-label in-label-small uk-float-right">2</span></a></li>
                                <li><a href="#">Kelas industri<span class="uk-label in-label-small uk-float-right">2</span></a></li>
                                <li><a href="#">Magang<span class="uk-label in-label-small uk-float-right">2</span></a></li>
                            </ul>
                        </div>
                    </aside>
                    <!-- widget categories end -->
                    <!-- widget lates begin -->
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Berita terbaru</h5>
                            <ul class="uk-list uk-list-divider uk-list-large widget-latest">
                                @foreach (range(1,3) as $item)
                                    <li>
                                        <a href="#">Potter ipsum wand elf parchment wingardium.</a>
                                        <span class="uk-article-meta uk-text-small"><br><i class="fas fa-clock fa-sm uk-margin-small-right"></i>2 Juni 2024</span>
                                    </li>
                                @endforeach
                            </ul>        
                        </div>
                    </aside>
                    <!-- widget lates end -->
                </div>
            </div>
        </div>
    </div>
    <!-- blog content end -->
</main>
@endsection