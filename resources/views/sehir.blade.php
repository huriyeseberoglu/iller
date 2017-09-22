<h3>{{$sehir}} Şehrine Hoşgeldiniz </h3>

@foreach(range(1,mt_rand(1,10)) as $numara)
    <a href="/sehir/{{$plaka}}/ilceler/{{$numara}}">{{$numara}} numaralı ilçe</a>
    <br>
@endforeach
<br><br>
<b><a href="/">Geri Dön</a></b>