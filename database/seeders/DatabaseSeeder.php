<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Prophecy\Call\Call;

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

        $this->call(createUserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(ProjectSeeder::class);
       // $this->call(UserProfileSeeder::class);
        $this->call(RatesSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
      //  $this->call(SysytemConfigurationSeeder::class);

       // $this->call(PermissionTableSeeder::class);
    }
}
