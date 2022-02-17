<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::latest()->paginate(16);

        return Inertia::render('Pages/Collection/Index.vue', [
            'collections' => $collections,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Pages/Collection/Create.vue');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
        ]);

        $shortLink = uniqid('_');

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name) . $shortLink,
            'owner_id' => auth()->id,
            'short_link' => $shortLink,
        ];

        return Collection::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        return Inertia::render('Pages/Collection/Show.vue', [
            'collection' => $collection,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        return Inertia::render('Pages/Collection/Edit.vue', [
            'collection' => $collection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name) . uniqid('_'),
        ];

        $collection->update($data);
        return $collection;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        $collection ?? $collection->destroy;

        // return Inertia::render('Pages/Collection/Index.vue');
        return $collection;
    }

    public function collectionWiseLinks(Collection $collection){
        return inertia('Frontend/Links', [
            'collection' => $collection,
            'links' => $collection->links,
        ]);
    }
}
