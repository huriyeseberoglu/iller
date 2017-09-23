<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeleController extends Controller
{
    private function getSehirList()
    {
        $iller = DB::table('il')
        ->get();
        $result = [];
        foreach($iller as $il)
        {
          $result[] = $il->il;
        }


        return $result;

    }

    function index()
    {
        $iller=$this->getSehirList();
        return view('welcome',['iller' =>$iller]);
    }

    public function sehir($a)
    {
        $iller=$this->getSehirList();
        $sehir='Böyle Bir Şehir Yok';
        if(isset($iller[$a]))
        {
            $sehir=$iller[$a];
        }
        return view('sehir',['sehir' =>$sehir,'plaka'=>$a]);
    }

    public function ilce($sehir, $ilce)
    {

        $iller = $this->getSehirList();

        $sehirName = 'olmayan şehir';
        if (isset($iller[$sehir])) {
            $sehirName = $iller[$sehir];
        }

        return view("ilce", ['ilce' => $ilce, 'sehir' => $sehir, 'sehirIsmi' => $sehirName]);


    }

}
