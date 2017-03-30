<?php
/**
 * Created by PhpStorm.
 * User: inshadow
 * Date: 30.03.17
 * Time: 13:56
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model {

    protected $table = 'mails';

    protected $fillable = [
        'address'
    ];

    public $timestamps = false;
}
