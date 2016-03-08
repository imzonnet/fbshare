<?php namespace App\Http\Controllers;

use App\Repositories\FakeContentRepository;
use Illuminate\Http\Request;

class FakeContentController extends Controller {

    protected $content;
    protected $user;

    public function __construct( FakeContentRepository $content)
    {
        $this->content = $content;
        $this->user = current_user();
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
        $content = $this->content->first();
        $title = "Create New Content";
        return view('fakecontent.create_edit', compact('title', 'content'));
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
        return redirect(route('fake-content.create'))->with('success_message', 'The fake content has been created');
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
        $content = $this->content->first();
        return view('fakecontent.create_edit', compact('title', 'content'));
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
	    return redirect(route('fake-content.create'))->with('success_message', 'The fake content has been updated');
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

    public function shareLink($title, $code, Request $request)
    {
        $user_agent = $request->header('user-agent');
        $content = $this->content->findBy('code', $code);
        $facebook = true;
        if ( strpos($user_agent, "facebookexternalhit") !== false || strpos($user_agent, "Facebot") !== false) {
            $facebook = false;
        }
        return view('fakecontent.share', compact('content', 'facebook', 'user_agent'));
    }

}