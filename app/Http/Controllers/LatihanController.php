<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangModel;
class LatihanController extends Controller
{
    public function template()
    {
    	return view('test');
    }

     public function template2()
    {
    	return view('test2');
    }

    public function template3()
    {
    	return view('test3');
    }

     public function template4()
    {
    	return view('test4');
    }

    public function template5()
    {
        return view('test5');
    }

        public function table()
    {
        //menampilkan semua data melalu model
        $barang = BarangModel::all();
        return view('barang',compact('barang'));
    }
}
