<?php

use Illuminate\Database\Seeder;

class UsersPasswordTableSeeder extends Seeder
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
//        DB::table('users_password')->insert([
//           'user_id'=>'1001',
//            'user_name'=>'user1',
//            'email'=>'user1@hgd.com',
//            'password'=>'123456',
//            'remember_token'=>'1'
//        ]);
        factory(\App\Models\UsersPasswordModel::class)->times(6)->create();
    }
}
