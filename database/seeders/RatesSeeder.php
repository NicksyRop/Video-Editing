<?php

namespace Database\Seeders;

use App\Models\Rate;
use Illuminate\Database\Seeder;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Rate::create([


            'category_id' => '1',
            'level_id' => '1',
            'rate' => '40'


            ]);


            Rate::create([


                'category_id' => '1',
                'level_id' => '2',
                'rate' => '60'
    
    
                ]);


                Rate::create([


                    'category_id' => '1',
                    'level_id' => '3',
                    'rate' => '80'
        
        
                    ]);   
                    
                    Rate::create([


                        'category_id' => '1',
                        'level_id' => '4',
                        'rate' => '100'
            
            
                        ]);    
            
    }
}
