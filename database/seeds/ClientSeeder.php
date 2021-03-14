<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
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
                'name' =>'Justin',
                'address' =>'Clarin',
                'phone' =>'09123762731',
                'capitalization' =>15234,
                'loan' => 500000
            ],
            [
                'name' =>'Killue',
                'address' =>'Japan',
                'phone' =>'09123456789',
                'capitalization' =>21321,
                'loan' => 10000
            ],
            [
                'name' =>'Gon',
                'address' =>'Tubigon',
                'phone' =>'09321638173',
                'capitalization' =>25136,
                'loan' => 15000

            ]
        ];

        foreach($data as $client){
            \App\Client::create($client);
        }

        }
}
