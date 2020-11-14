@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Detail Data Registrasi User
					</div>
					<div class="card-body">
						<h3>{{$register->nama}}</h3>
						<hr>
						<h4>
							Email : {{$user->email}}
						</h4> 
					</div>
				</div>
			</div>
		</div>	
	</div>

@endsection