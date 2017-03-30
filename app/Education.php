<?php
/**
 * Created by PhpStorm.
 * User: inshadow
 * Date: 30.03.17
 * Time: 12:02
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model {

    protected $table = 'educations';

    protected $fillable = [
        'current',
        'from_date',
        'to_date',
        'name',
        'degree',
        'description'
    ];

    public $timestamps = false;
}