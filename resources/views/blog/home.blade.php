@extends('app')

@section('header')

	<title>Laravel &raquo; Blog</title>

@endsection

@section('content')

<div class="row">
	@foreach($artikel as $key)
	<br>
	<div class="col s12 m12">
		<div class="card">
			<div class="card-image">
				<img src="{{url('images/'.$key->sampul)}}">
				<span class="card-title">{{$key->judul}}</span>
				</div>
			<div class="card-content">
				<p>{{$key->isi}}</p>
				<br>
				<div class="card-action">
				<div class="right">
					By {{\App\User::find($key->id_user)['name']}} at {{$key->created_at->format('D M, d Y \a\t h:i a')}}</div>
				</div>
					<a href="{{url($key->slug)}}">Read More</a>
			</div>
		</div>
	</div>
	@endforeach

<div class="right">
	{!! $artikel->render() !!}
	</div>
</div>

@endsection

