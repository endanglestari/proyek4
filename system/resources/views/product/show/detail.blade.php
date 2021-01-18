<h4>
	Harga : {{$produk->harga}} </h4>
	<h4>
	Berat : {{$produk->berat}} gr </h4>
	<h4>
	Seller : {{$produk->seller->nama}} </h4>
	<h4>
	Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</h4>