<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Character;
use App\Models\Episode;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->createProjectsAuthors1();
        $this->createProjectsAuthors2();
        $this->createEpisodesCharacters();
    }

    public function createProjectsAuthors1()
    {
        Project::factory(10)
            ->has(Author::factory()->count(3), 'authors')
            ->create();
    }
    public function createProjectsAuthors2()
    {
        $projects = Project::factory(10)->create();

        foreach ($projects as $project) {
            Author::factory()
                ->count(3)
                ->for($project)
                ->create();
        }
    }
    public function createEpisodesCharacters(){
        $episodes =  Episode::factory(10)->create();
        foreach ($episodes as $episode) {
            Character::factory()
                ->count(3)
                ->for($episode)
                ->create();
        }

    }
}
