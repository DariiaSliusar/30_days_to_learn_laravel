<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Dyrector',
                'salary' => '$50,0000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$40,0000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$30,0000'
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }
        return $job;
    }
}

