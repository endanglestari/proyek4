<?php 

namespace App\Http\Controllers;
use App\Models\Pembeli;
use App\Models\Penjual;
use Auth;

class AuthController extends Controller 
{
	function showLogin(){
		return view('login');
	}

	function loginProcess(){
		//if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			// $user = Auth::user();
			// if($user->level == 1) return redirect('beranda/admin')->with('success', 'Login Anda Berhasil');
			// if($user->level == 0) return redirect('beranda/pengguna')->with('success', 'Login Anda Berhasil');
			//}else{
			//return back()->with('danger', 'Login Anda Gagal, Silahkan Periksa Kembali email dan Password Anda. Terima Kasih');
		//}

		$email = request('email');
		$user = Pembeli::where('email', $email)->first();
		if($user){
			$guard = 'pembeli';
		}else{
			$user = Penjual::where('email', $email)->first();
			if($user){
				$guard = 'penjual';
			}else{
				$guard = false;
			}
		}

		if(!$guard) {
			return back()->with('danger', 'Login Gagal, Email Tidak Ditemukan Di Database. Terima Kasih');
	}else {
			if(Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect("beranda/$guard")->with('success', 'Login Anda Berhasil');
			}else{
				return back()->with('danger', 'Login Anda Gagal, Silahkan Periksa Kembali Email dan Password Anda. Terima Kasih');
			}
		}

		//if(request('login_as') == 1){
			//if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
				//return redirect('beranda/pembeli')->with('success', 'Login Anda Berhasil');
			//}else{
				//return back()->with('danger', 'Login Anda Gagal, Silahkan Periksa Kembali email dan Password Anda. Terima Kasih');
				//}
		//}else{
			//if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
				//return redirect('beranda/penjual')->with('success', 'Login Anda Berhasil');
			//}else{
				//return back()->with('danger', 'Login Anda Gagal, Silahkan Periksa Kembali email dan Password Anda. Terima Kasih');
				//}

		//}
	}

	function logout(){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
		return redirect('beranda');
	}

	function registration(){

	}

	function forgotPassword(){

	}
	
}