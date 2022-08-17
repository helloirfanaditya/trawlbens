<?php

namespace App\Http\Controllers;

use App\Models\Candidaterable;

class CandidateController extends Controller
{

    public function index()
    {
        $candidaterable = Candidaterable::with('candidaterable')->get();
        return response([
            'code' => 200,
            'message' => 'Success',
            'data' => $candidaterable,
        ]);
    }
}
