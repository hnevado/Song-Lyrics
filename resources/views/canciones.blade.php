@extends("template")
@section('content')
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0" id="contenedor">
         

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="pt-8 sm:justify-start sm:pt-0 text-center">
                    
                    <h1 class="text-3xl mt-5 font-bold"><a href="{{route('welcome')}}">Song Lyrics</a></h1>
                    <p class="mt-5"><a href="{{route('welcome')}}">Volver</a></p>
                  </div>

                    <div class="grid grid-cols-1" id="letra">

                        <div class="p-6">

                            <div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                  <h2 class="text-2xl">{{$artista}} - {{$cancion}}</h2>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            @if (isset($canciones['lyrics']))
                             <pre>({{print_r($canciones['lyrics'])}})</pre>
                            @else
                             <p>No se encuentra la canción</p>
                             @endif
                        </div>

                       

                        
                    </div>
                </div>

             
            </div>
        </div>
@endsection
