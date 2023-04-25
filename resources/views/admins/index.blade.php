@extends('layouts.app')

@section('content')
    <div>
        <section class="sectionTitulo2">
        <div class="divTitulo2">
        <h2 class="h2Titulo">Bienvenido al</h2>
        <h2 class="h2Titulo2">Perfil de administrador</h2>
        </div>
        </section>
        <!--Menú perfil administrador-->
        <section class="menuAdministrador">
        <!--Botón menú-->
            <div class="divAdministrador">
            <button onclick="redirigir08()"> <a href="./Historial.html"><i
                class="fa-solid fa-clock-rotate-left"></i></a></button>
            <p>Historial de certificados</p>
            </div>
        <!--Botón menú-->
            <div class="divAdministrador">
            <button onclick="redirigir09()"><a href="./php/table.php"> <i class="fa-solid fa-users"></i></a></button>
            <p>Usuarios registrados</p>
            </div>
    <!--Botón menú-->
            <div class="divAdministrador">
            <button onclick="window.selecC.showModal();"><i class="fa-solid fa-file"></i></button>
            <p>Generar certificado</p>
            </div>
        <!--Botón menú-->
            <div class="divAdministrador">
            <button onclick="redirigir11()"><a href="./ESalario.html"> <i class="fa-solid fa-pen-to-square"></i></a></button>
            <p>Editar salarios por cargo</p>
            </div>
        </section>
        <!--Modal que permite eligir al usuario si se quiere generar un certificado para alguien más o para si mismo-->
        <dialog id="selecC" class="modulCer">
        <a href="./perfiladministrador.html"><i class="fa-solid fa-rectangle-xmark"></i></a>
        <h2>El certificado es para:</h2>
        <button class="paraMi" onclick="redirigir10()"> Para mí </button>
        <button class="otraP" onclick="redirigir13()"> Para otra persona</button>
        </dialog>
    </div>
@endsection