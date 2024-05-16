<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home(): View
    {
        return view('site.principal.home');
    }

    public function aboutGroup(): View
    {
        return view('site.about.group');
    }

    public function aboutCases(): View
    {
        return view('site.about.cases');
    }

    public function aboutAwards(): View
    {
        return view('site.about.awards');
    }

    public function aboutVideos(): View
    {
        return view('site.about.videos');
    }

    public function aboutPrivacyPolicy(): View
    {
        return view('site.about.privacypolicy');
    }

    public function solutionsIptv(): View
    {
        return view('site.solutions.platform-iptv');
    }

    public function solutionsWhitelabel(): View
    {
        return view('site.solutions.whitelabel');
    }

    public function solutionsAva(): View
    {
        return view('site.solutions.platform-ava');
    }

    public function solutionsStudioPack(): View
    {
        return view('site.solutions.studio-pack');
    }

    public function producer(): View
    {
        return view('site.producer.home');
    }

    public function compliance(): View
    {
        return view('site.compliance.home');
    }

    public function contact(): View
    {
        return view('site.contact.contactus');
    }
}
