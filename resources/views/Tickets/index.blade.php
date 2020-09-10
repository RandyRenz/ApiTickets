@extends('layout')

@section('contenu')
<h1>Tickets</h1>
<hr>
<a href="/tickets/create" class="btn btn-primary">Ouvrir un ticket</a>
<hr>
<ul>


    <table class="table">
        <thead>
            <tr>
            <th scope="row">#</th>
            <th scope="row">Urgence</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Statut</th>
            <th scope="col">Auteur</th>
            <th scope="col">Date d'ouverture</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket )
            <tr>
            <th scope="row">{{ $ticket->id }}</th>
            <th scope="row">{{ $ticket->severity }}</th>
            <td>{{ $ticket->title }}</td>
            <td>{{ $ticket->content }}</td>
            <td>{{ $ticket->completed ? 'Traité' : 'Non traité' }}</td>
            <td>{{ $ticket->user_id }}</td>
            <td>{{ $ticket->created_at }}</td>
            </tr>
            @endforeach
         </tbody>
    </table>   
</ul>


@endsection