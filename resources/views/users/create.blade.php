@extends('layouts.app')

@section('content')
  <div class="container">
        <!--formulario para registrar nuevo usuario-->
        <section class="registro2">
          <br><br>
          <h1>Registrar nuevo usuario</h1>
          <form id="form" class="registro" action="php/based.php" method="post">
            <label> Nombres</label>
            <br>
            <input id="nombres" type="text" placeholder="Nombres" autofocus autocomplete="on" required name="nombre"><br>
            <label> Apellidos</label>
            <br>
            <input id="apellidos" type="text" placeholder="Apellidos" autocomplete="on" required name="apel"><br>
            <label>Correo institucional</label>
            <br>
            <input id="iMail" type="email" placeholder="Correo electrónico Institucional" autocomplete="on" required
              name="mail"><br>
            <label>Documento de identidad</label><br>
            <div class="documentoIden">
              <select id="tipoDocumento" name="t_doc">
                <option selected value="Cedula">C.C</option>
              </select>
              <input oninput="if(CC.value.lengbth > CC.maxLength) CC.value = CC.value.slice(0, CC.maxLength);" id="iCC"
                type="number" min="7" placeholder="Documento de identidad" required autocomplete="on" name="doc">
            </div> <br>
            <div class="contras">
              <div class="contras1">
                <label>Contraseña</label><br>
                <input maxlength="15"
                  oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                  id="ipass" type="password" placeholder="Contraseña" required name="con">
                <br>
              </div>
              <div class="contras2">
                <label>Confirmar contraseña</label><br>
                <input maxlength="15"
                  oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                  id="ipassC" type="password" placeholder="Confirmar contraseña" required name="con2">
                <br>
              </div>
              <p class="contra"> La contraseña debe contener 8 carácteres y máximo 15. Debe incluir mayúsculas, minúsculas y
                números.</p>
            </div>
            <br>
            <div class="rolContrato">
              <div class="rol">
                <label> Rol </label><br>
                <select required id="iRol" class="iRol" name="rol">
                  <option value="" selected>Seleccione una opción</option>
                  <option value="Aprendiz">Aprendiz</option>
                  <option value="Profesor Cátedra">Profesor Cátedra</option>
                  <option value="Administrativo">Administrativo</option>
                  <option value="ProfesorP">Profesor Planta</option>
                  <option value="Tallerista">Tallerista</option>
                </select>
              </div>
              <div class="Contrato">
                <label> Tipo de Contrato </label><br>
                <select required id="iContrato" name="t_contrato">
                  <option value="" selected>Seleccione una opción</option>
                  <option value="Tiempo Completo">Tiempo completo</option>
                  <option value="Medio Tiempo">Medio tiempo</option>
                </select>
              </div>
            </div>
            <div class="salarioHora">
              <div class="salario">
                <input type="checkbox" id="checkSalario">
                <label for="checkSalario">Salario</label><br>
                <input type="number" id="salario" name="t_pago">
              </div>
              <div class="pagoHora">
                <input type="checkbox" id="checkPago">
                <label for="checkPago">Pago por hora</label><br>
                <input type="number" id="pago_hora" name="salario">
              </div>
            </div>
            <section class="sectionBotones2">
              <button class="botonVolver" onclick="redirigir09()">Volver</button>
              <button class="botonGuardar" type="submit">Guardar</button>
            </section>
          </form>
        </section>
  </div>
@endsection
