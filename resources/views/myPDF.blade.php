<!DOCTYPE html>
<html>
<head>
    <title>Certificado Laboral</title>
</head>
<body>
    <!--"Header"-->
    <p>LA FUNDACIÓN UNIVERSITARIA EMPRESARIAL DE LA CÁMARA DE COMERCIO DE BOGOTÁ
    -UNIEMPRESARIAL-<br>
    Personería Jurídica, Resolución 598 del 2 de abril de 2001 del Ministerio de Educación Nacional - Registro ICFES 2738</p>
    <h1>{{ $title }}</h1>

    @switch($id_roles)
    @case('2')
    <p>Que el señor(a) {{ $name }} identificada con {{ $t_doc }} No. {{ $doc }}, está vinculada con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 
        830.084.876-6, desempeñando el cargo de ___________________, mediante un contrato a término ----------------------- desde el ________________. Actualmente devenga un salario de (letras y números) ____________).</p>
        @break

    @case('3')
    <p> Que el señor(a) {{ $name }} identificado con {{ $t_doc }} No.{{ $doc }}, está vinculado con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desde el __________. Actualmente desempeña el cargo de DOCENTE con dedicación mediante un contrato a término ________, devengando un salario de (letras y números)___________</p>
        @break

    @case('4')
    <p>Que el señor(a) {{ $name }}, identificado con {{ $t_doc }} No. {{ $doc }}, está vinculado con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeñando el cargo de DOCENTE HORA CATEDRA mediante contratos ------------ en los siguientes periodos:</p>
    <table>
    </table>    
        @break

    @case('5')
    <p>Que el señor(a) {{ $name }}, identificado con {{ $t_doc }} No. {{ $doc }}, esta vinculado con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, mediante un contrato de------------ desde el _____________ hasta el ___________________ en el área de _______________.</p>
    @break

    @default
@endswitch
    <!--"Footer"-->
    <p>El presente certificado se expide a solicitud del interesado a los treinta y uno ({{ $day }}) días del mes de octubre de {{ $year }}.
        <br>
        <br>
        <br>
    Atentamente
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    LUZ YAZMÍN LIZARAZO JIMÉNEZ<br>
    Directora de Talento Humano<br>
    Proyectó: Nicol Valencia – Profesional de Nómina y Contratación<br>
    202211031-348</p>
</body>
</html>