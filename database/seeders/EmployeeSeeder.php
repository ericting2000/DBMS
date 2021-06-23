<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
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
                "password" => "88888888",
                "name" => "Sabrina",
                "company" => "UMC",
                "birth" => "19531113",
                "cellPhone" => "0951821144",
                "localPhone" => "0265277762",
                "email" => "sabrina@gmail.com",
                "gender"=>"female",
                "title" => "CEO",
                "onBoardTime" => "2001-02-16",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            [
                "id" => "E0054",
                "password" => "11111111",
                "name" => "Monica",
                "company" => "UMC",
                "birth" => "19650208",
                "cellPhone" => "0963612518",
                "localPhone" => "0215642901",
                "email" => "monica@gmail.com",
                "gender"=>"female",
                "title" => "MANAGER",
                "onBoardTime" => "2008-06-01",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            [
                "id" => "E0102",
                "password" => "22222222",
                "name" => "Haley",
                "company" => "UMC",
                "birth" => "19680514",
                "cellPhone" => "0916861535",
                "localPhone" => "0241212081",
                "email" => "haley@gmail.com",
                "gender"=>"female",
                "title" => "STAFF",
                "onBoardTime" => "2018-04-06",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            [
                "id" => "E0045",
                "password" => "33333333",
                "name" => "Osbert",
                "company" => "UMC",
                "birth" => "19840801",
                "cellPhone" => "0931670445",
                "localPhone" => "0220629420",
                "email" => "osbert@gmail.com",
                "gender"=>"male",
                "title" => "HR",
                "onBoardTime" => "2014-01-10",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            [
                "id" => "E0021",
                "password" => "44444444",
                "name" => "Stephen",
                "company" => "UMC",
                "birth" => "19900422",
                "cellPhone" => "0922848561",
                "localPhone" => "0283030682",
                "email" => "stephen@gmail.com",
                "gender"=>"female",
                "title" => "STAFF",
                "onBoardTime" => "2009-01-18",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            [
                "id" => "E0080",
                "password" => "55555555",
                "name" => "Faithe",
                "company" => "UMC",
                "birth" => "19880207",
                "cellPhone" => "0955769112",
                "localPhone" => "025563489",
                "email" => "faithe@gmail.com",
                "gender"=>"female",
                "title" => "MANAGER",
                "onBoardTime" => "2017-03-01",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            [
                "id" => "E0023",
                "password" => "66666666",
                "name" => "Albert",
                "company" => "UMC",
                "birth" => "19930218",
                "cellPhone" => "0920554367",
                "localPhone" => "0222115656",
                "email" => "albert@gmail.com",
                "gender"=>"male",
                "title" => "STAFF",
                "onBoardTime" => "2017-05-02",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            [
                "id" => "E0101",
                "password" => "77777777",
                "name" => "Benson",
                "company" => "UMC",
                "birth" => "19930816",
                "cellPhone" => "0978056373",
                "localPhone" => "022365587",
                "email" => "benson@gmail.com",
                "gender"=>"male",
                "title" => "STAFF",
                "onBoardTime" => "2017-05-02",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            [
                "id" => "E0200",
                "password" => "99999999",
                "name" => "Raymond",
                "company" => "UMC",
                "birth" => "19951120",
                "cellPhone" => "0939965522",
                "localPhone" => "0225265465",
                "email" => "raymond@gmail.com",
                "gender"=>"male",
                "title" => "HR",
                "onBoardTime" => "2019-07-02",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
            
            [
                "id" => "E0156",
                "password" => "87878787",
                "name" => "Novia",
                "company" => "UMC",
                "birth" => "19921211",
                "cellPhone" => "0928767443",
                "localPhone" => "0237378698",
                "email" => "novia@gmail.com",
                "gender"=>"female",
                "title" => "HR",
                "onBoardTime" => "2018-02-04",
                "address" => "XXXXXXXXXXXXXXXX",
            ],
        ];
        \DB::table('employee')->insert($data);
    }
}











