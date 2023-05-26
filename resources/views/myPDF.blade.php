<!DOCTYPE html>
<html>
<head>
    <title>Certificado Laboral</title>
    <link href="\xampp\htdocs\certificados\public\css/pdf.css" rel="stylesheet">
</head>
<body>
    <!--"Header"-->
    <p class="title"> <b> LA FUNDACIÓN UNIVERSITARIA EMPRESARIAL DE LA CÁMARA DE COMERCIO DE BOGOTÁ
    -UNIEMPRESARIAL-</b><br>
    Personería Jurídica, Resolución 598 del 2 de abril de 2001 del Ministerio de Educación Nacional - Registro ICFES 2738</p>
    <h1 class="title">{{ $title }}</h1>

    @switch($id_roles)
    @case('2')
    <p class="bodyText">Que el señor(a) <b>{{ $name }}</b> identificado(a) con <b> {{ $t_doc }} </b> No. <b>{{ $doc }}</b>, está vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeñando el cargo de <b>{{ $onus }}</b>, mediante un contrato a {{ $contract }} desde el {{ $date_i }}. Actualmente devenga un salario de (letras y números) <b>____________</b>.</p>
        @break

    @case('3')
    <p class="bodyText"> Que el señor(a) <b>{{ $name }}</b> identificado(a) con <b> {{ $t_doc }} </b> No.<b>{{ $doc }}</b>, está vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desde el {{ $date_i }}. Actualmente desempeña el cargo de DOCENTE con dedicación mediante un contrato a término {{ $contract }}, devengando un salario de (letras y números) <b>___________</b>.</p>
        @break

    @case('4')
    <p class="bodyText">Que el señor(a) <b>{{ $name }}</b>, identificado(a) con<b> {{ $t_doc }}</b> No. <b>{{ $doc }}</b>, está vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeñando el cargo de DOCENTE HORA CATEDRA mediante contrato de {{ $contract }} en los siguientes periodos:</p>
    <table>
    </table>    
        @break

    @case('5')
    <p class="bodyText">Que el señor(a) <b>{{ $name }}</b>, identificado(a) con <b> {{ $t_doc }}</b> No. <b>{{ $doc }}</b>, esta vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, mediante un contrato de {{ $contract }} desde el {{ $date_i }} hasta el {{ $date_f }} en el área de {{ $area }}.</p>
    @break

    @default
@endswitch
    <!--"Footer"-->
    <p class="bodyText">El presente certificado se expide a solicitud del interesado a los treinta y uno ({{ $day }}) días del mes de octubre de {{ $year }}.</p><br>

    <p class="mt-5">Atentamente</p><br>

    <strong class="mt-5 fs-3"> LUZ YAZMÍN LIZARAZO JIMÉNEZ</strong></p><br>
    <p>Directora de Talento Humano</p><br>
    <p><b>Proyectó:</b> Nicol Valencia – Profesional de Nómina y Contratación<br>
    <b>202211031-348</b></p>
</body>
</html>