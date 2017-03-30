<?php
/**
 * Created by PhpStorm.
 * User: inshadow
 * Date: 28.03.17
 * Time: 22:04
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    protected $table = 'person';

    protected $fillable = [
        'firstname',
        'surname',
        'profession',
        'birthday',
        'photo'
    ];

    public $timestamps = false;
}