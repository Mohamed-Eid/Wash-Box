<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <4 ; $i++) { 
            $data = [
                'ar' => [
                    'name' => ' مدينه '.$i,
                ],
                'en' => [
                    'name' => 'City  '.$i,
                ],
            ];
            $city = \App\City::create($data);

            for ($j=0; $j < 5 ; $j++) { 
                $area_data = [
                    'ar' => [
                        'name' => ' منقطه'.$j
                    ],
                    'en' => [
                        'name' => 'area '.$j
                    ],
                ];
                $city->areas()->create($area_data);
            }

        }
    }
}
