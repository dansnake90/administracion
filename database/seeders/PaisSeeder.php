<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paises = [
            'CHILE',
            'AFGANISTAN',
            'AFRICA DEL SUR',
            'ALBANIA',
            'ALEMANIA',
            'ANDORRA',
            'ANGOLA',
            'ANTIGUA Y BARBUDA',
            'ARABIA SAUDITA',
            'ARGELIA',
            'ARGENTINA',
            'ARMENIA',
            'ARUBA',
            'AUSTRALIA',
            'AUSTRIA',
            'AZERBAIYAN',
            'BAHAMAS',
            'BAHREIN',
            'BANGLADESH',
            'BARBADOS',
            'BELGICA',
            'BELICE',
            'BENIN',
            'BERMUDAS',
            'BHUTAN',
            'BIOLERRUSIA',
            'BIRMANIA',
            'BOLIVIA',
            'BOSNIA-HERZEGOVINA',
            'BOSTWANA',
            'BRASIL',
            'BRUNEI DARUSSULAM',
            'BULGARIA',
            'BURKINA FASO',
            'BURUNDI',
            'CAMBOYA',
            'CAMERUN',
            'CANADA',
            'CHAD',
            'CHINA',
            'CHINA TAIPEI',
            'CHIPRE',
            'COLOMBIA',
            'COMORAS',
            'COREA DEL NORTE',
            'COREA DEL SUR',
            'COSTA DE MARFIL',
            'COSTA RICA',
            'CROACIA',
            'CUBA',
            'DINAMARCA',
            'DOMINICA',
            'ECUADOR',
            'EGIPTO',
            'EL SALVADOR',
            'EMIRATOS ARABES UNIDOS',
            'ERITREA',
            'ESLOVAQUIA',
            'ESLOVENIA',
            'ESPANA',
            'ESTADOS UNIDOS',
            'ESTONIA',
            'ETIOPIA',
            'FIJI',
            'FILIPINAS',
            'FINLANDIA',
            'FRANCIA',
            'GABON',
            'GAMBIA',
            'GEORGIA',
            'GHANA',
            'GRANADA',
            'GRAN-BRETANA',
            'GRECIA',
            'GUAM',
            'GUATEMALA',
            'GUINEA',
            'GUINEA ECUATORIAL',
            'GUINEA-BISSAU',
            'GUYANA',
            'HAITI',
            'HONDURAS',
            'HONG KONG',
            'HUNGRIA',
            'INDIA',
            'INDONESIA',
            'IRAK',
            'IRAN',
            'IRLANDA',
            'ISLANDIA',
            'ISLAS CABO VERDE',
            'ISLAS CAIMAN',
            'ISLAS COOK',
            'ISLAS MARSHALL',
            'ISLAS SALOMON',
            'ISLAS VIRGENES AMERICANAS',
            'ISLAS VIRGENES BRITANICAS',
            'ISRAEL',
            'ITALIA',
            'JAMAICA',
            'JAPON',
            'JORDANIA',
            'KAZAJSTAN',
            'KENIA',
            'KIRGUISTAN',
            'KIRIBATI',
            'KUWAIT',
            'LAOS',
            'LESOTHO',
            'LETONIA',
            'LIBANO',
            'LIBERIA',
            'LIBIA',
            'LIECHTENSTEIN',
            'LITUANIA',
            'LUXEMBURGO',
            'MADAGASCAR',
            'MALASIA',
            'MALAWI',
            'MALDIVAS',
            'MALI',
            'MALTA',
            'MARRUECOS',
            'MAURITANIA',
            'MEXICO',
            'MICRONESIA',
            'MOLDAVIA',
            'MONACO',
            'MONGOLIA',
            'MONTENEGRO',
            'MOZAMBIQUE',
            'MYANMAR',
            'NAMIBIA',
            'NEPAL',
            'NICARAGUA',
            'NIGER',
            'NIGERIA',
            'NORUEGA',
            'NUEVA ZELANDA',
            'OMAN',
            'PAISES BAJOS',
            'PAKISTAN',
            'PALAU',
            'PALESTINA',
            'PANAMA',
            'PAPUA NUEVA GUINEA',
            'PARAGUAY',
            'PERU',
            'POLONIA',
            'PORTUGAL',
            'PUERTO RICO',
            'QATAR',
            'REPUBLICA CENTROAFRICANA',
            'REPUBLICA CHECA',
            'REPUBLICA DE MACEDONIA',
            'REPUBLICA DE MAURICIO',
            'REPUBLICA DE NAURU',
            'REPUBLICA DE YIBUTI',
            'REPUBLICA DEL CONGO',
            'REPUBLICA DEMOCRATICA DE CONGO',
            'REPUBLICA DOMINICANA',
            'RUANDA',
            'RUMANIA',
            'RUSIA',
            'SAMOA',
            'SAMOA AMERICANA',
            'SAN CRISTOBAL Y NEVIS',
            'SAN MARINO',
            'SAN TOME Y PRINCIPE',
            'SAN VICENTE Y GRANADINAS',
            'SANTA LUCIA',
            'SENEGAL',
            'SERBIA',
            'SEYCHELLES',
            'SIERRA LEONA',
            'SINGAPUR',
            'SIRIA',
            'SOMALIA',
            'SRI LANKA',
            'SUDAN',
            'SUECIA',
            'SUIZA',
            'SURINAM',
            'SWAZILANDIA',
            'TAILANDIA',
            'TANZANIA',
            'TAYIKISTAN',
            'TIMOR ORIENTAL',
            'TOGO',
            'TONGA',
            'TRINIDAD Y TOBAGO',
            'TUNEZ',
            'TURKMENISTAN',
            'TURQUIA',
            'TUVALU',
            'UCRANIA',
            'UGANDA',
            'URUGUAY',
            'UZBEKISTAN',
            'VANUATU',
            'VENEZUELA',
            'VIETNAM',
            'YEMEN',
            'ZAMBIA',
            'ZIMBABWE',

        ];
    
        foreach ($paises as $pais) {

            Pais::create([
                'nombre' => $pais
            ]);
            
    
        }


    }
}