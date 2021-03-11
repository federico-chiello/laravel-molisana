@extends('layouts.app')

@section('title', 'sezione prodotti')
    
@section('content')
<div class="container">
    @foreach ($tipologia as $key => $tipo)
        <h2>{{ $key }}</h2>
        <div class="box-container">
            @foreach ($tipo as $key => $pasta)
                <div class="box">
                    <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    <div class="title">
                        <a href="{{ route('pagina-dettagli', ['posizione' => $key]) }}">{{ $pasta['titolo'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
    
@endsection