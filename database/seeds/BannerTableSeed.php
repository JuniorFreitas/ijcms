<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Banner;
use Faker\Factory as Faker;

class BannerTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->truncate();

        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            Banner::create([
                'users_id' => 1,
                'titulo_banner' => $faker->word(),
                'url_banner' => $faker->word(),
                'img_banner' => $faker->word(),
                'contador_banner' => $faker->numberBetween(1,500),
                'qnt_banner' => $faker->numberBetween(1,5),
                'ativo_banner' => 1,
                'criado_banner' => \Carbon\Carbon::now(),

            ]);
        }

    }
}
