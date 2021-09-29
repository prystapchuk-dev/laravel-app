<?php

namespace Database\Seeders;

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
        $data = [
            [
            'name'     => 'Автор не известен',
            'email'    => 'unknow@gmail.com',
            'password' => bcrypt(\Str::random(16)),
            ],
            [
            'name'     => 'Автор',
            'email'    => 'unknow2@gmail.com',
            'password' => bcrypt(1234556),
            ],
        ];
\DB::table('users')->insert($data);
    }
}
