<?php
/**
 * Created by PhpStorm.
 * User: V A H A G N
 * Date: 21.06.2017
 * Time: 16:28
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CommentsController
{
    public function show(Request $request){

        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        return view('comments');

    }

}