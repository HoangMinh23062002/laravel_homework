<?php

namespace Database\Seeders;
// use App\Models\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(
            [
                [
                    'username'=>"Minh",
                    'password'=>"hihihihi"
                ]  ,  
                [
                    'username'=>"Minretyrtyhth",
                    'password'=>"hihihihhtghtrgfrhtyhi"
                ]  
            ]);
    
    }
}
