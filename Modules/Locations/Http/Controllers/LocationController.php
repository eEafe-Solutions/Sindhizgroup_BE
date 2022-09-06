<?php

namespace Modules\Locations\Http\Controllers;

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
        $this->middleware(['auth:api-system-user'])->except(['store', 'index']);
    }


    public function index()
    {


        return response()->json([
            'data' => LocationsResourceCollection::make(QueryBuilder::for(LocationManagement::class)
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
        $locationdata = $request->validated();
        // $latitude = $locationdata['latitude'];
        // $longitude = $locationdata['longitude'];
        // $address = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=YOUR_API_KEY");
        // $json_data = json_decode($address);
        // $full_address=$json_data->results[0]->formatted_address;
        $currentlocation =  LocationManagement::create($locationdata);

        return response([
            'data' => $currentlocation,
        ]);
    }
}
