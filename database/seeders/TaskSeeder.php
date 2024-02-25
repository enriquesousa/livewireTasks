<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'user_id' => '1',
                'name' => 'Task 1',
                'description' => 'Task 1 description',
                'status' => 'pending',
            ],

            [
                'user_id' => '1',
                'name' => 'Task 2',
                'description' => 'Task 2 description',
                'status' => 'pending',
            ],
        ];

        foreach($tasks as $task){
            Task::insert($task);
        };

    }
}
