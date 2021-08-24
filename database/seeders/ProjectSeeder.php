<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([

            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy',
            'file' => 'projects/really funny short clips.mp4',
            'category_id' => '1',
            'instructions' => 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing ',
            'user_id' => '3',
            'level_id' => '1',
            'duration' => '00:01:46',
            'freelancer_pay' => 5.2,
            'paid' => 1
        ]);

        Project::create([

            'title' => 'dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy',
            'file' => 'projects/really funny short clips.mp4',
            'user_id' => '3',
            'category_id' => '1',
            'instructions' => 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing ',
            'level_id' => '1',
            'duration' => '00:01:46',
            'freelancer_pay' => 8,
            'paid' => 1
        ]);

        Project::create([

            'title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy',
            'file' => 'projects/really funny short clips.mp4',
            'user_id' => '3',
            'category_id' => '1',
            'instructions' => 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing ',

            'level_id' => '3',
            'duration' => '00:01:46',
            'freelancer_pay' => 5.2,
            'paid' => 1

        ]);

        Project::create([

            'title' => 'printing and typesetting industry. Lorem Ipsum has been the industry standard dummy',
            'file' => 'projects/really funny short clips.mp4',
            'category_id' => '1',
            'user_id' => '3',
            'instructions' => 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing ',

            'level_id' => '1',
            'duration' => '00:01:46',
            'freelancer_pay' => 3.2,
            'paid' => 1
        ]);


        Project::create([

            'title' => 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy',
            'file' => 'projects/really funny short clips.mp4',
            'category_id' => '1',
            'user_id' => '3',
            'instructions' => 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing ',

            'level_id' => '2',
            'duration' => '00:01:46',
            'freelancer_pay' => 4.5,
            'paid' => 1
        ]);
    }
}
