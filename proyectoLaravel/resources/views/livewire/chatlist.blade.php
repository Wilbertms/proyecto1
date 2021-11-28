<div class="mt-3">

    <h3><strong>Últimos 5 mensajes</strong></h3>    

    <div class="card">        
        <div class="card-body">
        	
            @foreach($mensajes as $mensaje)        
                <div>
                   
                        <div class="alert alert-success" style="margin-left: 50px;">
                            
                            <br><span class="text-muted">{{$mensaje->MENSAJE}}</span>
                        </div>
                    
                </div>        
            @endforeach 
        </div>
    </div>    

    <script>
        
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
  
        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster: '{{env('PUSHER_APP_CLUSTER')}}',
            forceTLS: true
        });
        
        var channel = pusher.subscribe('chat-channel');
        
        channel.bind('chat-channel', function(data) {            
            window.livewire.emit('mensajeRecibido', data);
        });
        
        setTimeout(function(){ window.livewire.emit('solicitaUsuario'); }, 100);
    </script>

</div>