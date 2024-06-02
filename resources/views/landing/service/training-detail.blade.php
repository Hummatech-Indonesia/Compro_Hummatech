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
            <div class="uk-grid uk-grid-large uk-flex uk-flex-top" data-uk-grid>
                <div class="uk-width-1-2@m uk-flex uk-flex-top uk-margin-small-bottom">
                    <div class="in-equity-video">
                        <img class="uk-border-rounded uk-width-1-1" src="{{ asset('assets_landing/img/blockit/in-gallery-image-5.jpg') }}" data-src="{{ asset('assets_landing/img/blockit/in-gallery-image-5.jpg') }}" alt="sample-images" width="433" height="255" data-uk-img>
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-flex uk-flex-top">
                    <div>
                        <h3 class="uk-margin-remove">Inflation and sanctions weaken ruble against the dollar</h3>
                        <p class="uk-margin-remove">
                            Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut. Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa natoque mattis quisque ut
                        </p>   
                        <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top">Ajukan proposal
                            <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-container uk-margin-large uk-padding-large uk-padding-remove-top">
            <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m in-card-10 uk-grid" data-uk-grid>
                <div class="uk-width-1-3@m uk-flex uk-flex-top uk-margin-small-bottom">
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-padding-small uk-border-rounded">
                        <span class="uk-label in-label-small uk-margin-remove-bottom">Rp. 99.000</span>
                        <h2 class="uk-margin-small uk-margin-remove-bottom">Basic</h2>
                        <p style="font-size: 18px" class="uk-text-muted uk-margin-remove">Benefit from industry-leading entryv prices</p>
                        <hr>
                        <div class="uk-margin-remove">
                            <a class="uk-button uk-button-default uk-border-rounded uk-width-expand uk-text-capitalize" href="#">ajukan proposal
                                <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-top uk-margin-small-bottom">
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-padding-small uk-border-rounded">
                        <span class="uk-label in-label-small uk-margin-remove-bottom">Rp. 99.000</span>
                        <h2 class="uk-margin-small uk-margin-remove-bottom">Standard</h2>
                        <p style="font-size: 18px" class="uk-text-muted uk-margin-remove">Benefit from industry-leading entryv prices</p>
                        <hr>
                        <div class="uk-margin-remove">
                            <a class="uk-button uk-button-default uk-border-rounded uk-width-expand uk-text-capitalize" href="#">ajukan proposal
                                <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-top uk-margin-small-bottom">
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium uk-padding-small uk-border-rounded">
                        <span class="uk-label in-label-small uk-margin-remove-bottom">Rp. 99.000</span>
                        <h2 class="uk-margin-small uk-margin-remove-bottom">Professional</h2>
                        <p style="font-size: 18px" class="uk-text-muted uk-margin-remove">Benefit from industry-leading entryv prices</p>
                        <hr>
                        <div class="uk-margin-remove">
                            <a class="uk-button uk-button-default uk-border-rounded uk-width-expand uk-text-capitalize" href="#">ajukan proposal
                                <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog content end -->
</main>
@endsection