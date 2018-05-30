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
    function getAllTopic(){
        $topic = DB::table('topics')->get();
        return response()->json($topic);
    }
    function getOneTopic($id){
        $topic = DB::table('topics')->where('id',$id)->get();
        return response()->json($topic);
    }
    function getVocabularyBaseOnTopic($id){
        $vocatopic = DB::table('vocabulary')->where('id_topics',$id)->get();
        return response()->json($vocatopic);
    }


}
