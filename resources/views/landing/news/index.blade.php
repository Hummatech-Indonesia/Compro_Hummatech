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

@section('style')
    <style>
        .card-title, .card-description {
                word-wrap: break-word;
                word-break: break-all;
                overflow: hidden;
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
                        <div class="in-blog-1 uk-grid uk-grid-stack" data-uk-grid="">
                            @forelse ($newses as $news)
                                @if ($news->news)
                                    <div class="uk-width-1-2@m uk-first-column">
                                        <article class="uk-card uk-card-default uk-border-rounded">
                                            <div class="uk-card-media-top">
                                                <img class="uk-width-1-1" src="{{ asset('storage/' . $news->news->thumbnail) }}"
                                                alt="{{ $news->news->title }}" style="height: 250px; object-fit:cover">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="card-title">
                                                    <a href="/news/{{ $news->slug }}"
                                                        class="link-primary text-decoration-none uk-text-right">{{ $news->title }}</a>
                                                </h3>
                                                <p class="card-description">{!! Str::limit(strip_tags($news->news ? $news->news->description : $news->description), 200) !!}</p>
                                                <div class="uk-flex">
                                                    <div class="uk-margin-small-right">
                                                        <img class="uk-border-pill uk-background-muted"
                                                            src="{{ asset('storage/' . $profile->image) }}" alt="image-team"
                                                            width="32" height="32">
                                                    </div>
                                                    <div class="uk-flex uk-flex-middle">
                                                        <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                            {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-footer uk-clearfix uk-flex uk-flex-between">
                                                <div class="uk-float-left">
                                                    @php
                                                        $newsCategories = App\Models\NewsCategory::where('news_id', $news->id)->get();
                                                    @endphp
                                                    <div class="categories">
                                                        @foreach ($newsCategories as $index => $newsCategory)
                                                            <a href="/news/category/{{ $newsCategory->category->slug }}" class="uk-text-decoration-none uk-label uk-label-warning in-label-small">{{ $newsCategory->category->name }}</a>
                                                            @if (!$loop->last)
                                                                <span></span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="uk-float-right uk-margin-small-top">
                                                    <a href="/news/{{ $news->news->slug }}" class="uk-button uk-button-text">Baca selengkapnya
                                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>
                                @else
                                    <div class="uk-width-1-2@m uk-first-column">
                                        <article class="uk-card uk-card-default uk-border-rounded">
                                            <div class="uk-card-media-top">
                                                <img class="uk-width-1-1" src="{{ asset('storage/' . $news->thumbnail) }}"
                                                alt="{{ $news->title }}" style="height: 250px; object-fit:cover">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="card-title">
                                                    <a href="/news/{{ $news->slug }}"
                                                        class="link-primary text-decoration-none uk-text-right">{{ $news->title }}</a>
                                                </h3>
                                                <p class="card-description">{!! Str::limit(strip_tags($news->news ? $news->news->description : $news->description), 200) !!}</p>
                                                <div class="uk-flex">
                                                    <div class="uk-margin-small-right">
                                                        <img class="uk-border-pill uk-background-muted"
                                                            src="{{ asset('storage/' . $profile->image) }}" alt="image-team"
                                                            width="32" height="32">
                                                    </div>
                                                    <div class="uk-flex uk-flex-middle">
                                                        <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                            {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-card-footer uk-clearfix uk-flex uk-flex-between">
                                                <div class="uk-float-left">
                                                    @php
                                                        $newsCategories = App\Models\NewsCategory::where('news_id', $news->id)->get();
                                                    @endphp
                                                    <div class="categories">
                                                        @foreach ($newsCategories as $index => $newsCategory)
                                                            <a href="/news/category/{{ $newsCategory->category->slug }}" class="uk-text-decoration-none uk-label uk-label-warning in-label-small">{{ $newsCategory->category->name }}</a>
                                                            @if (!$loop->last)
                                                                <span></span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="uk-float-right uk-margin-small-top">
                                                    <a href="/news/{{ $news->slug }}" class="uk-button uk-button-text">Baca selengkapnya
                                                        <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </article>
                                    </div>
                                @endif
                            @empty
                                <div class="uk-flex uk-flex-center">
                                    <img src="{{ asset('empty.png') }}" alt="" srcset="">
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="uk-width-expand@m">
                        <!-- widget search begin -->
                        <!-- widget search end -->
                        <!-- widget categories begin -->
                        <aside class="uk-margin-medium-bottom">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Kategori</h5>
                                <ul class="uk-list widget-categories">
                                    <li>
                                        <a href="/news" style="color:{{ request()->is('news') ? '#5EA2FF' : '' }}">
                                            Semua
                                        </a>
                                    </li>
                                    @if(isset($allCategories))
                                        @foreach ($allCategories as $category)
                                            <li>
                                                <a style="color:{{ request()->is('news/category/' . $category->slug) ? '#5EA2FF' : '' }}"
                                                    href="{{ url('/news/category/' . $category->slug) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </aside>

                        <!-- widget categories end -->
                        <!-- widget latest begin -->
                        <!-- widget latest end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- blog content end -->
    </main>
@endsection

