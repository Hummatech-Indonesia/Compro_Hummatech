@extends('landing.layouts.layouts.app')
@section('style')
    <style>
        .in-equity-breadcrumb .uk-breadcrumb-custom {
        padding-top: 14px;
        padding-bottom: 18px;
        }

        .uk-breadcrumb-custom {
        padding: 0;
        list-style: none;
        color: #1a1a1a;
        font-size: 14px;
        }
        @media (max-width: 960px) {
        .uk-breadcrumb-custom li:nth-child(n+4) {
            display: none;
        }
        }
        .uk-breadcrumb-custom :last-child > span a {
        color: #fff;
        }
        .uk-breadcrumb-custom :last-child > span a:hover {
        text-decoration: none;
        }

        /*
        * 1. Doesn't generate any box and replaced by child boxes
        */
        .uk-breadcrumb-custom > * {
        display: contents;
        }

        /* Items
        ========================================================================== */
        .uk-breadcrumb-custom > * > * {
        font-size: 0.875rem;
        color: #1a1a1a;
        }

        /* Hover */
        .uk-breadcrumb-custom > * > :hover {
        color: #1a1a1a;
        text-decoration: none;
        }

        /* Disabled */
        /* Active */
        .uk-breadcrumb-custom > :last-child > span,
        .uk-breadcrumb-custom > :last-child > a:not([href]) {
        color: #fff;
        }

        /*
        * Divider
        * `nth-child` makes it also work without JS if it's only one row
        * 1. Remove space between inline block elements.
        * 2. Style
        */
        .uk-breadcrumb-custom > :nth-child(n+2):not(.uk-first-column)::before {
        content: "/";
        display: inline-block;
        /* 1 */
        margin: 0 20px 0 calc(20px - 4px);
        /* 2 */
        font-size: 0.75rem;
        color: #1a1a1a;
        }
    </style>
@endsection

@section('header')
<!-- header start -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb-custom">
                    <li><a href="/">Home</a></li>
                    <li><span>Berita</span></li>
                    <li><span class="uk-text-capitalize">{{ $news->title }}</span></li>
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
                                                    <a href="/news/category/{{ $newsCategory->category->slug }}"
                                                        class="uk-label uk-label-warning in-label-small">{{ $newsCategory->category->name }}</a>
                                                    @if (!$loop->last)
                                                        <span> </span>
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


@section('script')
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
          "name": "Berita",
          "item": "{{ url('/news') }}"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": $news->slug,
          "item": "{{ url('/'. $news->slug) }}"
        },
      ]
    }
</script>
@endsection
