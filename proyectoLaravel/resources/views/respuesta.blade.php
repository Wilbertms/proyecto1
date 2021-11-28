@include('layouts.app', ['tipo' => $usuario->ID_TIPO ])

<div class="container">
 
           <div class="cols text-center">

            
                <font  size=4>ID  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</font>

              <font size=4> Usuario </font>

              <font size="4">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Ticket </font>

                
                </div>
 
 
 
<div class="form-group">
 
<textarea class="form-control" rows="10" cols="4" >  Solucion... </textarea>
 
</div>  

<div class="text-center">
  
  <button type="submit" class="btn btn-info"> Terminado</button>
 
 </div>

 
 </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
