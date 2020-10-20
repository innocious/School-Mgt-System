<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use App\Models\Admin;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'admin_name' => 'Admin',
            'admin_email' => 'test@example.com',
            'admin_password' => bcrypt('password'),            
        ]);
        
    }
}
