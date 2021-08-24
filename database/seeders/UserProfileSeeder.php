<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProfile::create([

            'user_id' => 1,
            'bio' => 'Post-production video intern for a Junior Video Editor role. Experienced in Adobe Creative Suite and Apple Final Cut. Strong communication and teamwork skills honed through post-production house internships and two years retail work',
            'category_id' => 1,
            'cv' => 'files/Nickson kipkorir.pdf',
            'country' => 'Kenya',
            'kra' => 'files/A009817588Y.pdf',
            'paypal_email' => 'kipkorirnickson45@gmail.com',
            'completed' => 1,
            'level_id' => 1,
            'doctype' => 'Identification Card',
            'front_image' => 'files/idb.jpeg',
            'back_image' => 'files/idf.jpeg',
            'p_submitted' => 1

        ]);


    }
}
