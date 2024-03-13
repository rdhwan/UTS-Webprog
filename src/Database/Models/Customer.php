<?php

require_once __DIR__ . "/../../bootstrap.php";

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    protected $table = "customer";

    protected $fillable = ["name", "companyName", "phoneNumber", "email", "isFavorite", "user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}