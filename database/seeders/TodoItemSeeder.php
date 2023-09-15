<?php

namespace Database\Seeders;

use App\Models\TodoItem;
use App\Models\TodoList;
use Illuminate\Database\Seeder;

class TodoItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todoListIds = TodoList::all()->pluck('id');

        foreach ($todoListIds as $id) {
            TodoItem::factory()
                ->count(10)
                ->create([
                    'todo_list_id' => $id,
                ]);
        }
    }
}
