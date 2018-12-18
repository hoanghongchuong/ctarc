@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
   
?>
<content>
    <div class="container">
        <div class="row">
            <div id="viver-content" class="single">
                <div class="container bs">
                    <div class="block-products">
                        <div class="block-content product-container row bs">
                            <div class="row mg-t20 row-m10">
                                <div class="col-xs-12 col-sm-6 mg-b10">
                                    <div class="product-images">
                                       <img src="{{asset('upload/product/'.$product_detail->photo)}}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 mg-b10">
                                    <div class="block-title title-bo">
                                        <h1 class="title"><span>{{$product_detail->name}}</span></h1>
                                    </div>
                                    <div class="product-box single-content">
                                        <div class="desc">
                                            <div class="product-code">
                                                Mã sản phẩm: <span>{{$product_detail->code}}</span>
                                            </div>
                                            <!-- <div class="price-big">Liên hệ</div> -->
                                            <div class="sub-title">Đặc điểm nổi bật:</div>
                                            <div class="mota">{!! $product_detail->mota !!}</div>
                                        </div>
                                    </div>
                                    <div class="product-footer row bs">
                                        <p><a href="{{url('lien-he')}}" class="btn-mk btn-red"><i class="fa fa-book"></i>Mua hàng</a></p>
                                        <div class="text">
                                            <span class="f">Hotline:</span>
                                            <span class="s">{{$setting->hotline}} - {{$setting->phone}}</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-9 mg-b10">
                                    <div class="single-content bo">
                                        <div class="block-title title-bo">
                                            <h2 class="title">Thông tin sản phẩm</h2>
                                        </div>
                                        <div class="content_detail_product">{!! $product_detail->content !!}</div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="box box-products">
                                        <div class="box-title title-bg">
                                            <span class="title">Sản phẩm liên quan</span>
                                        </div>
                                        <div class="box-content bo in-5">
                                            @foreach($productSameCate as $item)
                                            <div class="ii-product xxs ptb-5">
                                                <div class="inner">
                                                    <div class="row row-m5">
                                                        <div class="image fit col-xxs-12 col-xs-4">
                                                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                                                <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}" title="{{$item->name}}">
                                                            </a>                                                
                                                        </div>
                                                        <div class="col-xxs-12 col-xs-8">
                                                            <div class="title"><a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a></div>
                                                            <div class="price">
                                                                Liên hệ 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</content>

@endsection
