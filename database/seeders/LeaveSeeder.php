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
                "dateStart" => "2019-12-17",
                "dateEnd" => "2019-12-18",
                
            ],
            [
                "id" => "E0001",
                "name" => "Sabrina",
                "leaveReason" => "official",
                "dateStart" => "2020-12-31",
                "dateEnd" => "2020-12-31",
                
            ],
            [
                "id" => "E0045",
                "name" => "Osbert",
                "leaveReason" => "official",
                "dateStart" => "2021-02-03",
                "dateEnd" => "2021-02-03",
                
            ],
            [
                "id" => "E0045",
                "name" => "Osbert",
                "leaveReason" => "official",
<<<<<<< HEAD
                "dateStart" => "20210202",
                "dateEnd" => "20210203",
=======
                "dateStart" => "2021-02-04",
                "dateEnd" => "2021-02-03",
>>>>>>> master
                
            ],
            [
                "id" => "E0021",
                "name" => "Stephen",
                "leaveReason" => "sick",
                "dateStart" => "2019-09-30",
                "dateEnd" => "2019-09-30",
                
            ],
<<<<<<< HEAD
           
=======
            [
                "id" => "E0021",
                "name" => "Stephen",
                "leaveReason" => "official",
                "dateStart" => "2019-01-01",
                "dateEnd" => "2019-01-03",
                
            ],
>>>>>>> master
        ];
        \DB::table('leavesystem')->insert($data);
    }
}
