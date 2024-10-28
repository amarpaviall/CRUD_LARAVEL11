<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;

//class Job extends Model
class Job
{
    //
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 40000,
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => 30000,
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => 25000,
            ]
        ];
    }
}
