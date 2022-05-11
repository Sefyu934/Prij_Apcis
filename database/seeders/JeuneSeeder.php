<?php

namespace Database\Seeders;

use App\Models\Jeune;
use Cassandra\Date;
use Illuminate\Database\Seeder;
use Psy\Util\Str;

class JeuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jeune::factory()
            ->count(74)
            ->create();
    }
}
