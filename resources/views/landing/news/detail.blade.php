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
                                                    src="{{ asset('storage/' . $profile->image) }}" alt="image-team" width="32"
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
                        <!-- widget lates begin -->
                        <aside class="uk-margin-medium-bottom">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Berita terbaru</h5>
                                @if ($otherNews->count() > 0)
                                    <ul class="uk-list uk-list-divider uk-list-large widget-latest">
                                        @foreach ($otherNews as $news)
                                            <li>
                                                <a href="{{ url("news/{$news->slug}") }}">{{ $news->title }}</a>
                                                <span class="uk-article-meta uk-text-small"><br><i
                                                        class="fas fa-clock fa-sm uk-margin-small-right"></i>
                                                    {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="uk-flex uk-flex-center">
                                        <img src="{{ asset('empty.png') }}" alt="" srcset="">
                                    </div>
                                    <h4 class="uk-text-center">Belum ada berita</h4>
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
