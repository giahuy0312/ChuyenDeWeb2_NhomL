<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

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
        
        $user = User::find($id);
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
        $user = User::find($user->id);

        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  User $user)
    {
        $user = User::find($user->id);

        // $request->validate([
        //     'username' => 'required',
        //     'name' => 'required',
        //     'password' =>'required|min:5|max:20',
        //     'phone' =>'required',
        //     'email' => 'required'
        // ]);
    
        $user->username = $request->username;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->DOB = $request->DOB;
        $user->gender = $request->gender;
        $user->save();
    
       

        return redirect()->route('user.show', ['user' => $user->id]);

        // Passing the customer ID as a query string parameter
       
        return redirect()->route('user.show')->with('user', $user->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
