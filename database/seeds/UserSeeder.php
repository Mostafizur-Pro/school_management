<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
            'name' => 'Emon Al Mamun',
            'role_id' => 1,
            'email' => 'emonmamun3@gmail.com',
            'teacher_id' => '1',
            'email_verified_at' =>now(),
            'password'=> Hash::make('zxcvbnm'),
        ]);
    }
}
