<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
        <!-- Styles -->
        @livewireStyles
    </head>
    <body>

@include('layouts.app', ['tipo' => $usuario->ID_TIPO ])

  <h4 class="text-center">Ticket {{$ticket->ID_TICKET}}</h4>

  <div id="chat" class="col-7"><livewire:chatlist /> </div>
    
    <livewire:chatform /> 

   

<style media="screen">
    #chat {
    text-align:left;
    margin:0 auto;
    margin-bottom:25px;
    padding:10px;
    background:#fff;
    height:270px;
    border:1px solid #000;
    overflow:auto; }
</style>


        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
            @livewireScripts
    </body>
</html>
