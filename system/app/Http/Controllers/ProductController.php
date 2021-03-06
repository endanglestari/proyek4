<?php  

namespace App\Http\Controllers;
use App\Models\Product;
use Faker;

class ProductController extends Controller {
	function index(){
		$user = request()->user();
		$data['list_produk'] = Product::all();
		return view('produk.index', $data);
	}
	
	function show(Product $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	
	function update(Product $produk){
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stok = request('stok');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Produk $produk){
		$produk->handleDelete();
		$produk->delete();

		return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
	}

	function filter(){
		$nama = request('nama');
		//$stok = explode(",", request('stok'));
		//$data['harga_min'] = $harga_min = request('harga_min');
		//$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::whereNot('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereNotIn('stok', $nama)->get();
		//$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::whereNull('stok')->get();
		//$data['list_produk'] = Produk::whereNotNull('stok')->get();
		//$data['list_produk'] = Produk::whereDate('created_at', '2020-11-15')->get();
		//$data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
		$data['nama'] = $nama;
		//$data['stok'] = request('stok');
		return view('produk.index', $data);
	}
}