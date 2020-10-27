<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $image_dir = 'images/category/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has(['name']) && $file = $request->file('image')) {
            $file_path = $this->image_dir . $file->getClientOriginalName();
            $file->move($this->image_dir, $file->getClientOriginalName());

            Category::create([
                'name' => $request->post('name'),
                'image' => $file_path,
            ]);

            $request->session()->flash('msg_success', 'Новая категория успешно добавлена!');
        }
        else {
            $request->session()->flash('msg_error', 'Ошибка! Заполните все поля.');
        }

        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if ($request->has(['name'])) {
            $category->name = $request->post('name');

            if ($file = $request->file('image')) {
                $file_path = $this->image_dir . $file->getClientOriginalName();
                $file->move($this->image_dir, $file->getClientOriginalName());

                $category->image = $file_path;
            }
            $category->save();

            $request->session()->flash('msg_success', 'Категория успешно изменена!');
        }
        else {
            $request->session()->flash('msg_else', 'Ошибка. Запоните все поля!');
        }

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        if ($category->delete()) {
            $request->session()->flash('msg_success', 'Категория успешно удалена!');
        }
        else {
            $request->session()->flash('msg_error', 'Ошибка! Обратитесь к админикстратору сайта.');
        }

        return redirect(route('category.index'));
    }
}
