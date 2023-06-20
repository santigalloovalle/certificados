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
                "email"=>"admin@uniempresarial.edu.co",
                "password"=>Hash::make("admin123"),
                "id_roles"=>2,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"user",
                "email"=>"user@uniempresarial.edu.co",
                "password"=>Hash::make("user123"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARTINEZ TALERO YARLEYDI LEONOR",
                "email"=>"ymartinez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RODRIGUEZ GARCIA CINDY PAMELA",
                "email"=>"cprodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"VALENCIA  RINCON PAULA NICOL",
                "email"=>"pvalencia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>2,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"PARRA RUIZ ESNEDA",
                "email"=>"esparra@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ANDRADE SANCHEZ KHADIDJA BIBIANA",
                "email"=>"bandrade@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARIN MORENO CARLOS ANDRES",
                "email"=>"cmarin@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"TRIANA MENA NASLY ANDREA ",
                "email"=>"atriana@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CUPITRA  LUZ ADRIANA",
                "email"=>"lcupitra@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CRISTIAN MICHEL MENDEZ DEVIA",
                "email"=>"cmendez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GUEVARA MARTINEZ ANGIE JULIETH",
                "email"=>"aguevara@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GARCIA CORDOBA ASTRID LILIANA",
                "email"=>"agarcia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"TABORDA OCAMPO BEATRIZ EUGENIA",
                "email"=>"btaborda@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SUSA RUBIANO RICARDO",
                "email"=>"rsusa@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"HOYOS BALLESTEROS RICARDO ",
                "email"=>"rhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"OLARTE RODRIGUEZ INGRID CAROLINA",
                "email"=>"colarte@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"FERREIRA RODRIGUEZ JOSE IVAN EDUARDO",
                "email"=>"jferreira@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GONZALEZ NOVOA HENRY",
                "email"=>"hgonzalez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ROBAYO MACIAS MARIA DEL CARMEN",
                "email"=>"mrobayo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"VARGAS HERNANDEZ RICARDO AUGUSTO",
                "email"=>"rvargas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ACERO HENAO JACK HARBITH",
                "email"=>"jacero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MENDOZA TOLOSA HENRY ANTONIO",
                "email"=>"hmendoza@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GARCIA PINZON JUAN CARLOS",
                "email"=>"jugarcia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JURADO DIAZ RAMON MARIA",
                "email"=>"mjurado@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CHAVES BELTRAN LUISA ANDREA",
                "email"=>"lchaves@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GOMEZ CARRE¥O LUIS GABRIEL",
                "email"=>"lgomez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RICO RUIZ FRANCY IGNORI",
                "email"=>"frico@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MUÑOZ SALGADO JUAN GUILLERMO",
                "email"=>"jumunoz@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ALDANA MIRANDA DANIEL ORLANDO",
                "email"=>"daldana@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARDONA VARGAS JENNY ANDREA",
                "email"=>"acardona@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DUQUE MIRANDA JUAN CARLOS",
                "email"=>"jcduque@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ARGUELLO VASQUEZ ANDRES MAURICIO ",
                "email"=>"aarguello@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RODRIGUEZ GOMEZ JUAN CARLOS",
                "email"=>"jurodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"VILLA RIVERA JOAQUIN ANDRES",
                "email"=>"jvilla@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GUATAVITA ORDOÑEZ LAURA XIMENA",
                "email"=>"lguatavita@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"BONILLA  ANA LUCIA",
                "email"=>"abonilla@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LEON VILLANUEVA ALEXANDER",
                "email"=>"aleon@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"TORRES SANMIGUEL WILLIAM PETER",
                "email"=>"wtorres@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MORA CALDERON NELSON ",
                "email"=>"nmora@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MURILLO BARRERA LAURA GERALDINE",
                "email"=>"lmurillo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LIZARAZO JIMENEZ LUZ YAZMIN",
                "email"=>"llizarazo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SUAREZ CORTES LYDA ADRIANA",
                "email"=>"lsuarez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"HIGUERA SARMIENTO SANDRA JOHANA",
                "email"=>"shiguera@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"REYES MORENO LUZ MARLENN",
                "email"=>"lreyes@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ACOSTA AMAYA AURA CAROLINA",
                "email"=>"aacosta@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CASTELLANOS ACOSTA LUIS FELIPE",
                "email"=>"lcastellanos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"NIÑO CHIVARA LUISA FERNANDA",
                "email"=>"lnino@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LAMBRA¥O ROMERO SARA LUZ",
                "email"=>"slambrano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"HOYOS RUIZ DUVAN CAMILO",
                "email"=>"dhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GOMEZ PAREDES LAURA VERONICA",
                "email"=>"lagomez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LANGEBAEK RUEDA CARL HENRIK",
                "email"=>"clangebaek@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"TORO LEAL NORMA ALEXANDRA",
                "email"=>"atoro@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ROBLES VILLABONA NIDIA JOHANNA",
                "email"=>"nrobles@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DUQUE MORALES SANDRA MILENA",
                "email"=>"sduque@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MONTERO HENDE GUSTAVO ANDRES",
                "email"=>"gamontero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MOLINA ROJAS YASMIN",
                "email"=>"ymolina@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"TRUJILLO VARGAS GIOVANNY HERNANDO",
                "email"=>"gtrujillo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DELGADO JAIMES KELLYN JOHANNA",
                "email"=>"kdelgado@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"TORRES ARIZA JAIME MAURICIO",
                "email"=>"jtorres@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ROJAS LEON JUAN PABLO",
                "email"=>"jrleon@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CHAPARRO HERNANDEZ ELSY NATHALIA",
                "email"=>"echaparro@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CASTILLO RAMIREZ ADOLFO DAVID",
                "email"=>"acastillor@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ACHURY PRADA YENNY",
                "email"=>"yachury@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MANUEL FERNANDO TORRES CIFUENTES",
                "email"=>"mtorres@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CASTAÑO CHAMORRO CAMILO ALEXEY",
                "email"=>"ccastanoc@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ZARUR LATORRE FRANCISCO SAID",
                "email"=>"fzarur@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SANDOVAL LLANOS JOHN JAIRO",
                "email"=>"jsandoval@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"PUENTES CAMINOS MARGARITA ELENA",
                "email"=>"mpuentesc@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"HURTADO RUIZ EDWIN",
                "email"=>"ehurtado@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"FONSECA GUTIERREZ MARIA ALEJANDRA",
                "email"=>"afonseca@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GOMEZ SEGURA CARLOS ENRIQUE",
                "email"=>"cegomez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ARBELAEZ ARTEAGA SONIA PATRICIA",
                "email"=>"sarbelaez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"FAJARDO MORENO CAMILO ANDRES",
                "email"=>"cfajardo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RATIVA HUERTAS CLAUDIA SOFIA",
                "email"=>"crativa@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ALVAREZ ZULUAGA LUZ FATIMA",
                "email"=>"lalvarez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"HOYOS RESTREPO JUANA MARGARITA",
                "email"=>"jhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"PACHON GUTIERREZ ADRIANA PAOLA",
                "email"=>"apachon@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"BELTRAN GOMEZ ADAN",
                "email"=>"abeltran@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RINCON FUENTES JEIMY CAROLINA",
                "email"=>"jrinconf@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ESPINOSA VELASQUEZ JOHN JAIRO",
                "email"=>"jespinosa@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SAAVEDRA MARTINEZ LUISA FERNANDA",
                "email"=>"lsaavedra@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ROMERO JIMENEZ KAROL VIVIANA",
                "email"=>"kvromero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LIZARAZO SIERRA NESTOR JAVIER",
                "email"=>"nlizarazo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARRERO FORERO IBETH BIBIANA",
                "email"=>"icarrero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"NEME MAYORGA YEIMY MAGALY",
                "email"=>"ymagaly@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"BERMUDEZ RODRIGUEZ ERICK SEBASTIAN",
                "email"=>"ebermudezr@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ARIZA CARRILLO MARIA FERNANDA",
                "email"=>"mariza@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"PEREZ RODRIGUEZ CARLOS ANDRES",
                "email"=>"cperez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARDOZO CABAS GINA GELTRUDIS",
                "email"=>"gcardozo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"VARGAS SANTIAGO MILLER ESNEYDER",
                "email"=>"mvargas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"VARGAS TELLEZ DIANA CATALINA",
                "email"=>"dvargas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"OLIVARES TENORIO MIGUEL ANGEL ",
                "email"=>"molivares@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LESMES ALFONSO JESSICA ANDREA",
                "email"=>"jlesmes@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"VELANDIA RUIZ CLAUDIA",
                "email"=>"cvelandiar@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"BUENO CASALLAS ANDRES FELIPE ",
                "email"=>"abueno@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JULETH JULIANA IBARRA RAMIREZ",
                "email"=>"jibarra@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MOLANO MORENO MILLER STEVEN",
                "email"=>"mmolanos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GARCIA AVILA BEATRIZ HELENA",
                "email"=>"bgarcia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CASTILLO CASTELLANOS DIEGO FERNANDO",
                "email"=>"dcastillof@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"TORRES VISASUS JOVANNI ANDRES",
                "email"=>"jtorresv@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"NEIRA RUEDA JAVIER ORLANDO",
                "email"=>"jdneira@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GODOY GIL OSCAR FELIPE",
                "email"=>"ogodoy@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CAMARGO PABON MARCELA",
                "email"=>"mcamargo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CAMERO ANGARITA FABIO ENRIQUE",
                "email"=>"fcamero@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ESTEFAN RAMIREZ FRANCISCO",
                "email"=>"festefan@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARIN YAIMA JOSE ALEJANDRO",
                "email"=>"jmarin@uniempesarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RUIZ GUERRERO YOVANNY",
                "email"=>"yruiz@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RAMIREZ PINZON LUISA DANIELA",
                "email"=>"ldramirez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SAENZ GUERRERO CARLOS ANDRES",
                "email"=>"csaenz@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DUARTE HERNANDEZ KEVIN",
                "email"=>"kduarteh@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GARCIA VALERO JULIANA",
                "email"=>"jgarciav@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MELO MUÑOZ DIANA ROCIO",
                "email"=>"drmelo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"BUITRAGO MALAMBO CHRISTIAN ",
                "email"=>"chbuitrago@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CASALLAS LOZANO MARGARITA MARÖA",
                "email"=>"mcasallas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ZAMUDIO ESPINOSA WILLIAM ARMANDO",
                "email"=>"wzamudio@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"OVIEDO LLANOS ADRIANA MARIA ",
                "email"=>"aoviedo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],            
            [
                "name"=>"VEGA MENDEZ MILLERLANDHY",
                "email"=>"mvega@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"BULA DE LEON KATHERINE ",
                "email"=>"kbula@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RUBIANO RODRIGUEZ PABLO ANTONIO",
                "email"=>"prubiano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ARIAS ARIAS EVELYN DAYANA",
                "email"=>"earias@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SANDOVAL GALVIS MARIA ANGELICA",
                "email"=>"masandoval@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"AGUILAR SANCHEZ JOSE EDWIN ",
                "email"=>"jeaguilar@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SERRANO SERRATO LEIDY VIVIANA ",
                "email"=>"lvserrano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LOPEZ VARON LUISA FERNANDA ",
                "email"=>"llopezv@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"VALENCIA AYALA LIZETH MARIANA ",
                "email"=>"lvalenciaa@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CASTAÑO BONILLA SEBASTIAN FELIPE  ",
                "email"=>"scastano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CAMPOS JULCA CRISTHIAM DANIEL ",
                "email"=>"ccampos@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RESTREPO DUARTE ESTEFANIA",
                "email"=>"erestrepo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"AGUIRRE ROMO DIANA ARELY",
                "email"=>"draguirre@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GARAVITO PEREZ CARLOS EDUARDO",
                "email"=>"cgaravito@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CACERES CLAUDIA JULIANA",
                "email"=>"ccaceres@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MONTAÑO ORTIZ EDWIN",
                "email"=>"emontano@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"REY CRUZ CARLOS ANDRES",
                "email"=>"crey@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ROJAS RINCON JOAN SEBASTIAN ",
                "email"=>"jrojasr@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARDENAS HERRERA CLAUDIA PATRICIA",
                "email"=>"cpcardenas@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ARCILA RODRIGUEZ KELLY GERALDYN",
                "email"=>"karcila@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RODRIGUEZ HERRERA SINDY ASTRID",
                "email"=>"srodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"FERREIRA ACOSTA ALEJANDRA",
                "email"=>"aferreira@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GOMEZ ROLDAN IGNACIO",
                "email"=>"igomez@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GAITAN DE RONDEROS MARIA TERESA",
                "email"=>"mgaitan@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GONZALEZ MENDOZA DIEGO FERNANDO",
                "email"=>"dgonzalezm@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DEVIA HURTADO DAVID SANTIAGO ",
                "email"=>"ddevia@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GALINDO RINCON WILLIAM RAFAEL",
                "email"=>"wgalindo@uniempresarial.edu.co",
                "password"=>Hash::make("12345678"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"Administrador",
                "email"=>"admin@gmail.com",
                "password"=>Hash::make("admin123"),
                "id_roles"=>2,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"user",
                "email"=>"user@gmail.com",
                "password"=>Hash::make("user123"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],

        ];

        DB::Table('users')->insert($data);

    }
}