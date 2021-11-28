@include('layouts.app', ['tipo' => $usuario->ID_TIPO ])

        <div class="container-fluid">
          
             
            <font SIZE=4> 
              <div class="container 540px">
                <!-- tabla-->
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Ticket</th>                        
                        <th scope="col">Usuario</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acción</th>
                      </tr>
                      
                    </thead>
                    <tbody>

                  <!--foreach carga los datos de la base de datos en filas y columnas-->                  
                    @foreach ($incidencia as $inciden)
                      <tr>
                        <td scope="row">{{$inciden->ID_TICKET}}</th>                        
                        <td> {{$inciden->USUARIO}}</td> 
                        <td>{{$inciden->FECHA}}</td>
                        <td>{{$inciden->ESTADO}}</td>
                        <td >

                        <!--if carga el modal de la vista modalIncidencia y valida si debe asignar o solo ver la incidencia-->
                          @if ($inciden->ESTADO == 1)                                                                          
                            <center>
                              <a href="" data-toggle="modal" data-target="#asignacion""">Asignar</a>
                            </center>                          
                          @else
                            <center>
                              <a href="" data-toggle="modal" data-target="#asignacion""">Ver</a>
                            </center>                                         
                          @endif
                        <!--fin if--> 

                      </td>                 
                      </tr>
                    @endforeach
                  <!--Finforeach -->   

                    </tbody>
                  </table>
                <!-- Fin Tabla-->

              </div>
            </font>
        </div>
        <!--Fin del contenedor card-->


        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        
    </body>
</html>
