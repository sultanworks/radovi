<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'phone',
        'website',
        'skype',
        'country',
        'status_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function status()
    {
        return $this->belongsTo(ClientStatus::class, 'status_id');
    }
}
