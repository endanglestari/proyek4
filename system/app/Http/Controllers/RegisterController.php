<?php  

namespace App\Http\Controllers;
use App\Models\Register;

class RegisterController extends Controller {
	function index(){
		$data['list_register'] = Register::all();
		return view('register.index', $data);
	}
	function create(){
		return view('register.create');
	}
	function store(){
		$register = new Register;
		$register->nama = request('nama');
		$register->email = request('email');
		$register->password = bcrypt(request('password1'));
		$register->password = bcrypt(request('password2'));
		$register->save();
		return redirect('register')->with('primary', 'Data Berhasil Ditambahkan');
	}
	function show(Register $register){
		$data['register'] = $register;
		return view('register.show', $data);
	}
	function edit(Register $register){
		$data['register'] = $register;
		return view('register.edit', $data);
	}
	function update(Register $register){
		$register->nama = request('nama');
		$register->email = request('email');
		$register->password = bcrypt(request('password1'));
		$register->password = bcrypt(request('password2'));
		$register->save();

		return redirect('register')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Register $register){
		$register->delete();

		return redirect('register')->with('danger', 'Data Berhasil Dihapus');
	}
	
}