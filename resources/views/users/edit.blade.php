@extends('layouts.app')

@section('content')
<body>
    <!--Editar usuario a través del perfil administrador -->
      <h2 class="tituloEditar">Editar Usuario</h2>

      <section class="editarUsuario">
        <label>Nombre Completo</label><br>
          <input id="NombreCom" type="text"><br><br>
          <label>Cédula</label><br>
          <input id="cedula" type="number"><br><br>
          <label>Rol</label><br>
          <select name="opcion" required id="iRol">
            <option value="" selected>Seleccione una opción</option>
            <option value="aprendiz">Aprendiz</option>
            <option value="profesorC">Profesor Cátedra</option>
            <option value="administrativo">Administrativo</option>
            <option value="profesorP">Profesor Planta</option>
            <option value="talleri">Tallerista</option>
          </select><br><br>
          <label>Salario/Pago por hora</label><br>
          <input id="salario" type="number" placeholder=""><br><br>
          <label>Tiempo de contrato</label><br>
          <input id="tcontrato" type="text" placeholder=""><br><br>
          <label>Tiempo en la institución</label><br>
          <input id="tinstitucion" type="text" placeholder=""><br><br>
          <p class="estadoUsuario"><i class="fa-solid fa-circle"></i> Usuario activo</p>
      </section>
      <!--Botones para guardar o cancelar los cambios a los usuarios -->
      <section class="sectionBotones2"> <!--Contenedor de botones-->
            <button class="botonGuardar" onclick="redirigir09()">Guardar</button>
            <button class="botonVolver" onclick="redirigir09()">Cancelar</button>
      </section>
    
</body>
@endsection