<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index()
    {
        
        return view('dashboard.home');
    }
    public function item(){
        $item = DB::table('item')->get();
        return view('dashboard.store',['item' => $item]);
    }
    public function order($idItem){
        $item = DB::table('item')->where('idItem',$idItem)->get();
	    return view('dashboard.formCustomer',['item' => $item]);
    }
    public function addCustomer(Request $request){
        $idItem = $request->idItem;
        $telpCustomer = $request->get('telpCustomer');
        DB::table('customer')->insert([
	    	'namaCustomer' => $request->namaCustomer,
	    	'alamatCustomer' => $request->alamatCustomer,
	    	'telpCustomer' => $request->telpCustomer,
            'emailCustomer' => $request->emailCustomer,
            'keterangan' => $request->keterangan
        ]);

        $item = DB::table('item')->where('idItem',$idItem)->get();
        $customer = DB::table('customer as c')
            ->where('c.telpCustomer',$telpCustomer)
            ->orderBy('c.idCustomer','desc')
            ->take(1)
            ->get();
        return view('dashboard.formOrder',['item' => $item],['customer' => $customer]);
    }
    public function addOrder(Request $request){
        
        $idDetailShipment = $request->idDetailShipment;
        
        $j = $request->jumlah;
        $idItem = $request->idItem;
        $idDetailShipment = $request->idDetailShipment;
        $ldate = date('Y-m-d');
        $item = DB::table('item as i')->where('idItem',$idItem)->get();
        $ship = DB::table('detail_shipment as ds')->where('ds.idDetailShipment',$idDetailShipment)->get();
        
        $harga = $request->hargaItem;
        $hi = $j*$harga;
        $hs = $ship->harga;
        $total = $hs + $harga;
        
        DB::table('order')->insert([
	    	'idCustomer' => $request->idCustomer,
	    	'idItem' => $request->idItem,
	    	'jumlah' => $request->jumlah,
            'harga' => $harga,
            'idDEtailShipment' => $idDetailShipment,
            'deliveryDate' => $ldate,
            'totalHarga' => $total
            ]);
	    return redirect('/');
    }
    
}
