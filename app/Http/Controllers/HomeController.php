<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Document;
use App\Models\Profile;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        $articles = $this->apiAllArticle();

        return view('dashboard.home', compact('services', 'articles'));
    }

    public function majalah()
    {
        return view('dashboard.majalah');
    }

    public function dokumen()
    {
        $documents = Document::latest()->get();
        return view('dashboard.document', compact('documents'));
    }

    public function layanan()
    {
        $services = Service::latest()->get();
        return view('dashboard.layanan', compact('services'));
    }

    public function profile(Profile $profile)
    {
        return view('dashboard.profile', compact('profile'));
    }

    public function detailBerita($slug)
    {
        $articles = $this->apiAllArticle();
        $detailArticles = $this->apiDetailArticle($slug);

        return view('dashboard.detail_berita', compact('detailArticles', 'articles'));
    }

    private function apiAllArticle()
    {
        $client = new Client();
        $url = "https://berita.bonebolangokab.go.id/api/article";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return $responseBody;
    }

    private function apiDetailArticle($slug)
    {
        $client = new Client();
        $url = "https://berita.bonebolangokab.go.id/api/article/$slug";

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return $responseBody;
    }
}
