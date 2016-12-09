<?php

namespace App\Repositories;

use App\User;
use App\Task;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskRepository {

    /**
     * Получить все задачи заданного пользователя.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user) {
        return Task::where('user_id', $user->id)
                        ->orderBy('created_at', 'asc')
                        ->get();
    }

}
