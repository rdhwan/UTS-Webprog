<?php

require_once __DIR__ . "../../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;


/*
    User Table
*/
Capsule::schema()->create("user", function (Blueprint $table) {
    $table->id();
    $table->string("username")->unique();
    $table->string("password");
    $table->rememberToken();

    $table->timestamps();
});


/*
    Customer Table
*/
Capsule::schema()->create("customer", function (Blueprint $table) {
    $table->id();
    $table->string("name");
    $table->string("companyName");
    $table->string("phoneNumber")->unique();
    $table->string("email")->unique();
    $table->boolean("isFavorite")->default(false);
    $table->foreignId("user_id")->constrained("user")->cascadeOnDelete()->cascadeOnUpdate();

    $table->timestamps();
});