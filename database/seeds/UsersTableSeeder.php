<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      User::insert([
            'name' => 'pemilik@gmail.com',
            'company' => 'Atrium Hotels',
            'access' => 'pemilik',
            'type' => '',
            'kridit' => '',
            'status' => '1',
            'password' => bcrypt('admin123'),
            'email' => 'pemilik@gmail.com',
            'remember_token' => 'kiQCIxK7RISsT60v7K3y5bxAb9iCFRg2yMXmqMKVt5q1GWwrQew41jw9uc90',
            'created_at' => '2018-10-29 10:23:37'
        ]);


       User::insert([
            'name' => 'pengguna@gmail.com',
            'company' => '',
            'access' => 'pengguna',
            'type' => 'biasa',
            'kridit' => '20',
            'status' => '1',
            'password' => bcrypt('admin123'),
            'email' => 'pengguna@gmail.com',
            'remember_token' => 'kiQCIxK7RISsT60v7K3y5bxAb9iCFRg2yMXmqMKVt5q1GWwrQew41jw9uc90',
            'created_at' => '2018-10-29 10:23:37'
        ]);
        
    }
}
