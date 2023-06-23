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
                "last"=>"Administrador",
                "email"=>"admin@uniempresarial.edu.co",
                "password"=>Hash::make("admin123*"),
                "id_roles"=>2,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"user",
                "last"=>"user",
                "email"=>"user@uniempresarial.edu.co",
                "password"=>Hash::make("user123*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"YARLEYDI LEONOR",
                "last"=>"MARTINEZ TALERO",
                "email"=>"ymartinez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CINDY PAMELA",
                "last"=>"RODRIGUEZ GARCIA",
                "email"=>"cprodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"PAULA NICOL",
                "last"=>"VALENCIA  RINCON",
                "email"=>"pvalencia@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>2,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ESNEDA",
                "last"=>"PARRA RUIZ",
                "email"=>"esparra@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"KHADIDJA BIBIANA",
                "last"=>"ANDRADE SANCHEZ",
                "email"=>"bandrade@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARLOS ANDRES",
                "last"=>"MARIN MORENO",
                "email"=>"cmarin@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"NASLY ANDREA ",
                "last"=>"TRIANA MENA",
                "email"=>"atriana@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUZ ADRIANA",
                "last"=>"CUPITRA",
                "email"=>"lcupitra@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MENDEZ DEVIA",
                "last"=>"CRISTIAN MICHEL",
                "email"=>"cmendez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ANGIE JULIETH",
                "last"=>"GUEVARA MARTINEZ",
                "email"=>"aguevara@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ASTRID LILIANA",
                "last"=>"GARCIA CORDOBA",
                "email"=>"agarcia@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"BEATRIZ EUGENIA",
                "last"=>"TABORDA OCAMPO",
                "email"=>"btaborda@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RICARDO",
                "last"=>"SUSA RUBIANO",
                "email"=>"rsusa@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RICARDO ",
                "last"=>"HOYOS BALLESTEROS",
                "email"=>"rhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"INGRID CAROLINA",
                "last"=>"OLARTE RODRIGUEZ",
                "email"=>"colarte@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JOSE IVAN EDUARDO",
                "last"=>"FERREIRA RODRIGUEZ",
                "email"=>"jferreira@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"HENRY",
                "last"=>"GONZALEZ NOVOA",
                "email"=>"hgonzalez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARIA DEL CARMEN",
                "last"=>"ROBAYO MACIAS",
                "email"=>"mrobayo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RICARDO AUGUSTO",
                "last"=>"VARGAS HERNANDEZ",
                "email"=>"rvargas@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JACK HARBITH",
                "last"=>"ACERO HENAO",
                "email"=>"jacero@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"HENRY ANTONIO",
                "last"=>"MENDOZA TOLOSA",
                "email"=>"hmendoza@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JUAN CARLOS",
                "last"=>"GARCIA PINZON",
                "email"=>"jugarcia@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"RAMON MARIA",
                "last"=>"JURADO DIAZ",
                "email"=>"mjurado@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUISA ANDREA",
                "last"=>"CHAVES BELTRAN",
                "email"=>"lchaves@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUIS GABRIEL",
                "last"=>"GOMEZ CARREÑO ",
                "email"=>"lgomez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"FRANCY IGNORI",
                "last"=>"RICO RUIZ",
                "email"=>"frico@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JUAN GUILLERMO",
                "last"=>"MUÑOZ SALGADO",
                "email"=>"jumunoz@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DANIEL ORLANDO",
                "last"=>"ALDANA MIRANDA",
                "email"=>"daldana@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JENNY ANDREA",
                "last"=>"CARDONA VARGAS",
                "email"=>"acardona@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JUAN CARLOS",
                "last"=>"DUQUE MIRANDA ",
                "email"=>"jcduque@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ANDRES MAURICIO ",
                "last"=>"ARGUELLO VASQUEZ",
                "email"=>"aarguello@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JUAN CARLOS",
                "last"=>"RODRIGUEZ GOMEZ",
                "email"=>"jurodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JOAQUIN ANDRES",
                "last"=>"VILLA RIVERA",
                "email"=>"jvilla@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LAURA XIMENA",
                "last"=>"GUATAVITA ORDOÑEZ",
                "email"=>"lguatavita@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ANA LUCIA",
                "last"=>"BONILLA ",
                "email"=>"abonilla@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ALEXANDER",
                "last"=>"LEON VILLANUEVA",
                "email"=>"aleon@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"WILLIAM PETER",
                "last"=>"TORRES SANMIGUEL",
                "email"=>"wtorres@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"NELSON ",
                "last"=>"MORA CALDERON",
                "email"=>"nmora@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LAURA GERALDINE",
                "last"=>"MURILLO BARRERA",
                "email"=>"lmurillo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUZ YAZMIN",
                "last"=>"LIZARAZO JIMENEZ",
                "email"=>"llizarazo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LYDA ADRIANA",
                "last"=>"SUAREZ CORTES",
                "email"=>"lsuarez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SANDRA JOHANA",
                "last"=>"HIGUERA SARMIENTO",
                "email"=>"shiguera@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUZ MARLENN",
                "last"=>"REYES MORENO",
                "email"=>"lreyes@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"AURA CAROLINA",
                "last"=>"ACOSTA AMAYA",
                "email"=>"aacosta@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUIS FELIPE",
                "last"=>"CASTELLANOS ACOSTA",
                "email"=>"lcastellanos@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUISA FERNANDA",
                "last"=>"NIÑO CHIVARA",
                "email"=>"lnino@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SARA LUZ",
                "last"=>"LAMBRAÑO ROMERO",
                "email"=>"slambrano@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DUVAN CAMILO",
                "last"=>"HOYOS RUIZ",
                "email"=>"dhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LAURA VERONICA",
                "last"=>"GOMEZ PAREDES",
                "email"=>"lagomez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARL HENRIK",
                "last"=>"LANGEBAEK RUEDA",
                "email"=>"clangebaek@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"NORMA ALEXANDRA",
                "last"=>"TORO LEAL",
                "email"=>"atoro@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"NIDIA JOHANNA",
                "last"=>"ROBLES VILLABONA",
                "email"=>"nrobles@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SANDRA MILENA",
                "last"=>"DUQUE MORALES",
                "email"=>"sduque@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GUSTAVO ANDRES",
                "last"=>"MONTERO HENDE",
                "email"=>"gamontero@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"YASMIN",
                "last"=>"MOLINA ROJAS",
                "email"=>"ymolina@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GIOVANNY HERNANDO",
                "last"=>"TRUJILLO VARGAS ",
                "email"=>"gtrujillo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"KELLYN JOHANNA",
                "last"=>"DELGADO JAIMES",
                "email"=>"kdelgado@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JAIME MAURICIO",
                "last"=>"TORRES ARIZA",
                "email"=>"jtorres@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JUAN PABLO",
                "last"=>"ROJAS LEON",
                "email"=>"jrleon@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ELSY NATHALIA",
                "last"=>"CHAPARRO HERNANDEZ ",
                "email"=>"echaparro@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ADOLFO DAVID",
                "last"=>"CASTILLO RAMIREZ",
                "email"=>"acastillor@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"YENNY",
                "last"=>"ACHURY PRADA",
                "email"=>"yachury@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"TORRES CIFUENTES",
                "last"=>"MANUEL FERNANDO",
                "email"=>"mtorres@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CAMILO ALEXEY",
                "last"=>"CASTAÑO CHAMORRO",
                "email"=>"ccastanoc@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"FRANCISCO SAID",
                "last"=>"ZARUR LATORRE",
                "email"=>"fzarur@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JOHN JAIRO",
                "last"=>"SANDOVAL LLANOS",
                "email"=>"jsandoval@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARGARITA ELENA",
                "last"=>"PUENTES CAMINOS",
                "email"=>"mpuentesc@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"HURTADO RUIZ EDWIN",
                "last"=>"",
                "email"=>"ehurtado@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARIA ALEJANDRA",
                "last"=>"FONSECA GUTIERREZ",
                "email"=>"afonseca@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARLOS ENRIQUE",
                "last"=>"GOMEZ SEGURA",
                "email"=>"cegomez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SONIA PATRICIA",
                "last"=>"ARBELAEZ ARTEAGA",
                "email"=>"sarbelaez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CAMILO ANDRES",
                "last"=>"FAJARDO MORENO",
                "email"=>"cfajardo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CLAUDIA SOFIA",
                "last"=>"RATIVA HUERTAS ",
                "email"=>"crativa@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUZ FATIMA",
                "last"=>"ALVAREZ ZULUAGA",
                "email"=>"lalvarez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JUANA MARGARITA",
                "last"=>"HOYOS RESTREPO",
                "email"=>"jhoyos@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ADRIANA PAOLA",
                "last"=>"PACHON GUTIERREZ",
                "email"=>"apachon@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ADAN",
                "last"=>"BELTRAN GOMEZ",
                "email"=>"abeltran@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JEIMY CAROLINA",
                "last"=>"RINCON FUENTES",
                "email"=>"jrinconf@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JOHN JAIRO",
                "last"=>"ESPINOSA VELASQUEZ ",
                "email"=>"jespinosa@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUISA FERNANDA",
                "last"=>"SAAVEDRA MARTINEZ ",
                "email"=>"lsaavedra@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"KAROL VIVIANA",
                "last"=>"ROMERO JIMENEZ",
                "email"=>"kvromero@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"NESTOR JAVIER",
                "last"=>"LIZARAZO SIERRA",
                "email"=>"nlizarazo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"IBETH BIBIANA",
                "last"=>"CARRERO FORERO",
                "email"=>"icarrero@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"YEIMY MAGALY",
                "last"=>"NEME MAYORGA",
                "email"=>"ymagaly@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ERICK SEBASTIAN",
                "last"=>"BERMUDEZ RODRIGUEZ",
                "email"=>"ebermudezr@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARIA FERNANDA",
                "last"=>"ARIZA CARRILLO",
                "email"=>"mariza@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARLOS ANDRES",
                "last"=>"PEREZ RODRIGUEZ",
                "email"=>"cperez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"GINA GELTRUDIS",
                "last"=>"CARDOZO CABAS",
                "email"=>"gcardozo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MILLER ESNEYDER",
                "last"=>"VARGAS SANTIAGO",
                "email"=>"mvargas@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DIANA CATALINA",
                "last"=>"VARGAS TELLEZ",
                "email"=>"dvargas@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MIGUEL ANGEL ",
                "last"=>"OLIVARES TENORIO",
                "email"=>"molivares@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JESSICA ANDREA",
                "last"=>"LESMES ALFONSO",
                "email"=>"jlesmes@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CLAUDIA",
                "last"=>"VELANDIA RUIZ",
                "email"=>"cvelandiar@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ANDRES FELIPE ",
                "last"=>"BUENO CASALLAS",
                "email"=>"abueno@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"IBARRA RAMIREZ",
                "last"=>"JULETH JULIANA",
                "email"=>"jibarra@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MILLER STEVEN",
                "last"=>"MOLANO MORENO",
                "email"=>"mmolanos@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"BEATRIZ HELENA",
                "last"=>"GARCIA AVILA",
                "email"=>"bgarcia@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DIEGO FERNANDO",
                "last"=>"CASTILLO CASTELLANOS",
                "email"=>"dcastillof@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JOVANNI ANDRES",
                "last"=>"TORRES VISASUS",
                "email"=>"jtorresv@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JAVIER ORLANDO",
                "last"=>"NEIRA RUEDA",
                "email"=>"jdneira@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"OSCAR FELIPE",
                "last"=>"GODOY GIL",
                "email"=>"ogodoy@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARCELA",
                "last"=>"CAMARGO PABON",
                "email"=>"mcamargo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"FABIO ENRIQUE",
                "last"=>"CAMERO ANGARITA",
                "email"=>"fcamero@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"FRANCISCO",
                "last"=>"ESTEFAN RAMIREZ",
                "email"=>"festefan@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JOSE ALEJANDRO",
                "last"=>"MARIN YAIMA",
                "email"=>"jmarin@uniempesarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"YOVANNY",
                "last"=>"RUIZ GUERRERO",
                "email"=>"yruiz@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUISA DANIELA",
                "last"=>"RAMIREZ PINZON",
                "email"=>"ldramirez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARLOS ANDRES",
                "last"=>"SAENZ GUERRERO",
                "email"=>"csaenz@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"KEVIN",
                "last"=>"DUARTE HERNANDEZ",
                "email"=>"kduarteh@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JULIANA",
                "last"=>"GARCIA VALERO",
                "email"=>"jgarciav@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DIANA ROCIO",
                "last"=>"MELO MUÑO",
                "email"=>"drmelo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CHRISTIAN ",
                "last"=>"BUITRAGO MALAMBO",
                "email"=>"chbuitrago@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARGARITA MARÖA",
                "last"=>"CASALLAS LOZANO",
                "email"=>"mcasallas@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"WILLIAM ARMANDO",
                "last"=>"ZAMUDIO ESPINOSA",
                "email"=>"wzamudio@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ADRIANA MARIA ",
                "last"=>"OVIEDO LLANOS",
                "email"=>"aoviedo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],            
            [
                "name"=>"MILLERLANDHY",
                "last"=>"VEGA MENDEZ",
                "email"=>"mvega@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"KATHERINE",
                "last"=>"BULA DE LEON",
                "email"=>"kbula@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"PABLO ANTONIO",
                "last"=>"RUBIANO RODRIGUEZ",
                "email"=>"prubiano@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"EVELYN DAYANA",
                "last"=>"ARIAS ARIAS ",
                "email"=>"earias@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARIA ANGELICA",
                "last"=>"SANDOVAL GALVIS ",
                "email"=>"masandoval@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JOSE EDWIN ",
                "last"=>"AGUILAR SANCHEZ ",
                "email"=>"jeaguilar@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LEIDY VIVIANA ",
                "last"=>"SERRANO SERRATO ",
                "email"=>"lvserrano@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LUISA FERNANDA ",
                "last"=>"LOPEZ VARON ",
                "email"=>"llopezv@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"LIZETH MARIANA ",
                "last"=>"VALENCIA AYALA ",
                "email"=>"lvalenciaa@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SEBASTIAN FELIPE",
                "last"=>"CASTAÑO BONILLA ",
                "email"=>"scastano@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CRISTHIAM DANIEL",
                "last"=>"CAMPOS JULCA",
                "email"=>"ccampos@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ESTEFANIA",
                "last"=>"RESTREPO DUARTE",
                "email"=>"erestrepo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DIANA ARELY",
                "last"=>"AGUIRRE ROMO",
                "email"=>"draguirre@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARLOS EDUARDO",
                "last"=>"GARAVITO PEREZ",
                "email"=>"cgaravito@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CLAUDIA JULIANA",
                "last"=>"CACERES",
                "email"=>"ccaceres@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"), 
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"EDWIN",
                "last"=>"MONTAÑO ORTIZ",
                "email"=>"emontano@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CARLOS ANDRES",
                "last"=>"REY CRUZ",
                "email"=>"crey@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"JOAN SEBASTIAN ",
                "last"=>"ROJAS RINCON",
                "email"=>"jrojasr@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"CLAUDIA PATRICIA",
                "last"=>"CARDENAS HERRERA",
                "email"=>"cpcardenas@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"KELLY GERALDYN",
                "last"=>"ARCILA RODRIGUEZ",
                "email"=>"karcila@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"SINDY ASTRID",
                "last"=>"RODRIGUEZ HERRERA",
                "email"=>"srodriguez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"ALEJANDRA",
                "last"=>"FERREIRA ACOSTA",
                "email"=>"aferreira@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"IGNACIO",
                "last"=>"GOMEZ ROLDAN",
                "email"=>"igomez@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"MARIA TERESA",
                "last"=>"GAITAN DE RONDEROS ",
                "email"=>"mgaitan@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DIEGO FERNANDO",
                "last"=>"GONZALEZ MENDOZA",
                "email"=>"dgonzalezm@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"DAVID SANTIAGO",
                "last"=>"DEVIA HURTADO",
                "email"=>"ddevia@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>5,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"WILLIAM RAFAEL",
                "last"=>"GALINDO RINCON",
                "email"=>"wgalindo@uniempresarial.edu.co",
                "password"=>Hash::make("123456a*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"Administrador",
                "last"=>"Administrador",
                "email"=>"admin@gmail.com",
                "password"=>Hash::make("admin123*"),
                "id_roles"=>2,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],
            [
                "name"=>"user",
                "last"=>"user",
                "email"=>"user@gmail.com",
                "password"=>Hash::make("user123*"),
                "id_roles"=>3,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
            ],

        ];

        DB::Table('users')->insert($data);

    }
}