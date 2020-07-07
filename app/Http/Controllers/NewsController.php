<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $category = ['main', 'politic', 'sport', 'hi-tech', 'business'];

    private $news =
        [
            [
                'id' => 1,
                'category' => 'main',
                'title' => 'title news #1',
                'text' => 'text news #1'
            ],
            [
                'id' => 2,
                'category' => 'main',
                'title' => 'title news #2',
                'text' => 'text news #2'
            ],
            [
                'id' => 3,
                'category' => 'main',
                'title' => 'title news #3',
                'text' => 'text news #3'
            ],
            [
                'id' => 4,
                'category' => 'main',
                'title' => 'title news #4',
                'text' => 'text news #4'
            ],
            [
                'id' => 5,
                'category' => 'politic',
                'title' => 'title news #5',
                'text' => 'text news #5'
            ],
            [
                'id' => 6,
                'category' => 'politic',
                'title' => 'title news #6',
                'text' => 'text news #6'
            ],
            [
                'id' => 7,
                'category' => 'politic',
                'title' => 'title news #7',
                'text' => 'text news #7'
            ],
            [
                'id' => 8,
                'category' => 'politic',
                'title' => 'title news #8',
                'text' => 'text news #8'
            ],
            [
                'id' => 9,
                'category' => 'sport',
                'title' => 'title news #9',
                'text' => 'text news #9'
            ],
            [
                'id' => 10,
                'category' => 'sport',
                'title' => 'title news #10',
                'text' => 'text news #10'
            ],
            [
                'id' => 11,
                'category' => 'sport',
                'title' => 'title news #11',
                'text' => 'text news #11'
            ],
            [
                'id' => 12,
                'category' => 'sport',
                'title' => 'title news #12',
                'text' => 'text news #12'
            ],
            [
                'id' => 13,
                'category' => 'hi-tech',
                'title' => 'title news #13',
                'text' => 'text news #13'
            ],
            [
                'id' => 14,
                'category' => 'hi-tech',
                'title' => 'title news #14',
                'text' => 'text news #14'
            ],
            [
                'id' => 15,
                'category' => 'hi-tech',
                'title' => 'title news #15',
                'text' => 'text news #15'
            ],
            [
                'id' => 16,
                'category' => 'hi-tech',
                'title' => 'title news #16',
                'text' => 'text news #16'
            ],
            [
                'id' => 17,
                'category' => 'business',
                'title' => 'title news #17',
                'text' => 'text news #17'
            ],
            [
                'id' => 18,
                'category' => 'business',
                'title' => 'title news #18',
                'text' => 'text news #18'
            ],
            [
                'id' => 19,
                'category' => 'business',
                'title' => 'title news #19',
                'text' => 'text news #19'
            ],
            [
                'id' => 20,
                'category' => 'business',
                'title' => 'title news #20',
                'text' => 'text news #20'
            ]
        ];

    public function category() {
        return view('news.category', ['category' => $this->category]);
    }

    public function newsByCategory($category) {
        return view('news.selectednews', ['category' => $category, 'news' => $this->news]);
    }

    public function newsById($id) {
        return view('news.onenews', ['id' => $id, 'news' => $this->news]);
    }

    public function hello() {
        return view('news.greeting');
    }
}
