<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Convention over Configuration
// if the table name is comments, model should be Comment
// if the table name is posts, model should be Post
class Job extends Model
{
    // without this, there will be error: BadMethodCallException  Call to undefined method
    use HasFactory;

    // calling table 'job_listings' because the name isn't the same with Job model. this is how we handle if the name is different
    protected $table = 'job_listings';

    // all attributes are allowed to be mass assign
    protected $fillable = ['title', 'salary'];
    // above scenario could happen when we insert new data to database using Tinker

    // we need information about employer, so the method called employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    // $job->title
};

// WE CAN DO THIS with Tinker. Tinker is like CLI for playing
// > $job = App\Models\Job::find(2)
// = App\Models\Job {#5116
//     id: 2,
//     title: "Scientist",
//     salary: "$80,000",
//     created_at: null,
//     updated_at: null,
//   }

// > $job->title
// = "Scientist"

// > $job->id
// = 2

// > $job->delete()
// = true

// NOTE: create Model first, then create Migration