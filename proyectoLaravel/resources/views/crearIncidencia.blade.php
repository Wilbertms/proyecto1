@include('layouts.app', ['tipo' => $usuario->ID_TIPO ])
    <br><br><br>
    <form action ="/crearIncidencia" method="POST">
        @csrf

    <div class="card-body text-center"><center>
    
   <tr>
  <h1>Crear Incidencia</h1>
 <table border="0">
     <tr>
    <td>{{$usuario->USUARIO}}</td>
    <tr><tr>
        <td><input class ="form-control" type="text" name="dispositivo" placeholder="Dispositivo"/></td>
        <td><input class ="form-control" type="text" name="marca" placeholder="Marca"/><tr></td>
</table>
<br>
<textarea placeholder="Detalle el problema..." cols="46" rows="5" type ="text" name="descripcion" > </textarea>
<br><br>

<div call="form-group row">
    <div class ="col-sm-10">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="reset" valua="Cancelar" style="margin-left: 20px;" class="btn btn-primary"></input>

    </div>
    
</div>
</form>
   
   

        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
