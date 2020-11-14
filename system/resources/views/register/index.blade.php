@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Data Registrasi
					 <a href="{{url('register/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data Registrasi</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>	
								<th>Email</th>	
							</thead>
							<tbody>
								@foreach($list_register as $register)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('register', $register->id)}}" class="btn btn-dark"><span class="fa fa-info"></span></a>
										<a href="{{url('register', $register->id)}}/edit" class="btn btn-warning"><span class="fa fa-edit"></span></a>
										@include('template.utils.delete', ['url' => url('register', $register->id)])
									</div>
									</td>
									<td>{{$register->nama}}</td>
									<td>{{$register->email}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection