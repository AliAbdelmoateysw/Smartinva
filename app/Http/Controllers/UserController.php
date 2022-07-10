<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserUpdate;
use Hash;
use Auth;
use DB ;
//============ Using Model ========
use App\User;
use App\Product;
use App\Supplier;
use App\Customer;
use App\ProductPurchases;


use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct(){
        $this->middleware('checkRole:user');
        $this->middleware('auth');
    }

    public function dashboard(){
        return view ('user.dashboard');
    }

//=========== Customer ===========
 
public function customers(){
    $customers = Customer::all();
    return view('user.customers',compact('customers'));
    
}
public function newCustomer()
{
    return view('user.newCustomer'); 

}
public function newCustomerPost(Request $request)
{
    $this->validate($request, [
        'name' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|string',
        'job' => 'required|string',
        ]);

    $customer =new Customer;
    $customer->name = $request['name'];
    $customer->address = $request['address'];
    $customer->phone = $request['phone'];
    $customer->email = $request['email'];
    $customer->job = $request['job'];

    $customer->save();

    return back()->with('success', "Customer Created Successfully");
}
public function editCustomer($id)
{
    $customer = Customer::findOrFail($id);
    return view('user.editCustomer',compact('customer'));
}
public function editCustomerPost(Request $request , $id)
{
    $this->validate($request, [
        'name' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|string',
        'job' => 'required|string',
        ]);
    
    $customer = Customer::findOrFail($id);
    $customer->name = $request['name'];
    $customer->address = $request['address'];
    $customer->phone = $request['phone'];
    $customer->email = $request['email'];
    $customer->job = $request['job'];
  
    $customer->save();

    return back()->with('success', "Customer Updated Successfully");
}
public function deleteCustomer($id)
{
    $customer = Customer::findOrFail($id)->delete();
    return back();
}


//=========== Supplier ===========

public function suppliers(){
    $suppliers = Supplier::all();
    return view('user.suppliers',compact('suppliers'));
    
}
public function newSupplier()
{
    return view('user.newSupplier'); 

}
public function newSupplierPost(Request $request)
{
    $this->validate($request, [
        'name' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|string',
        ]);
    $supplier =new Supplier;
    $supplier->name = $request['name'];
    $supplier->address = $request['address'];
    $supplier->phone = $request['phone'];
    $supplier->email = $request['email'];

    $supplier->save();

    return back()->with('success', "Supplier Created Successfully");
}
public function editSupplier($id)
{
    $supplier = Supplier::findOrFail($id);
    return view('user.editSupplier',compact('supplier'));
}
public function editSupplierPost(Request $request , $id)
{
    $this->validate($request, [
        'name' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|string',
        ]);
    
    $supplier = Supplier::findOrFail($id);
    $supplier->name = $request['name'];
    $supplier->address = $request['address'];
    $supplier->phone = $request['phone'];
    $supplier->email = $request['email'];

    $supplier->save();

    return back()->with('success', "Supplier Updated Successfully");
}
public function deleteSupplier($id)
{
    $supplier = Supplier::findOrFail($id)->delete();
    return back();
}

//============ Products ============
public function products(){
    $products = Product::all();
    return view('user.products',compact('products'));
    
}
public function newProduct()
{
    return view('user.newProduct'); 

}
public function newProductPost(Request $request)
{
    $this->validate($request, [
        'title' => 'required|string',
        'thumbnail' => 'required|file',
        'description' => 'required',
        'quantity' => 'required',
        'price' => 'required|regex:/^[0-9]+(\.[0-9] [0-9]?)?$/',
    ]);
    $product =new Product;
    $product->title = $request['title'];
    $product->description = $request['description'];
    $product->price = $request['price'];
    $product->quantity = $request['quantity'];  
    $thumbnail = $request->file('thumbnail');

    $fileName = $thumbnail->getClientOriginalName();
    $fileExtension = $thumbnail->getClientOriginalExtension();

    $thumbnail->move('product-images',$fileName);
    $product->thumbnail ='product-images/'.$fileName;
    $product->save();

    return back()->with('success', "Product Created Successfully");
}
public function editProduct($id)
{
    $product = Product::findOrFail($id);
    return view('user.editProduct',compact('product'));
}
public function editProductPost(Request $request , $id)
{
    $this->validate($request, [
        'title' => 'required|string',
        'thumbnail' => 'file',
        'description' => 'required',
        'quantity' => 'required',
        'price' => 'required|regex:/^[0-9]+(\.[0-9] [0-9]?)?$/',
    ]);
    
    $product = Product::findOrFail($id);
    $product->title = $request['title'];
    $product->description = $request['description'];
    $product->price = $request['price'];
    $product->quantity = $request['quantity'];
  
    if($request->hasFile('thumbnail')){

        $thumbnail = $request->file('thumbnail');
        $fileName = $thumbnail->getClientOriginalName();    
        $thumbnail->move('product-images',$fileName);
        $product->thumbnail ='product-images/'.$fileName;
    }

    $product->save();

    return back()->with('success', "Product Updated Successfully");
}
public function deleteProduct($id)
{
    $product = Product::findOrFail($id)->delete();
    return back();
}

//============ Charts ============
    public function charts(){
        
        return view('user.charts');
        
    }
   
//============ Profile ============

    public function profile(){
        
        return view('user.profile');
        
    }

    public function profilePost(UserUpdate $request)
    {
        $user= Auth::user();

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();

        if($request['password'] != ""){
            if(!(Hash::check($request['password'],Auth::user()->password))){
                return redirect()->back()->with('error', "Your current Password doesn't match with the Password you provided");
            }

            if(strcmp($request['password'], $request['new_password']) == 0 ){
                return redirect()->back()->with('error', "New Password can not be same as your current Password");
            }

            $validation = $request->validate([
                'password' => 'required',
                'new_password' => 'required |string|min:6|confirmed'
            ]);

            $user->password = bcrypt($request['new_password']);
            $user->save();
            return redirect()->back()->with('success', "Password Changed Successfully");

        }

        return back();
    }

//============ Purchases ============
    public function purchases(){
        
        $purchases= DB::table('product_purchases')
        ->join('products','products.id','product_purchases.pid') 
        ->select('product_purchases.id','product_purchases.name','product_purchases.address','product_purchases.phone','product_purchases.email','product_purchases.job','product_purchases.nameoncard','product_purchases.creditcardnumber','product_purchases.expiration','product_purchases.cvv','products.title','product_purchases.totalprice','product_purchases.pquantity')
        ->get()
        ->toArray();  
    
        return view('user.purchases',compact('purchases'));
    
    }
   

}
