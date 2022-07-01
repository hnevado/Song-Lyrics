@extends("template")
@section('content')
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0" id="contenedor">
         

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="pt-8 sm:justify-start sm:pt-0 text-center">
                    
                    <h1 class="text-3xl mt-5 font-bold"><a href="{{route('welcome')}}">Song Lyrics</a></h1>
                      
                  </div>

                    <div class="grid grid-cols-1">

                        <div class="p-6">

                            <div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Busca letras de canciones por artistas y título
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                          
                           <form action="{{route('search')}}">
                            @csrf 
                            <p>
                              <input name="artista" type="text" placeholder="Artista" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                            </p>
                           
                            <p class="mt-5">
                               <input name="cancion" type="text" placeholder="Canción" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </p>

                            <p class="mt-5">
                                <input type="submit" value="Buscar!" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            </p>

                            <p class="mt-5">
                                <span class="text-xs text-red-600">@error('artista') {{ $message }} @enderror</span><br/>
                                <span class="text-xs text-red-600">@error('cancion') {{ $message }} @enderror</span>
                            </p>

                        </form>

                        </div>

                       

                        
                    </div>
                </div>

             
            </div>
        </div>
@endsection
