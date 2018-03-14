<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $this->call(AdminUsersTableSeeder::class);
//        DB::table('admin_users')->insert([
//           'username'=>'admin',
//            'email'=>'admin@hgd.com',
//            'password'=>'123456',
//            'remember_token'=>'111111'
//        ]);
        factory(\App\Models\AdminModel::class)->times(10)->create();
    }
}
