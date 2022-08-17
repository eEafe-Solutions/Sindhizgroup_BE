<?php

namespace Modules\Careers\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Careers\Http\Resources\CareersResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Contracts\Routing\ResponseFactory;
use Modules\Careers\Http\Requests\CareerCreateRequest;
use Modules\Careers\Entities\Career;
use Spatie\QueryBuilder\QueryBuilder;

class CareersController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth:api-system-user'])->except([
            'store',
            'index'
        ]);
    }
    /**
     *   * @return CareersResourceCollection
     * @return ResponseFactory|Response
     */
    public function index()
    {
        return response()->json([
            'data' => CareersResourceCollection::make(QueryBuilder::for(Career::class)
                ->allowedSorts(['-name', '-email', '-position'])
                ->paginate())
        ]);
    }


    /**
     * Store a newly created resource in storage.
     * @param CareerCreateRequest $request
     * @return ResponseFactory|Response
     */
    public function store(CareerCreateRequest $request)
    {
        $data = $request->validated();


        $cvfile = $request->file('cv');

        $filename = $cvfile->hashName();
        $cvfile->move(public_path('/cvfiles'), $filename);
        $file_path = "/cvfiles/" . $filename;
        $data['cv'] =  $file_path;
        Career::create($data);

        return response([
            'data' => $data,
        ]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('careers::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
