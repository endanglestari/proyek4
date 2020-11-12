@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Tambah Data Kategori
					</div>
					<div class="card-body">
						<form action="{{url('kategori')}}" method="post">
							@csrf
						<div class="form-group">
							<label for="" class="conrol-label">Nama</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<button class="btn btn-dark float-right"><span class="fa fa-save"></span>  Save </button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection