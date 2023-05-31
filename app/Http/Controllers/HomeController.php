<?php

namespace App\Http\Controllers;

use App\Models\Breakfast;
use App\Models\Cart;
use App\Models\Dinner;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Lunch;
use App\Models\Order;
use Yajra\DataTables\DataTables;  
// use DataTables;        //datatables path .
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // to view the cafe page.-------
    public function index(){
        if(Auth::id()){
            return redirect('redirects');
        }
        else
        $data= Food ::all();
        $data2 = Foodchef ::all();
        $data3 = Breakfast ::all();
        $data4 = Lunch ::all();
        $data5 = Dinner ::all();
        // dd($data2);
        return view('home', compact('data', 'data2', 'data3', 'data4', 'data5'));
    }

    // to view the page according to admin or user.-------
    public function redirects(){
        $data= Food::all();
        $data2= Foodchef::all();
        $data3 = Breakfast ::all();
        $data4 = Lunch ::all();
        $data5 = Dinner ::all();
        $usertype=Auth::user()->usertype;
        if ($usertype==1) {
            return view('admin.adminhome');     // take to the admin page  .---------
        }
        else{
            $user_id = Auth::id();
            $count = Cart::where('user_id',$user_id)->count();
            return view('home',compact('data','data2', 'data3', 'data4', 'data5', 'count'));    // take to the home page .--------
        }
    }

    public function addcart(Request $request,$id){

        if(Auth::id()){
            $user_id = Auth::id();
            $foodid = $id;             //it come from foods table in database.
            $quantity = $request->quantity;
                
                $cart = new Cart();
                $cart->user_id = $user_id;
                $cart->food_id = $foodid;
                $cart->quantity = $quantity;
                $cart->save();
                return redirect()->back();

        }

        else{
            return redirect('/login');
        }
    }

    public function showcart(Request $request,$id){
        $count = Cart::where('user_id',$id)->count();
        if(Auth::id()==$id){
        $data = DB::table('carts')
          ->select('carts.*', 'food.*')
          ->join('food', 'carts.food_id', '=', 'food.id')
          ->where('carts.user_id', '=', $id)
          ->get();

        return view('showcart', compact('count','data',));
        }
        else{
            return redirect()->back();
        }
    }

    public function remove($id){
        if(Auth::id()==$id){
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }

    public function order($id){
        $count = Cart::where('user_id',$id)->count();
        $data = Food::find($id);
        return view('order', compact('count', 'data'));
    }

    public function orderstore(Request $request){
        $data = new Order();
        $data->foodname = $request->foodname;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();
   }

   public function temp(){
    // $data = Food::all();
    return view('temp');
   }
   public function tempo(Request $request){

    if ($request->ajax()) {
        $data = User::all();
        return Datatables::of($data)
            ->addIndexColumn()
           ->addColumn('action', function ($row) {
        if ($row->usertype == '0') {
              $actionBtn = '<a href="'.url('/delete/user', $row->id).'"><button class="btn btn-danger">Delete</button></a>';
           } 
           else {
              $actionBtn = '<span class="text-dark">Not allowed</span>';
            }
              return $actionBtn;
           })

            ->rawColumns(['action'])
            ->make(true);
        }
    }
}
