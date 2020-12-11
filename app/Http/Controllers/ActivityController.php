<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{

    /** Method Index */
    public function index()
    {
        $aktivitas = DB::table('aktivitas')->get();

        return view('activity',['aktivitas' => $aktivitas]);
    }

    /** Method Tambah */
    public function tambah()
    {

	return view('tambah');
 
    }

    /** Method Store */
    public function store(Request $request)
    {

	DB::table('aktivitas')->insert([
		'aktivitas' => $request->input('aktivitas'),
		'tanggal' => $request->post('tanggal')
	]);

	return redirect('activity');
 
    }

    /** Method Edit */
    public function edit($No)
    {
	
	$aktivitas = DB::table('aktivitas')->where('No',$No)->get();
	
	return view('edit',['aktivitas' => $aktivitas]);
 
    }

    /** Method Update */
    public function update(Request $request)
    {
	DB::table('aktivitas')->where('No',$request-$No)->update([
		'aktivitas' => $request->input('aktivitas'),
		'tanggal' => $request->post('tanggal')
	]);

	return redirect('activity');
    }

    /** Method Hapus */
    public function hapus($id)
    {

	DB::table('aktivitas')->where('No',$id)->delete();
		
	return redirect('activity');
    }
}
