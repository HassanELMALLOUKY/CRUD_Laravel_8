@extends('layouts.app')
@section('content')
<h1>Créer un produit:</h1>
@if($errors->any())
    <h3>Wooops errors!!!!</h3>
    <ul>
        @foreach( $errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<button><a class="btn btn-primary" href="{{ route('produits.index') }}" >Back</a></button><br><br>
    <form action="{{route('produits.store')}}" method="POST">
        @csrf
        Nom : <input type="text" name="nom"> <br><br>
        Prix: <input type="number" name="prix"><br><br>
        <input type="submit">
    </form>

@endsection
