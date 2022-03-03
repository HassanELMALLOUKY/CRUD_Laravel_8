@extends('layouts.app')


@section('content')
    <h1>Modifier le produit</h1>
    <form method="post" action="{{route('produits.update',$produit->id)}}">
        @csrf
        @method('put')
        Nom : <input type="text" value="{{$produit->Nom}}"><br><br>
        Prix: <input type="text" value="{{route($produit->prix)}}"><br><br>
        <input type="submit" value="Mise à jour">
    </form>

@endsection
