<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\product;
use App\Models\Product_rating;

class Admin_Shop_controller extends Controller
{
    
    // form functions
    
    public function brand()
    {
        return View('admin.shop.brand');
    }
    public function category()
    {
        return View('admin.shop.category');
    }
    public function product()
    {
        $catdata = Category::all();
        $brand_data = brand::all();
        return View('admin.shop.product', compact('catdata', 'brand_data'));
    }
    public function rating_review()
    {
        $rating_data = Product_rating::select("*")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_product_rating.product_id")->get();
        
        return View('admin.shop.shop_rating_view',compact('rating_data'));
    }

    public function change_rating_status($id)
    {
        $data = Product_rating::select("*")->where("rating_id",$id)->first();
        $obj = Product_rating::select("*")->where("rating_id",$id)->first();
        if($data->rating_display == "yes")
        {
            $obj->rating_display = "no";
            $obj->save();        
        }
        else
        {
            $obj->rating_display = "yes";
            $obj->save();
        }
        return redirect("/admin/shop/ratingANDreviews");
    }

    // view functions

    public function viewcategory()
    {
        $catdata = Category::all();
        return View('admin.shop.shopcategoryview',compact('catdata'));
    }
    public function viewbrand()
    {
        $brand_data = Brand::all();
        return View('admin.shop.shop_brand_view', compact('brand_data'));
    }
    public function viewproduct()
    {
        $product_data = product::select("*")->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->get();
       
        return View('admin.shop.shop_product_view', compact('product_data'));
    }
    public function viewoneproduct($id)
    {
        $singleproduct = product::select("*")->where("product_id",$id)->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->first();
        // echo $singleproduct;
       
        return View('admin.shop.shop_alldetails_product', compact('singleproduct'));
    }
    public function viewrating()
    {
        $data = Product_rating::all();
        return View('admin.shop.shop_rating_view', compact('data'));
    }



    // insert functions
    
    public function insertCategory(Request $request)
    {
        
        $result = Category::select("*")->where("cat_name",$request->txtcatname)->get();
        if(count($result)<=0)
        {
            $image = $request->txtcatimage;
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/category/'),$newname);
            //abc.jpg
    
    
            $obj = new Category();
            $obj->cat_name = $request->txtcatname;
            $obj->cat_img = $newname;
            if($obj->cat_status = $request->active=="active")
            {
                $obj->cat_status = "Active";
            }
            else
            {
                $obj->cat_status = "In Active";
            }
            $obj->save();
    
            return redirect('/admin/shop/category')->with("status","Record Inserted Successfully!");
        }
        else
        {
            return redirect('/admin/shop/category')->with("status","Category Already Exist!"); 
        }

     

    }

    public function insertBrand(Request $request)
    {
        // $name = $request->txtbrandname
        
        $result = Brand::select("*")->where("brand_name",strtolower($request->txtbrandname))->get();
        if(count($result)<=0)
        {
            $image = $request->txtbrandimage;
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/brand/'),$newname);
            
            
            $brandobj = new Brand();
            $brandobj->brand_name = $request->txtbrandname;
            $brandobj->brand_logo = $newname;
                if($brandobj->brand_status = $request->active=="active")
                {
                    $brandobj->brand_status = "Active";
                }
                else
                {
                    $brandobj->brand_status = "In Active";
                }
            $brandobj->save();
            return redirect('/admin/shop/brand')->with("status","Record inserted successfully");
        }
        else
        {
            return redirect('/admin/shop/brand')->with("message","Brand Already Exist!");   
        }
        

        
    }
    public function insertProduct(Request $request)
    {
        $result = product::select("*")->where("product_name",strtolower($request->txtprintername))->get();
        if(count($result)<=0)
        {
            $image1 = $request->txtimage1;
            $ext = $image1->extension();//jpg
            $newname1 = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image1->move(public_path('uploads/product/'),$newname1);

            if($request->hasfile("txtimage2"))
            {
                $image2 = $request->txtimage2;
            $ext = $image2->extension();//jpg
            $newname2 = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image2->move(public_path('uploads/product/'),$newname2);
            }
            

            if($request->hasfile("txtimage3"))
            {
                $image3 = $request->txtimage3;
            $ext = $image3->extension();//jpg
            $newname3 = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image3->move(public_path('uploads/product/'),$newname3);
            }
            

            if($request->hasfile("txtmanual"))
            {
                $image4 = $request->txtmanual;
            $ext = $image4->extension();//jpg
            $newname4 = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image4->move(public_path('uploads/product/manual/'),$newname4);
            }
            else
            {
                $newname4 = "Not available";
            }
            
            
            $productobj = new product();
            $productobj->cat_id = $request->txtcategory;
            $productobj->product_name = $request->txtprintername;
            $productobj->product_description = $request->txtdescription;
            $productobj->product_img1 = $newname1;
            if(!empty($newname2))
            {
                $productobj->product_img2 = $newname2;
            }
            if(!empty($newname3))
            {
                $productobj->product_img3 = $newname3;
            }
            
            
            $productobj->product_video_url = $request->txtvideo;
            $productobj->product_retail_price = $request->txtrprice;
            $productobj->product_sales_price = $request->txtsprice;
            $productobj->brand_id = $request->txtbrand;
            $productobj->product_manual = $newname4;
            $productobj->product_specification = $request->txtspecs;
            if($productobj->product_status = $request->active=="active")
            {
                $productobj->product_status = "Active";
            }
            else
            {
                $productobj->product_status = "In Active";
            }
            
            
            $productobj->save();
            // echo "hello";

            return redirect('/admin/shop/product')->with("status","Record inserted successfully");
        }
        else
        {
            return redirect('/admin/shop/product')->with("status","Record already Exist ! ");
        }
        
        
    }
    
    
    public function rating(Request $request)
    {
        $ratingobj = new rating();
        $ratingobj->product_id="101";
        $ratingobj->rating=$request->txtrating;
        $ratingobj->review_text->txtrating;
        $ratingobj->review_text->txtreview;
        $ratingobj->review_text->image1;
        $ratingobj->review_text->rating_date;
        $ratingobj->review_text="202";

    }


    // change status functions

    public function change_status_category(Request $request,$id)
    {
            $data = Category::select("*")->where("cat_id",$id)->first();
            $obj = Category::select("*")->where("cat_id",$id)->first();
            if($data->cat_status == "Active")
            {
                $obj->cat_status="Block";
            product::where("cat_id",$id)->update(['product_status' => 'Block']);
              
            }
            else
            {
                $obj->cat_status="Active";
            product::where("cat_id",$id)->update(['product_status' => 'Active']);
                
            }
            
            $obj->save();
            
            return redirect("/admin/shop/category/view"); 
    }
    public function change_status_brand(Request $request,$id)
    {
        $data = Brand::select("*")->where("brand_id",$id)->first();
        $obj = Brand::select("*")->where("brand_id",$id)->first();
        if($data->brand_status == "Active")
        {
            $obj->brand_status="Block";
            product::where("brand_id",$id)->update(['product_status' => 'Block']);
        }
        else
        {
            $obj->brand_status="Active";
            product::where("brand_id",$id)->update(['product_status' => 'Active']);
        }
        $obj->save();
        return redirect("/admin/shop/brand/view");
    }
    public function change_status_product(Request $request,$id)
    {
        $data = product::select("*")->where("product_id",$id)->first();
        $obj = product::select("*")->where("product_id",$id)->first();
        if($data->product_status == "Active")
        {
            $obj->product_status="Block";
        }
        else
        {
            $obj->product_status="Active";
        }
        $obj->save();
        return redirect("/admin/shop/product/view");
    }

    


    // update functions
    public function updateBrand($id)
    {
        //echo $id;
        $singlebrand = Brand::where("brand_id",$id)->get();
        $catdata = Category::all();
        $brand_data = brand::all();
        return View("admin.shop.updateBrand",compact('singlebrand'));
    }
    public function savebrand(Request $request)
    {
        $id =  $request->txtbrandid;
        $oldimage = $request->txtoldimage;

        if($request->hasFile("txtbrandimage"))
        {
            unlink(public_path()."/uploads/brand/".$oldimage);
            $image = $request->txtbrandimage;
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/brand/'),$newname);
        }
        else
        {
            $newname=$oldimage;
        }
        
        $brandobj = Brand::where("brand_id",$id)->first();
        $brandobj->brand_name = $request->txtbrandname;
        $brandobj->brand_logo = $newname;
        $brandobj->save();
        

        return redirect('/admin/shop/brand/view')->with("status","Record Updated successfully");

    }
    public function updateCategory($id)  // update category page
    {
        $singlerow = Category::where("cat_id",$id)->get();
        return View("admin.shop.updatecategory", compact("singlerow"));
    }
    public function saveCategory(Request $request)
    {
        $id =  $request->txtcategoryid;
        $oldimage = $request->txtoldimage;

        if($request->hasFile("txtcategoryimage"))
        {
            unlink(public_path()."/uploads/category/".$oldimage);
            $image = $request->txtcategoryimage;
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/category/'),$newname);
        }
        else
        {
            $newname=$oldimage;
        }
        
        $catobj = Category::where("cat_id",$id)->first();
        $catobj->cat_name = $request->txtcategoryname;
        $catobj->cat_img = $newname;
        $catobj->save();
        

        return redirect('/admin/shop/category/view')->with("status","Record Updated successfully");
    }
    public function updateProduct($id)
    {
        $singleproduct = product::where("product_id",$id)->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->get();
        $cat_data = Category::all();
        $brand_data = brand::all();
        return View("admin.shop.updateproduct", compact("singleproduct", "cat_data", "brand_data"));
    }
    public function saveProduct(Request $request)
    {
        //echo $request->active;
        $id = $request->txtproductid;
        $oldimg1 = $request->txtimg1;
        $oldimg2 = $request->txtimg2;
        $oldimg3 = $request->txtimg3;
        $oldmanual = $request->txtmanual;
        if($request->hasfile("txtimage1"))
        {
            unlink(public_path()."/uploads/product/".$oldimg1);
            $image = $request->txtimage1;
            $ext = $image->extension();//jpg
            $newname1 = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/product/'),$newname1);
        }
        else
        {
            $newname1=$oldimg1;
        }
        if($request->hasfile("txtimage2"))
        {
            unlink(public_path()."/uploads/product/".$oldimg2);
            $image = $request->txtimage2;
            $ext = $image->extension();//jpg
            $newname2 = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/product/'),$newname2);
        }
        else
        {
            $newname2=$oldimg2;
        }
        if($request->hasfile("txtimage3"))
        {
            unlink(public_path()."/uploads/product/".$oldimg3);
            $image = $request->txtimage3;
            $ext = $image->extension();//jpg
            $newname3 = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/product/'),$newname3);
        }
        else
        {
            $newname3=$oldimg3;
        }
        if($request->hasfile("txtmanual"))
        {
            unlink(public_path()."/uploads/product/".$oldmanual);
            $image = $request->txtmanual;
            $ext = $image->extension();//jpg
            $newname4 = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/product/'),$newname4);
        }
        else
        {
            $newname4=$oldmanual;
        }
        $productobj = product::where("product_id",$id)->first();
        $productobj->cat_id = $request->txtcategory;
        $productobj->product_name = $request->txtprintername;
        $productobj->product_description = $request->txtdescription;
        $productobj->product_video_url = $request->txtvideo;
        $productobj->product_retail_price = $request->txtrprice;
        $productobj->product_sales_price = $request->txtsprice;
        $productobj->brand_id = $request->txtbrand;
        $productobj->product_specification = $request->txtspecs;
        $productobj->product_img1 = $newname1;
        $productobj->product_img2 = $newname2;
        $productobj->product_img3 = $newname3;
        $productobj->product_manual = $newname4;
        if($productobj->product_status = $request->active=="active")
        {
            $productobj->product_status = "Active";
        }
        else
        {
            $productobj->product_status = "In Active";
        }
        
        $productobj->save();
        

        return redirect('/admin/shop/product/view')->with("status","Record Updated successfully");
    }
}
