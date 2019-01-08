<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        DB::table('admins')->insert([
//           'username' => 'admin',
//           'password' => bcrypt('12345678'),
//        ]);
       $admin = new Admin;
       $admin->username = 'admin';
       $admin->password = md5('12345678');
       $admin->is_super = true;
       $admin->save();
    }
}
