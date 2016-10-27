<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $faker = Faker::create();

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com.br',
            'password' => bcrypt(123456),
        ]);

        foreach (range(1, 10) as $i) {
            User::create([
                'name' => $faker->word(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->word()),
            ]);
        }

    }
}
