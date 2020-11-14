@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
					 Edit Data Produk
					</div>
					<div class="card-body">
						<form action="{{url('admin/produk', $produk->id)}}" method="post">
							@csrf
							@method("PUT")
						<div class="form-group">
							<label for="" class="conrol-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label for="" class="conrol-label">Harga</label>
								<input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
								</div>
							</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="conrol-label">Berat</label>
								<input type="text" class="form-control" name="berat" value="{{$produk->berat}}">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="conrol-label">Stok</label>
								<input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
							</div>
						</div>
					</div>
						<div class="form-group">
							<label for="" class="conrol-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
						</div>
						<button class="btn btn-dark float-right"><span class="mdi mdi-content-save-all"></span>  Save </button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection