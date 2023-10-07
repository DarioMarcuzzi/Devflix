

<div class="text-white h-full w-full justify-center border-y-4 flex flex-col lg:flex-row  items-center text-center ">

   @if ($pelicula->id  % 2 == 0) 
      <div class=" gap-4 justify-center  h-2/5 flex flex-col lg:w-3/6">
         <h1 class="text-4xl font-extrabold"> {{$pelicula->titulo}} </h1>
         <p class="text-xl">{{$pelicula->texto}}</p>
      </div>
      <div class="justify-center h-3/5 lg:w-3/6 items-center flex">
         <h1 class="">{{$pelicula->imagen}}</h1>
      </div>
    @else 
      <div class="justify-center h-3/5 lg:w-3/6 items-center flex">
         <h1 class="">{{$pelicula->imagen}}</h1>
      </div>
      <div class=" gap-4 justify-center  h-2/5 flex flex-col lg:w-3/6">
         <h1 class="text-4xl font-extrabold"> {{$pelicula->titulo}} </h1>
         <p class="text-xl">{{$pelicula->texto}}</p>
      </div>
   @endif

</div>