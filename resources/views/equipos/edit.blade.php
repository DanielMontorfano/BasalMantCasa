@extends('layouts.plantilla')
@section('title', 'Edit')
@section('content')


<h1>Editar Equipo</h1>
<section class="main row ">
 
<div class="container ">
  <div class="card ">
    <div class="card-header ">
     
            <form id="encavezado" action="{{route('equipos.update', $equipo->id)}}" method="POST" class="form-horizontal ">
                <div class="bg-info p-2 text-white .bg-primary .bg-gradient">INGENIO RIO GRANDE S.A.</div>
                <div class="p-3 mb-2 bg-info text-dark" style="--bs-bg-opacity: .3;">Ficha de equipo  {{-- Envía un token de seguridad. Siempre se debe poner!!! sino no funca --}}
                @csrf
                {{-- Metodo PUT no existe en html, por eso indicamos a laravel como sigue --}}
                @method('put')
                
                <div class="p-3 mb-2 bg-gradient-primary text-white">

                  <div class="container">
                    <div class="row">
                      <div class="col col-md-4">
                        <div class="form-group">
                          <label class="control-label" for="marca">Marca:</label> 
                          <input class="form-control" STYLE="color: #dd622d; font-family: Verdana; font-weight: bold; font-size: 14px; background-color: #13134a;"  type="text" name="marca" value={{old('marca', $equipo->marca)}}> 
                          @error('marca')
                          <small>*{{$message}}</small>
                          @enderror
                        </div>
                      </div>
                      <div class="col col-md-4">
                        <div class="form-group">
                          <label class="control-label " for="codEquipo">Código:</label>
                          <input class="form-control" type="text" name="codEquipo" value={{old('codEquipo', $equipo->codEquipo)}} placeholder="Código de equipo"> {{-- old() mantiene en campo con el dato--}}
                          @error('codEquipo') {{--el 2do parametro de old es para mantener la mificacion cuando la validacion falla--}}
                          <small class="help-block">*{{$message}}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="col col-md-4">
                        <div class="form-group">
                          <label class="control-label" for="modelo">Modelo:</label>  
                          <input class=" form-control" type="text" name="modelo" value={{old('modelo', $equipo->modelo)}}>
                          @error('codEquipo') {{--el 2do parametro de old es para mantener la mificacion cuando la validacion falla--}}
                          <small class="help-block">*{{$message}}</small>
                          @enderror
                        </div>    
                      </div>
                  </div> {{-- cierra row 1--}}

                  <div class="row">
                    <div class="col col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="idSecc">Sección:</label>  
                        <input class="form-control"type="text" name="idSecc" value={{old('idSecc', $equipo->idSecc)}}>  {{-- old() mantiene en campo con el dato--}}
                        @error('marca')
                        <small>*{{$message}}</small>
                        @enderror
                      </div>
                    </div>

                    <div class="col col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="idSubSecc">Subsección:</label> 
                        <input type="text" class="form-control" name="idSubSecc" value={{old('idSubSecc', $equipo->idSubSecc)}}>   {{-- old() mantiene en campo con el dato--}}
                        @error('codEquipo') {{--el 2do parametro de old es para mantener la mificacion cuando la validacion falla--}}
                        <small class="help-block">*{{$message}}</small>
                        @enderror
                        </div>
                    </div>
                  </div> {{-- cierra row 2 --}}
                  
                  <div class="row">
                    <div class="col col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="det1">Característica Nº1:</label> 
                        <input class="form-control" type="text" name="det1" value={{old('det1', $equipo->det1)}}>   {{-- old() mantiene en campo con el dato--}}
                        @error('marca')
                        <small>*{{$message}}</small>
                        @enderror
                      </div>
                    </div>

                    <div class="col col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="det2">Característica Nº2:</label> 
                        <input class="form-control" type="text" name="det2" value={{old('det2', $equipo->det2)}}>   {{-- old() mantiene en campo con el dato--}}
                        @error('codEquipo') {{--el 2do parametro de old es para mantener la mificacion cuando la validacion falla--}}
                        <small class="help-block">*{{$message}}</small>
                        @enderror
                        </div>
                    </div>
                  </div> {{-- cierra row 3 --}}

                  <div class="row">
                    <div class="col col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="det3"> Característica Nº3:</label> 
                        <input class="form-control "type="text" name="det3" value={{old('det3', $equipo->det3)}}>   {{-- old() mantiene en campo con el dato--}}
                        @error('marca')
                        <small>*{{$message}}</small>
                        @enderror
                      </div>
                    </div>

                    <div class="col col-md-6">
                      <div class="form-group">
                        <label class="control-label" for="det4">   Característica Nº4:</label> 
                        <input class="form-control" type="text" name="det4" value={{old('det4', $equipo->det4)}}>   {{-- old() mantiene en campo con el dato--}}
                        @error('codEquipo') {{--el 2do parametro de old es para mantener la mificacion cuando la validacion falla--}}
                        <small class="help-block">*{{$message}}</small>
                        @enderror
                        </div>
                    </div>
                  </div> {{-- cierra row 4 --}}


                  <div class="row">
                    <div class="col col-md-12">
                      <div class="form-group">
                        <label class="control-label" for="det5"> Detalle:</label> 
                        <input class="form-control" type="text" name="det5" value={{old('det5', $equipo->det5)}}>   {{-- old() mantiene en campo con el dato--}}
                        @error('marca')
                        <small>*{{$message}}</small>
                        @enderror
                      </div>
                    </div>
                
                  </div> {{-- cierra row 5 --}}
                  
                  
            </form>
            <br>
                       
            <div class="card ">
              <div class="card-header ">            
                           {{-- MUESTRA REPUESTOS --}} 
                    <table class="table">
                           <thead>
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            @foreach($repuestos as $repuesto)
                              <form action="{{route('equipoRepuesto.store')}}" method="POST">
                              @csrf
                            <tbody>
                              <tr>
                                <input type="hidden" name="Selector" value="BorrarRep" readonly >
                                <input type="hidden" name="equipo_id" value={{$equipo->id}} readonly >
                                <input type="hidden" name="repuestoBorrar_id" value={{$repuesto->id}} readonly >
                                <th scope="row">{{ $repuesto->codigo }}</th>
                                <td>{{ $repuesto->descripcion}}</td>
                                <td>{{$repuesto->pivot->cant}}</td>
                                <td> <button type="submit" class="bi bi-trash3-fill"></button></td>
                              </tr>
                            </tbody>
                        @endforeach
                          </form>
                    </table>
                  </div>  
                </div>

                <div class="card ">
                  <div class="card-header ">            
                               {{-- MUESTRA NOMBRE FOTOS --}} 
                        <table class="table">
                               <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Fotos</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                @foreach($fotosTodos as $foto)
                                  <form action="{{route('equipoRepuesto.store')}}" method="POST">
                                  @csrf
                                <tbody>
                                  <tr>
                                    {{-- <input type="hidden" name="Selector" value="BorrarRep" readonly > --}}
                                    {{-- <input type="hidden" name="equipo_id" value={{$equipo->id}} readonly > --}}
                                    {{-- <input type="hidden" name="repuestoBorrar_id" value={{$repuesto->id}} readonly > --}}
                                    <th scope="row"></th>
                                    <td>{{ $foto->nombreFoto}}</td>
                                    <td></td>
                                    <td> <button type="submit" class="bi bi-trash3-fill"></button></td>
                                  </tr>
                                </tbody>
                            @endforeach
                              </form>
                        </table>
                      </div>  
                    </div>
                <br>
                   <div class="form-group">
                       <button form="encabezado" class="btn btn-primary" type="submit">Enviar</button>
                   </div>
                   <br>   
                       
</section>
      </div>  
  </div>
</div>

{{-- $$$$$$$$$$$$$$$$$$$$$$  Segundo formulario $$$$$$$$$$$$$$$ --}}

<div class="container ">
  <div class="card ">
    <div class="card-header ">
      <form action="{{route('equipoRepuesto.store')}}" method="POST">
        @csrf
        <input type="hidden" name="Selector" value="AgregarRep" readonly >
        <input type="hidden" name="equipo_id" value={{$equipo->id}} readonly >
       
            <label for="search">Buscar repuesto:</label> 
          <table class="table table-primary table-sm">
            <tr>
              <td><input type="text" class='form-control' name="search" id="search"> </td>
              <td > <input type="number" class='form-control' name="cant" value="1" min="1" max="99" placeholder="Cantidad"></td>
              <td><button class="btn btn-primary" type="submit">Agregar</button> </td>
            </tr>
          </table>
      </form>
    </div> 
  </div> 
</div> 
{{-- *****************Fin tercer formulario******************************************* --}}
{{-- $$$$$$$$$$$$$$$$$$$$$$  Tercer formulario IMAGENES $$$$$$$$$$$$$$$ --}}

<div class="container ">
  <div class="card ">
    <div class="card-header ">
      <form id="formImagenes" action="{{route('fotos.store', $equipo->id)}}" enctype="multipart/form-data" method="POST" class="form-horizontal ">
        @csrf
            <input type="hidden" name="equipo_id" value={{$equipo->id}} readonly >
            <label for="imagen">Buscar imagen:</label> 
          <table class="table table-primary table-sm">
            <tr>
              <td><input type="text" class='form-control' name="nombreFoto" id="" accept="" >
                @error('nombreFoto')
                <small class="text-danger"> {{$message}}</small>
                @enderror
              <td><input type="file" class='form-control' name="file" id="" accept="image/*" >
              @error('file')
              <small class="text-danger"> {{$message}}</small>
              @enderror
              <td><button class="btn btn-primary" type="submit">Agregar</button> </td>
            </tr>
          </table>
      </form>
    </div> 
  </div> 
</div> 
{{-- *****************Fin cuarto formulario******************************************* --}}
{{-- $$$$$$$$$$$$$$$$$$$$$$  Cuarto formulario $$$$$$$$$$$$$$$ --}}

<div class="container ">
  <div class="card ">
    <div class="card-header ">
      <form>
       
          <label for="search">Buscar documento:</label> 
          <table class="table table-primary table-sm">
            <tr>
              <td><input type="file" class='form-control' name="search" id="search"> </td>
              
              <td><button class="btn btn-primary" type="submit">Agregar</button> </td>
            </tr>
          </table>
      </form>
    </div> 
  </div> 
</div> 
{{-- *****************Fin cuarto formulario******************************************* --}}




{{-- *****************Esto agrega desde select (option)******************************************* --}}
          <form action="{{route('equipoRepuesto.store')}}" method="POST">
            @csrf
            <label>
                <br>    
                Código:
                <input type="hidden" name="Selector" value="AgregarRep" readonly >
                <input type="hidden" name="equipo_id" value={{$equipo->id}} readonly >
            </label>    
            
            <select name="repuestosSelect">
                          @foreach ($repuestosTodos as $repuesto)
                            <li>
                              <option value="{!! $repuesto->id !!}">{!! $repuesto->codigo !!}</option> 
                            </li>
                          @endforeach
              </select>
                  <input type="number" name="cant" value="1" min="1" max="99">
                  <button type="submit">Agregar</button> {{-- Voy a la tabla pivot,me llevo $equipo_id y $repuesto_id --}}  
          </form>
{{-- *************************************************************************** --}}


{{-- inicio  tabla repuestos mostrar  --}}
      <div class="container"> 
      <h3>Listado de repuestos</h3>
      @foreach($repuestos as $repuesto)
      <table>
        <form action="{{route('equipoRepuesto.store')}}" method="POST">
        @csrf
        <tr>
          <input type="hidden" name="Selector" value="BorrarRep" readonly >
          <input type="hidden" name="equipo_id" value={{$equipo->id}} readonly >
          <input type="hidden" name="repuestoBorrar_id" value={{$repuesto->id}} readonly >
          
          <td>{{ $repuesto->codigo }}</td>
          <td>{{ $repuesto->descripcion}}</td>
          <td>{{$repuesto->pivot->cant}} </td>
          
          <td> <button type="submit" class="bi bi-trash3-fill"></button></td>
        </tr>
      </form>
      </table>
              
        @endforeach
      </div>
{{-- fin  tabla repuestos mostrar  --}}
    
  
      





 
<form action={{route('equipos.destroy', $equipo->id)}} method="POST"> {{--$equipo viene por la url cuando seleciono --}}
  @method('delete')
  @csrf
   <button type="submit">Borrar registro</button>
</form>









<script>
      $( "#search" ).autocomplete({
      source: function(request, response){
        
              $.ajax({
              url:"{{route('search.repuestos')}}",
               dataType: 'json',
              data:{
                     term: request.term
                    },
                    success: function(data) {
                    response(data)  
            }

        });
      }
    });
  </script> 

   {{-- Este es el script de la pagian oficial
     <script>
    $( function() {
      var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
       
      ];
      $( "#search" ).autocomplete({
        source: availableTags
      });
    } );
    </script>  --}}

@endsection


