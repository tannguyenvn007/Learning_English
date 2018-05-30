<?php

namespace App\Http\Controllers;
use App\Vocabulary;
use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
    function getlistTopic2(){
        $vocabularies = DB::table('vocabulary')->where('id_topics',2)->get();
        return response()->json($vocabularies);
    }
    function getlistTopic1(){
        $vocabularies = DB::table('vocabulary')->where('id_topics',1)->get();
        return response()->json($vocabularies);
    }
    function getlistTopic3(){
        $vocabularies = DB::table('vocabulary')->where('id_topics',3)->get();
        return response()->json($vocabularies);
    }


}
