<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['user_name', 'password'];

    public function store_user($data)
    {
        return $this->create([
            'user_name' => $data['user_name'],
            'password' => bcrypt($data['password'])
        ]);
    }
}
