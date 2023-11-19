@extends('layouts.main')

@section('content')

<div class=" container-main container d-flex">
    <div class="product">
        <h1>Prodotto {{$product['marca']}}</h1>
        <div class="switch">
            <img  class="modello uno" src="{{$product['primaryImage']}}" alt="{{$product['marca']}}">
            <img  class="modello due" src="{{$product['secondaryImage']}}" alt="{{$product['marca']}}">
        </div>
        <div>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore laboriosam voluptatum aspernatur blanditiis praesentium architecto, quaerat tenetur sed perferendis earum. Odio, amet. Quo deserunt vero, minima repudiandae excepturi veniam et. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae illo magni ipsam atque recusandae aut, maiores, tempore fugiat similique at ipsa exercitationem cum neque nam quos vel porro, nulla eius?
            </p>
        </div>
    </div>


</div>



@endsection

@section('title')
    | Homepage
@endsection
