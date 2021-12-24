<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class AdminController extends Controller
{
    public function upload_product()
    {
        return view('admin.admin_upload_product');
    }

    public function uploading_product(Request $request)
    {
        $inputted_data = new products;

        $inputted_data->name = $request->name;
        $inputted_data->price = $request->price;
        $inputted_data->description = $request->description;
        $inputted_data->quantity = $request->quantity;

        $image = $request->product_image;
        $image_name = date("d-m-y h:i:s") . '-[ ' . ($_FILES['product_image']['name']) . ' ]';
        $request->product_image->move('uploaded_product_image', $image_name);
        $inputted_data->image = $image_name;
        
        $inputted_data->save();
        return redirect()->back()->with('alert', 'Product Successfully Added');
    }
}
