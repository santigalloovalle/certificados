@extends('layouts.app')

@section('content')
<main>

    <div class="headerIng">
        <div>
          <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
        </div>
    </div>
    <!--encabezado titulo -->
    <section class="sectionTitulo">
        <div class="divTitulo">
          Editar Salario
        </div>
      </section>
      </section>
    <!--Editar salarios dependiendo el cargo elegido-->
    <!--Selección de cargo-->
          <select class="mt-5 m-5">
              <option selected value="0">Cargo</option>
              <option value="1">Docentes cátedra</option>      
              <option value="2">Administrativos</option>      
              <option value="3">Docentes planta</option>       
              <option value="4">Talleristas bienestar</option>      
              <option value="5">Aprendices</option>          
          </select>
    <!--Se renderiza el rol seleccionado-->
        <p class="d-flex justify-content-center font-weight-bold">Rol Seleccionado:</p>
        <p id="rolSalario" class="d-flex justify-content-center">Ninguno</p>
    <!--Formulario de esditar salario-->
        <form class="editarSalario">
          <section class="infoSalario">
          <p class="pSalario">Nuevo Salario:</p>
          <input type="number" id="nuevoSalario">
          <p class="pSalario">Este cambio se verá reflejado a partir de:</p>
          <input type="date" id="cambSalario">
          </section>
        </form>
      <section class="sectionBotones2"> <!--Contenedor de botones-->
          <button class="botonVolver" onclick="redirigir14()"> Volver</button>
          <button class="botonGuardar" onclick="redirigir14()">Guardar</button>
      </section>
  </main>
    
@endsection