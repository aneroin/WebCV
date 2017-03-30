<?php
/**
 * Created by PhpStorm.
 * User: inshadow
 * Date: 28.03.17
 * Time: 23:21
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Location extends Model {

    protected $table = 'locations';

    protected $fillable = [
        'text',
        'coords',
    ];

    public $timestamps = false;
}