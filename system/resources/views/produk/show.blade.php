@extends('template.base')

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
						<h4>
							RP. {{number_format($produk->harga)}}
							Stok : {{$produk->stok}}
							Berat : {{$produk->berat}} gr
						</h4> <br>
						<p>
							{!! nl2br($produk->deskripsi) !!}
						</p>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection