@extends('landing.layouts.layouts.app')
@section('header')

<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="" style="padding-top: 13px;padding-bottom: 16px;color:white">
                    <li ><a href="#" style="color: white">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb content end -->
@endsection
@section('content')
<div class="uk-section uk-padding-remove in-equity-9">
    <div class="uk-container uk-margin-medium-top uk-margin-bottom">
        <div class="uk-flex uk-flex-center">
            <div class="uk-width-1-2">
                <h4 class="uk-text-center">
                    <span class="in-highlight ">Visi Misi</span>
                </h4>
                <h3 class="uk-text-center uk-text-uppercase">Mewujudkan Visi Kami Melalui Misi yang Berkelanjutan dan Tindakan Nyata</h3>
            </div>
        </div>
        {{-- <h4 class="uk-text-center "> <span class="in-highlight">Visi Misi</span></h4>
        <h2 class="uk-text-center">
            Mewujudkan Visi Kami Melalui Misi yang Berkelanjutan dan Tindakan Nyata
        </h2> --}}
        <div class="uk-grid-medium uk-child-width-1-2@m uk-grid uk-margin-small-top" data-uk-grid="">
                <div class="uk-first-column">
                    <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right" data-src="img/in-equity-9-bg-1.png" data-uk-img="" style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-9-bg-1.png&quot;);">
                        <div class="uk-flex uk-flex-middle">
                            <div>
                                <h4 class="uk-margin-remove">Visi</h4>
                            </div>
                        </div>
                        <p class="uk-margin-remove uk-width-3-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                @foreach (range(1, 5) as $item)
                    <div>
                        <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right" data-src="img/in-equity-9-bg-2.png" data-uk-img="" style="background-image: url(&quot;https://www.indonez.com/html-demo/equity/img/in-equity-9-bg-2.png&quot;);">
                            <div class="uk-flex uk-flex-middle">
                                <div>
                                    <h4 class="uk-margin-remove">Misi</h4>
                                </div>
                            </div>
                            <p class="uk-margin-remove uk-width-3-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        {{-- <div class="uk-grid-medium uk-child-width-1-2@m" data-uk-grid>
            <div>
                <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right" data-src="assets_landing/img/in-equity-9-bg-1.png" data-uk-img>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-right">
                            <i class="fas fa-landmark fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="uk-margin-remove">Visi</h4>
                        </div>
                    </div>
                    <p class="uk-margin-top uk-width-3-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-background-contain uk-background-center-right" data-src="assets_landing/img/in-equity-9-bg-2.png" data-uk-img>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-right">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="uk-margin-remove">Misi</h4>
                        </div>
                    </div>
                    <p class="uk-margin-top uk-width-3-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
