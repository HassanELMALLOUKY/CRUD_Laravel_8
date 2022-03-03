@extends('layouts.app')

@section('content')
    <h1>Liste des Produits:</h1>
    <button><a href="{{ route('produits.create') }}">Créer un produit</a></button>
    <table class="table">
        <thead>
        <tr>
            <th>ID produit</th>
            <th>Nom produit</th>
            <th>Prix produit</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($produits as $produit)
            <tr>
                <th>{{$produit->id}}</th>
                <th>{{$produit->Nom}}</th>
                <th>{{$produit->prix}}</th>
                <th>
                    <button><a href="{{route('produits.edit'),$produit->id}}">Edit</a></button>
                    <button><a href="{{route('produits.show'),$produit->id}}">Show</a></button>
                    <button><a href="{{route('produits.destroy'),$produit->id}}">Delete</a></button>
                </th>

            </tr>

        @endforeach

        </tbody>

    </table>
@endsection
