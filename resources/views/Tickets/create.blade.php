@extends('layout')

@section('contenu')
<a href="/tickets">Retour aux tickets</a>
<h1>Ouvrir un ticket</h1>
<hr>
<form action="/tickets" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Indiquer un titre...">
    </div>

    <div class="form-group">
        <input type="text" class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Expliquer votre incident...">
    </div>
    
    <div class="form-group">
        <select class="custom-select @error('severity') is-invalid @enderror" name='severity'>
            <option selected>Urgence?</option>
            <option value="0">Non</option>
            <option value="1">Oui</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter le ticket</button>
</form>

@endsection