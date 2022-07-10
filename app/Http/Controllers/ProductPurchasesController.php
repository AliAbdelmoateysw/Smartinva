<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
use App\ProductPurchases;
use DB;
use Illuminate\Http\Request;
use Session;
class ProductPurchasesController extends Controller
{
    //===========================
public function test()
{
    $data= DB::table('product_purchases')
    ->rightjoin('products','products.id','product_purchases.pid') 
    ->get()
    ->toArray();  

    return view('test',compact('data'));
}


//==================================================    
 public function getAddToCart(Request $request , $id)
{
    $product= Product::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null ;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);
    $request->session()->put('cart',$cart);
    return redirect()->route('welcome');
}
        //===========================
public function Shoppingcheckout(){

    if(!Session::has('cart')){
        return view('Shopping.checkout');
    }
    $oldCart =Session::get('cart');
    $cart = new Cart($oldCart);
    return view('Shopping.checkout', ['products' => $cart->items ,'totalPrice' => $cart->totalPrice]);
  }
//==================================================
    public function index(){
        $products= Product::all();
           return view('Shopping.home',compact('products'));
        }

 public function cartReset()
 {
    Session::forget('cart');
    $products= Product::all();
    return view('Shopping.home',compact('products'));

 }
    
     public function singleProduct($id){
         $product= Product::findOrFail($id);
        return view('singleProduct',compact('product'));
     }
     
     public function checkout($id){
       $product= Product::findOrFail($id);
       return view('checkout',compact('product'));
     }
     public function newProductPurchases(Request $request )
     {
        $oldCart =Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;

         $request->validate([
             'name'=>'required',
             'address'=>'required',
             'phone'=>'required',
             'email'=>'required',
             'job'=>'required',
             'nameoncard'=>'required',
             'creditcardnumber'=>'required',
             'expiration'=>'required',
             'cvv'=>'required',           
         ]);

         //===========================================================
        foreach ($products as $producto) {
            $productpurchase = new ProductPurchases;
            $productpurchase->name = $request['name'];
            $productpurchase->address = $request['address'];
            $productpurchase->phone = $request['phone'];
            $productpurchase->email = $request['email'];
            $productpurchase->job = $request['job'];
            $productpurchase->nameoncard = $request['nameoncard'];
            $productpurchase->creditcardnumber = $request['creditcardnumber'];
            $productpurchase->expiration = $request['expiration'];
            $productpurchase->cvv = $request['cvv'];
            $productpurchase->pid = $producto['item'] ['id'];
            $productpurchase->totalprice = $producto['price'];
            $productpurchase->pquantity = $producto['qty'] ;
   
            $productpurchase->save();

            //======= Update Product Quantity in Product Table  ========
                $product= Product::findOrFail($producto['item'] ['id']);
                $product->quantity = $product->quantity - $producto['qty'] ;
                $product->save();

        } 
          Session::forget('cart');
         return redirect('/')->with('success', 'Success Purchase Order');
     }

}
