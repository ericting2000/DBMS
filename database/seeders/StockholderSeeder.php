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
                "id" => "S0001",
                "password" => "11111111",
                "company" => "FB",
                "title" => "BOSS",
                "name" => "Ken",
                "birth" => "19801112",
                "phoneNumber" => "0922322322",
                "address" => "XXXXXXXXXXXXXXXX",
                "share" => "100",
                "lot" => "0",
            ],
            [
                "id" => "S0013",
                "password" => "13131313",
                "company" => "FB",
                "title" => "STOCKHOLDER",
                "name" => "John",
                "birth" => "19800131",
                "phoneNumber" => "0922378987",
                "address" => "XXXXXXXXXXXXXXXX",
                "share" => "50",
                "lot" => "500",
            ],
            [
                "id" => "S0099",
                "password" => "99999999",
                "company" => "FB",
                "title" => "STOCKHOLDER",
                "name" => "Mick",
                "birth" => "19890431",
                "phoneNumber" => "0998765467",
                "address" => "XXXXXXXXXXXXXXXX",
                "share" => "1",
                "lot" => "500",
            ],
        ];
        \DB::table('stockholder')->insert($data);
    }
}
