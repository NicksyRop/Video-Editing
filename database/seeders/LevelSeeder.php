<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       Level::create([
        'level' => 'Basic',
        'rating' => '4.50'

       ]);

       Level::create([
        'level' => 'Standard',
        'rating' => '4.70'

       ]);

       Level::create([
        'level' => 'Premium',
        'rating' => '4.85'

       ]);

       Level::create([
        'level' => 'Pro',
        'rating' => '4.90'

       ]);
        
    }   
}
