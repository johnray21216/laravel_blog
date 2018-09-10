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
        @if($posts)
        <ul class="archive archive-admin">
            @foreach($posts as $post)
                <li class="archive-item">
                <a href="{{ route('single.post', ['id' => $post->id]) }}" class="post-article">
<time class="post-article-date" datetime="{{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}">{{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}</time>
<h1 class="post-article-title">{{$post->title}}</h1>
</a>
                </li>
            @endforeach
        </ul>
        {{$posts->links('layouts.pagination')}}
    @else
        <p style="text-align:center;">No Posts created Yet!</p>
    @endif
    </main>
    <!--end l-main-->

</div>
<!--end l-contents-->
@endsection
