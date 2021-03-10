@extends('layouts.app')

@section('title', 'sezione prodotti')
    
@section('content')
<div class="container">
    <div class="box-container">
        @foreach ($tipologia as $tipo)
        <div class="box">
            <img src="{{ $tipo['src'] }}" alt="{{ $tipo['titolo'] }}">
        </div>
        {{ $tipo['titolo'] }}
        @endforeach
    </div>
</div>
    
@endsection