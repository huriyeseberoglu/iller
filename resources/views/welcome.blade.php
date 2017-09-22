<b style="font-size: 25px; ">İLLER</b>
<br>
@foreach($iller as $plaka=>$il)
    <a href="/sehir/{{$plaka}}">{{$il}}</a>
    <br>
@endforeach
