<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->get();
    $categories_post = DB::table('news_categories')->where('status',1)->where('parent_id',0)->get();
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
?>
<header id="header" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <a href="{{url('')}}" title="">
                    <img src="{{asset('upload/hinhanh/'.$setting->photo)}}">
                </a>
            </div>
            <div class="col-md-7 menu hidden-xs hidden-sm">
                <ul class="list-menu">
                    <li class=""><a href="{{url('')}}">Trang chủ</a></li>
                    <li class=""><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                    <li class="dropdown submenux">                              
                        <a href="{{url('cong-trinh')}}">Công trình                         
                        </a>
                        <ul class="dropdown-menu dropmenux">
                            @foreach($categories_post as $post)
                            <li><a href="{{url('cong-trinh/'.$post->alias)}}">{{$post->name}}</a></li>                                
                            @endforeach                          
                        </ul>                            
                    </li>
                    <li class="dropdown submenux">                              
                        <a href="{{url('decor')}}">Decor                         
                        </a>
                        <ul class="dropdown-menu dropmenux">
                            @foreach($categories as $category)
                            <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>                                
                            @endforeach                           
                        </ul>                            
                    </li>
                    <li class=""><a href="{{url('lien-he')}}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <div class="row visible-xs visible-sm">
            <div class="vk-header__search">
                <div class="container">
                    
                    <a href="#menuMobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
                </div>
            </div>
            <nav class="vk-header__menu-mobile">
                <ul class="vk-menu__mobile collapse" id="menuMobile">
                    <li><a href="{{url('')}}">Trang chủ</a></li>
                    <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                    <li>
                        <a href="{{url('cong-trinh')}}">Công trình</a>
                        <a href="#menu1" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                        <ul class="collapse" id="menu1">
                            @foreach($categories_post as $post)
                            <li><a href="{{url('cong-trinh/'.$post->alias)}}">{{$post->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('decor')}}">Decor</a>
                        <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                        <ul class="collapse" id="menu2">
                            @foreach($categories as $category)
                            <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                </ul>
            </nav>
            
        </div>
    </div>
</header><!-- /header -->