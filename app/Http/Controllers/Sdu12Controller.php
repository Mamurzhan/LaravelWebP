<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sdu12;
class Sdu12Controller extends Controller
{
    public function addStory(){
        return view('add-story');
    }
    public function storeStory(Request $request){
        $name = $request->name;
        $email = $request->email;
        $topic = $request->topic;
        $story = $request->story;
        $image = $request->file;
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $sdu12 = new Sdu12();
        $sdu12->name = $name;
        $sdu12->email = $email;
        $sdu12->topic = $topic;
        $sdu12->story = $story;
        $sdu12->image = $imageName;
        $sdu12->save();
        return back()->with('story_added' , 'story record has been inserted');

    }
public function users(){

    $sduies = Sdu12::all();

    return view('all-users',compact('sduies'));

}
public function users2(){

    $sduies = Sdu12::all();

    return view('home',compact('sduies'));
}public function users3(){

    $sduies = Sdu12::all();

    return view('ru',compact('sduies'));
}public function users5(){

    $sduies = Sdu12::all();

    return view('all-users',compact('sduies'));
}public function users4(){

    $sduies = Sdu12::all();

    return view('all-ru',compact('sduies'));
}
public function editUser($id){
    $sdu12 =Sdu12::find($id);
    return view('edit-user',compact('sdu12'));
}
public function updateUser(Request $request){
    $name = $request->name;
    $email = $request->email;
    $topic = $request->topic;
    $story = $request->story;
    $image = $request->file;
    $imageName = time().'.'.$image->extension();
    $image->move(public_path('images'),$imageName);

    $sdu12 = Sdu12::find($request->id);
        $sdu12->name = $name;
        $sdu12->email = $email;
        $sdu12->topic = $topic;
        $sdu12->story = $story;
        $sdu12->image = $imageName;
        $sdu12->save();
        return back()->with('user_update' , 'Story updated successfully!');
}
public function deleteUser($id){
    $sdu12 = Sdu12::find($id);
    unlink(public_path('images').'/'.$sdu12->image);
    $sdu12->delete();
    return back()->with('user_deleted','User deleted successfully!');
}
function index(){
return view('send_email');
}
function send(Request $request){
    $this->validate($request,[
        'name'     =>    'required',
        'email'    =>    'required|email',
        'message'  =>    'required'
    ]);
}
}
