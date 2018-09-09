@extends('layouts.admin')

@section('content')
<!--start l-contents-->
<div class="l-container u-clear">

    <!--start l-main-->
    <main class="l-main js-main">
        <div class="l-main-block"></div>
        @if(Session::has('success'))
          <p>{{Session::get('success')}}</p>
        @endif
        <a href="{{route('admin.post')}}" class="l-main-button">
            <div class="button">
<p class="button-text">New Article</p>
</div>
        </a>
        <ul class="archive archive-admin">

                <li class="archive-item">
                <a href="#" class="post-article">
<time class="post-article-date" datetime="2016-9-16">16 Sep, 2016</time>
<h1 class="post-article-title">The Best Wii U Games of 2016</h1>
</a>
                </li>

                <li class="archive-item">
                <a href="#" class="post-article">
<time class="post-article-date" datetime="2016-9-16">16 Sep, 2016</time>
<h1 class="post-article-title">VOTING FOR THE PEOPLE&#39;S CHOICE BEST WII U GAME OF 2016!</h1>
</a>
                </li>

                <li class="archive-item">
                <a href="#" class="post-article">
<time class="post-article-date" datetime="2016-9-16">16 Sep, 2016</time>
<h1 class="post-article-title">Gears of War film to rise like a Fenix thanksto Universal</h1>
</a>
                </li>

                <li class="archive-item">
                <a href="#" class="post-article">
<time class="post-article-date" datetime="2016-9-16">16 Sep, 2016</time>
<h1 class="post-article-title">Trailer Roundup - October 5, 2016</h1>
</a>
                </li>

                <li class="archive-item">
                <a href="#" class="post-article">
<time class="post-article-date" datetime="2016-9-16">16 Sep, 2016</time>
<h1 class="post-article-title">PlayStation VR: A Hardcore Console Gamer’s Perspective</h1>
</a>
                </li>

        </ul>
    </main>
    <!--end l-main-->

</div>
<!--end l-contents-->
@endsection
