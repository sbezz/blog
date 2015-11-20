<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostRequest;
use App\Post;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class PostsAdminController extends Controller
{
    //

    private $postModel;

    public function __construct(Post $postModel)
    {
        $this->postModel = $postModel;
    }

/*
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
*/

    public function index()
    {

        //$posts = App\Posts::all();

        // Exibir todos os posts
        // $posts = $this->post->all();

        // Exibir os posts com paginação (5)

        $posts = $this->postModel->paginate(5);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        //Função Create
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {

        //dd($request->all());  // Usado para exibir antes de gravar

        $post = $this->postModel->create($request->all());
        $post->tags()->sync($this->getTagsIds($request->tags));
        //dd($tags);
        return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
        $post = $this->postModel->find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(PostRequest $request, $id)
    {
        //dd($request->all());
        $this->postModel->find($id)->update($request->all());
        $post = $this->postModel->find($id);
        $post->tags()->sync($this->getTagsIds($request->tags));

        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        $this->postModel->find($id)->delete();

        return redirect()->back();
        //return redirect()->route('admin.posts.index');

    }

    private function getTagsIds($tags)
    {
        // array_filter -> Limpar os espações em branco.
        // array_map -> Criar um array com os dados separados pela virgula.

        //dd($tags);

        $tagList = array_filter(array_map('trim', explode(',', $tags)));
        $tagsIDs = [];

        foreach($tagList as $tagName)
        {
            $tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id;
        }
        //dd($tagsIDs);
        return $tagsIDs;
    }
}
