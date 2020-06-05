<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YtCPnW8.AANCMJBTQb1P7u9NT7/alra1Q0qiKU6UPY9eU7nQj8.ba',
                'remember_token' => 'RR3mbBIR6cv0Y6BWtkwkWgApb3NPnSMGAxyBT2pxKP2sDwHElE8TWo1Dwe3x',
                'settings' => NULL,
                'created_at' => '2020-05-24 09:48:48',
                'updated_at' => '2020-05-24 09:48:48',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Anushka Deshan',
                'email' => 'anushkadeshan@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$x4NYV.eWDkIHLI4yIz5CC.lbIHfKKRXN0FMlLNjgkmaMJjgP20via',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-24 14:13:56',
                'updated_at' => '2020-05-24 14:15:47',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Normal Customer',
                'email' => 'customer@normal.co',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6t2hDd4f1HgHgAVvdRVO/em2Xzmsf4hg/k9eGTGkc3QHDcteykEUO',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-24 14:52:55',
                'updated_at' => '2020-05-24 16:44:39',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'sellar@seller.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$egulzOCFk2cqf.Jn71LJ1.dXeEqmo8WkUi0Dayn0veBpMS8NJ1mGC',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-25 10:16:54',
                'updated_at' => '2020-05-25 10:20:39',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'New Customer 2',
                'email' => 'newcustomer2@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$efsJ3mo5F2rpZYD3/2aw9.EgsSUBGHoYscDumzVQzNafgmCHFez62',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-30 07:20:13',
                'updated_at' => '2020-05-30 07:20:13',
            ),
        ));
        
        
    }
}