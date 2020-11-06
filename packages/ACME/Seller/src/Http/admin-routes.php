<?php

Route::group(['middleware' => ['web', 'admin']], function () {

    Route::get('/admin/seller', 'ACME\Seller\Http\Controllers\Admin\SellerController@index')->defaults('_config', [
        'view' => 'seller::admin.index',
    ])->name('seller.admin.index');

    Route::get('/admin/seller/catalog/products', 'ACME\Seller\Http\Controllers\Admin\SellerController@products')->defaults('_config', [
        'view' => 'seller::admin.product.index',
    ])->name('admin.seller.product.index');

});