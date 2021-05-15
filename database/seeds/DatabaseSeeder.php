<?php

use App\City;
use App\Company;
use App\Project;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nathaly Sipiran'
        ]);

        City::create([
            'name' => 'Perú'
        ]);

        Company::create([
            'name' => 'Vack Company'
        ]);

        factory(Project::class, 20)->create();
    
    }
}
