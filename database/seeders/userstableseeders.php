<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userstableseeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table ('users')->insert([
            'name'=>'fandi',
            'email'=>'fandimin@gmailcom',
            'password'=>Hash::make('12345')
        ]);
        //
    }
}
