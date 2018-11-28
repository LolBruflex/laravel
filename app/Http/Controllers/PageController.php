<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {

    protected $data = [
        [
            'name'     => 'Lorenzo',
            'lastname' => 'Bruffa'
        ],
        [
            'name'     => 'Leonardo',
            'lastname' => 'Bruffa'
        ],
        [
            'name'     => 'Parmenio',
            'lastname' => 'Bruffa'
        ]
    ];

    public function about(){

        return view('about', ['data' => $this->data]);
    }

    public function staff(){

        // 1) - come ritornare una view
        return view('templates.staff',
            [
                'title' => 'Our Staff',
                'staff' => $this->data
            ]
        );

        // 2) - come ritornare una view
        /*return view('staff')
            ->with('staff', $this->data)
            ->with('title', 'Our Staff');*/

        // 3) - come ritornare una view
        /*return view('staff')
            ->withStaff($this->data)
            ->withTitle('Our Staff');*/

        // 4) - come ritornare una view
        /*$staff = $this->data;
        $title = 'Our Staff';

        return view('staff', compact('title','staff'));*/
    }

    public function blog(){

        // 1) - come ritornare una view
        return view('templates.blog');

    }
}
