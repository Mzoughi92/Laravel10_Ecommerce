<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PageModel;

class HomeController extends Controller
{
    public function home()
    {
        $data['getRecord'] = User::getUser();
        $data['meta_title'] = '3ATTAR';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        return view('home', $data);
    }

    public function contact()
    {
        $data['getPage'] = PageModel::getSlug('contact');
        return view('page.contact', $data);
    }

    public function about()
    {
        $getPage = PageModel::getSlug('about');
        $data['getPage'] = $getPage;
        $data['meta_title'] = $getPage->meta_title;
        $data['meta_description'] = $getPage->meta_description;
        $data['meta_keywords'] = $getPage->meta_keywords;
        return view('page.about', $data);
    }
    


    public function agb()
    {
        $data['getPage'] = PageModel::getSlug('agb');
        return view('page.agb', $data);
    }
    


    public function Datenschutzerklärung()
    {
        $data['getPage'] = PageModel::getSlug('Datenschutzerklärung');
        return view('page.Datenschutzerklärung', $data);
    }

    
    public function Impressum()
    {
        $data['getPage'] = PageModel::getSlug('Impressum');
        return view('page.Impressum', $data);
    }



        
    public function Kundenumfrage()
    {
        $data['getPage'] = PageModel::getSlug('Kundenumfrage');
        return view('page.Kundenumfrage', $data);
    }

    public function Versandarten()
    {
        $data['getPage'] = PageModel::getSlug('Versandarten');
        return view('page.Versandarten', $data);
    }

    public function Widerrufsbelehrung()
    {
        $data['getPage'] = PageModel::getSlug('Widerrufsbelehrung');
        return view('page.Widerrufsbelehrung', $data);
    }

    public function ZahlungMethod()
    {
        $data['getPage'] = PageModel::getSlug('ZahlungMethod');
        return view('page.ZahlungMethod', $data);
    }








}
