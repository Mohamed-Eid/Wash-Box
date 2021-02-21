<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
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
                    'name' => 'service ar '.$i,
                ],
                'en' => [
                    'name' => 'service en '.$i,
                ],
                'icon' => 'defualt.png',
            ];
            $service = \App\Service::create($data);

            for ($j=0; $j < 5 ; $j++) { 
                $price_data = [
                    'ar' => [
                        'name' => ' توع الغسيل'.$j
                    ],
                    'en' => [
                        'name' => '8sil type '.$j
                    ],
                    'normal_cost' => (($j*2) + 40),
                    'quick_cost'  => (($j*3) + 30),
                ];
                $service->prices()->create($price_data);
            }

        }
    }
}
