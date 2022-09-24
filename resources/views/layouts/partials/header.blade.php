<div class="container">


<header>
 
  <div class="table-responsive">
    <table class="table">
      <TR>
        <TD>
          <nav>
            <ul><h4>BasalMant</h4>
                {{-- en la siguiente linea utilizo ? como if, y : como else --}}
              <a href="{{route('home')}}" class="{{(request()->routeIs('home')) ? 'active' : ''}}">Home</a>
                  {{-- @dump(request()->routeIs('home')) para recordar de donde viene --}}
                    
              
                {{-- en la siguiente linea el * es para que aplique  clase a toda dir que empieza con equipos --}}
              <a href="{{route('equipos.index')}}" class="{{(request()->routeIs('equipos.*')) ? 'active' : ''}}">Equipos</a>
                    {{-- @dump(request()->routeIs('equipos.index')) --}}
                    
                
                                
                <a href="{{route('nosotros')}}" class="{{(request()->routeIs('nosotros')) ? 'active' : ''}}">Nosotros</a>
                
                    <a href="{{route('contactanos')}}" class="{{(request()->routeIs('contactanos')) ? 'active' : ''}}">Contactanos</a>
                
            </ul>
        </nav>
        
        
        
        </TD>
     
        
        <TD> @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-1 sm:block">
              @auth
                  <a href="{{ url('/equipos') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
              @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                  @endif
              @endauth
          </div>
        @endif
      </TD>
      </TR>
    
     
    </table>
  </div>


 </header>
</div>
  
 
  
