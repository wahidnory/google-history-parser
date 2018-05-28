<?php

class UsersTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        factory(MileageApi\Entities\User::class, 50)->create();
    }
}