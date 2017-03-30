<?php
/**
 * Created by PhpStorm.
 * User: inshadow
 * Date: 30.03.17
 * Time: 13:46
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model {

    protected $table = 'phones';

    protected $fillable = [
        'number'
    ];

    public $timestamps = false;
}