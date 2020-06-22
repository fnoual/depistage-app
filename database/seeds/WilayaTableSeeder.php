<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WilayaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `wilayas` (`id`, `code`, `nom`) VALUES (1, 1, \'Adrar\'), (2, 2, \'Chlef\'), (3, 3, \'Laghouat\'), (4, 4, \'Oum El Bouaghi\'), (5, 5, \'Batna\'), (6, 6, \'Béjaïa\'), (7, 7, \'Biskra\'), (8, 8, \'Béchar\'), (9, 9, \'Blida\'), (10, 10, \'Bouira\'), (11, 11, \'Tamanrasset\'), (12, 12, \'Tébessa\'), (13, 13, \'Tlemcen\'), (14, 14, \'Tiaret\'), (15, 15, \'Tizi Ouzou\'), (16, 16, \'Alger\'), (17, 17, \'Djelfa\'), (18, 18, \'Jijel\'), (19, 19, \'Sétif\'), (20, 20, \'Saïda\'), (21, 21, \'Skikda\'), (22, 22, \'Sidi Bel Abbès\'), (23, 23, \'Annaba\'), (24, 24, \'Guelma\'), (25, 25, \'Constantine\'), (26, 26, \'Médéa\'), (27, 27, \'Mostaganem\'), (28, 28, \'M\'\'Sila\'), (29, 29, \'Mascara\'), (30, 30, \'Ouargla\'), (31, 31, \'Oran\'), (32, 32, \'El Bayadh\'), (33, 33, \'Illizi\'), (34, 34, \'Bordj Bou Arreridj\'), (35, 35, \'Boumerdès\'), (36, 36, \'El Tarf\'), (37, 37, \'Tindouf\'), (38, 38, \'Tissemsilt\'), (39, 39, \'El Oued\'), (40, 40, \'Khenchela\'), (41, 41, \'Souk Ahras\'), (42, 42, \'Tipaza\'), (43, 43, \'Mila\'), (44, 44, \'Aïn Defla\'), (45, 45, \'Naâma\'), (46, 46, \'Aïn Témouchent\'), (47, 47, \'Ghardaïa\'), (48, 48, \'Relizane\')');
    }
}
