@extends('index')
@section('content')
<div class="banner_idea">
	<img src="{{asset('public/images/ytuong.jpg')}}">
	<div class="info-brecrum">
		<h1>Ý Tưởng</h1>
		<p><a href="{{url('/')}}" title="">Trang chủ</a> / Ý tưởng</p>
	</div>
</div>
<div class="content_idea">
	<div class="container">
		<div class="row">
			@foreach($data as $item)
			<div class="col-md-4">
				<div class="box-item-idea">
					<div class="box-img-idea zoom rollover">
						<a href="{{url('y-tuong/'.$item->alias.'.html')}}" title="{{$item->name}}">
							<img src="{{asset('upload/news/'.$item->photo)}}">
							<i style="background: url('{{asset('public/images/icon.jpg')}}') center no-repeat;background-size: 45px;background-color: rgba(37,128,186,0.71);"></i>
						</a>
					</div>
					<div class="box-info-idea">
						<div class="name_idea"><a href="{{url('y-tuong/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></div>
						<div class="date-create">{{date('d/m/Y', strtotime($item->created_at))}} / Ý TƯỞNG</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection