@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
?>
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="title-content">
                <h1 class="title_category_product">{{$product_cate->name}}</h1>
            </div>
            @foreach($products as $item)
            <div class="col-xs-6 col-md-3 col-large-3 content" >
                <div class="images">
                    <a href="{{url('san-pham/'.$item->alias.'.html')}}"><img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}"></a>
                </div>
                <div class="title">
                    <h4><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></h4>
                    <p>Giá: <strong>{{number_format($item->price)}}</strong> vnđ</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            {!! $products->links() !!}
        </div>
    </div>
</div>
@endsection
