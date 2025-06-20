<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('category')->latest()->paginate(10);

        return view('pages.products.index', [
            "products" => $products,
        ]);
    }

    public function create() {
        $categories = Category::all();

        return view('pages.products.create', [
            "categories" => $categories,
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => "required|min:3",
            "description" => "nullable",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required",
            "sku" => "required",
        ], [
            "name.required" => "Product/item name must be filled in!",
            "name.min" => "3 Character Minimum!",
            "price.required" => "Price must be filled in!",
            "stock.required" => "Stock must be filled in!",
            "category_id.required" => "Category id must be filled in!",
            "sku.required" => "Code must be filled in!",
        ]);

        Product::create($validated);

        return redirect('/products')->with('success', 'Product/Item added successfully.');
    }

    public function edit($id) {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        return view('pages.products.edit', [
            "categories" => $categories,
            "product" => $product,
        ]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            "name" => "required|min:3",
            "description" => "nullable",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required",
            "sku" => "required",
        ], [
            "name.required" => "Product/item name must be filled in!",
            "name.min" => "3 Character Minimum!",
            "price.required" => "Price must be filled in!",
            "stock.required" => "Stock must be filled in!",
            "category_id.required" => "Category id must be filled in!",
            "sku.required" => "Code must be filled in!",
        ]);

        Product::where('id', $id)->update($validated);

        return redirect('/products')->with('success', 'Product/Item changed successfully.');
    }

    public function delete($id) {
        $product = Product::where('id', $id);
        $product->delete();

        return redirect('/products')->with('success', 'Product/Item deleted successfully.');
    }
}
