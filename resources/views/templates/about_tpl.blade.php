@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
@include('templates.layout.slider')
<div class="box-about">
	<div class="container">

	    <div class="row">
	        <!-- <h1 class="name_about">{{$about->name}}</h1> -->
	        <div class="content_about">
	            {!! $about->content !!}
	        </div>
	    </div>
	</div>
</div>
@endsection

