<?php
Route::get('news' 'ShopFront@news')
->name('news');
Route::get('/news/{alias}', 'ShopFront@newsDetail')
->name('news.detail');
