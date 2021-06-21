<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeaveSeeder extends Seeder
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
                "name" => "Sabrina",
                "leaveReason" => "personal",
                "date" => "20191217",
                
            ],
            [
                "id" => "E0001",
                "name" => "Sabrina",
                "leaveReason" => "official",
                "date" => "20201231",
                
            ],
            [
                "id" => "E0045",
                "name" => "Osbert",
                "leaveReason" => "official",
                "date" => "20210203",
                
            ],
            [
                "id" => "E0045",
                "name" => "Osbert",
                "leaveReason" => "official",
                "date" => "20210204",
                
            ],
            [
                "id" => "E0021",
                "name" => "Stephen",
                "leaveReason" => "sick",
                "date" => "20190930",
                
            ],
            [
                "id" => "E0021",
                "name" => "Stephen",
                "leaveReason" => "official",
                "date" => "20190101",
                
            ],
        ];
        \DB::table('leavesystem')->insert($data);
    }
}
