
@php
  class Pregunta {
    public $id;
    public $pregunta;
    public $respuesta;


    public function __construct($id, $pregunta,  $respuesta){
        $this->id = $id;
        $this->pregunta = $pregunta;
        $this->respuesta = $respuesta;
      }

    }


$Pregunta1 = new Pregunta(1,"¿Que es Devflix?", "Devflix es una plataforma desarrollada para ........");
$Pregunta2 = new Pregunta(2,"¿queres ver?", "Devflix es una plataforma desarrollada para ........");
$Pregunta3 = new Pregunta(3,"¿Como hago para subcribirme?", "dios mio");
$Pregunta4 = new Pregunta(4,"¿Tengo noticias recientes?", " para ........");
$Pregunta5 = new Pregunta(5,"¿alcachofa?", "kkkkkkkkkkkkkkkkkkkkkkkkk");

$Preguntas = array($Pregunta1, $Pregunta2, $Pregunta3, $Pregunta4, $Pregunta5);


@endphp






<div class="text-white flex flex-col gap-6 items-center">
      <h1 class="text-4xl font-extrabold p-6">Preguntas frecuentes</h1>
      <div class="flex flex-col w-full">
        @foreach ($Preguntas as $pregunta)
          <x-pregunta :pregunta="$pregunta"/>
        @endforeach
      </div>
    <div class="py-6">
      <h2>¿Quieres ver DevFlix ya? Ingresa tu email para crear una cuenta o ingresar</h2>
      <form>
        <div class="gap-2  flex justify-center items-center">
          <div class="text-left">
              <p>Email</p>
              <input  class="text-black " type="text">
          </div>
          <button class="text-2xl font-extrabold bg-red-600 p-4  rounded-md ">Comenzar ></button>
        </div>
      </form>
    </div>

</div>