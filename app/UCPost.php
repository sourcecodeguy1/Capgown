<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UCPost extends Model
{
    // Table Name
    protected $table = 'u_c_post';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = array('gown_2019', 'gown_2017_2018', 'gown_2016', 'gown_2015', 'Light_Blue', 'Seconds', 'Velveteen', 'Velveteen_discolored', 'Rental', 'Rentals_Out', 'Rentals_Left');
}
