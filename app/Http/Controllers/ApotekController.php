<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Obat;

class ApotekController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function apotek()
    {
    	$data['obats'] = Obat::all();
    	return view('Apotek.apotek', $data);
    }
    public function tambahObat()
    {
    	return view('Apotek.tambahobat');
    }
    public function tambahObatAction(Request $r)
    {
    	$tambah = new Obat;
    	$tambah->nama = $r->namaObat;
    	$tambah->jumlah = $r->jumlahObat;
    	$tambah->save();

    	return redirect()->route('apotek');
    }
    public function editObat($id)
    {
    	$data['obats'] = Obat::where('_id', $id)->get();
    	return view('Apotek.editobat', $data);
    }
    public function editObatAction(Request $r)
    {
    	DB::table('obats')->where('_id', $r->input('idObat'))->update(
      ['nama' => $r->input('namaObat'),
      'jumlah' => $r->input('jumlahObat'),
      ]
      );

    	return redirect()->route('apotek');
    }
    public function deleteObatAction(Request $r){
    	$delete = Obat::where('_id', $r->idObat)->delete();
    	return redirect()->route('apotek');	
    }
}
