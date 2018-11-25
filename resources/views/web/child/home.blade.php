@extends('web.layouts.app')

@section('title', 'Home')
@section('content')

@if(Auth::check())

<div class="head">
	<div class="container">
	@if(Auth::check())
		<p>Yang Sudah Di Pesan</p>
		@else
		<p>Stand Muara Mutiara</p>
	@endif
		<div class="row">
         @foreach($pesantempat as $t)
			<div class="col-md-3">
				<div class="card" style="background:#797979; border:1px solid transparent; height:100px;">
                    <h5 class="text-center text-white mt-3">{{ $t->nama_lengkap}}</h5>
					<h5 class="text-center text-white mt-3">{{ $t->Tempat->kode_tempat}}</h5>
				</div>  
			</div>
         @endforeach
		</div>
	</div>
</div>
@else
<div class="head">
	<div class="container">
		<p>Stand Muara Mutiara</p>
		<div class="row">
         @foreach($tempat as $t)
			<div class="col-md-2">
				<div class="card" style="background:#797979; border:1px solid transparent; height:100px;">
                    <h5 class="text-center text-white mt-3">{{ $t->kode_tempat}}</h5>
				</div>  
			</div>
         @endforeach
		</div>
	</div>
</div>
@endif
@include('web.child.jumbroton')
@endsection()