@php
    class Pelicula {
      public $id;
      public $titulo;
      public $texto;
      public $imagen;

        public function __construct($id, $titulo,  $texto, $imagen){
            $this->id = $id;
            $this->titulo = $titulo;
            $this->texto = $texto;
            $this->imagen = $imagen;
        }


    }


$Pelicula1 = new Pelicula(1 ,"Disfruta en tu TV", "Ve en smart TV, PlayStation, Xbox, Chromecast, Apple TV, reproductores de Blu-ray y más.", "imagen1.jpg");
$Pelicula2 = new Pelicula(2 ,"Descarga tus libros para verlas offline", "Guarda tu contenido favorito y tendrás siempre algo para ver.", "imagen2.jpg");
$Pelicula3 = new Pelicula(3 , "Disfruta donde quieras", "Libros y documentacion ilimitadas en tu teléfono, tablet, computadora y TV.", "imagen3.jpg");
$Pelicula4 = new Pelicula(4 ,"Toda la programacion a tu alcance", "Libros y doc.", "imagen3.jpg");

$objetos = array($Pelicula1, $Pelicula2, $Pelicula3, $Pelicula4);



@endphp


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>DevFlix</title>

    <style>
        body{
            background-color: black;
        }
    </style>

{{-- lg:mx-44 --}}
</head>
<body class="mx-8 xl:mx-44">
    <div class="h-[70vh] lg:h-[90vh]">
        <x-bienvenido/>
    </div>
    @foreach ($objetos as $pelicula)
    <div class="h-[100vh] md:h-[60vh] lg:h-[80vh]">
        <x-avances :pelicula="$pelicula" />
    </div>
    @endforeach
    <div>
      <x-preguntas/>
    </div>

    
</body>
</html>