<?php
    $setting = Cache::get('setting');
    $lienkets = DB::table('lienket')->where('com','lien-ket')->get();
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="top-footer">
                <div class="col-md-3">
                    <p class="name_company">{{$setting->company}}</p>
                    <p>Địa chỉ: {{$setting->address}}</p>
                    <p>Thời gian mở cửa: 8h30 - 18h30 kể cả thứ 7 và chủ nhật</p>
                    <p>Có vị trí để ô tô</p>
                </div>
                <div class="col-md-3">
                    <p class="name_company">Thông tin liên hệ</p>
                    <p>Điện thoại: {{$setting->phone}}</p>
                    <p>Hotline: {{$setting->hotline}}</p>
                    <p>Email: {{$setting->email}}</p>
                    <p>Webiste: {{$setting->website}}</p>
                </div>
                <div class="col-md-3">
                    <p class="name_company">Liên kết</p>
                    @foreach($lienkets as $lk)
                    <p><a href="{{@$lk->name}}" title="">{{@$lk->name}}</a></p>
                    @endforeach
                </div>
                <div class="col-md-3">
                    <p class="name_company">Hỗ trợ khách hàng</p>
                    <p><a href="{{url('chinh-sach-bao-mat')}}" title="">Chính sách bảo mật thông tin</a></p>
                    <p><a href="{{url('chinh-sach-quy-dinh')}}" title="">Chính sách và quy định</a></p>
                    <p><a href="https://www.google.com/maps?ll=20.980643,105.814032&z=16&t=m&hl=vi-VN&gl=US&mapclient=embed&cid=5516500500219331392" title="">Sơ đồ chỉ đường</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>