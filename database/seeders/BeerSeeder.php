<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        //
        $beers= [
            [
                'brand'=> 'Corona',
                'description'=> 'Cerveza mexicana lager, suave y refrescante con notas cítricas',
                'vol'=> 4.5,
                ],
                [
                'brand'=> 'Heineken',
                'description'=> 'Cerveza holandesa lager con un sabor fresco, suave y afrutado', 
                'vol'=> 5,
                ],
                [
                'brand'=> 'Stella Artois',
                'description'=> 'Cerveza belga lager con un sabor limpio y refrescante con notas frutales y florales',
                'vol'=> 5.2,
                ],
                [
                'brand'=> 'Guinness',
                'description'=> 'Cerveza negra irlandesa ale con un sabor fuerte y robusto con notas de café y chocolate',
                'vol'=> 4.2,
                ],
                [
                'brand'=> 'Modelo',
                'description'=> 'Cerveza mexicana lager con un sabor suave y refrescante con notas de maíz y malta',
                'vol'=> 4.5,
                ],
                [
                'brand'=> 'Budweiser',
                'description'=> 'Cerveza americana lager con un sabor suave y refrescante',
                'vol'=> 5,
                ],
                [
                'brand'=> 'Pilsner Urquell',
                'description'=> 'Cerveza checa lager con un sabor amargo y refrescante con notas de lúpulo',
                'vol'=> 4.4,
                ],
                [
                'brand'=> 'Leffe',
                'description'=> 'Cerveza belga ale con un sabor dulce y afrutado con notas de caramelo y especias',
                'vol'=> 6.6,
                ],
                [
                'brand'=> 'Duvel',
                'description'=> 'Cerveza belga strong ale con un sabor complejo y afrutado con notas de especias y levadura',
                'vol'=> 8.5,
                ],
                [
                'brand'=> 'Chimay',
                'description'=> 'Cerveza belga trappist ale con un sabor intenso y complejo con notas de frutas secas y caramelo',
                'vol'=> 7,
                ],
            ];
            foreach ($beers as $beer) {
                DB::table('beers')->insert($beer);
            }
    }

    
}
