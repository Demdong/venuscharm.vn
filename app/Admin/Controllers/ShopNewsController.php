<?php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopNews;
use App\Models\ShopNewsDescription;
use Illuminate\Http\Request;
use Validator;

class ShopNewsController extends Controller
{

    public function index()
    {
        return view('admin.screen.list');
    }

/**
 * Form create new order in admin
 * @return [type] [description]
 */
    public function create()
    {
        return view('admin.screen.shop_news');
    }

/**
 * Post create new order in admin
 * @return [type] [description]
 */
    public function postCreate()
    {

    }

/**
 * Form edit
 */
    public function edit($id)
    {

    }

/**
 * update status
 */
    public function postEdit($id)
    {

    }

/*
Delete list Item
Need mothod destroy to boot deleting in model
 */
    public function deleteList()
    {

    }

}
