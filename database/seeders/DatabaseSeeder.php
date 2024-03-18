<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $datas = [
            [
                'first_name' => 'Kaviyarasan',
                'last_name' => 'shanmugam',
                'position' => 'CEO',
                'email' => 'test1@mail.com',
                'password' => 'test1'
            ],
            [
                'first_name' => 'Ramesh',
                'last_name' => 'Kumar',
                'position' => 'tester',
                'email' => 'test2@mail.com',
                'password' => 'test2'
            ],
            [
                'first_name' => 'Venkat',
                'last_name' => 'Ravi',
                'position' => 'developer',
                'email' => 'test3@mail.com',
                'password' => 'test3'
            ],
            [
                'first_name' => 'Ranjith',
                'last_name' => 'Kumar',
                'position' => 'systerm developer',
                'email' => 'test4@mail.com',
                'password' => 'test4'
            ],
            [
                'first_name' => 'Ravi',
                'last_name' => 'Kumar',
                'position' => 'CTO',
                'email' => 'test5@mail.com',
                'password' => 'test5'
            ]
        ];

        foreach ($datas as $data) {
            $user = User::create($data);
            $status_data['status_id'] = 1;
            $user->status()->create($status_data);
        }
    }
}
