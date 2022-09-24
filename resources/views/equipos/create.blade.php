@extends('layouts.plantilla')
@section('title', 'create')
@section('content')
<h1>Aqui podrá crear un nuevo Equipo</h1>


    
    <div class="card " STYLE="color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #526154;" >
    <div class="card-header">  
       
        <div class="container">
            <div class="row">
              
              <div class="col col-6">
                <form action="{{route('equipos.store')}}" method="POST">
                    {{-- Envía un token de seguridad. Siempre se debe poner!!! sino no funca --}}
                    @csrf
               
                   <div class="form-group">
                   <label class="sr-only" for="codEquipo">Código:</label> 
                   <input class="form-control" type="text" name="codEquipo" value={{old('codEquipo')}}> {{-- old() mantiene en campo con el dato--}}
                   @error('codEquipo')                                          {{--el 2do parametro de old es para mantener la mificacion cuando la validacion falla--}}
                   <small class="help-block">*{{$message}}</small>
                   @enderror
                   
                   <div class="form-group">
                   <label class="sr-only" for="marca"> Marca:</label> 
                   <input class="form-control" type="text" name="marca" value={{old('marca')}}> 
                   @error('marca')
                   <small>*{{$message}}</small>
                   @enderror
                   </div>
               
                   <div class="form-group">
                   <label class="sr-only" for="modelo">Modelo:</label> 
                   <input class="form-control" type="text" name="modelo" value={{old('modelo')}}> 
                   @error('modelo')
                   <small>*{{$message}}</small>
                   @enderror
               
               
                   <div class="form-group">
                   <label class="sr-only" for="idSecc">Sección:</label> 
                   <input class="form-control" type="text" name="idSecc" value={{old('idSecc')}}> 
                   @error('idSecc')
                   <small>*{{$message}}</small>
                   @enderror
               
                   <div class="form-group">
                       <label class="sr-only" for="idSubSecc">Subsección:</label> 
                       <input class="form-control" type="text" name="idSubSecc" value={{old('idSubSecc')}}> 
                       @error('idSubSecc')
                       <small>*{{$message}}</small>
                       @enderror
               
                       <div class="form-group">
                           <label class="sr-only" for="det1">Caractrística 1:</label> 
                           <input class="form-control" type="text" name="det1" value={{old('det1')}}> 
                           @error('det1')
                           <small>*{{$message}}</small>
                           @enderror
               
                           <div class="form-group">
                               <label class="sr-only" for="det2">Caractrística 2:</label> 
                               <input class="form-control" type="text" name="det2" value={{old('det2')}}> 
                               @error('det2')
                               <small>*{{$message}}</small>
                               @enderror
                 
                           
                           <div class="form-group">
                               <label class="sr-only" for="det3">Caractrística 3:</label> 
                               <input class="form-control" type="text" name="det3" value={{old('det3')}}> 
                               @error('det3')
                               <small>*{{$message}}</small>
                               @enderror
               
                           <div class="form-group">
                               <label class="sr-only" for="det4">Caractrística 4:</label> 
                               <input class="form-control" type="text" name="det4" value={{old('det4')}}> 
                               @error('det4')
                               <small>*{{$message}}</small>
                               @enderror
               
               
                           <div class="form-group">
                               <label class="sr-only" for="det5">Caractrística 5:</label> 
                               <input class="form-control" type="text" name="det5" value={{old('det5')}}> 
                               @error('det5')
                               <small>*{{$message}}</small>
                               @enderror
               
               
                    <br>
                    <br>
                   <div class="form-group" >
                    <div class="mx-auto" style="width: 150px;">
                   <button class="btn STYLE=color: #FFFFFF; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #526154;" type="submit">Enviar</button>
                   </div>
                </div>    
               </form>
              </div>
              
            </div>
          </div>





</div>
</div>


<h1>Aqui podrá crear un nuevo Equipo</h1>
<select>
 @foreach ($repuestos as $repuesto)
    <li>
        <option value="{{$repuesto->codigo}}">{{$repuesto->codigo}}</option>
        
    </li>
    
@endforeach
</select>



<button type="submit">Agregar</button>
@endsection



