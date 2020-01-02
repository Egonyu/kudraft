<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    function blankPage(){
    	return view('admin.pages.blank-page');
    }

    function profile1(){
    	return view('admin.pages.profile1');
    }

    function profile2(){
        return view('admin.pages.profile2');
    }

    function imageGallery1(){
    	return view('admin.pages.image-gallery1');
    }

    function imageGallery2(){
    	return view('admin.pages.image-gallery2');
    }

    function timeline(){
    	return view('admin.pages.timeline');
    }

    function horizontalTimeline(){
        return view('admin.pages.horizontal-timeline');
    }

    function pricing(){
        return view('admin.pages.pricing');
    }

    function invoices1(){
        return view('admin.pages.invoices1');
    }

    function invoices2(){
        return view('admin.pages.invoices2');
    }

    function searchResults(){
        return view('admin.pages.search-results');
    }

    function helperClasses(){
        return view('admin.pages.helper-classes');
    }

    function teamsBoard(){
        return view('admin.pages.teams-board');
    }

    function projectList(){
        return view('admin.pages.project-list');
    }

    function maintenance(){
        return view('admin.pages.maintenance');
    }

    function testimonials(){
        return view('admin.pages.testimonials');
    }

    function faq(){
        return view('admin.pages.faq');
    }
}
