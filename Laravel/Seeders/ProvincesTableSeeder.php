<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$now = Carbon::now('utc')->toDateTimeString();

		$data = array(
			array("id" => 1, "enname" => "Alborz", "faname" => "البرز"),
			array("id" => 2, "enname" => "Ardabil", "faname" => "اردبیل"),
			array("id" => 3, "enname" => "Bushehr", "faname" => "بوشهر"),
			array("id" => 4, "enname" => "Chaharmahal and Bakhtiari", "faname" => "چهار محال و بختیاری"),
			array("id" => 5, "enname" => "East Azerbaijan", "faname" => "آذربایجان شرقی"),
			array("id" => 6, "enname" => "Isfahan", "faname" => "اصفهان"),
			array("id" => 7, "enname" => "Fars", "faname" => "فارس"),
			array("id" => 8, "enname" => "Gilan", "faname" => "گیلان"),
			array("id" => 9, "enname" => "Golestan", "faname" => "گلستان"),
			array("id" => 10, "enname" => "Hamadan", "faname" => "همدان"),
			array("id" => 11, "enname" => "Hormozgan", "faname" => "هرمزگان"),
			array("id" => 12, "enname" => "Ilam", "faname" => "ایلام"),
			array("id" => 13, "enname" => "Kerman", "faname" => "کرمان"),
			array("id" => 14, "enname" => "Kermanshah", "faname" => "کرمانشاه"),
			array("id" => 15, "enname" => "Khuzestan", "faname" => "خوزستان"),
			array("id" => 16, "enname" => "Kohgiluyeh and Boyer Ahmad", "faname" => "کهگیلویه و بویراحمد"),
			array("id" => 17, "enname" => "Kurdistan", "faname" => "کردستان"),
			array("id" => 18, "enname" => "Lorestan", "faname" => "لرستان"),
			array("id" => 19, "enname" => "Markazi", "faname" => "مرکزی"),
			array("id" => 20, "enname" => "Mazandaran", "faname" => "مازندران"),
			array("id" => 21, "enname" => "North Khorasan", "faname" => "خراسان شمالی"),
			array("id" => 22, "enname" => "Qazvin", "faname" => "قزوین"),
			array("id" => 23, "enname" => "Qom", "faname" => "قم"),
			array("id" => 24, "enname" => "Razavi Khorasan", "faname" => "خراسان رضوی"),
			array("id" => 25, "enname" => "Semnan", "faname" => "سمنان"),
			array("id" => 26, "enname" => "Sistan and Baluchestan", "faname" => "سیستان و بلوچستان"),
			array("id" => 27, "enname" => "South Khorasan", "faname" => "خراسان جنوبی"),
			array("id" => 28, "enname" => "Tehran", "faname" => "تهران"),
			array("id" => 29, "enname" => "West Azerbaijan", "faname" => "آذربایجان غربی"),
			array("id" => 30, "enname" => "Yazd", "faname" => "یزد"),
			array("id" => 31, "enname" => "Zanjan", "faname" => "زنجان")
		);

        for ($i = 0; $i < count($data); $i++) {
            $data[$i]["created_at"] = $now;
            $data[$i]["updated_at"] = $now;
        }

     	Province::insert($data);
    }
}
