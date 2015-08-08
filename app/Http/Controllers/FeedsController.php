<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;


class FeedsController extends Controller
{
    public function index() {
    //We load a view directly and return it to be served
    return view('feeds.create-feed');
    }

    //Processing the form
    public function create(){
    //Let's first run the validation with all provided input
    $validation = Validator::make(Input::all(),Feeds::$form_rules);
    //If the validation passes, we add the values to the database and   return to the form
    if($validation->passes()) {
    //We try to insert a new row with Eloquent
    $create = Feeds::create(array(
    'feed' => Input::get('feed'),
    'title' => Input::get('title'),
    'active' => Input::get('active'),
    'category' => Input::get('category')
    ));
    //We return to the form with success or error message due to state of the
    if($create) {
    return Redirect::to('feeds/create')
        ->with('message','The feed added to the database successfully!');
    } else {
    return Redirect::to('feeds/create')
        ->withInput()
        ->with('message','The feed could not be added, please try again later!');
    }
    } 
    else 
    {
    //If the validation does not pass, we return to the form with   first error message as flash data
    return Redirect::to('feeds/create')
    ->withInput()
    ->with('message',$validation->errors()->first());
    }
    }
    public function show($id)
    {

    }
}
