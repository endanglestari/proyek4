@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
					 Edit Data Registrasi Admin
					</div>
					<div class="card-body">
						<form action="{{url('register', $register->id)}}" method="post">
							@csrf
							@method('PUT')
						<div class="form-group">
							<label for="" class="conrol-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$register->nama}}">
						</div>
						<div class="form-group">
							<label for="" class="conrol-label">Email</label>
							<input type="email" class="form-control" name="email" value="{{$register->email}}">
						</div>
						<div class="form-group">
							<label for="" class="conrol-label">Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<button class="btn btn-dark float-right"><span class="fa fa-save"></span>  Save </button>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection