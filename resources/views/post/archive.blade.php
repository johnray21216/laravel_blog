@extends('layouts.master')

@section('content')
<div class="l-container u-clear">

    <!--start l-main-->
    <main class="l-main js-main">
        <div class="l-main-block"></div>
        @if($posts)
            <div class="page-number">
                Page <span >{{$posts->currentPage()}}/{{$posts->lastPage()}}</span>
            </div>
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
            {{$posts->links('layouts.pagination')}}
        @endif
        </div>
    </main>
    <!--end l-main-->
@endsection
