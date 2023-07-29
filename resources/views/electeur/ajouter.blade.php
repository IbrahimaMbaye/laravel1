@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
<div class ="container ">
    @if(session('success'))
    <div class="alert alert-sucess mt-3">
      {{ session('success') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-info text-white">Ajouter un electeur</div>

        <div class="card-body">
<form action="{{ route('store.electeur' )}}" method="post">
    @csrf
<div class="form-group">
    <label for="">Nom:</label>
<input type="text" name="nom" id="" class="form-control">
</div>

<div class="form-group">
    <label for="">Prenom:</label>
<input type="text" name="Prenom" id="" class="form-control">
</div>

<div class="form-group">
    <label for="">cni:</label>
<input type="nombre" name="cni" id="" class="form-control">
</div>

<div class="form-group">
    <label for="">candidat_id:</label>
<input type="text" name="canditat" id="" class="form-control">
</div>
<br>
<div class="form-group">
  <button class="btn btn-success">Enregistrer</button>
</div>
</form>
        </div>
    </div>
</div>

@endsection

