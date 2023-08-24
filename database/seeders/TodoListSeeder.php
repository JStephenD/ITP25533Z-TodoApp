<?php

namespace Database\Seeders;

use App\Models\TodoList;
use App\Models\User;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = User::all()->pluck('id');

        TodoList::factory()
            ->count(10)
            ->sequence(function ($sequence) use ($userIds) {
                return ['user_id' => $userIds[$sequence->index]];
            })
            ->create();
    }
}
