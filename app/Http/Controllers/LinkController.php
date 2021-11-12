<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Link;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::latest()->paginate(100);

        return Inertia::render('Pages/Link/Index.vue', [
            'links' => $links
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collections = Collection::where('owner_id', auth()->id)->get();

        return Inertia::render('Pages/Link/Create.vue', [
            'collections' => $collections
        ]);
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
            'title' => 'required',
            'link' => 'required|url|max:500',
        ]);

        $data = [
            'title' => $request->title,
            'link' => $request->link,
            'collection_id' => $request->collection_id,
            'owner_id' => auth()->id,
            'description' => $request->favicon,
        ];

        if ($request->hasFile('favicon')) {
            //
        }

        $link = Link::create($data);

        return $link;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        return Inertia::render('Pages/Link/Show.vue', [
            'link' => $link
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        return Inertia::render('Pages/Link/Edit.vue', [
            'link' => $link
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required|url|max:500',
        ]);

        $data = [
            'title' => $request->title,
            'link' => $request->link,
            'collection_id' => $request->collection_id,
            'description' => $request->favicon,
        ];

        $link->update($data);

        return $link;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        return $link ? $link->delete() : null;
    }
}
