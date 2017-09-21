<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListeleController extends Controller
{
    function  dizi()  {
        $iller = array(
            "ADANA"          => "ADANA",
            "ADIYAMAN"       => "ADIYAMAN",
            "AFYONKARAHİSAR" => "AFYONKARAHİSAR",
            "AĞRI"                => "AĞRI",
            "AMASYA"         => "AMASYA",
            "ANKARA"          => "ANKARA",
            "ANTALYA"       => "ANTALYA",
            "ARTVİN"          => "ARTVİN",
            "AYDIN"            => "AYDIN",
            "BALIKESİR"     => "BALIKESİR",
            "BİLECİK"          => "BİLECİK",
            "BİNGÖL"          => "BİNGÖL",
            "BİTLİS"           => "BİTLİS",
            "BOLU"              => "BOLU",
            "BURDUR"         => "BURDUR",
            "BURSA"            => "BURSA",
            "ÇANAKKALE"  => "ÇANAKKALE",
            "ÇANKIRI"        => "ÇANKIRI",
            "ÇORUM"           => "ÇORUM",
            "DENİZLİ"        => "DENİZLİ",
            "DİYARBAKIR" => "DİYARBAKIR",
            "EDİRNE"          => "EDİRNE",
            "ELAZIĞ"          => "ELAZIĞ",
            "ERZİNCAN"    => "ERZİNCAN",
            "ERZURUM"      => "ERZURUM",
            "ESKİŞEHİR"   => "ESKİŞEHİR",
            "GAZİANTEP"  => "GAZİANTEP",
            "GİRESUN"        => "GİRESUN",
            "GÜMÜŞHANE" => "GÜMÜŞHANE",
            "HAKKARİ"        => "HAKKARİ",
            "HATAY"           => "HATAY",
            "ISPARTA"        => "ISPARTA",
            "MERSİN"         => "MERSİN",
            "İSTANBUL"     => "İSTANBUL",
            "İZMİR"            => "İZMİR",
            "KARS"               => "KARS",
            "KASTAMONU"      => "KASTAMONU",
            "KAYSERİ"        => "KAYSERİ",
            "KIRKLARELİ"  => "KIRKLARELİ",
            "KIRŞEHİR"     => "KIRŞEHİR",
            "KOCAELİ"       => "KOCAELİ",
            "KONYA"          => "KONYA",
            "KÜTAHYA"     => "KÜTAHYA",
            "MALATYA"     => "MALATYA",
            "MANİSA"       => "MANİSA",
            "KAHRAMANMARAŞ"  => "KAHRAMANMARAŞ",
            "MARDİN"       => "MARDİN",
            "MUĞLA"         => "MUĞLA",
            "MUŞ"              => "MUŞ",
            "NEVŞEHİR"   => "NEVŞEHİR",
            "NİĞDE"          => "NİĞDE",
            "ORDU"            => "ORDU",
            "RİZE"              => "RİZE",
            "SAKARYA"     => "SAKARYA",
            "SAMSUN"      => "SAMSUN",
            "SİİRT"            => "SİİRT",
            "SİNOP"          => "SİNOP",
            "SİVAS"          => "SİVAS",
            "TEKİRDAĞ"   => "TEKİRDAĞ",
            "TOKAT"         => "TOKAT",
            "TRABZON"    => "TRABZON",
            "TUNCELİ"      => "TUNCELİ",
            "ŞANLIURFA" => "ŞANLIURFA",
            "UŞAK"             => "UŞAK",
            "VAN"               => "VAN",
            "YOZGAT"       => "YOZGAT",
            "ZONGULDAK" => "ZONGULDAK",
            "AKSARAY"     => "AKSARAY",
            "BAYBURT"     => "BAYBURT",
            "KARAMAN"    => "KARAMAN",
            "KIRIKKALE"   => "KIRIKKALE",
            "BATMAN"      => "BATMAN",
            "ŞIRNAK"        => "ŞIRNAK",
            "BARTIN"        => "BARTIN",
            "ARDAHAN"   => "ARDAHAN",
            "IĞDIR"           => "IĞDIR",
            "YALOVA"       => "YALOVA",
            "KARABÜK"     => "KARABÜK",
            "KİLİS"            => "KİLİS",
            "OSMANİYE" => "OSMANİYE",
            "DÜZCE"         => "DÜZCE"
        );
        foreach($iller as $deger)
        {
            echo '<a href="/sehir/'.$deger.'">'.$deger.'</a><br/>';

        }
    }
    public function sehir($a){
        echo $a;
        die('selam');
    }
}
