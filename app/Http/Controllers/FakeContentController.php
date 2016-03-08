<?php namespace App\Http\Controllers;

use App\Repositories\FakeContentRepository;
use Illuminate\Http\Request;

class FakeContentController extends Controller {

    protected $content;

    public function __construct( FakeContentRepository $content)
    {
        $this->content = $content;
    }

	/**
	 *
	 * @return array|\Illuminate\View\View|mixed
	 */
	public function index()
    {
        $lists = $this->content->all();
        $title = "List Contents";
        return view('contents.index', compact('title', 'lists'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        $title = "Create New Content";
        return view('home', compact('title'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
    public function store(Request $request)
    {
	    $this->content->create($request->all());
        return redirect(route('content.index'))->with('success_message', 'The content has been created');
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
    public function edit($id)
    {
        $title = "Edit Content";
        $content = $this->content->find($id);

        return view('contents.create_edit', compact('content', 'title'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @param Request $request
	 *
	 * @return Response
	 */
    public function update($id, Request $request)
    {
	    $content = $this->content->find($id);
	    $this->content->update($content, $request->all());
	    return redirect(route('content.index'))->with('success_message', 'The content has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $content = $this->content->find($id);
	    dd($content);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->content->find($id)->delete();
        return redirect()->back()->with('success_message', 'The content has been deleted');
    }

}