<!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{$usuario}}">
  Ver
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$usuario}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
         <div class="container">
  <table class="table table-striped table-bordered">
      <thead class="thead-dark">
             <tr>
                <th scope="col" class="text-center">ticket</th>
                <th scope="col" class="text-center">fecha</th>
                <th scope="col" class="text-center">Dispositivo</th>
                <th scope="col" class="text-center">Marca</th>
                <th scope="col" class="text-center">Estado</th>
             </tr>
      </thead>
    <tbody>
         @foreach ($incidencia as $incidencia)
         <?php if ($incidencia->ID_USUARIO == $usuario) {
             
          ?>
        <tr>  
          <td class="text-center">{{$incidencia->ID_TICKET}}</td>
          <td class="text-center">{{$incidencia->FECHA}}</td>
          <td class="text-center">{{$incidencia->DISPOSITIVO}}</td>
          <td class="text-center">{{$incidencia->MARCA}}</td>
          <td class="text-center">{{$incidencia->ESTADO}}</td>
        </tr>
        <?php } ?>
         @endforeach
    </tbody>
    </div>
    <br>
</table>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>