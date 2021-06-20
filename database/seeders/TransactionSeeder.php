<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
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
                "serialNumber" => "T0001",
                "type" => "buy",
                "datetime" => "2021-06-18",
                
            ],
        ];
        \DB::table('transaction')->insert($data);
    }
}
