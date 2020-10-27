<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public $image_dir = 'images/product/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name')->paginate(15);

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has(['name', 'price', 'full_desc', 'category']) && $file = $request->file('image')) {
            $file_path = $this->image_dir . $file->getClientOriginalName();
            $file->move($this->image_dir, $file->getClientOriginalName());

            $data = [
                'name' => $request->post('name'),
                'price' => $request->post('price'),
                'full_desc' => $request->post('full_desc'),
                'category_id' => $request->post('category'),
                'main_image' => $file_path,
            ];

            if ($request->post('short_desc')) {
                $data['short_desc'] = $request->post('short_desc');
            }

            Product::create($data);

            $request->session()->flash('msg_success', 'Новый товар успешно добавлен!');
        }
        else {
            $request->session()->flash('msg_error', 'Ошибка! Заполните все поля.');
        }

        return redirect(route('product.index'));
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
        $product = Product::findOrFail($id);
        $categories = Category::all();

        $data = [
            'product' => $product,
            'categories' => $categories,
        ];

        return view('admin.product.edit', $data);
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
        $product = Product::findOrFail($id);

        if ($request->has(['name', 'price', 'full_desc', 'category'])) {

            $data = [
                'name' => $request->post('name'),
                'price' => $request->post('price'),
                'full_desc' => $request->post('full_desc'),
                'category_id' => $request->post('category'),
            ];

            if ($file = $request->file('image')) {
                $file_path = $this->image_dir . $file->getClientOriginalName();
                $file->move($this->image_dir, $file->getClientOriginalName());

                $data['main_image'] = $file_path;
            }

            if ($request->post('short_desc')) {
                $data['short_desc'] = $request->post('short_desc');
            }

            $product->update($data);

            $request->session()->flash('msg_success', 'Товар успешно изменен!');
        }
        else {
            $request->session()->flash('msg_error', 'Ошибка! Заполните все поля.');
        }

        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($product->delete()) {
            $request->session()->flash('msg_success', 'Товар успешно удален!');
        }
        else {
            $request->session()->flash('msg_error', 'Ошибка! Обратитесь к админикстратору сайта.');
        }

        return redirect(route('product.index'));
    }
}
