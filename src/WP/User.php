<?php

namespace WPEloquent\WP;


use WPEloquent\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'ID';
    protected $timestamp = false;

    public function meta()
    {
        return $this->hasMany('WPEloquent\WP\UserMeta', 'user_id');
    }
}