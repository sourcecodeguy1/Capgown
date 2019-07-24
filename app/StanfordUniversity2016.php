<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StanfordUniversity2016 extends Model
{
    // Table Name
    protected $table = 'stanford_post_2016';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = array('White', 'Yellow', 'Orange', 'Drab', 'Red', 'Gold', 'Copper', 'Dark_Blue', 'Light_Blue');
}
