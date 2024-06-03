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
                        <div class="in-stretch uk-first-column">
                            <article class="uk-card uk-card-default uk-border-rounded">
                                <div class="uk-card-body">
                                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/in-gallery-image-3.jpg') }}" alt="The typical U.S. household is spending $445 more a month due to inflation">
                                    <h3>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, nesciunt.
                                    </h3>
                                    <span class="description">
                                        <p>Potter ipsum wand elf parchment wingardium. Squashy from treats goblin dirt stunning yew. Which keeper 10 ollivanders hunt oddment granger dirigible sirius splinched. Beans doxycide granger house inferi scarlet wand. Fantastic diddykins servant winky leprechaun half-blood bludger blotts headmaster. Floating mewing drops time-turner stan diadem unicorn emporium bertie. Expecto we transfiguration should black goblin hexed parvati bludger stan. Three jinxes duel find knut. Quidditch house above witch giant squashy stone socks hungarian flavor. Cadogan horn floating dervish mr would locket dobby fell. Niffler dungeons fritters nitwit bonnet three-headed bathrooms of cleansweep. Rock-cake full 50 gringotts that emporium silver giant palominos. Many kidney jinxes under magic.
                                        </p>
                                        <p>Potter ipsum wand elf parchment wingardium. Squashy from treats goblin dirt stunning yew. Which keeper 10 ollivanders hunt oddment granger dirigible sirius splinched. Beans doxycide granger house inferi scarlet wand. Fantastic diddykins servant winky leprechaun half-blood bludger blotts headmaster. Floating mewing drops time-turner stan diadem unicorn emporium bertie. Expecto we transfiguration should black goblin hexed parvati bludger stan. Three jinxes duel find knut. Quidditch house above witch giant squashy stone socks hungarian flavor. Cadogan horn floating dervish mr would locket dobby fell. Niffler dungeons fritters nitwit bonnet three-headed bathrooms of cleansweep. Rock-cake full 50 gringotts that emporium silver giant palominos. Many kidney jinxes under magic.
                                        </p>
                                        <p>Potter ipsum wand elf parchment wingardium. Squashy from treats goblin dirt stunning yew. Which keeper 10 ollivanders hunt oddment granger dirigible sirius splinched. Beans doxycide granger house inferi scarlet wand. Fantastic diddykins servant winky leprechaun half-blood bludger blotts headmaster. Floating mewing drops time-turner stan diadem unicorn emporium bertie. Expecto we transfiguration should black goblin hexed parvati bludger stan. Three jinxes duel find knut. Quidditch house above witch giant squashy stone socks hungarian flavor. Cadogan horn floating dervish mr would locket dobby fell. Niffler dungeons fritters nitwit bonnet three-headed bathrooms of cleansweep. Rock-cake full 50 gringotts that emporium silver giant palominos. Many kidney jinxes under magic.
                                        </p>
                                    </span>
                                    <div class="uk-flex uk-float-left">
                                        <div class="uk-margin-small-right">
                                            <img class="uk-border-pill uk-background-muted" src="{{ asset('mobilelogo.png') }}" alt="image-team" width="32" height="32">
                                        </div>
                                        <div class="uk-flex uk-flex-middle">
                                            <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                31 Mei 2024
                                            </p>
                                        </div>
                                    </div>
                                    <div class="uk-float-right">
                                        <span class="uk-label uk-label-warning in-label-small">Prestasi</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
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