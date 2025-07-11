<?php

use App\Models\Admins;
use App\Models\Settings;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('admin', function (Request $request) {
    $admin = new Admins();

    $admin->username = 'admin';
    $admin->password = md5('admin');

    $admin->save();

    $Settings = new Settings();

    $Settings->latitude = '-2.190546';
    $Settings->longitude = '102.639169';
    $Settings->radius = '150';
    $Settings->name_company = 'PT Deratek';

    $Settings->save();

})->purpose('Insert Admin Successfully');
