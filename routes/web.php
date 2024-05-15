<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/index');
});

Route::get("/home", function(Request $request) {
    return $request->query();
});

Route::get('/users/{id?}', function(?string $id = null) {
    $users = [
        [
            "id" => 1,
            "nama" => "Ronald alberty",
            "age" => 19,
        ],
        [
            "id" => 2,
            "nama" => "Kevin Leonardo",
            "age" => 24,
        ],
        [
            "id" => 3,
            "nama" => "Stevano Michael",
            "age" => 20,
        ],
    ];

    $result = [];

    
        if($id != null) {
            foreach($users as $user) {
                if($user['id'] == $id) {
                    $result = $user;
                }
            }
        } else {
            $result = $users;
        }
    

    return $result;
})->name("users.detail");