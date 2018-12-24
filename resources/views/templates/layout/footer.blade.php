<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="pull-left">
                <span class="">{{$setting->address}}</span> &nbsp;Hotline: {{$setting->phone}} - {{$setting->hotline}}
            </div>
            <div class="pull-right">
                <span class="fix-footer">Design by Hungthinhads.com</span>
            </div>
        </div>
    </div>
</footer>