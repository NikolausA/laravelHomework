<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $category = ['Main', 'Politic', 'Sport', 'Hi-tech', 'Business'];

//    private $news =
//        [
//            [
//                'id' => 1,
//                'category' => 'main',
//                'title' => 'title news #1',
//                'text' => 'text news #1',
//                'isTopNews' => true
//            ],
//            [
//                'id' => 2,
//                'category' => 'main',
//                'title' => 'title news #2',
//                'text' => 'text news #2',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 3,
//                'category' => 'main',
//                'title' => 'title news #3',
//                'text' => 'text news #3',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 4,
//                'category' => 'main',
//                'title' => 'title news #4',
//                'text' => 'text news #4',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 5,
//                'category' => 'politic',
//                'title' => 'title news #5',
//                'text' => 'text news #5',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 6,
//                'category' => 'politic',
//                'title' => 'title news #6',
//                'text' => 'text news #6',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 7,
//                'category' => 'politic',
//                'title' => 'title news #7',
//                'text' => 'text news #7',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 8,
//                'category' => 'politic',
//                'title' => 'title news #8',
//                'text' => 'text news #8',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 9,
//                'category' => 'sport',
//                'title' => 'title news #9',
//                'text' => 'text news #9',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 10,
//                'category' => 'sport',
//                'title' => 'title news #10',
//                'text' => 'text news #10',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 11,
//                'category' => 'sport',
//                'title' => 'title news #11',
//                'text' => 'text news #11',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 12,
//                'category' => 'sport',
//                'title' => 'title news #12',
//                'text' => 'text news #12',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 13,
//                'category' => 'hi-tech',
//                'title' => 'title news #13',
//                'text' => 'text news #13',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 14,
//                'category' => 'hi-tech',
//                'title' => 'title news #14',
//                'text' => 'text news #14',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 15,
//                'category' => 'hi-tech',
//                'title' => 'title news #15',
//                'text' => 'text news #15',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 16,
//                'category' => 'hi-tech',
//                'title' => 'title news #16',
//                'text' => 'text news #16',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 17,
//                'category' => 'business',
//                'title' => 'title news #17',
//                'text' => 'text news #17',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 18,
//                'category' => 'business',
//                'title' => 'title news #18',
//                'text' => 'text news #18',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 19,
//                'category' => 'business',
//                'title' => 'title news #19',
//                'text' => 'text news #19',
//                'isTopNews' => false
//            ],
//            [
//                'id' => 20,
//                'category' => 'business',
//                'title' => 'title news #20',
//                'text' => 'text news #20',
//                'isTopNews' => false
//            ]
//        ];

    public function index()
    {
        $news = \DB::table('news')
            ->join('category', 'news.category_id', '=', 'category.id')
            ->select('news.*', 'category.title as category')
            ->get();
        $category = \DB::table('category')->get();
        return view('news.index', ['news' => $news, 'category' => $category]);
    }

    public function newsByCategory($category) {
        $selected = \DB::table('category')
            ->join('news', 'news.category_id', '=', 'category.id')
            ->where('category.title', 'category')
            ->select('category.title as category', 'news.title', 'news.text')
            ->get();
        return view('news.selectednews', ['category' => $category, 'news' => $selected]);
    }

    public function newsById($id) {
        $news = \DB::table('news')
            ->join('category', 'news.category_id', '=', 'category.id')
            ->where('news.id', $id)
            ->select('news.id', 'news.title', 'news.text', 'category.title as category')
            ->first();
        return view('news.onenews', ['id' => $id, 'news' => $news]);
    }

    public function hello() {
        return view('news.greeting');
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $text = $request->input('text');
        $str = "title:". $title ."-text:". $text;
        file_put_contents(storage_path('app/public/db.text'), $str, FILE_APPEND);
        return redirect()->route('allnews');
    }
}
