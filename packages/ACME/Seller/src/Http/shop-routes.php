<?php

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {

    Route::get('/seller', 'ACME\Seller\Http\Controllers\Shop\SellerController@index')->defaults('_config', [
        'view' => 'seller::shop.index',
    ])->name('seller.shop.index');

});