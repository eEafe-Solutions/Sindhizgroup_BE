<?php

namespace Modules\Contacts\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Contacts\Http\Requests\ContactAddRequest;
use Modules\Contacts\Http\Resources\ContactsResourceCollection;
use Modules\Contacts\Entities\Contact;
use Spatie\QueryBuilder\QueryBuilder;

class ContactsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:api-system-user'])->except([
            'store',
            'index'
        ]);
    }

    public function index()
    {
        return response()->json([
            'data' => ContactsResourceCollection::make(QueryBuilder::for(Contact::class)
                ->allowedSorts(['-name', '-email', '-massage'])
                ->paginate())
        ]);
    }


    /**
     * Store a newly created resource in storage.
     * @param ContactAddRequest $request
     * @return ResponseFactory|Response
     */
    public function store(ContactAddRequest $request)
    {
        $contactdata = $request->validated();
        Contact::create($contactdata);
        return response([
            'data' => $contactdata,
        ]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('contacts::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('contacts::edit');
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