<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('UsersSeeder');
    }
}

class UsersSeeder extends Seeder{
    public function run()
    {
        User::create(array(
            'name' => 'Maksimenko Alexandr',
            'email' =>  'maksi.alexandr@mail.ru',
            'password' => '$2y$10$8ypjAA2MRrMsLzJ8edQz6O9Jk4ujdurC02TQvNI3uiHXhWD4JGwTW',
            'gender' => '1',
            'phone' => '8 951 802 90 57',
            'position' => 'DEVELOPER',
            'preview' => 'public/preview/1.jpg',
            'birthday' => '1994-06-04 00:00:00',
            'status' => '',
            'city' => '',
            'remember_token' => '7WCBHhvgv1CIArd1G29exC31mgktDzhN48Vwd88SggzjCT7me0RjBDr9ImSa',
            'created_at' => '2018-02-15 12:17:35',
            'updated_at' => '0000-00-00 00:00:00'
        ));
        User::create(array(
            'name' => 'Mihailov Alexandr',
            'email' =>  'asd@mail.ru',
            'password' => '$2y$10$GnaOL3FY.9SJh/UNjQrYc.2KIqDLdVzZT/5nnCHv0swTUgIOP0pqa',
            'gender' => '1',
            'phone' => '',
            'position' => 'DEVELOPER',
            'preview' => 'public/preview/2.jpg',
            'birthday' => '1994-06-15 00:00:00',
            'status' => '',
            'city' => '',
            'remember_token' => 'd3LLTpg1FJDypcC7j84oH2ftiMSDD59PcG2puM6oq0jKYvYFZKZxOwjgKMzV',
            'created_at' => '2018-02-15 12:18:55',
            'updated_at' => '0000-00-00 00:00:00'
        ));
        User::create(array(
            'name' => 'Shestakov Aleksey',
            'email' =>  'qwe@mail.ru',
            'password' => '$2y$10$P5pRI.Hu/V3S7VxJYD62LeGaqkqLTKMPVajoa3t8AzBAwIKJwru/O',
            'gender' => '1',
            'phone' => '',
            'position' => 'DEVELOPER',
            'preview' => 'public/preview/3.jpg',
            'birthday' => '1994-04-20 00:00:00',
            'status' => '',
            'city' => '',
            'remember_token' => 'BaOAnLOSDPtcFGaUCYNNupLBGMdqzpFTO4V3a3aqgGIzhPGCciO49Tywg7sj',
            'created_at' => '2018-02-15 10:46:20',
            'updated_at' => '0000-00-00 00:00:00'
        ));

    }
}