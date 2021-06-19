<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StockholderSeeder extends Seeder
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
                "id" => "E0001",
                "password" => "password",
                "company" => "00",
                "title" => "00",
                "name" => "00",
                "birth" => "00",
                "phoneNumber" => "00",
                "address" => "00",
                "share" => "00",
                "lot" => "00",
            ],
        ];
        \DB::table('stockholder')->insert($data);
    }
}
