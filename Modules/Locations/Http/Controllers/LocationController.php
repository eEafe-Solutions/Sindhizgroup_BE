<?php

namespace Modules\Locations\Http\Controllers;


use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Locations\Entities\LocationManagement;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Response;
use Illuminate\Contracts\Routing\ResponseFactory;
use Modules\Locations\Http\Requests\AddLocationRequest;
use Modules\Locations\Http\Resources\LocationsResourceCollection;

class LocationController extends Controller
{

    public function __construct()
    {
        // $this->middleware(['auth:api']);
    }


    public function index()
    {


        return response()->json([
            'data' => LocationsResourceCollection::make(QueryBuilder::for(LocationManagement::with('user'))
                ->allowedFilters(['current_location'])
                ->allowedSorts(['current_location'])
                ->paginate())
        ]);
    }


    /**
     * Store a newly created resource in storage.
     * @param AddLocationRequest $request
     * @return ResponseFactory|Response
     */
    public function store(AddLocationRequest $request)
    {
        
        $user = Auth::user();

        $locationdata = $request->validated();
        $location = new LocationManagement();

        $location->longitude =   $locationdata['longitude'];
        $location->latitude =   $locationdata['latitude'];
        $location->address =   $locationdata['address'];
        $location->user_id = $user->id;
        $location->save();

        
        return response([
            'data' => $location,
        ]);
    }
}
