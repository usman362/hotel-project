<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\WebUpdate;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages.page_s.index', ['pages'=> $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.page_s.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        $request->validate([
            'title'=>'required',
            'url_slug'=> 'required',
        ]);

        $page = new Page();
        $page->title = $request->title;
        $page->url_slug = $request->url_slug;
        $page->description = $request->description;
        $page->status = $request->status;
        $page->meta_title = $request->meta_title;
        $page->meta_desc = $request->meta_desc;
        $page->meta_keywords = $request->meta_keywords;
        if($request->hasFile('head_image')){
            $head_image = $request->file('head_image');
            $filename = time() . '.' . $head_image->getClientOriginalExtension();
            $head_image->move(public_path('images'), $filename);
            $page->head_image = $filename;
        }
        $page->save();
                $update = new WebUpdate();
        $update->activity = 'New Page has been Created';
        $update->save();
        return redirect(route('page.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('pages.page_s.edit', ['page'=> $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageRequest  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, $id)
    {
        $page = Page::find($id);
        $page->title = $request->title;
        $page->url_slug = $request->url_slug;
        $page->description = $request->description;
        $page->status = $request->status;
        $page->meta_title = $request->meta_title;
        $page->meta_desc = $request->meta_desc;
        $page->meta_keywords = $request->meta_keywords;
        if($request->hasFile('head_image')){
            $head_image = $request->file('head_image');
            $filename = time() . '.' . $head_image->getClientOriginalExtension();
            $head_image->move(public_path('images'), $filename);
            $page->head_image = $filename;
        }
        $page->save();
                $update = new WebUpdate();
        $update->activity = 'Page has been Updated';
        $update->save();
        return redirect(route('page.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page, $id)
    {
        if($page->find($id)->delete()){
            return redirect(route('page.index'));
                    $update = new WebUpdate();
        $update->activity = 'Page has been Deleted';
        $update->save();
        }
        return redirect(route('page.index'));
    }
}
