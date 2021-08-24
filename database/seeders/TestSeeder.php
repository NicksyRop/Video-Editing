<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create([

            'category_id' => 1,
            'title' => 'Extreme Bicking At buffalo mountains',
            'instructions' => '<div>The zip file contains clips and audio files<br><strong>Requirements</strong><br><br></div><ol><li>Create a 7 minutes video&nbsp;</li><li>Add stills and texts</li><li>Add fade in and&nbsp; out transitions</li><li>Choose any audio and incooperate with the video</li></ol><div>A 7 minutes video will be required<br>Upload the video after completing the task for marking<br><br>For any inquiries talk&nbsp; to us via&nbsp; our email</div>',
            'file' => 'Test/2.1 Start-up clips.zip'

        ]);
    }
}
