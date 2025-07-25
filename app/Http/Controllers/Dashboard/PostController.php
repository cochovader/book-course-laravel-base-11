<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Post\PutRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        //dd($posts);
        return view('dashboard.post.index', compact('posts'));
        //$category = Category::get();
        //dd($category);
        //$category = Category::find(1);
        //dd($category->Posts);
        // Post::create(
        //     [
        //         'title' => 'test Ivan',
        //         'slug' => 'test Briones',
        //         'numero' => 'test numero',
        //         'adress' => 'test adress',
        //         'category_id' => 1, 
        //         'description' => 'test description',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //         'posted' => 'yes',
        //     ]
        // );

        // Post::create(
        //     [
        //         'title' => 'test Ivan',
        //         'slug' => 'test Briones',
        //         'numero' => 'test numero',
        //         'adress' => 'test adress',
        //         'category_id' => 1, 
        //         'description' => 'test description',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //         'posted' => 'yes',
        //     ]
        // );

        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categories = Category::get();
        //dd($categories);
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

       Post::create($request->validated()); 
       //Post::create($request->all());
       return to_route('post.index');

       
        
        // $validated = Validator::make($request->all(),
        // [
        //     'title' => 'required',
        //     'slug' => 'required',
        //     'numero' => 'required||min:1',
        //     'adress' => 'required|min:5',
        //     'category_id' => 'required',
        //     'description' => 'required|min:5',
        //     'content' => 'required|min:3',
        //     'image' => 'required|min:5',
        //     'posted' => 'required',
        // ]
        // );

        //dd($validated -> fails());

        // $request->validate([
        //     'title' => 'required|min:5|min:255',
        //     'slug' => 'required|min:5|min:255',
        //     'numero' => 'required|integer|min:1|min:10',
        //     'adress' => 'required|min:5|min:255',
        //     'category_id' => 'required',
        //     'description' => 'required|min:5|min:255',
        //     'content' => 'required|min:7',
        //     'image' => 'required|min:5|min:255',
        //     'posted' => 'required',
        // ]);
        
         //dd(request()->get('title')); //una forma 
         //dd($request -> all());//dato por dato ['title']);
        
        //  post::create(
        //       [
        //           'title' => $request->all()['title'],
        //           'slug' => $request->all()['slug'],   
        //           'numero' => $request->all()['numero'],
        //           'adress' => $request->all()['adress'],  
        //           'category_id' => $request->all()['category_id'], 
        //           'description' => $request->all()['description'],  
        //           'content' => $request->all()['content'],
        //           'image' => $request->all()['image'],
        //           'posted' => $request->all()['posted'],  
        //       ]   
        //  );

        

     }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
       // return view('dashboard.post.show', compact('post'));
       //$post = Post::findOrFail($request->validated()); // busca el post por ID o lanza 404
       return view('dashboard.post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post) :View
    {
        $categories = Category::pluck( 'title' , 'id');
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();
        if(isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'),$filename);
        }
        
        // $post->update($request->validated()); Esto regresa la foto a la ruta temporal, por eso no funciona
        $post->update($data);
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index');
    }
}
