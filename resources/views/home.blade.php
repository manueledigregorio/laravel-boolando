<?php
$product = config('menues.product');
?>
@extends('layouts.main')

@section('content')

<div class="container-main container">
    @foreach ($product as $item)
        <div class="product" >
            <div class="switch">
            <img  class="modello uno" src="{{$item['primaryImage']}}" alt="{{$item['marca']}}">
            <img  class="modello due" src="{{$item['secondaryImage']}}" alt="{{$item['marca']}}">
            </div>
            <div class="lable">
            <span  class="discount">{{ $item['discount'] }}</span>
            <span  class="green">Sostenibilità</span>
            </div>
            <span class="hearts">&hearts;</span>
            <span>{{ $item['marca'] }}</span>
            <h2>{{ $item['modello'] }}</h2>
            <span class="euro-red">{{ $item['lastPrice'] }} &euro;</span> <span class="euro-bar">{{ $item['fullPrice'] }} </span>
        </div>
    @endforeach


</div>

@endsection

@section('title')
    | home
@endsection

