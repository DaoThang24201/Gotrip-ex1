<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*Layout*/
    public function layout() {
        return view('/blog/layout');
    }

    /*Blogv1*/
    public function blogv1() {
        $data = [
            'categories'=>[
                ['name'=>'Art and culture'],
                ['name'=>'Art and culture'],
                ['name'=>'Art and culture'],
                ['name'=>'Art and culture'],
            ],
            'content'=>[
                ['img'=>'/img/blog/grids/1.png', 'title'=>'10 European ski destinations you should visit this winter','date'=>'April 06, 2022'],
                ['img'=>'/img/blog/grids/1.png', 'title'=>'10 European ski destinations you should visit this winter','date'=>'April 06, 2022'],
                ['img'=>'/img/blog/grids/1.png', 'title'=>'10 European ski destinations you should visit this winter','date'=>'April 06, 2022'],
                ['img'=>'/img/blog/grids/1.png', 'title'=>'10 European ski destinations you should visit this winter','date'=>'April 06, 2022'],
                ['img'=>'/img/blog/grids/1.png', 'title'=>'10 European ski destinations you should visit this winter','date'=>'April 06, 2022'],
                ['img'=>'/img/blog/grids/1.png', 'title'=>'10 European ski destinations you should visit this winter','date'=>'April 06, 2022'],
            ],
        ];
        return view('/blog/blogv1/home', $data);
    }

    /*Blogv2*/
    public function blogv2() {
        $data = [
            'contents'=>[
                ['href'=>'http://gotrip.test/blogv3/home','img'=>'/img/blog/list-2/1.png','date'=>'April 06, 2022','title'=>'9 Award-Winning Ski Resorts Near Salt Lake City','desc'=>'For decades, travelers have been escaping to the Catskills — a mountainous region in upstate New York — whenever they’ve needed a reset.'],
                ['href'=>'http://gotrip.test/blogv3/home','img'=>'/img/blog/list-2/1.png','date'=>'April 06, 2022','title'=>'9 Award-Winning Ski Resorts Near Salt Lake City','desc'=>'For decades, travelers have been escaping to the Catskills — a mountainous region in upstate New York — whenever they’ve needed a reset.'],
                ['href'=>'http://gotrip.test/blogv3/home','img'=>'/img/blog/list-2/1.png','date'=>'April 06, 2022','title'=>'9 Award-Winning Ski Resorts Near Salt Lake City','desc'=>'For decades, travelers have been escaping to the Catskills — a mountainous region in upstate New York — whenever they’ve needed a reset.'],
                ['href'=>'http://gotrip.test/blogv3/home','img'=>'/img/blog/list-2/1.png','date'=>'April 06, 2022','title'=>'9 Award-Winning Ski Resorts Near Salt Lake City','desc'=>'For decades, travelers have been escaping to the Catskills — a mountainous region in upstate New York — whenever they’ve needed a reset.'],
                ['href'=>'http://gotrip.test/blogv3/home','img'=>'/img/blog/list-2/1.png','date'=>'April 06, 2022','title'=>'9 Award-Winning Ski Resorts Near Salt Lake City','desc'=>'For decades, travelers have been escaping to the Catskills — a mountainous region in upstate New York — whenever they’ve needed a reset.'],
                ['href'=>'http://gotrip.test/blogv3/home','img'=>'/img/blog/list-2/1.png','date'=>'April 06, 2022','title'=>'9 Award-Winning Ski Resorts Near Salt Lake City','desc'=>'For decades, travelers have been escaping to the Catskills — a mountainous region in upstate New York — whenever they’ve needed a reset.'],
            ],
            'categories'=>[
                ['category'=>'Hotel','quantity'=>100],
                ['category'=>'Hotel','quantity'=>100],
                ['category'=>'Hotel','quantity'=>100],
                ['category'=>'Hotel','quantity'=>100],
            ],
            'posts'=>[
                ['img'=>'/img/blog/sidebar/1.png','title'=>'Find the Right Learning Path for your','date'=>'April 13, 2022'],
                ['img'=>'/img/blog/sidebar/1.png','title'=>'Find the Right Learning Path for your','date'=>'April 13, 2022'],
                ['img'=>'/img/blog/sidebar/1.png','title'=>'Find the Right Learning Path for your','date'=>'April 13, 2022'],
                ['img'=>'/img/blog/sidebar/1.png','title'=>'Find the Right Learning Path for your','date'=>'April 13, 2022'],
            ],
            'tags'=>[
                ['name'=>'Museum'],
                ['name'=>'Museum'],
                ['name'=>'Museum'],
                ['name'=>'Museum'],
            ],
        ];
        return view('/blog/blogv2/home', $data);
    }

    /*Blogv3*/
    public function blogv3() {
        $data =[
            'tags'=>[
                ['name'=>'Museum'],
                ['name'=>'Museum'],
                ['name'=>'Museum'],
                ['name'=>'Museum'],
            ],
            'author'=>[
                ['img'=>'/img/avatars/4.png','name'=>'Brooklyn Simmons','job'=>'Medical Assistant','desc'=>'Etiam vitae leo et diam pellentesque porta. Sed eleifend ultricies risus, vel rutrum erat commodo ut. Praesent finibus congue euismod. Nullam scelerisque massa vel augue placerat, a tempor sem egestas. Curabitur placerat finibus lacus.'],
            ],
            'comment'=>[
                ['avatar'=>'/img/avatars/2.png','name'=>'Tonko','time'=>'March 2022','react'=>'9.2 Superb','desc'=>'Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores.'],
                ['avatar'=>'/img/avatars/2.png','name'=>'Tonko','time'=>'March 2022','react'=>'9.2 Superb','desc'=>'Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores.'],
                ['avatar'=>'/img/avatars/2.png','name'=>'Tonko','time'=>'March 2022','react'=>'9.2 Superb','desc'=>'Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores.'],
                ['avatar'=>'/img/avatars/2.png','name'=>'Tonko','time'=>'March 2022','react'=>'9.2 Superb','desc'=>'Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores.'],
            ],
            'img_comment'=>[
                ['img'=>'/img/testimonials/1/2.png'],
                ['img'=>'/img/testimonials/1/2.png'],
                ['img'=>'/img/testimonials/1/2.png'],
                ['img'=>'/img/testimonials/1/2.png'],
            ],
            'posts'=>[
                ['img'=>'/img/blog/1.png','title'=>'Find the Right Learning Path for your','date'=>'April 13, 2022'],
                ['img'=>'/img/blog/1.png','title'=>'Find the Right Learning Path for your','date'=>'April 13, 2022'],
                ['img'=>'/img/blog/1.png','title'=>'Find the Right Learning Path for your','date'=>'April 13, 2022'],
                ['img'=>'/img/blog/1.png','title'=>'Find the Right Learning Path for your','date'=>'April 13, 2022'],
            ],
        ];
        return view('/blog/blogv3/home', $data);
    }
}
