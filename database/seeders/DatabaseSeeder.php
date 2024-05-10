<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        // Project::factory()->create([
        //     'nama' => '',
        //     'techStack' => '',
        //     'deskripsi' => '',
        //     'linkRepo' => '',
        //     'linkDemo' => '',
        // ]);
        Project::factory()->create([
            'nama' => 'FoodGrub',
            'techStack' => 'PHP | Laravel | MySQL',
            'deskripsi' => 'Point of Sales application for F&B business. Business can create and track orders',
            'jmlFoto' => 4,
            'fileEkstensi' => 'png',
            'linkRepo' => 'github.com/rajariandhana/fpcamin',
            'linkDemo' => 'foodgrub.ralfazza.com',
        ]);
        Project::factory()->create([
            'nama' => 'StudyKanji',
            'techStack' => 'HTML | CSS | JavaScript',
            'deskripsi' => 'Personal project to help me and my friends learning Japanese. Not optimized for desktop',
            'jmlFoto' => 3,
            'fileEkstensi' => 'png',
            'linkRepo' => 'github.com/rajariandhana/kanji',
            'linkDemo' => 'ralfazza.com/kanji',
        ]);
        Project::factory()->create([
            'nama' => 'Checkers',
            'techStack' => 'Unity | C#',
            'deskripsi' => 'Just a replication of a checkers game. Unfortunately it is a bit difficult to put it on the web so I am sorry about the aspect ratio',
            'linkRepo' => 'github.com/rajariandhana/dev_checkers',
            'linkDemo' => 'checkers.ralfazza.com',
        ]);
        Project::factory()->create([
            'nama' => 'Postitivity',
            'techStack' => 'HTML | CSS | JavaScript | PHP | MySQL',
            'deskripsi' => 'Created a "post it" themed social media for Web Programming class that utilizes relational database.',
            'jmlFoto' => 3,
            'fileEkstensi' => 'jpg',
            'linkRepo' => '',
            'linkDemo' => 'https://postitivity.000webhostapp.com/',
        ]);
        
        Project::factory()->create([
            'nama' => 'ServiceHub',
            'techStack' => 'Software Development | Figma',
            'deskripsi' => 'Created a prototype for a home service provider for Concept of Software Development class.',
            'jmlFoto' => 4,
            'fileEkstensi' => 'jpg',
            'linkDemo' => 'https://www.figma.com/proto/TQB7eNQb8QwwgKid9RwAT0/ServiceHub?node-id=1-3&starting-point-node-id=1%3A3&mode=design&t=EcjVJJ0KtK4EcMot-1',
        ]);
        Project::factory()->create([
            'nama' => 'Boombatag',
            'techStack' => 'Unity | C# | Figma',
            'deskripsi' => 'Used for Schematics ITS 2023, the game is inspired from the infamous "Keep Talking and Nobody Explodes"',
            'jmlFoto' => 4,
            'fileEkstensi' => 'jpg',
            'linkRepo' => '',
        ]);
        Project::factory()->create([
            'nama' => 'Escape Card',
            'techStack' => 'Unity | C# | Figma',
            'deskripsi' => 'Online game played by over 1000 people that is used for Schematics ITS 2023. Players must gather clues and solve logic puzzles to find the treasure.',
            'jmlFoto' => 3,
            'fileEkstensi' => 'jpg',
            'linkRepo' => '',
        ]);
        
    }
}
