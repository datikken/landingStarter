@extends('layouts.app')

@section('content')
    @include('components.hero')
    @include('components.about')
    @include('components.products.vodoblok')
    @include('components.products.evopc')
    @include('components.products.mining')
    @include('components.contacts')
    @include('components.popups.popup-whatsapp')

@endsection
