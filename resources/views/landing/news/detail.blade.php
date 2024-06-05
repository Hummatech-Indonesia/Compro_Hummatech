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
                                        <img class="uk-border-rounded uk-width-1-1"
                                            src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}">
                                        <h3>
                                            {{ $news->title }}
                                        </h3>
                                        <span class="description">
                                            <p>
                                                {!! $news->description !!}
                                            </p>
                                        </span>
                                        <div class="uk-flex uk-float-left">
                                            <div class="uk-margin-small-right">
                                                <img class="uk-border-pill uk-background-muted"
                                                    src="{{ asset('mobilelogo.png') }}" alt="image-team" width="32"
                                                    height="32">
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="uk-float-right">
                                            @php
                                                $newsCategories = App\Models\NewsCategory::where(
                                                    'news_id',
                                                    $news->id,
                                                )->get();
                                            @endphp
                                            <div class="categories">
                                                @foreach ($newsCategories as $index => $newsCategory)
                                                    <span
                                                        class="uk-label uk-label-warning in-label-small">{{ $newsCategory->category->name }}</span>
                                                    @if (!$loop->last)
                                                        <span>,</span>
                                                    @endif
                                                @endforeach
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
                                <a href="" class="uk-search-icon-flip uk-icon uk-search-icon" data-uk-search-icon=""
                                    aria-label="Submit Search"><svg width="20" height="20" viewBox="0 0 20 20">
                                        <circle fill="none" stroke="#000" stroke-width="1.1" cx="9"
                                            cy="9" r="7"></circle>
                                        <path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z">
                                        </path>
                                    </svg></a>
                                <input class="uk-input uk-border-rounded" type="search" placeholder="Cari berita...">
                            </form>
                        </aside>
                        <!-- widget search end -->
                        <!-- widget lates begin -->
                        <aside class="uk-margin-medium-bottom">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Berita terbaru</h5>
                                @if ($otherNews->count() > 0)
                                    <ul class="uk-list uk-list-divider uk-list-large widget-latest">
                                        @foreach ($otherNews as $news)
                                            <li>
                                                <a href="href="{{ url("news/{$news->slug}") }}"">{{ $news->title }}</a>
                                                <span class="uk-article-meta uk-text-small"><br><i
                                                        class="fas fa-clock fa-sm uk-margin-small-right"></i>
                                                    {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="mx-auto uk-flex uk-flex-column uk-flex-center uk-text-center">
                                        <img src="{{ asset('nodata-gif-post.gif') }}" alt="No Data" height="200"
                                            class="uk-flex uk-flex-cente" width="200" />
                                        <p class="uk-text-center">Belum ada berita</p>
                                    </div>
                                @endif
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
