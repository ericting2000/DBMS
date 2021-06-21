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
                "dateStart" => "20191217",
                "dateEnd" => "20191218",
                
            ],
            [
                "id" => "E0001",
                "name" => "Sabrina",
                "leaveReason" => "official",
                "dateStart" => "20201231",
                "dateEnd" => "20201231",
                
            ],
            [
                "id" => "E0045",
                "name" => "Osbert",
                "leaveReason" => "official",
                "dateStart" => "20210203",
                "dateEnd" => "20210203",
                
            ],
            [
                "id" => "E0045",
                "name" => "Osbert",
                "leaveReason" => "official",
                "dateStart" => "20210204",
                "dateEnd" => "20210203",
                
            ],
            [
                "id" => "E0021",
                "name" => "Stephen",
                "leaveReason" => "sick",
                "dateStart" => "20190930",
                "dateEnd" => "20190930",
                
            ],
        ];
        \DB::table('leavesystem')->insert($data);
    }
}
