<!DOCTYPE html>
<html>
<head>
    <title>Certificado Laboral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="\xampp\htdocs\certificados\public\css/pdf.css" rel="stylesheet">
</head>
<body>
    <img src="img/header.png" alt="" class="img1">
    <!--"Header"-->
    <div class="container">
    <p class="title"> <b> LA FUNDACIÓN UNIVERSITARIA EMPRESARIAL DE LA CÁMARA DE COMERCIO DE BOGOTÁ
    -UNIEMPRESARIAL-</b>
    </div>
    <br>
    Personería Jurídica, Resolución 598 del 2 de abril de 2001 del Ministerio de Educación Nacional - Registro ICFES 2738</p>
    <h3 class="titleCertificado
    
    ">{{ $title }}</h3>

    @switch($id_roles)
    @case('2')
    <p class="textContent"> Que el señor/a <b>{{ $name }}</b> identificado/a con <b> {{ $t_doc }} </b> No. <b>{{ $doc }}</b>, está vinculado/a con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeñando el cargo de <b>{{ $onus }}</b>, 

     {{-- @if (){
        mediante un contrato a {{ $contract }}.
    }
    @if (){
        desde el {{ $date_i }} hasta el {{$date_f}}. 
    }
    @if (){
        con un pago por hora de (letras y números) <b>{{ $pay_per_hour }}</b>. 
    }

    @if (){
       .Actualmente devenga un salario de (letras y números) <b>{{ $salary }}</b>.
    } --}}
    </p>   
    
    @break

    @case('3')
    <p class="textContent"> Que el señor(a) <b>{{ $name }}</b> identificado(a) con <b> {{ $t_doc }} </b> No.<b>{{ $doc }}</b>, está vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6. Actualmente desempeña el cargo de DOCENTE con dedicación , 

</p>
        @break

    @case('4')
    <p class="textContent">Que el señor(a) <b>{{ $name }}</b>, identificado(a) con<b> {{ $t_doc }}</b> No. <b>{{ $doc }}</b>, está vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeñando el cargo de DOCENTE HORA CATEDRA mediante contrato de {{ $contract }} en los siguientes periodos:</p>
    <table>
    </table>    
        @break

    @case('5')
    <p class="textContent">Que el señor(a) <b>{{ $name }}</b>, identificado(a) con <b> {{ $t_doc }}</b> No. <b>{{ $doc }}</b>, esta vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6,  hasta el {{ $date_f }} en el área de {{ $area }}.

devengando un salario de (letras y números) <b>{{ $salary }}</b>.


</p>
    @break

    @default
@endswitch
<!--"Footer"-->
<p class="bodyText">El presente certificado se expide a solicitud del interesado a los treinta y uno ({{ $day }}) días del mes de octubre de {{ $year }}.</p><br>
        
<p class="bodyText">Atentamente</p><br>

<p class="foot">LUZ YAZMÍN LIZARAZO JIMÉNEZ</strong></p>
<p class="foot">Directora de Talento Humano</p>
<p class="foot1"><b>Proyectó:</b> Nicol Valencia – Profesional de Nómina y Contratación<br>
<b>202211031-348</b></p>
</section class="margen">
<img src="img/footerpdf.png" alt="" class="img2 fixed-bottom">
</body>
</html>