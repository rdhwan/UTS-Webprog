<?php
require "../bootstrap.php";

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = "user";
    protected $fillable = ["username", "password"];

    protected $hidden = ["password", "remember_token", "created_at", "updated_at"];
}
