{{-- étend de app.blade.php --}}
@extends('layouts.app')


@section('content')
<div class="container">
   {{-- @if ($age >= 18)
    <p>Vous avez {{ $age }} ans et êtes majeur</p>
    @else
    <p>Vous êtes mineur</p>       
   @endif
    <p>Ce text apparait en dessous de Hello world</p> --}}

    @php
        $tableau = ['pomme', 'poire', 'banane', 'fraise', 'kiwi']
    @endphp
    
    @foreach ($tableau as $fruit)
        <p>{{ $fruit }}</p>
    @endforeach

</div>
@endsection