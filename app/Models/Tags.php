<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /** @use HasFactory<\Database\Factories\TagsFactory> */
    use HasFactory;

    public function jobs()
    {
        //our table has job_listing_id instead of job_id as there is relation so relatedPivotKey opposite of job model page
        return $this->belongsToMany(Job::class, relatedPivotKey: "job_listing_id");
    }
}
