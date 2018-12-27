<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Nutrition;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_name = storage_path('csvMain.csv');
        $file = file($file_name);

        for ($i = 0; $i <= count($file);$i++) {
            try{
                    $sortedFile = explode(',', $file[$i]);

                    DB::insert('insert into nutrition (school_name, address, city, postal_code, school_board
                            , school_id, breakfast, lunch, snack, hidden) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                        $sortedFile[0], $sortedFile[1], $sortedFile[2], $sortedFile[3], $sortedFile[4], $sortedFile[5],
                        $sortedFile[6], $sortedFile[7], $sortedFile[8], false
                    ]);
                }
                catch(Exception $e){
                    continue;
            }
        }
    }
}
