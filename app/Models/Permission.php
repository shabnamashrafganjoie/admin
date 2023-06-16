<?php

namespace App\Models;


use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    public $table = "permissions";
    protected $fillable=['name','description','status'];

    use HasFactory,SoftDeletes;



     

            public function users(){
                return $this->belongsToMany(User::class);
            }

            public function roles(){
                return $this->belongsToMany(Role::class);
            }
    

}
