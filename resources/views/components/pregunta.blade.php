<button  class="text-xl mt-3  duration-400 bg-[#2D2D2D] text-start hover:bg-[#414141] items-center w-full flex p-4 justify-between" onclick="toggleModal('{{$pregunta->respuesta}}', '{{$pregunta->id}}')">
    <span>{{$pregunta->pregunta}}</span>
    <span class="text-5xl font-light" id="toggleBtn-{{$pregunta->id}}">+</span>
</button>



<script>
    function toggleModal(respuesta, preguntaId) {
        var modal = document.getElementById("myModal-" + preguntaId);
        var modalContent = document.getElementById("modalContent-" + preguntaId);
        var modalRespuesta = document.getElementById("modalRespuesta-" + preguntaId);
        var toggleBtn = document.getElementById("toggleBtn-" + preguntaId);

        if (modal.style.display === "none" || modal.style.display === "") {
            // modalRespuesta.innerHTML = respuesta;
            modal.style.display = "block";
            modalContent.style.opacity = "1";
        } else {
            modal.style.display = "none";
            modalContent.style.opacity = "0"; // Ocultar contenido durante la transición
        }
    }
</script>

<style>
    .modal-content {
        transition: opacity 3s ease-in-out;
        opacity: 100; /* Inicialmente, el contenido está oculto */
    }
</style>


<!-- Modal -->
<div id="myModal-{{$pregunta->id}}" class="modal" style="display: none;">
    <div class="modal-content  border-t-4 border-[#3D3D3D] bg-[#1D1D1D] mt-0 " id="modalContent-{{$pregunta->id}}">
        <p class="text-xl font-extralight p-6 " id="modalRespuesta-{{$pregunta->id}}">
            {{$pregunta->respuesta}}
        </p>
    </div>
</div>


<script>
    function cerrarModal(preguntaId) {
        var modal = document.getElementById("myModal-" + preguntaId);
        modal.style.display = "none";
    }
</script>

