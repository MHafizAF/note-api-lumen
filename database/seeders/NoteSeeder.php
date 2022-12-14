<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::first();

        Note::create([
            'user_id' => $users->id,
            'title' => 'Testing the title',
            'body' => 'Testing the description',
        ]);
    }
}
