@extends('layouts.master')

@section('content')
<main class="l-main js-main">
          <div class="l-main-block"></div>
          <div class="single">
              <img src="{{url('uploads/'.$post->filename)}}" alt="" class="single-image">
              <div class="l-container u-clear">
                  <h1 class="single-title">{{$post->title}}</h1>
                  <time class="single-date" datetime="{{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}">{{ Carbon\Carbon::parse($post->created_at)->format('F d Y') }}</time>
                  <p class="single-desc">{{$post->contents}}</p>
                  <div class="single-button">
                      <a href="{{url()->previous()}}">
                        <div class="button">
                          <p class="button-text">Top</p>
                        </div>
                      </a>
                  </div>
              </div>
          </div>
      </main>
@endsection
