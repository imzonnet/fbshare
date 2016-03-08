<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FakeContent extends Model
{
    protected $table = 'fake_content';

    protected $fillable = ['name', 'code', 'image', 'description', 'url', 'user_id'];


}