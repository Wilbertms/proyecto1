@include('layouts.app', ['tipo' => $usuario->ID_TIPO ])

  <div class="card-body text-center">
      <div class="row justify-content-md-center" >
        <div class="col-sm-12 col-md-8 col-lg-5" >
          <div class="text-center">
             <img src="https://avatar-management--avatars.us-west-2.prod.public.atl-paas.net/default-avatar-2.png" class="rounded" alt="foto" style="width:160px;height:160px;">
          </div>
          <br>
        <div class="col">
          <div class="text-center">
             <button type="button" class="btn btn-primary">Editar</button>
          </div>
        </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-5">
          <div class="row ">
             <div class="col">
                <input type="text" class="form-control" placeholder="Nombre" value="{{$usuario->NOMBRE_USUARIO}}">
             </div>
             <div class="col">
                <input type="text" class="form-control" placeholder="Apellido" value="{{$usuario->APELLIDO_USUARIO}}">
             </div>
          </div>
        <br>
          <input type="text" class="form-control" placeholder="Nombre de Usuario" value="{{$usuario->USUARIO}}">
        <br>
          <input type="text" class="form-control" placeholder="Contraseña" value="{{$usuario->CONTRASENA}}">
        <br>
         <div class="row ">
            <div class="col">
            
    <input type="text" class="form-control" placeholder="dia"  >
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="mes" >
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="año" >
  </div>
  <div class="col" >
    <select class="form-select" placeholder="genero" value="dia">
     <option selected>Genero</option>
     <option value="1">Masculino</option>
     <option value="2">Femenino</option>
    </select>
    </div>
  </div>
   </div>
    </div>
    </div>
