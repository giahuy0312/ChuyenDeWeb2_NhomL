<?php


namespace App\Http\Controllers;
session_start();
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

    }
    public function listUser(){
        $users = DB::table('users')->paginate(5);
        return view('admin.content.listUser', ['users' => $users]);
    }
    public function searchUser(Request $request) {
        $search = $request->search;
                $users = User::where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->paginate(5);
    
        return view('admin.content.listSearchUser', ['users' => $users]);
    }
    
    // delete userAd
    public function deleteUserAD($id){
        $deleteData = DB::table('users')->where('id', '=', $id)->delete();
        return redirect('listUser');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $user = User::find($_SESSION['userID']);
         if (!$user) {
             abort(404);
        }
        return view('user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = User::find($_SESSION['userID']);
        if (!$user) {
            abort(404);
        }
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  User $user)
    {
        $user = User::find($_SESSION['userID']);
      
        $request->validate([
            'username' => 'required|min:5|max:10',
            'name' => 'required|min:5|max:10',
            'phone' => 'required|max:10',
            'email' => 'required',
        ]);
     
        $user->username = ($request-> username);
        $user->name = ($request->name);
        $user->phone = ($request->phone);
        $user->email = ($request->email);
        $user->DOB = ($request->DOB);
        $user->gender = ($request->gender);
        $user->save();
        return redirect()->route('user.show', ['user' => $user->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
