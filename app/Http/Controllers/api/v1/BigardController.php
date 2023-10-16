<?php

namespace App\Http\Controllers\api\v1;

use App\Filters\V1\BigårdFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\BigårdCollection;
use App\Http\Resources\V1\BigårdResource;
use App\Models\Bigård;
use Illuminate\Http\Request;

class BigardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new BigårdFilter();
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            return new BigårdCollection(Bigård::paginate());
        } else {
            $bigårder = Bigård::where($queryItems)->paginate();

            return new BigårdCollection($bigårder->appends($request->query()));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bigård = Bigård::find($id);

        if ($bigård) {
            return new BigårdResource($bigård);
        }

        return new BigårdResource(Bigård::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}