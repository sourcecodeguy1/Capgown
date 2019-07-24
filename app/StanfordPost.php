<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StanfordPost extends Model
{
    // Table Name
    protected $table = 'stanford_posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = array('White', 'Yellow', 'Orange', 'Drab', 'Red', 'Gold', 'Copper', 'Dark_Blue', 'Light_Blue');
}
