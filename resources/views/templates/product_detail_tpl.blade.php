@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
   
?>

<div class="album-image-box ">
    <div class="container">
        <div class=""></div>
            <div class="album-image slider_product">
                <div class="slider-for">
                    @if(count($album_hinh) > 0)
                    @foreach($album_hinh as $album)
                    <div class="item">
                        <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image"  draggable="false"/>
                    </div>
                    @endforeach
                    @else
                    <div class="item">
                        <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image"  draggable="false"/>
                    </div>
                    @endif
                </div>

                <div class="slider-nav">
                    @foreach($album_hinh as $album)
                    <div class="item">
                        <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image"  draggable="false"/>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 left">                   
                <ul class="menu-cate">
                    @foreach($cate_pro as $cate)
                    <li class="parent"><a href="{{url('san-pham/'.$cate->alias)}}">{{$cate->name}}</a></li>
                    <?php $cateChildren = DB::table('product_categories')->where('status',1)->where('parent_id', $cate->id)->get(); ?>
                    @if(count($cateChildren) > 0)
                        @foreach($cateChildren as $child)
                        <li><a href="{{url('san-pham/'.$child->alias)}}" class="@if($child->id == $product_detail->cate_id)active @endif">{{$child->name}}</a></li>
                        @endforeach
                    @endif
                    @endforeach
                </ul>                    
            </div>
            <div class="col-md-9 col-xs-12">
                <h1 class="name_detail"><i class="fa fa-chevron-right"></i>{{$product_detail->name}}</h1>
                <div class="shot-des">
                    <p>Giá: <span style="font-size: 20px;">{{number_format($product_detail->price)}}</span> vnđ</p>
                    {!! $product_detail->content !!}
                </div>
                <div class="lienquan">
                    <p class="title-lienquan"><i class="fa fa-chevron-right"></i>Sản phẩm khác</p>
                    <div class="list-item-box">
                        @foreach($productSameCate as $item)
                        <div class="_item col-md-2 col-xs-6">
                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                <p><img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}"></p>
                                <p class="name_detail_item">{{$item->name}}</p>
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

