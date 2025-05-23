<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name'=> 'Rasya Rahmat Syaban',
                'student_id_number' => 'F55123041',
                'email'=> 'rasyaganteng@gmail.com',
                'phone_number'=> '0823341321344',
                'birth_date'=> '2005-10-02',
                'gender'=> 'Male',
                'status'=> 'Active',
                'major_id'=> 1,
            ],
            [
                'name'=> 'Amirul Maulana',
                'student_id_number' => 'F55123039',
                'email'=> 'amirul@gmail.com',
                'phone_number'=> '082334132114',
                'birth_date'=> '2000-11-08',
                'gender'=> 'Male',
                'status'=> 'Dropped Out',
                'major_id'=> 2,
            ]
            
            ]);
    }
}
