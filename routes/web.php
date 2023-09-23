<?php

use App\Http\Controllers\ResearchAndDevelopMentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::get('/reboot', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    return "Application cache flushed";
});


// login
Route::get('/', [ResearchAndDevelopMentController::class, 'logInfoView']);

Route::get('/user/log/create/{project_title}/{ip_address}/{current_date}/{current_time}/{current_url}/{browser_name}/{user}', [ResearchAndDevelopMentController::class, 'userLoginInfoCreate']);
