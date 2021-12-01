<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Charles Njuguna',
            'email'=>'charles.njuguna@zilojo.com',
            'password'=>bcrypt('`x'),
        ]);
        Admin::create([
            'name'=>'Judge One',
            'email'=>'judgeone@eabl.com',
            'password'=>bcrypt('Toast3R224@'),
        ]);
        Admin::create([
            'name'=>'Judge two',
            'email'=>'judgetwo@eabl.com',
            'password'=>bcrypt('Zc@309Gf#kj%'),
        ]);
        Admin::create([
            'name'=>'Judge three',
            'email'=>'judgethree@eabl.com',
            'password'=>bcrypt('Fleet@cdx$091#'),
        ]);
    }
}
