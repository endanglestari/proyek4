<h4>
	{{$produk->harga}} |
	SBerat : {{$produk->berat}} gr |
	Seller : {{$produk->seller->nama}} |
	Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</h4>