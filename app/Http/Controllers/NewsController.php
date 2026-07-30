<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function index()
    {
        $newsItems = [
            ['id' => 1, 'title' => 'New Land Registration Process', 'date' => '2026-07-20', 'summary' => 'Details about the updated process...'],
            ['id' => 2, 'title' => 'Public Notice: Office Closure', 'date' => '2026-07-15', 'summary' => 'Office will be closed on...'],
        ];

        return view('news.index', compact('newsItems'));
    }

    public function show($id)
    {
        $newsItem = ['id' => $id, 'title' => 'Sample News', 'date' => '2026-07-20', 'body' => 'Full content here...'];

        return view('news.show', compact('newsItem'));
    }
}
