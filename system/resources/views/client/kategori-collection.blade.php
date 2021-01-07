@extends('template_client.base')

@section('content')

<section class="content">
		<div class="container-fluid">
		  <div class="col-md-6 mt-5">
			<div class="card-header bg-info">
				Kategori Vegefoods
			</div>
		 </div>
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<form action="{{url('kategori-collection/filter')}}" method="post">
								@csrf
								<div class="form-group">
									<label for="" class="control-label">Jenis</label>
									<input type="text" name="jenis" class="form-control" value="{{$jenis ??""}}">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Nama</label>
									<input type="text" name="nama" class="form-control" value="{{$nama ??""}}">
								</div>
								<button class="btn btn-info float-right btn-sm"><i class="fa fa-search"></i>Filter</button>
							</form>
						</div>
					</div>
				</div>
				<br>
				<br>
				<!-- <div class="row"> -->
					@foreach($list as $kategori)
					<div class="col-md-3 col-sm-3 col-6">
						<div class="info-box">
							<span class="info-box-icon bg-grey"><img src="{{url("public/$kategori->foto")}}" alt=""></span>
						
							<div class="info-box-content">
								<span class="info-box-text">{{$kategori->jenis}}</span>
								<span class="info-box-text">Nama :{{$kategori->nama}}</span>
								<span class="info-box-text">Stok :{{$kategori->stok}}</span>
							</div>
						</div>
					</div>
					@endforeach
			</div>
			<button class="btn btn-info btn-sm ">{{$list->links()}}</button>
		</div>
	</section>

@endsection