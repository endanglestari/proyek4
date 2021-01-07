<?php 
 namespace App\Http\Controllers;


 use App\Models\Produk;
 use App\Models\Kategori;
 use App\Models\Promo;

 class ClientController extends Controller
 {
 	public function produkCollection()
 	{
 		$list_produk = Produk::all();

 		$data['list'] = Produk::simplePaginate(8);
 		return view('client.produk-collection', $data);
 	}
 	function filter(){
 		$nama = request('nama');
 		$harga = explode((","), request('harga'));
 		$data['list_produk'] = Produk::where('nama', 'like', "%nama%")->get();
 		$data['nama'] = $nama;
 		$data['harga'] = request('harga');
 		return view('client.produk-collection', $data);
 	}
 	public function kategoriCollection()
 	{
 		$list_kategori = Kategori::all();

 		$data['list'] = Kategori::simplePaginate(2);
 		return view('client.kategori-collection', $data);
 	}
 }