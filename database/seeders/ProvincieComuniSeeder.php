<?php

namespace Database\Seeders;

use App\Models\Comune;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use function Laravel\Prompts\error;

class ProvincieComuniSeeder extends Seeder
{
    public function run(): void
    {
        // Province italiane
        $province = [
            // Abruzzo
            ['name' => 'Chieti', 'short_name' => 'CH'],
            ['name' => "L'Aquila", 'short_name' => 'AQ'],
            ['name' => 'Pescara', 'short_name' => 'PE'],
            ['name' => 'Teramo', 'short_name' => 'TE'],

            // Basilicata
            ['name' => 'Matera', 'short_name' => 'MT'],
            ['name' => 'Potenza', 'short_name' => 'PZ'],

            // Calabria
            ['name' => 'Catanzaro', 'short_name' => 'CZ'],
            ['name' => 'Cosenza', 'short_name' => 'CS'],
            ['name' => 'Crotone', 'short_name' => 'KR'],
            ['name' => 'Reggio Calabria', 'short_name' => 'RC'],
            ['name' => 'Vibo Valentia', 'short_name' => 'VV'],

            // Campania
            ['name' => 'Avellino', 'short_name' => 'AV'],
            ['name' => 'Benevento', 'short_name' => 'BN'],
            ['name' => 'Caserta', 'short_name' => 'CE'],
            ['name' => 'Napoli', 'short_name' => 'NA'],
            ['name' => 'Salerno', 'short_name' => 'SA'],

            // Emilia-Romagna
            ['name' => 'Bologna', 'short_name' => 'BO'],
            ['name' => 'Ferrara', 'short_name' => 'FE'],
            ['name' => 'Forlì-Cesena', 'short_name' => 'FC'],
            ['name' => 'Modena', 'short_name' => 'MO'],
            ['name' => 'Parma', 'short_name' => 'PR'],
            ['name' => 'Piacenza', 'short_name' => 'PC'],
            ['name' => 'Ravenna', 'short_name' => 'RA'],
            ['name' => 'Reggio Emilia', 'short_name' => 'RE'],
            ['name' => 'Rimini', 'short_name' => 'RN'],

            // Friuli-Venezia Giulia
            ['name' => 'Gorizia', 'short_name' => 'GO'],
            ['name' => 'Pordenone', 'short_name' => 'PN'],
            ['name' => 'Trieste', 'short_name' => 'TS'],
            ['name' => 'Udine', 'short_name' => 'UD'],

            // Lazio
            ['name' => 'Frosinone', 'short_name' => 'FR'],
            ['name' => 'Latina', 'short_name' => 'LT'],
            ['name' => 'Rieti', 'short_name' => 'RI'],
            ['name' => 'Roma', 'short_name' => 'RM'],
            ['name' => 'Viterbo', 'short_name' => 'VT'],

            // Liguria
            ['name' => 'Genova', 'short_name' => 'GE'],
            ['name' => 'Imperia', 'short_name' => 'IM'],
            ['name' => 'La Spezia', 'short_name' => 'SP'],
            ['name' => 'Savona', 'short_name' => 'SV'],

            // Lombardia
            ['name' => 'Bergamo', 'short_name' => 'BG'],
            ['name' => 'Brescia', 'short_name' => 'BS'],
            ['name' => 'Como', 'short_name' => 'CO'],
            ['name' => 'Cremona', 'short_name' => 'CR'],
            ['name' => 'Lecco', 'short_name' => 'LC'],
            ['name' => 'Lodi', 'short_name' => 'LO'],
            ['name' => 'Mantova', 'short_name' => 'MN'],
            ['name' => 'Milano', 'short_name' => 'MI'],
            ['name' => 'Monza e Brianza', 'short_name' => 'MB'],
            ['name' => 'Pavia', 'short_name' => 'PV'],
            ['name' => 'Sondrio', 'short_name' => 'SO'],
            ['name' => 'Varese', 'short_name' => 'VA'],

            // Marche
            ['name' => 'Ancona', 'short_name' => 'AN'],
            ['name' => 'Ascoli Piceno', 'short_name' => 'AP'],
            ['name' => 'Fermo', 'short_name' => 'FM'],
            ['name' => 'Macerata', 'short_name' => 'MC'],
            ['name' => 'Pesaro e Urbino', 'short_name' => 'PU'],

            // Molise
            ['name' => 'Campobasso', 'short_name' => 'CB'],
            ['name' => 'Isernia', 'short_name' => 'IS'],

            // Piemonte
            ['name' => 'Alessandria', 'short_name' => 'AL'],
            ['name' => 'Asti', 'short_name' => 'AT'],
            ['name' => 'Biella', 'short_name' => 'BI'],
            ['name' => 'Cuneo', 'short_name' => 'CN'],
            ['name' => 'Novara', 'short_name' => 'NO'],
            ['name' => 'Torino', 'short_name' => 'TO'],
            ['name' => 'Verbano-Cusio-Ossola', 'short_name' => 'VB'],
            ['name' => 'Vercelli', 'short_name' => 'VC'],

            // Puglia
            ['name' => 'Bari', 'short_name' => 'BA'],
            ['name' => 'Barletta-Andria-Trani', 'short_name' => 'BT'],
            ['name' => 'Brindisi', 'short_name' => 'BR'],
            ['name' => 'Foggia', 'short_name' => 'FG'],
            ['name' => 'Lecce', 'short_name' => 'LE'],
            ['name' => 'Taranto', 'short_name' => 'TA'],

            // Sardegna
            ['name' => 'Cagliari', 'short_name' => 'CA'],
            ['name' => 'Nuoro', 'short_name' => 'NU'],
            ['name' => 'Oristano', 'short_name' => 'OR'],
            ['name' => 'Sassari', 'short_name' => 'SS'],
            ['name' => 'Sud Sardegna', 'short_name' => 'SU'],

            // Sicilia
            ['name' => 'Agrigento', 'short_name' => 'AG'],
            ['name' => 'Caltanissetta', 'short_name' => 'CL'],
            ['name' => 'Catania', 'short_name' => 'CT'],
            ['name' => 'Enna', 'short_name' => 'EN'],
            ['name' => 'Messina', 'short_name' => 'ME'],
            ['name' => 'Palermo', 'short_name' => 'PA'],
            ['name' => 'Ragusa', 'short_name' => 'RG'],
            ['name' => 'Siracusa', 'short_name' => 'SR'],
            ['name' => 'Trapani', 'short_name' => 'TP'],

            // Toscana
            ['name' => 'Arezzo', 'short_name' => 'AR'],
            ['name' => 'Firenze', 'short_name' => 'FI'],
            ['name' => 'Grosseto', 'short_name' => 'GR'],
            ['name' => 'Livorno', 'short_name' => 'LI'],
            ['name' => 'Lucca', 'short_name' => 'LU'],
            ['name' => 'Massa-Carrara', 'short_name' => 'MS'],
            ['name' => 'Pisa', 'short_name' => 'PI'],
            ['name' => 'Pistoia', 'short_name' => 'PT'],
            ['name' => 'Prato', 'short_name' => 'PO'],
            ['name' => 'Siena', 'short_name' => 'SI'],

            // Trentino-Alto Adige
            ['name' => 'Bolzano', 'short_name' => 'BZ'],
            ['name' => 'Trento', 'short_name' => 'TN'],

            // Umbria
            ['name' => 'Perugia', 'short_name' => 'PG'],
            ['name' => 'Terni', 'short_name' => 'TR'],

            // Valle d'Aosta
            ['name' => 'Aosta', 'short_name' => 'AO'],

            // Veneto
            ['name' => 'Belluno', 'short_name' => 'BL'],
            ['name' => 'Padova', 'short_name' => 'PD'],
            ['name' => 'Rovigo', 'short_name' => 'RO'],
            ['name' => 'Treviso', 'short_name' => 'TV'],
            ['name' => 'Venezia', 'short_name' => 'VE'],
            ['name' => 'Verona', 'short_name' => 'VR'],
            ['name' => 'Vicenza', 'short_name' => 'VI'],
        ];

        // Add timestamps
        $now = now();
        foreach ($province as &$provincia) {
            $provincia['created_at'] = $now;
            $provincia['updated_at'] = $now;
        }
        DB::table('province')->insert($province);

        $path = base_path('database/data/comuni.csv');
        if (! File::exists($path)) {
            error("Unable to find comuni.csv at $path");
            return;
        }

        $csvCollection = File::lines($path);

        foreach ($csvCollection as $line) {
            $columns = array_map('trim', explode(';', $line));
            $provinceId = DB::table('province')->where('short_name', $columns[2])->value('id');
            if (!$provinceId) {
                error("Unable to find province with short_name {$columns[2]}");
                continue;
            }
            Comune::create([
               'name' => $columns[0],
               'province_id' => $provinceId,
            ]);
        }
    }
}
