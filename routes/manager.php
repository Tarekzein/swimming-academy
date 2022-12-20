<?php


use Illuminate\Support\Facades\Route;



Route::group(["prefix"=>"profile"],function (){

    Route::get("/",[\App\Http\Controllers\Manager\ProfileController::class,"index"])->name("manager.profile");

    Route::get("edit/",[\App\Http\Controllers\Manager\ProfileController::class,"showUpdateForm"])->name("manager.profile.update");
    Route::post("edit/",[\App\Http\Controllers\Manager\ProfileController::class,"updateManager"])->name("manager.profile.update");

//    Interns CRUD Routes


    Route::group(["prefix"=>"interns"],function (){

        Route::get("/",[\App\Http\Controllers\Manager\Intern\ViewController::class,"all"])->name("manager.interns");

        Route::get("/add",[\App\Http\Controllers\Manager\Intern\CreateController::class,"showForm"])->name("manager.addIntern");
        Route::post("/add",[\App\Http\Controllers\Manager\Intern\CreateController::class,"add"])->name("manager.addIntern");

        Route::get("/update/{user}",[\App\Http\Controllers\Manager\Intern\UpdateController::class,"showForm"])->name("manager.updateIntern");
        Route::post("/update/{user}",[\App\Http\Controllers\Manager\Intern\UpdateController::class,"updateIntern"])->name("manager.updateIntern");

        Route::get("/delete/{user}",[\App\Http\Controllers\Manager\Intern\DeleteController::class,"delete"])->name("manager.deleteIntern");

    });


//  Captains CRUD Routes

    Route::group(["prefix"=>"captains"],function (){

        Route::get("/",[\App\Http\Controllers\Manager\Captain\ViewController::class,"all"])->name("manager.captains");

        Route::get("/add",[\App\Http\Controllers\Manager\Captain\CreateController::class,"showForm"])->name("manager.addCaptain");
        Route::post("/add",[\App\Http\Controllers\Manager\Captain\CreateController::class,"add"])->name("manager.addCaptain");

        Route::get("/update/{user}",[\App\Http\Controllers\Manager\Captain\UpdateController::class,"showForm"])->name("manager.updateCaptain");
        Route::post("/update/{user}",[\App\Http\Controllers\Manager\Captain\UpdateController::class,"updateCaptain"])->name("manager.updateCaptain");

        Route::get("/delete/{user}",[\App\Http\Controllers\Manager\Captain\DeleteController::class,"delete"])->name("manager.deleteCaptain");

    });


    Route::group(["prefix"=>"watercard"],function (){

        Route::get("add",[\App\Http\Controllers\Manager\Watercard\CreateController::class,"form"])->name("manager.watercardAdd");
        Route::post("add",[\App\Http\Controllers\Manager\Watercard\CreateController::class,"create"])->name("manager.watercardAdd");


    });

    Route::get("branch/{branch}",[\App\Http\Controllers\Manager\Branch\ViewController::class,"single"])->name("manager.branch");



//    Ajax Routes
    Route::group(["prefix"=>"ajax"],function (){

        Route::get("/captain/make-manager/{user}",[\App\Http\Controllers\Manager\Captain\UpgradeController::class,"upgrade"]);

    });

});


