<?php

require "../bootstrap.php";

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    protected $table = "customer";

    protected $fillable = ["name", "companyName", "phoneNumber", "email", "isFavorite"];

    public function customers()
    {
        return $this->belongsTo(User::class);
    }
}