<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index(){

        $posts = array();
        $posts[] = array('id'=>1, 'titulo'=>'Post numero 1', 'texto'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sollicitudin libero at eleifend sodales. Phasellus pulvinar nibh ac turpis aliquet, quis commodo felis porta. Nullam dictum leo eu mauris posuere laoreet. Sed vestibulum neque vel lacus lacinia, sed dignissim arcu condimentum.', 'data'=>'04/03/2015');
        $posts[] = array('id'=>2, 'titulo'=>'Segundo post de teste', 'texto'=>'Pellentesque pulvinar nulla eget massa scelerisque condimentum. Donec nec nisi vitae urna viverra auctor mattis in neque. Curabitur dapibus auctor ligula nec semper. Integer sed nunc non dolor mattis pharetra. Vestibulum rhoncus tristique ipsum quis efficitur.', 'data'=>'16/04/2015');
        $posts[] = array('id'=>3, 'titulo'=>'Titulo do terceiro post', 'texto'=>'Proin convallis arcu vel elit bibendum accumsan. Quisque eget felis non magna hendrerit sodales scelerisque eget velit.', 'data'=>'02/05/2015');

        return view('blog.index', compact('posts'));
    }

}
