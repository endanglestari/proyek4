@extends('template_admin.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
					 Data Produk
					</div>
					<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<hr>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Berat</th>
								<th>Stok</th>
							
							</thead>
							<tbody>
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
									
										<div class="btn-group">
										<a href="{{url('admin/produk', $produk->id)}}" class="btn btn-dark"><span class="fa fa-info"></span></a> &nbsp
										@include('template.utils.delete', ['url' => url('admin/produk', $produk->id)])
									</div>
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->berat}}</td>
									<td>{{$produk->stok}}</td>	
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