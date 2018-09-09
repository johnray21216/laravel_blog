@extends('layouts.admin')

@section('content')
<div class="l-container u-clear">

      <!--start l-main-->
      <main class="l-main js-main">
          <div class="l-main-block"></div>
          @if ($errors->any())
            @foreach($errors->all() as $message)
              <div>{{$message}}</div>
            @endforeach
          @endif
          <form method="post" class="form" action="{{route('login')}}">
            @csrf
              <label for="username" class="form-title">USERNAME</label>
              <input type="text" id="username" class="input input-text" name="username">
              <label for="password" class="form-title">PASSWORD</label>
              <input type="password" id="password" class="input input-text" name="password">
              <label for="submit" class="form-button">
                  <div class="button">
  <p class="button-text">Login</p>
</div>
              </label>
                  <input type="submit" id="submit" class="input input-submit">
          </form>
      </main>
      <!--end l-main-->

  </div>
@endsection
