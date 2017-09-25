{{ Form::open(['route' => 'il-ekle']) }}
{{ Form::label('ilAdi', 'İl Adı: ' ) }}
{{ Form::text('ilAdi') }}
{{ Form::submit('Yeni İl Ekle') }}
{{ Form::close() }}