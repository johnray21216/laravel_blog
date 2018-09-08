@extends('layouts.admin')

@section('content')
<div class="l-container u-clear">

      <!--start l-main-->
      <main class="l-main js-main">
          <div class="l-main-block"></div>
          @if ($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
          @endif
          <form method="post" class="form" action="{{route('login')}}">
            @csrf
              <label for="user-id" class="form-title">USER ID</label>
              <input type="text" id="user-id" class="input input-text">
              <label for="password" class="form-title">PASSWORD</label>
              <input type="text" id="password" class="input input-text">
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
