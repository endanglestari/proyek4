@extends('template_client.base')

@section('content')

	<section class="content">
		<div class="container-fluid">
		  <div class="col-md-12 mt-5">
			<div class="card-header bg-info">
				Produk Vegefoods
			</div>
		 </div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<form action="{{url('produk-collection/filter')}}" method="post">
								@csrf
								<div class="form-group">
									<label for="" class="control-label">Nama</label>
									<input type="text" name="nama" class="form-control" value="{{$nama ??""}}">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" name="harga" class="form-control" value="{{$harga ??""}}">
								</div>
								<button class="btn btn-info float-right btn-sm"><i class="fa fa-search"></i>Filter</button>
							</form>
						</div>
					</div>
				</div>
				<br>
				<br>
				<!-- <div class="row"> -->
					@foreach($list as $produk)
					<div class="col-md-3 col-sm-3 col-6">
						<div class="info-box">
							<span class="info-box-icon bg-grey"><img src="{{url("public/$produk->foto")}}" alt=""></span>
						
							<div class="info-box-content">
								<span class="info-box-text">{{$produk->nama}}</span>
								<span class="info-box-number">Harga :{{$produk->harga_string}}</span>
								<span class="info-box-text">Berat :{{$produk->berat}}</span>
							</div>
						</div>
					</div>
					@endforeach
			</div>
			<button class="btn btn-info btn-sm ">{{$list->links()}}</button>
		</div>
	</section>

<br>
<br>
<br>

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="card">
					<div class="card-header">
						<h3>Detail Data Produk</h3>
					</div>
					<div class="card-body">
						@foreach($list as $produk)
						<div class="row">
							<div class="col-md-4">
								<p>
									<img src="{{url("public/$produk->foto")}}" alt="">
								</p>
							</div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-body">
										<h3>{{$produk->nama}}</h3>
										<hr>
										@include('produk.show.detail')
										<p>
											{!! nl2br($produk->deskripsi)!!}
										</p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					
					</div>
				</div>
			</div>
		</div>
		
	</div>


@endsection