<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class CityTableSeeder extends Seeder
{
    /**
     * return database to seeds
     *
     * @return void
     */
    public function run()
    {

        $cities = array(
            [
                'citylist'  => 'Alaminos'
            ],
            [
                'citylist'  => 'Angeles'
            ],
            [
                'citylist'  => 'Antipolo'
            ],
            [
                'citylist'  => 'Bacolod'
            ],
            [
                'citylist'  => 'Baguio'
            ],
            [
                'citylist'  => 'Balanga'
            ],
            [
                'citylist'  => 'Batac'
            ],
            [
                'citylist'  => 'Batangas'
            ],
            [
                'citylist'  => 'Bayawan'
            ],
            [
                'citylist'  => 'Baybay'
            ],
            [
                'citylist'  => 'Borongan'
            ],
            [
                'citylist'  => 'Butuan'
            ],
            [
                'citylist'  => 'cabanatuan'
            ],
            [
                'citylist'  => 'Cagayan de Oro'
            ],
            [
                'citylist'  => 'Calamba'
            ],
            [
                'citylist'  => 'Calapan'
            ],
            [
                'citylist'  => 'Calbayog'
            ],
            [
                'citylist'  => 'Candon'
            ],
            [
                'citylist'  => 'Catbalogan'
            ],
            [
                'citylist'  => 'Cauayan'
            ],
            [
                'citylist'  => 'Cavite'
            ],
            [
                'citylist'  => 'Cebu'
            ],
            [
                'citylist'  => 'Cotabato'
            ],
            [
                'citylist'  => 'Dagupan'
            ],
            [
                'citylist'  => 'Dapitan'
            ],
            [
                'citylist'  => 'Davao'
            ],
            [
                'citylist'  => 'Digos'
            ],
            [
                'citylist'  => 'Dipolog'
            ],
            [
                'citylist'  => 'Dumaguete'
            ],
            [
                'citylist'  => 'Gapan'
            ],
            [
                'citylist'  => 'General Santos'
            ],
            [
                'citylist'  => 'Iligan'
            ],
            [
                'citylist'  => 'Iloilo'
            ],
            [
                'citylist'  => 'Iriga'
            ],
            [
                'citylist'  => 'Isabela'
            ],
            [
                'citylist'  => 'Kidapawan'
            ],
            [
                'citylist'  => 'Koronadal'
            ],
            [
                'citylist'  => 'Lamitan'
            ],
            [
                'citylist'  => 'Laoag'
            ],
            [
                'citylist'  => 'Lapu Lapu'
            ],
            [
                'citylist'  => 'Las Piñas'
            ],
            [
                'citylist'  => 'Ligao'
            ],
            [
                'citylist'  => 'Lipa'
            ],
            [
                'citylist'  => 'Lucena'
            ],
            [
                'citylist'  => 'Maasin'
            ],
            [
                'citylist'  => 'Makati'
            ],
            [
                'citylist'  => 'Malabon'
            ],
            [
                'citylist'  => 'Malaybalay'
            ],
            [
                'citylist'  => 'Mandaluyong'
            ],
            [
                'citylist'  => 'Mandaue'
            ],
            [
                'citylist'  => 'Manila'
            ],
            [
                'citylist'  => 'Marawi'
            ],
            [
                'citylist'  => 'Marikina'
            ],
            [
                'citylist'  => 'Masbate'
            ],
            [
                'citylist'  => 'Mati'
            ],
            [
                'citylist'  => 'Muntinlupa'
            ],
            [
                'citylist'  => 'Naga'
            ],
            [
                'citylist'  => 'Navotas'
            ],
            [
                'citylist'  => 'Olongapo'
            ],
            [
                'citylist'  => 'Ormoc'
            ],
            [
                'citylist'  => 'Pagadian'
            ],
            [
                'citylist'  => 'Palayan'
            ],
            [
                'citylist'  => 'Panabo'
            ],
            [
                'citylist'  => 'Parañaque'
            ],
            [
                'citylist'  => 'Pasay'
            ],
            [
                'citylist'  => 'Pasig'
            ],
            [
                'citylist'  => 'Puerto Princesa'
            ],
            [
                'citylist'  => 'Quezon'
            ],
            [
                'citylist'  => 'Roxas'
            ],
            [
                'citylist'  => 'San Fernando'
            ],
            [
                'citylist'  => 'San Juan'
            ],
            [
                'citylist'  => 'San Pablo'
            ],
            [
                'citylist'  => 'Santa Rosa'
            ],
            [
                'citylist'  => 'Santiango'
            ],
            [
                'citylist'  => 'Sorsogon'
            ],
            [
                'citylist'  => 'Surigao'
            ],
            [
                'citylist'  => 'Tabaco'
            ],
            [
                'citylist'  => 'Tabuk'
            ],
            [
                'citylist'  => 'Tacloban'
            ],
            [
                'citylist'  => 'Tacurong'
            ],
            [
                'citylist'  => 'Tagaytay'
            ],
            [
                'citylist'  => 'Tagbilaran'
            ],
            [
                'citylist'  => 'Taguig'
            ],
            [
                'citylist'  => 'Tagum'
            ],
            [
                'citylist'  => 'Talisay'
            ],
            [
                'citylist'  => 'Tanauan'
            ],
            [
                'citylist'  => 'Tarlac'
            ],
            [
                'citylist'  => 'Tayabas'
            ],
            [
                'citylist'  => 'Trece Martires'
            ],
            [
                'citylist'  => 'Tuguegarao'
            ],
            [
                'citylist'  => 'Valencia'
            ],
            [
                'citylist'  => 'Valenzuela'
            ],
            [
                'citylist'  => 'Vigan'
            ],
            [
                'citylist'  => 'Zamboanga City'
            ],

        );

        foreach ($cities as $city) {
            DB::table('city')->insert([
                'citylist'  => $city,
            ]);
        }

    }

}