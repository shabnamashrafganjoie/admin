<?php

namespace App\Models;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory,SoftDeletes;


    public function users(){
    return $this->belongsToMany(User::class);

    }





        public function permissions(){
            return $this->belongsToMany(Permission::class);
        }




}