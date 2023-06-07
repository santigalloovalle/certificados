<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class Usersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name"=>"Administrador",
                "email"=>"admin@gmail.com",
                "password"=>Hash::make("admin123"),
                "id_roles"=>2
            ],
            [
                "name"=>"user",
                "email"=>"user@gmail.com",
                "password"=>Hash::make("user123"),
                               "id_roles"=>3
            ],
            [
                "name"=>"MARTINEZ TALERO YARLEYDI LEONOR",
                "email"=>"ymartinez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RODRIGUEZ GARCIA CINDY PAMELA",
                "email"=>"cprodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"VALENCIA  RINCON PAULA NICOL",
                "email"=>"pvalencia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>2
            ],
            [
                "name"=>"PARRA RUIZ ESNEDA",
                "email"=>"esparra@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ANDRADE SANCHEZ KHADIDJA BIBIANA",
                "email"=>"bandrade@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MARIN MORENO CARLOS ANDRES",
                "email"=>"cmarin@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"TRIANA MENA NASLY ANDREA ",
                "email"=>"atriana@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CUPITRA  LUZ ADRIANA",
                "email"=>"lcupitra@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CRISTIAN MICHEL MENDEZ DEVIA",
                "email"=>"cmendez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GUEVARA MARTINEZ ANGIE JULIETH",
                "email"=>"aguevara@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GARCIA CORDOBA ASTRID LILIANA",
                "email"=>"agarcia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"TABORDA OCAMPO BEATRIZ EUGENIA",
                "email"=>"btaborda@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"SUSA RUBIANO RICARDO",
                "email"=>"rsusa@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"HOYOS BALLESTEROS RICARDO ",
                "email"=>"rhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"OLARTE RODRIGUEZ INGRID CAROLINA",
                "email"=>"colarte@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"FERREIRA RODRIGUEZ JOSE IVAN EDUARDO",
                "email"=>"jferreira@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GONZALEZ NOVOA HENRY",
                "email"=>"hgonzalez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ROBAYO MACIAS MARIA DEL CARMEN",
                "email"=>"mrobayo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"VARGAS HERNANDEZ RICARDO AUGUSTO",
                "email"=>"rvargas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ACERO HENAO JACK HARBITH",
                "email"=>"jacero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MENDOZA TOLOSA HENRY ANTONIO",
                "email"=>"hmendoza@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GARCIA PINZON JUAN CARLOS",
                "email"=>"jugarcia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"JURADO DIAZ RAMON MARIA",
                "email"=>"mjurado@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CHAVES BELTRAN LUISA ANDREA",
                "email"=>"lchaves@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GOMEZ CARRE¥O LUIS GABRIEL",
                "email"=>"lgomez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RICO RUIZ FRANCY IGNORI",
                "email"=>"frico@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MUÑOZ SALGADO JUAN GUILLERMO",
                "email"=>"jumunoz@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ALDANA MIRANDA DANIEL ORLANDO",
                "email"=>"daldana@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CARDONA VARGAS JENNY ANDREA",
                "email"=>"acardona@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"DUQUE MIRANDA JUAN CARLOS",
                "email"=>"jcduque@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ARGUELLO VASQUEZ ANDRES MAURICIO ",
                "email"=>"aarguello@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RODRIGUEZ GOMEZ JUAN CARLOS",
                "email"=>"jurodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"VILLA RIVERA JOAQUIN ANDRES",
                "email"=>"jvilla@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GUATAVITA ORDOÑEZ LAURA XIMENA",
                "email"=>"lguatavita@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"BONILLA  ANA LUCIA",
                "email"=>"abonilla@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"LEON VILLANUEVA ALEXANDER",
                "email"=>"aleon@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"TORRES SANMIGUEL WILLIAM PETER",
                "email"=>"wtorres@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MORA CALDERON NELSON ",
                "email"=>"nmora@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MURILLO BARRERA LAURA GERALDINE",
                "email"=>"lmurillo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"LIZARAZO JIMENEZ LUZ YAZMIN",
                "email"=>"llizarazo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"SUAREZ CORTES LYDA ADRIANA",
                "email"=>"lsuarez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"HIGUERA SARMIENTO SANDRA JOHANA",
                "email"=>"shiguera@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"REYES MORENO LUZ MARLENN",
                "email"=>"lreyes@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ACOSTA AMAYA AURA CAROLINA",
                "email"=>"aacosta@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CASTELLANOS ACOSTA LUIS FELIPE",
                "email"=>"lcastellanos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"NIÑO CHIVARA LUISA FERNANDA",
                "email"=>"lnino@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"LAMBRA¥O ROMERO SARA LUZ",
                "email"=>"slambrano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"HOYOS RUIZ DUVAN CAMILO",
                "email"=>"dhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GOMEZ PAREDES LAURA VERONICA",
                "email"=>"lagomez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"LANGEBAEK RUEDA CARL HENRIK",
                "email"=>"clangebaek@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"TORO LEAL NORMA ALEXANDRA",
                "email"=>"atoro@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ROBLES VILLABONA NIDIA JOHANNA",
                "email"=>"nrobles@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"DUQUE MORALES SANDRA MILENA",
                "email"=>"sduque@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MONTERO HENDE GUSTAVO ANDRES",
                "email"=>"gamontero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MOLINA ROJAS YASMIN",
                "email"=>"ymolina@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"TRUJILLO VARGAS GIOVANNY HERNANDO",
                "email"=>"gtrujillo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"DELGADO JAIMES KELLYN JOHANNA",
                "email"=>"kdelgado@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"TORRES ARIZA JAIME MAURICIO",
                "email"=>"jtorres@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ROJAS LEON JUAN PABLO",
                "email"=>"jrleon@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CHAPARRO HERNANDEZ ELSY NATHALIA",
                "email"=>"echaparro@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CASTILLO RAMIREZ ADOLFO DAVID",
                "email"=>"acastillor@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ACHURY PRADA YENNY",
                "email"=>"yachury@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MANUEL FERNANDO TORRES CIFUENTES",
                "email"=>"mtorres@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CASTAÑO CHAMORRO CAMILO ALEXEY",
                "email"=>"ccastanoc@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ZARUR LATORRE FRANCISCO SAID",
                "email"=>"fzarur@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"SANDOVAL LLANOS JOHN JAIRO",
                "email"=>"jsandoval@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"PUENTES CAMINOS MARGARITA ELENA",
                "email"=>"mpuentesc@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"HURTADO RUIZ EDWIN",
                "email"=>"ehurtado@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"FONSECA GUTIERREZ MARIA ALEJANDRA",
                "email"=>"afonseca@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GOMEZ SEGURA CARLOS ENRIQUE",
                "email"=>"cegomez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ARBELAEZ ARTEAGA SONIA PATRICIA",
                "email"=>"sarbelaez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"FAJARDO MORENO CAMILO ANDRES",
                "email"=>"cfajardo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RATIVA HUERTAS CLAUDIA SOFIA",
                "email"=>"crativa@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ALVAREZ ZULUAGA LUZ FATIMA",
                "email"=>"lalvarez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"HOYOS RESTREPO JUANA MARGARITA",
                "email"=>"jhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"PACHON GUTIERREZ ADRIANA PAOLA",
                "email"=>"apachon@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"BELTRAN GOMEZ ADAN",
                "email"=>"abeltran@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RINCON FUENTES JEIMY CAROLINA",
                "email"=>"jrinconf@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ESPINOSA VELASQUEZ JOHN JAIRO",
                "email"=>"jespinosa@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"SAAVEDRA MARTINEZ LUISA FERNANDA",
                "email"=>"lsaavedra@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ROMERO JIMENEZ KAROL VIVIANA",
                "email"=>"kvromero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"LIZARAZO SIERRA NESTOR JAVIER",
                "email"=>"nlizarazo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CARRERO FORERO IBETH BIBIANA",
                "email"=>"icarrero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"NEME MAYORGA YEIMY MAGALY",
                "email"=>"ymagaly@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"BERMUDEZ RODRIGUEZ ERICK SEBASTIAN",
                "email"=>"ebermudezr@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ARIZA CARRILLO MARIA FERNANDA",
                "email"=>"mariza@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"PEREZ RODRIGUEZ CARLOS ANDRES",
                "email"=>"cperez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CARDOZO CABAS GINA GELTRUDIS",
                "email"=>"gcardozo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"VARGAS SANTIAGO MILLER ESNEYDER",
                "email"=>"mvargas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"VARGAS TELLEZ DIANA CATALINA",
                "email"=>"dvargas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"OLIVARES TENORIO MIGUEL ANGEL ",
                "email"=>"molivares@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"LESMES ALFONSO JESSICA ANDREA",
                "email"=>"jlesmes@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"VELANDIA RUIZ CLAUDIA",
                "email"=>"cvelandiar@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"BUENO CASALLAS ANDRES FELIPE ",
                "email"=>"abueno@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"JULETH JULIANA IBARRA RAMIREZ",
                "email"=>"jibarra@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MOLANO MORENO MILLER STEVEN",
                "email"=>"mmolanos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5
            ],
            [
                "name"=>"GARCIA AVILA BEATRIZ HELENA",
                "email"=>"bgarcia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CASTILLO CASTELLANOS DIEGO FERNANDO",
                "email"=>"dcastillof@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"TORRES VISASUS JOVANNI ANDRES",
                "email"=>"jtorresv@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"NEIRA RUEDA JAVIER ORLANDO",
                "email"=>"jdneira@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GODOY GIL OSCAR FELIPE",
                "email"=>"ogodoy@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CAMARGO PABON MARCELA",
                "email"=>"mcamargo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CAMERO ANGARITA FABIO ENRIQUE",
                "email"=>"fcamero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ESTEFAN RAMIREZ FRANCISCO",
                "email"=>"festefan@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MARIN YAIMA JOSE ALEJANDRO",
                "email"=>"jmarin@uniempesarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RUIZ GUERRERO YOVANNY",
                "email"=>"yruiz@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RAMIREZ PINZON LUISA DANIELA",
                "email"=>"ldramirez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"SAENZ GUERRERO CARLOS ANDRES",
                "email"=>"csaenz@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5
            ],
            [
                "name"=>"DUARTE HERNANDEZ KEVIN",
                "email"=>"kduarteh@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GARCIA VALERO JULIANA",
                "email"=>"jgarciav@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MELO MUÑOZ DIANA ROCIO",
                "email"=>"drmelo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"BUITRAGO MALAMBO CHRISTIAN ",
                "email"=>"chbuitrago@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CASALLAS LOZANO MARGARITA MARÖA",
                "email"=>"mcasallas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ZAMUDIO ESPINOSA WILLIAM ARMANDO",
                "email"=>"wzamudio@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"OVIEDO LLANOS ADRIANA MARIA ",
                "email"=>"aoviedo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],            
            [
                "name"=>"VEGA MENDEZ MILLERLANDHY",
                "email"=>"mvega@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"BULA DE LEON KATHERINE ",
                "email"=>"kbula@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RUBIANO RODRIGUEZ PABLO ANTONIO",
                "email"=>"prubiano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"ARIAS ARIAS EVELYN DAYANA",
                "email"=>"earias@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"SANDOVAL GALVIS MARIA ANGELICA",
                "email"=>"masandoval@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"AGUILAR SANCHEZ JOSE EDWIN ",
                "email"=>"jeaguilar@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"SERRANO SERRATO LEIDY VIVIANA ",
                "email"=>"lvserrano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"LOPEZ VARON LUISA FERNANDA ",
                "email"=>"llopezv@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"VALENCIA AYALA LIZETH MARIANA ",
                "email"=>"lvalenciaa@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CASTAÑO BONILLA SEBASTIAN FELIPE  ",
                "email"=>"scastano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CAMPOS JULCA CRISTHIAM DANIEL ",
                "email"=>"ccampos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RESTREPO DUARTE ESTEFANIA",
                "email"=>"erestrepo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"AGUIRRE ROMO DIANA ARELY",
                "email"=>"draguirre@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GARAVITO PEREZ CARLOS EDUARDO",
                "email"=>"cgaravito@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CACERES CLAUDIA JULIANA",
                "email"=>"ccaceres@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"MONTAÑO ORTIZ EDWIN",
                "email"=>"emontano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"REY CRUZ CARLOS ANDRES",
                "email"=>"crey@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5
            ],
            [
                "name"=>"ROJAS RINCON JOAN SEBASTIAN ",
                "email"=>"jrojasr@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"CARDENAS HERRERA CLAUDIA PATRICIA",
                "email"=>"cpcardenas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5
            ],
            [
                "name"=>"ARCILA RODRIGUEZ KELLY GERALDYN",
                "email"=>"karcila@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"RODRIGUEZ HERRERA SINDY ASTRID",
                "email"=>"srodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"FERREIRA ACOSTA ALEJANDRA",
                "email"=>"aferreira@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GOMEZ ROLDAN IGNACIO",
                "email"=>"igomez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GAITAN DE RONDEROS MARIA TERESA",
                "email"=>"mgaitan@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],
            [
                "name"=>"GONZALEZ MENDOZA DIEGO FERNANDO",
                "email"=>"dgonzalezm@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5
            ],
            [
                "name"=>"DEVIA HURTADO DAVID SANTIAGO ",
                "email"=>"ddevia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5
            ],
            [
                "name"=>"GALINDO RINCON WILLIAM RAFAEL",
                "email"=>"wgalindo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3
            ],

        ];

        DB::Table('users')->insert($data);

    }
}