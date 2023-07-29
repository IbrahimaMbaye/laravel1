@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-info text-white">Liste des candidats</div>
        <div class="card-body">
<table class="table">
        <tr>
        <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de Naissance</th>
            <th>Parti</th>
            <th>Action</th>
            
</tr>
@foreach ($candidat as $candidats)
<tr>
    <td>{{ $candidats->id}}</td>
    <td>{{ $candidats->nom}}</td>
    <td>{{ $candidats->prenom}}</td>
    <td>{{ $candidats->dateNaissance}}</td>
    <td>{{ $candidats->parti}}</td>
    <td>
        <a href="http://" class="btn btn-warning" >Modifier</a>
        <a href="http://"class="btn btn-danger">Supprimer</a>
    </td>
</tr>
@endforeach 
</table>
</div>
</div>
</div>

@endsection