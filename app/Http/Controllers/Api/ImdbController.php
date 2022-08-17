<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FindMovies;
use App\Http\Resources\RetriveAllMovies;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ImdbController extends Controller
{
    public function getAllMovies(Request $req)
    {
        if ($req->has('page')) {
            $page = $req->page;
        } else {
            $page = 1;
        }
        $client = new Client();
        $res = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?page=' . $page . '&api_key=' . env("TMBD_KEY"));
        $response = $res->getBody();
        $result = json_decode($response->getContents());
        return response([
            'page' => $result->page,
            'data' => RetriveAllMovies::collection($result->results),
        ]);
    }

    public function findMovies(Request $req, $id)
    {
        //
        $client = new Client();
        $res = $client->request('GET', 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . env("TMBD_KEY"));
        $response = $res->getBody();
        $result = json_decode($response->getContents());
        return response([
            'data' => new FindMovies($result),
        ]);
    }
}
