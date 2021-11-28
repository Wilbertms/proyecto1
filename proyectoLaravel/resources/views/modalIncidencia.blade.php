<!DOCTYPE html>
$incidencia = $inciden
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>modalIncidencia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
        <!-- Styles -->
        
    </head>
    <body>
        
        @yield('content')
        <form action="/asignarTecnico", method="POST">
        
            @csrf

        <!-- Button trigger modal -->
        <a href="" data-toggle="modal" data-target="#asignacion">
        </a>
        
        <!-- Modal -->
        <div class="modal fade " id="asignacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                 <div class="container-fluid">
                    <div class="row text-center">
                        <div class="card-body text-center">                         
                            <a href="/gestionIncidencia" class="card-link"><FONT SIZE=4>Gestion Incidencia</font></a><FONT SIZE=4> | </font>
                            <a href="/chat" class="card-link"><FONT SIZE=4>Chat</font></a><FONT SIZE=4> | </font>
                            <a href="/respuesta" class="card-link"><FONT SIZE=4>Solución Incidencia</font></a>
                        <br>
                        </div>
                    </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-12 col-md-8 col-lg-12">
                                      <br/>
                                      <div class="card border-primary mb-3">
                                          <div class="card-body">
                                            <form>
                                                  <div class="row text-center">
                                                      <div class="form-group col">
                                                          <label name="ID">
                                                            ID: {{$inciden->ID_USUARIO}}
                                                        </label>                                      
                                                      </div>
                                                      <div class="form-group col">
                                                          <label>Usuario: {{$inciden->USUARIO}} </label>
                                                      </div>
                                                      <div class="form-group col">
                                                        <label>Ticket: {{$inciden->ID_TICKET}}</label>
                                                    </div>
                                                </div>
                                            </form>
                                            <form>
                                                  <div class="row">
                                                      <div class="form-group col-lg-5">                                                          
                                                            <input type="text" class="form-control" name="dispositivo" value="{{$inciden->DISPOSITIVO}}">                                                                                                                    
                                                      </div>
                                                      <div class="form-gruop col-lg-2">
                                                     </div>
                                                      <div class="form-group col-lg-5 ">
                                                        <input type="text" class="form-control" name="marca" value="{{$inciden->MARCA}}">
                                                     </div>
                                                </div>
                                            </form>
                                            <form>
                                                
                                                <div>
                                                    <div class="form-group">
                                                        <br>
                                                        <textarea class="form-control" rows="3" name="detalle">{{$inciden->DESCRIPCION}}</textarea>
                                                        <br>
                                                    </div>
                                                    <div class="form-group">
                                                        <center>
                                                            <label for="">Técnico:  </label>  
                                                            <select class="form-select form-select-sm" aria-label="multiple select example" name="tecnico">
                                                                <option selected>Seleccionar...</option>
                                                                @foreach ($incidencia as $inciden)
                                                                    <option value="{{$inciden->ID_USUARIO}}">{{$inciden->ID_USUARIO}}</option>
                                                                @endforeach
                                                            </select>
                                                        </center>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                            <div class="card-header">
                                                <div class="text-center">
                                                    <div >
                                                    <button class="col-md-2 btn btn-outline-info"> Chat</button>
                                                    <button type="submit" class="col-md-3 btn btn-outline-primary"> Asignar</button>
                                                    <button type="button" class="col-md-3 btn-close btn btn-outline-secondary" data-dismiss="modal" aria-label="Close">Cerrar</button>
                                                    </div>                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>                
                                </div>
                  
              </div>
          </div>
        </div>
      </div>  
    </div>     
    @yield('content')
        
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </form>
    </body>
</html>

