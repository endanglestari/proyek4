@extends('template.base')

@section('content')

	<div class="container">
		<div class="row mt-5">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
					<img src="{{url("public/$kategori->foto")}}" alt="" class="img-fluid">	
					</div>
				</div>
			</div>	
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
					 Edit Data Kategori
					</div>
					<div class="card-body">
						<form action="{{url('admin/kategori', $kategori->id)}}" method="post" enctype="multipart/form-data">
							@csrf
							@method("PUT")
						<div class="form-group">
							<label for="" class="conrol-label">Jenis</label>
							<input type="text" class="form-control" name="jenis" value="{{$kategori->jenis}}">
						</div>
						<div class="form-group">
							<label for="" class="conrol-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$kategori->nama}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label for="" class="conrol-label">Foto</label>
								<input type="file" class="form-control" name="foto" accept=".png">
								</div>
							</div>
						<div class="col-md-6">
						<div class="form-group">
							<label for="" class="conrol-label">Stok</label>
							<input type="text" class="form-control" name="stok" value="{{$kategori->stok}}">
						</div>
					</div>

						</div>
						<button class="btn btn-dark float-right"><span class="mdi mdi-content-save-all"></span>  Save </button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection