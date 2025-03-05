<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first(); // Si tu veux récupérer un utilisateur existant (le premier par exemple)

        if ($user) {

        \App\Models\Task::create([
            'title' => 'Tâche 1',
            'description' => 'Ceci est la première tâche.',
            'status' => 'completed',
            'user_id' => $user->id, 
        ]);
    
        \App\Models\Task::create([
            'title' => 'Tâche 2',
            'description' => 'Ceci est la deuxième tâche.',
            'status' => 'pending',
            'user_id' => $user->id, 
        ]);
        }

        \App\Models\Task::factory(10)->create();
    }
}
