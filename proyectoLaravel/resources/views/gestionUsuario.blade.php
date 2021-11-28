@include('layouts.app', ['tipo' => $usuario->ID_TIPO ])
  <div class="container">
  <table class="table table-striped table-bordered">
      <thead class="thead-dark">
             <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Usuario</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Apellido</th>
                <th scope="col" class="text-center">Genero</th>
                <th scope="col" class="text-center">Accion</th>
             </tr>
      </thead>
    <tbody>
         @foreach ($usuarios as $usuario)
       <tr>  
          <td class="text-center">{{$usuario->ID_USUARIO}}</td>
          <td class="text-center">{{$usuario->USUARIO}}</td>
          <td class="text-center">{{$usuario->NOMBRE_USUARIO}}</td>
          <td class="text-center">{{$usuario->APELLIDO_USUARIO}}</td>
         @if ($usuario->GENERO == 1)
          <td class="text-center">Masculino</td> 
        @else 
         <td class="text-center">Femenino</td>              
        @endif
         <td class="text-center">
        <button  type="submit" class="btn btn-link" >@include('modalUsuaio', ['usuario' => $usuario->ID_USUARIO, 'incidencia' => $incidencia ])</button>
        @csrf
          <a  href={{"destroy/".$usuario->ID_USUARIO }}>Eliminar</a>
          </td>
          </tr>
         @endforeach
    </tbody>
    </div>
    <br>
</table>
</div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

