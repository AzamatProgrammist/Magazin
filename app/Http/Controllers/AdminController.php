<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Order;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.users", ["data" => $data]);
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id)
    {

        $data = food::find($id);

        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request , $id)
    {
        $data = food::find($id);

        $image = $request->img;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $image->move('foodimage', $imagename);

        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();

    }

    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu", compact("data"));
    }

     public function upload(Request $request)
    {
        
        $data = new food;
        
        $image = $request->img;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $image->move('foodimage', $imagename);

        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }

     public function reservation(Request $request)
    {
        
        $data = new reservation;

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

    public function viewreservation()
    {
        $id = Auth::id();
        $usertype = user::find($id);

        if ($usertype->usertype == '1') {
         
        $data = reservation::all();

        return view('admin.adminreservation', compact('data'));   
        }else
        {
            return redirect('redirects');
        }
    }


    public function viewchef()
    {
        $data = foodchef::all();
        return view("admin.adminchef", compact("data"));
    }


    public function uploadchef(Request $request)
    {
        $data = new Foodchef;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $image->move('chefimage', $imagename);

        $data->image=$imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        
        $data->save();
        return redirect()->back();
    }

    public function updatechef($id)
    {
        $data = foodchef::find($id);

        return view("admin.updatechef", compact("data"));
    }



     public function updatefoodchef(Request $request , $id)
    {
        $data = foodchef::find($id);

        $image = $request->image;
if ($image) {
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $image->move('chefimage', $imagename);

        $data->image=$imagename;
}
        
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();

    }


public function deletechef($id)
{


    $data = foodchef::find($id);
    $data->delete();
    return redirect()->back();

}


public function orders()

{
    $data = order::all();

    return view("admin.orders", compact('data'));
}



public function search(Request $request)

{
    $search = $request->search;
    $data = order::where('name', 'like', '%'.$search.'%')->orWhere('foodname', 'like', '%'.$search.'%')->get();
    return view('admin.orders', compact('data'));
}



}
