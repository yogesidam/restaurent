<?php

namespace App\Http\Controllers;

use App\Models\Breakfast;
use App\Models\Dinner;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Lunch;
use App\Models\Order;
use App\Models\Reservation;
use Yajra\DataTables\DataTables;  
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user(){
        if(Auth::id()){   //find the user is login or not if login take to if condition ifnot takes to else condition.
        $data=User::all();
        return view('admin.user',compact('data'));
        }
        else{
            return redirect('login');
        }
    }

    // public function tempo(Request $request){

    //     if ($request->ajax()) {
    //         $data = User::all();
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //            ->addColumn('action', function ($row) {
    //         if ($row->usertype == '0') {
    //               $actionBtn = '<a href="'.url('/delete/user', $row->id).'"><button class="btn btn-danger">Delete</button></a>';
    //            } 
    //            else {
    //               $actionBtn = '<span style="color: black;font-weidth:bold">Not allowed</span>';
    //             }
    //               return $actionBtn;
    //            })
    
    //             ->rawColumns(['action'])
    //             ->make(true);
    //         }
    //     }

    // for delete any user.-----
    public function deleteuser($id){
            $data=User::find($id);
            $data->delete();
            return redirect()->back();     // after being submit get back to previous page .

    }

    // to view the food menu .------
    public function foodmenu(){
        if(Auth::id()){
        $data=Food::all();
        return view('admin.foodmenu',compact('data'));
        }
        else{
            return redirect('login');
        }

    }

    // to store the food menu .------
    public function upload(Request $request){
        $data=new Food();
        $data->title=$request->title;
        $data->price=$request->price;

        if($request->has('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('FoodImages',$filename);
            $data->image = $filename;
        }

        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    // to delete any unnecessary item from foodmenu.---------
    public function deletemenu($id){
        $data=Food ::find($id);
        $data->delete();
        return redirect()->back();

    }

    // to view the updatemenu page to make any changes in foodmenu.---------
    public function updatemenu($id){
        $data=Food ::find($id);
        // dd($data);
        return view('admin.updateview', compact('data'));

    }

    // to store the updated foodmenu which corrently get change.-------
    public function update(Request $request,$id){
        $data=Food ::find($id);
        $data->title=$request->title;
        $data->price=$request->price;

        if($request->has('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('FoodImages',$filename);
            $data->image = $filename;
        }

        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
//   To make Resercation for customer .
    public function reservation(Request $request){
        $data = new Reservation();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
    }
// So admin can view the costumer which make a reservation.
    public function viewreservation(){
        if(Auth::id()){
        $data = Reservation ::all();
        return view('admin.adminreservation', compact('data'));
        }
        else{
            return redirect('login');
        }
    }
// Admin can see those chef data that are in the home page.
    public function viewchef(){
        if(Auth::id()){
        $data = Foodchef ::all();
        return view('admin.adminchef', compact('data'));
        }
        else{
            return redirect('login');
        }
    }
// To store food chef data in database.
    public function uploadchef(Request $request){
        $data =new Foodchef();
        $data->name=$request->name;
        $data->speciality=$request->speciality;

        if($request->has('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('ChefImages',$filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->back();
    }
// To change the chef data present in main file.
    public function updatechef($id){
        $data = Foodchef ::find($id);
        return view('admin.updatechef', compact('data'));

    }
// To store new uploaded chef data.
    public function updatefoodchef(Request $request,$id){
        $data = Foodchef ::find($id);
        $data->name=$request->name;
        $data->speciality=$request->speciality;

        if($request->has('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('ChefImages',$filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->back();
    }
// admin can delete the chef .
    public function deletechef($id){
        $data = Foodchef ::find($id);
        $data->delete();
        return redirect()->back();

    }
// Admin can view what coustemer has order and the customer data.
    public function orders(){
        if(Auth::id()){
        $data = Order::all();
        return view('admin.orders', compact('data'));
        }
        else{
            return redirect('login');
        }
    }
// Admin can filter the order data to find the specific coustemer.
    public function search(Request $request){
        $search = $request->search;
        $data = Order::where('name','Like','%'.$search.'%')->orwhere('foodname','Like','%'.$search.'%')->get();
        return view('admin.orders', compact('data'));
    }
    
    public function breakfast(){
        $data = Breakfast::all();
        return view('admin.breakfast', compact('data'));
    }
    
    public function breakfaststore(Request $request){
        $data = new Breakfast();
        $data->title=$request->title;
        $data->price=$request->price;

        if($request->has('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('SpecialFoodImages',$filename);
            $data->image = $filename;
        }

        $data->description=$request->description;
        $data->save();
        return redirect()->back();    
    }

    public function lunch(){
        $data = Lunch::all();
        return view('admin.lunch', compact('data'));
    }

    public function lunchstore(Request $request){
        $data = new Lunch();
        $data->title=$request->title;
        $data->price=$request->price;

        if($request->has('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('SpecialFoodImages',$filename);
            $data->image = $filename;
        }

        $data->description=$request->description;
        $data->save();
        return redirect()->back();    
    }

    public function dinner(){
        $data = Dinner::all();
        return view('admin.dinner', compact('data'));
    }

    public function dinnerstore(Request $request){
        $data = new Dinner();
        $data->title=$request->title;
        $data->price=$request->price;

        if($request->has('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('SpecialFoodImages',$filename);
            $data->image = $filename;
        }

        $data->description=$request->description;
        $data->save();
        return redirect()->back();    
    }

}
