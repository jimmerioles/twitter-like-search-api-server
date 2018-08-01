<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;
use App\Http\Resources\StatusCollection;

class SearchController extends Controller
{
    /**
     * Show the tweets with the given query.
     *
     * @param  string  $q
     * @return Response
     */
    public function __invoke(Request $request)
    {
        $statuses = Status::where('text', 'like', '%' . $request['q'] . '%')
                        ->with('user')
                        ->latest()
                        ->get();

        return new StatusCollection($statuses);
    }
}
