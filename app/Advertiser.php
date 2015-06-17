<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'advertiser';

    public $primaryKey = 'id';

    public $timestamps = false;



}
