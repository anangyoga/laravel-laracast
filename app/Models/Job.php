<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// Convention over Configuration
// if the table name is comments, model should be Comment
// if the table name is posts, model should be Post
class Job extends Model
{
    // calling table 'job_listings' because the name isn't the same with Job model. this is how we handle if the name is different
    protected $table = 'job_listings';
};