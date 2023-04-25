@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"></div>
                <div class="card-body">
                    <!--encabezado titulo-->
    <section class="sectionTitulo">
        <div class="divTitulo">
        Historial Certificados
        </div>
    </section> 
  <!--Filtros de búsqueda-->
    <section class="sectionBotones">
      <!--Filtro selección de cargo-->
    <select id="filtro">
        <option selected value="0">Filtros</option>
        <option value="">Docentes cátedra</option>        <option value="">Docentes cátedra</option>      
        <option value="">Docentes planta</option>       
        <option value="">Talleristas bienestar</option>      
        <option value="">Aprendices</option>      
        <option value="">Retirados</option>      
     
    </select>
      <!--Botón para volver-->
    <button id="back" onclick="redirigir14()"><i class="fa-solid fa-arrow-left"></i></button>
    </section>
  <!--Tabla de historial de los certificados imprimidos o descargados-->
    <table class="tableHistorial">
        <tr>
            <td class="tdTitulo">Certificados Laborales</td>
            <td class="tdInvisible"></td>
            <td class="tdTitulo">Fecha/Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
             <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
        <tr>
            <td class="tdNombre">Nombre Completo</td>
            <td class="tdRol">Rol</td>
            <td class="tdFecha">Fecha</td>
            <td class="tdHora">Hora</td>
        </tr>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
