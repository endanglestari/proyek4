<?php 

namespace App\Http\Controllers;
use App;
use App\Models\Produk;
use App\Models\Provinsi;
use Config;

class HomeController extends Controller {

	function showBeranda(){
		return view('beranda');
	}

	function showBerandaa(){
		return view('berandaa');
	}

	function showKontak(){
		return view('kontak');
	}

	function showProduk(){
		return view('produk');
	}

	function showKategori(){
		return view('kategori');
	}

	public function testCollection()
	{
		$list_bike = ['Sayur', 'Buah', 'Jus', 'Bahan Kering'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		// Sorting
		// Sort By Harga Terendah
		// dd($list_produk->sortBy('harga'));
		// Sort By Harga Tertinggi
		// dd($list_produk->sortByDesc('harga'));
		
		// Take
		// skip
		// Map

		//$map -$list_produk->map(function($item){
			//$item->stok = $item->stok+10;
			//return $item;
		//});

		// Filter

		//$filtered = $list_produk->filter(function($item){
			//return $item->harga < 15000;
		//});

		//dd($filtered);

		//$sum = $list_produk->average('harga');
		//dd($sum);
		//dd($map[10]);

		$data['list'] = Produk::Paginate(15);
		return view('test-collection', $data);

		dd($list_bike, $collection, $list_produk);
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view ('test-ajax', $data);
	}

	function testAlamat(){
		$data['list_provinsi'] = Provinsi::all();
		return view ('alamat', $data);
	}

}