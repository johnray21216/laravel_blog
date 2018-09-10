@extends('layouts.master')

@section('content')
<!--start l-contents-->
<div class="l-container u-clear">

  <!--start l-main-->
  <main class="l-main js-main">
    @if($posts)
      <div class="l-main-block"></div>
      <div class="archive">
          <ul class="archive-list">
            @foreach($posts as $post)
              <li class="archive-item">
                  <article class="card">
<a href="{{ route('single.post', ['id' => $post->id]) }}" class="card-link">
  <img src="{{url('uploads/'.$post->filename)}}" alt="" class="card-image">
  <div class="card-bottom">
      <h1 class="card-title">{{$post->title}}</h1>
      <time class="card-date" datetime="{{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}">
          {{ Carbon\Carbon::parse($post->created_at)->format('F d Y') }}
      </time>
  </div>
</a>
</article>
                  </li>
    @endforeach
          </ul>
      </div>
      <a href="{{route('post.archive')}}" class="archive-button">
          <div class="button">
<p class="button-text">More</p>
</div>
      </a>
  @endif
  </main>
  <!--end l-main-->

</div>
<!--end l-contents-->
@endsection
