<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Chatlist extends Component
{
	public $usuario;
    public $mensajes;
    protected $ultimoId;
        
    protected $listeners = ['mensajeRecibido', 'cambioUsuario'];
    
    public function mount()
    {
        $ultimoId = 0;
        $this->mensajes = [];                       
       
    }

    public function  mensajeRecibido($data)
    {        
        $this->actualizarMensajes($data);
    }

    public function actualizarMensajes($data)
    {                
            // El contenido de la Push
            //$data = \json_decode(\json_encode($data));
            
            $mensajes = DB::table('chat')->get();
            //$this->mensajes = [];            

            
  
    }

    public function resetMensajes()
    {
        $this->mensajes = [];
        $this->actualizarMensajes();
    }

    public function dydrate()
    {
        if($this->usuario == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaUsuario');
        }
    }

    public function render()
    {
        return view('livewire.chatlist');
    }
}
