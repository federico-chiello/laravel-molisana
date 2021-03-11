@extends('layouts.app')

@section('title', $formato['titolo'])
    
@section('content')
<div class="container">
    <h1>{{ $formato['titolo'] }}</h1>
   <img src="{{ $formato['src-h'] }}" alt="">
   <img src="{{ $formato['src-p'] }}" alt="">
</div>
    
@endsection