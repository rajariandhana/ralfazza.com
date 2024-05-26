<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Employer;
use App\Models\Position;
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
        Employer::factory()->create([
            'nama'=>'ITS Surabaya',
            'namaSlug'=>'ITS_Surabaya',
            'link'=>'https://www.its.ac.id',
            'deskripsi'=>'This is my campus, got here in 2022 to study Informatics Engineering. It\'s like one of the best educational institute in the country.',
        ]);
        Employer::factory()->create([
            'nama'=>'Schematics ITS',
            'namaSlug'=>'Schematics_ITS',
            'link'=>'https://schematics-its.com',
            'deskripsi'=>'Where I learn game development. It\'s like an annual event, there is logic competition, programming competition, bootcamp and seminars, as well as the fun stuffs.',
        ]);
        Employer::factory()->create([
            'nama'=>'Alpro ITS',
            'namaSlug'=>'Alpro_ITS',
            'link'=>'https://www.its.ac.id/informatika/id/fasilitas/laboratorium/laboratorium-algoritma-dan-pemrograman/',
            'deskripsi'=>'One of many Informatics Engineering Department\'s laboratorium.',
        ]);

        Position::factory()->create([
            'posisi'=>'Data Structures Teaching Assistant',
            'posisiSlug'=>'Data_Structures_Teaching_Assistant',
            'employer_nama'=>'ITS Surabaya',
            'deskripsi'=>'Teaches international students data structures and algorithms using C/C++. Creates programming problems for quizzes and lab works. Assist lecturers in grading students.',
            'skill'=>'',
            'tgl'=>'February 2024 - Present',
            // 'mulai'=>'February 2024',
            // 'selesai'=>'Present',
        ]);
        Position::factory()->create([
            'posisi'=>'Research Assistant',
            'posisiSlug'=>'Research_Assistant',
            'employer_nama'=>'ITS Surabaya',
            'deskripsi'=>'Aide the lecturer\'s research by creating python scripts to analyze data.',
            'skill'=>'',
            'tgl'=>'December 2023 - Present',
            // 'mulai'=>'December 2023',
            // 'selesai'=>'Present',
        ]);
        Position::factory()->create([
            'posisi'=>'Basic Programming Teaching Assistant',
            'posisiSlug'=>'Basic_Programming_Teaching_Assistant',
            'employer_nama'=>'ITS Surabaya',
            'deskripsi'=>'Teaches international students basic programming using C programming language up until simple sorting and searching algorithms. Creates programming problems for quizzes and lab works. Assist the lecturer in grading students.',
            'skill'=>'',
            'tgl'=>'August 2023 - December 2023',
            // 'mulai'=>'August 2023',
            // 'selesai'=>'December 2023',
        ]);
        
        Position::factory()->create([
            'posisi'=>'Expert Game Developer',
            'posisiSlug'=>'Expert_Game_Developer',
            'employer_nama'=>'Schematics ITS',
            'deskripsi'=>'Design and develop games from zero using C# with Unity Engine to be used in the Schematics 2024.',
            'skill'=>'',
            'tgl'=>'January 2024 - Present',
            // 'mulai'=>'January 2024',
            // 'selesai'=>'Present',
        ]);
        Position::factory()->create([
            'posisi'=>'Game Developer',
            'posisiSlug'=>'Game_Developer',
            'employer_nama'=>'Schematics ITS',
            'deskripsi'=>'Worked in a team to develop games using C# with Unity Engine for Schematics 2023. The games were played by over 1000 participants in the elimination round.',
            'skill'=>'',
            'tgl'=>'February 2023 - November 2023',
            // 'mulai'=>'February 2023',
            // 'selesai'=>'November 2023',
        ]);

        Position::factory()->create([
            'posisi'=>'Lab Administrator',
            'posisiSlug'=>'Lab_Administrator',
            'employer_nama'=>'Alpro ITS',
            'deskripsi'=>'Administrator for ITS Informatics Engineering\'s Algorithms and Programming Laboratory. Vice Coordinator for the Data Structures course.',
            'skill'=>'',
            'tgl'=>'January 2024 - Present',
            // 'mulai'=>'January 2024',
            // 'selesai'=>'Present',
        ]);

        Project::factory()->create([
            'nama' => 'Minesweeper',
            'techStack' => 'HTML | CSS | JavaScript',
            'deskripsi' => 'For my Design & Analysis of Algorithms course, I chose to create a game of minesweeper which applies the Breadth First Search algorithm when revealing cells that does not have a mine in it. Kind of proud of this one since I already know the basic and just needed a bit help from GPT for minor syntax stuffs.',
            'jmlFoto' => 3,
            'fileEkstensi' => 'png',
            'linkRepo' => 'github.com/rajariandhana/minesweeper',
            'linkDemo' => 'minesweeper.ralfazza.com',
        ]);
        Project::factory()->create([
            'nama' => 'FoodGrub',
            'techStack' => 'PHP | Laravel | MySQL',
            'deskripsi' => 'Simple point of Sales application for F&B business. Business owner can perform CRUD to menus, create and track order, as well as to filter order based on dates.',
            'jmlFoto' => 4,
            'fileEkstensi' => 'png',
            'linkRepo' => 'github.com/rajariandhana/fpcamin',
            'linkDemo' => 'foodgrub.ralfazza.com',
        ]);
        Project::factory()->create([
            'nama' => 'StudyKanji',
            'techStack' => 'HTML | CSS | JavaScript',
            'deskripsi' => 'Personal project to help me and my friends learn Japanese Kanji. Not optimized for desktop',
            'jmlFoto' => 3,
            'fileEkstensi' => 'png',
            'linkRepo' => 'github.com/rajariandhana/kanji',
            'linkDemo' => 'ralfazza.com/kanji',
        ]);
        Project::factory()->create([
            'nama' => 'Checkers',
            'techStack' => 'Unity | C#',
            'deskripsi' => 'Just a replication of a checkers game. Unfortunately it is a bit difficult to put it on the web so I am sorry about the aspect ratio',
            'jmlFoto' => 2,
            'fileEkstensi' => 'png',
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
