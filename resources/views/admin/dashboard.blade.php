@extends('layouts.app')
@section('title', 'Panel Admin')

@section('content')
<div class="container">
    <h1 class="h4 text-forest">Panel Admin</h1>
    <p>Halo, {{ auth()->user()->name }}. Pengelolaan pengguna, parameter, dan rules akan dilengkapi di Section 4.</p>
</div>
@endsection