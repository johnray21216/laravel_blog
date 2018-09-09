@extends('layouts.admin')

@section('content')
<!--start l-contents-->
<div class="l-container u-clear">

    <!--start l-main-->
    <main class="l-main js-main">
        <div class="l-main-block"></div>
        <form method="post" action="{{route('admin.post')}}" class="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="image" class="form-title">EYE CATCH IMAGE
                <div class="form-file u-clear">
                    <span class="form-file-button">UPLOAD</span>
                </div>
            </label>
            <input type="file" id="image" name="image" class="input input-image">
            <label for="title" class="form-title">TITLE</label>
            <div class="form-body">
                <input type="text" id="title" name="title" class="input input-text" value="{{old('title')}}">
            </div>
            <label for="contents" class="form-title">CONTENTS</label>
            <div class="form-textarea">
                <textarea value="{{old('contents')}}" name="contents" id="inquiry" cols="30" rows="10" class="input input-contents"></textarea>
            </div>
            @if($errors->any())
                <div align="center">Error!</div>
            @endif
            <label for="submit" class="form-button">
                <div class="button">
<p class="button-text">Submit</p>
</div>
            </label>
            <input type="submit" id="submit" class="input input-submit">
            <a href="{{route('home')}}" class="form-button">
                <div class="button">
<p class="button-text">Back</p>
</div>
            </a>
        </form>
    </main>
    <!--end l-main-->

</div>
<!--end l-contents-->
@endsection
