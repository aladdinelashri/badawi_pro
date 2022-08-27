<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

     Public const IS_USER=1;
    Public const IS_ADMIN=2;
    Public const IS_MANAGER=3;

    protected $fillable = [
        'name','note',
    ];

    protected $dates = ['deleted_at'];

       protected $guarded = array(
        'name','note',
    );

       public function users()
{
    return $this->hasMany(User::class);
}
}
