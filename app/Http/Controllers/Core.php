<?php
/**
 * Created by PhpStorm.
 * User: V A H A G N
 * Date: 22.06.2017
 * Time: 12:56
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class Core extends Controller{


    public function getArticles(){
    }

    public function getArticle($id){
        echo "   " .$id;
    }
}