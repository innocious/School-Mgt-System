<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
// use Illuminate\Support\Str;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('admins')->create([
        //     'admin_name' => 'Admin',
        //     'admin_email' => 'test@example.com',
        //     'password' => bcrypt('password'),            
        // ]);
        Admin::create([
            'admin_name' => 'Admin',
            'admin_email' => 'test@example.com',
            'password' => bcrypt('password'),            
        ]);
    }
}
