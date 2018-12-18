@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 5)->first();
?>
@include('templates.layout.slider')
<div class="content-box content-box-page" style="margin-bottom: 30px; margin-top: 30px;">
   
    <div class="content-box-contact">
        <div class="container">
            <div class="row info-company">
                <div class="col-sm-4">
                    <h1 class="title-contact">Liên Hệ</h1>
                    <div class="name_company">
                        <span class="_icon"><img src="{{asset('public/images/map-i2.png')}}" alt=""></span> 
                        <!-- <span>Tranh sơn dầu bạch vân</span> -->
                    </div>

                    <p><span class="fwb">Địa chỉ:</span> {{$setting->address}}</p>
                    <p><span class="fwb">Số điện thoại:</span> {{$setting->phone}}</p>
                    <p><span class="fwb">Email:</span> {{$setting->email}}</p>
                </div>
                <div class="col-sm-8">
                    <h2 class="title-send"><span>Thông tin khách hàng</span></h2>
                    <form action="{{route('postContact')}}" method="post" accept-charset="utf-8" class="contact-frm">
                    	{{csrf_field()}}
                        <div class="row">                                
                                <div class="col-md-6">
                                    <label for="">Họ tên</label>                                       
                                    <input type="text" name="name" value="" required="" class="form-control" placeholder="">                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" name="address" value="" required="" class="form-control" placeholder="">                                        
                                </div>
                                <div class="col-md-6">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" name="phone" value="" required="" class="form-control" placeholder="">
                                    
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="" required="" class="form-control" placeholder="">
                                    
                                </div>
                                <div class="col-md-12">
                                    <label for="">Nội dung</label>
                                    <textarea name="content" rows="5" required="" class="form-control" placeholder="Nội dung"></textarea>
                                </div>
                                <div class="text-md-right btn-gui col-md-12" style="margin-top: 10px; margin-bottom: 20px;">
                                    <button type="submit" class="btn bold more-btn btn-primary">Đặt hàng</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="map-box">
            <div class="container">
               {!! $setting->iframemap !!}
            </div>
        </div>
    </div>
</div>
@endsection
