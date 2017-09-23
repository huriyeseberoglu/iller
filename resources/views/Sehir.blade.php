<h3>{{$sehir}} Şehrine Hoşgeldiniz</h3>

@foreach(range(1,mt_rand(2,20)) as $numara)
    <a href="/sehir/{{$plaka}}/ilceler/{{$numara}}">{{$numara}} numaralı ilçe</a>
    <br>
@endforeach
<br><br>
<a href="/">Geri Dön</a>

