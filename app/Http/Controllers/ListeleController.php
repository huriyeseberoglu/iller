<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListeleController extends Controller
{
    private function getSehirList()
    {
        return array
        (
            "",
            "Adana",
            "Adıyaman",
            "Afyonkarahisar",
            "Ağrı",
            "Amasya",
            "Ankara",
            "Artvin",
            "Aydın",
            "Balıkesir",
            "Bilecik",
            "Bingöl",
            "Bitlis",
            "Bolu",
            "Burdur",
            "Bursa",
            "Çanakkale",
            "Çankırı",
            "Çorum",
            "Denizli",
            "Diyarbakır",
            "Edirne",
            "Elazığ",
            "Erzincan",
            "Erzurum",
            "Eskişehir",
            "Gaziantep",
            "Giresun",
            "Gümüşhane",
            "Hakkari",
            "Hatay",
            "Isparta",
            "Mersin",
            "İstanbul",
            "İzmir",
            "Kars",
            "Kastamonu",
            "Kayseri",
            "Kırklareli",
            "Kırşehir",
            "Kocaeli",
            "Konya",
            "Kütahya",
            "Malatya",
            "Manisa",
            "Kahramanmaraş",
            "Mardin",
            "Muğla",
            "Muş",
            "Nevşehir",
            "Niğde",
            "Ordu",
            "Rize",
            "Sakarya",
            "Samsun",
            "Siirt",
            "Sinop",
            "Sivas",
            "Tekirdağ",
            "Tokat",
            "Trabzon",
            "Tunceli",
            "Şanlıurfa",
            "Uşak",
            "Van",
            "Yozgat",
            "Zonguldak",
            "Aksaray",
            "Bayburt",
            "Karaman",
            "Kırıkkale",
            "Batman",
            "Şırnak",
            "Bartın",
            "Ardahan",
            "Iğdır",
            "Yalova",
            "Karabük",
            "Kilis",
            "Osmaniye",
            "Düzce"
        );
    }
    function index()
    {
        $iller = $this->getSehirList();
        return view('welcome', ['iller' => $iller]);
    }

    public function sehir($a)
    {
        $iller = $this->getSehirList();
        $sehir = 'Böyle Bir Şehir Yok';
        if (isset($iller[$a])) 
        {
            $sehir = $iller[$a];
        }
        return view('sehir', ['sehir' => $sehir, 'plaka' => $a]);
    }

    public function ilce($sehir, $ilce)
    {

        $iller = $this->getSehirList();

        $sehirName = 'olmayan şehir';
        if (isset($iller[$sehir]))
        {
            $sehirName = $iller[$sehir];
        }

        return view("ilce", ['ilce' => $ilce, 'sehir' => $sehir, 'sehirIsmi' => $sehirName]);
    }

}
