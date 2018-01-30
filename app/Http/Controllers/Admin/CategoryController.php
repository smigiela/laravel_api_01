<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CategoryRepositoryEloquent;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Entities\Post;
use App\Entities\Category;
use Session;



class CategoryController extends Controller
{
    	/**
	 * @var CategoryRepositoryEloquent
	 */
    protected $CategoryRepository;
    
    public function __construct(CategoryRepository $CategoryRepository)
	{
		$this->CategoryRepository = $CategoryRepository;
	}

    /**
     * Display a category list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->CategoryRepository->index();
        // return Category::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $posts = Category::find($id)->Post;
        return view('admin.categories.show', compact('category', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return response()->json($category, 200);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json($category, 200);

    }
}
