<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::latest()->get();

        return $page;
    }

    public static function getPhone()
    {
        $page = Page::where('value', 'Телефон')->get();

        return $page[0]->description;
    }

    public static function getEmail()
    {
        $page = Page::where('value', 'Электронная почта')->get();

        return $page[0]->description;
    }


    public static function getAddress()
    {
        $page = Page::where('value', 'Адрес')->get();

        return $page[0]->description;
    }

    public static function getImages()
    {
        $page = Page::where('value', 'Бэкграунд')->get();

        return $page;
    }

    public static function getMetas()
    {
        $page = Page::where('value', 'Мета ключи')->andWhere('value', 'Мета описание')->get();

        return $page;
    }

    public static function getUrls()
    {
        $page = Page::where('type', 'ссылка')->get();

        return $page;
    }

}
