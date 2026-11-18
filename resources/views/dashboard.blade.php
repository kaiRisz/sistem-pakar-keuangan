@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1 class="h4 text-forest">Halo, {{ auth()->user()->name }}</h1>
    <p>Dashboard mahasiswa (akan dilengkapi di Section 3).</p>
</div>
@endsection