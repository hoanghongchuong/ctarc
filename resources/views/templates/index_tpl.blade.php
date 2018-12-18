@extends('index')
@section('content')
<?php 
    $setting = Cache::get('setting');
    $banner = DB::table('slider')->where('com','home')->get();
?>
@include('templates.layout.slider')
<div class="content-home">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 left">
                <h2>{{$about->name}}</h2>
                <div class="des-short">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                {!! $about->mota !!}</div>
            </div>
            <div class="col-md-5 col-xs-12 right">
                <h2>Công trình tiêu biểu</h2>
                <div class="slider-project">
                    <div class="owl-carousel-project">
                        @foreach($news as $k=>$item)
                        <div class="item">
                            <a data-slide-index="{{$k}}" href="{{url('cong-trinh/'.$item->alias.'.html')}}">
                                    <img src="{{asset('upload/news/'.$item->photo)}}" />
                                <p class="name-project-home"><a href="{{url('cong-trinh/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
