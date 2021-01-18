@extends('template_client.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Detail Produk
					</div>
					<div class="card-body">
						<h3>{{$produk->nama}}</h3>
						<hr>
						@include('produk.show.detail')
						 <br>
						<p>
							{!! nl2br($produk->deskripsi) !!}
						</p>
						<p>
							<img src="{{url("public/$produk->foto")}}" alt=" ">
						</p>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection