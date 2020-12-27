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
							{{$produk->harga}} |
							Stok : {{$produk->stok}} pc |
							Berat : {{$produk->berat}} gr |
							Seller : {{$produk->seller->nama}} |
							Tanggal Produk : {{$produk->created_at->diffForHumans()}}
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