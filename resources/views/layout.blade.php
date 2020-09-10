<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="https://www.green-conseil.com/statics/images/logo.ico">

        <title>API Tickets - Randy Cheniouni</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    </head>
    <body>
        <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                Ticket créer avec succès
            </div>
            @endif
            @yield('contenu')
        </div>
    </body>
</html>
