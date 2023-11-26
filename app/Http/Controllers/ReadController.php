<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function read(){

        $data = Users::all();
        return view('read', compact('data'));
    }

    public function delete($id) {
    $data = Users::find($id);
    $data->delete();
    return redirect()->back();
    }

    public function search(Request $request){
        $search = $request->search;
        $data = Users::where('name', 'ilike', '%'.$search.'%')->orWhere('email', 'ilike', '%'.$search.'%')->get();

        return view('read', compact('data'));
    }

    public function updatedata($id) {
        $data = Users::find($id);

        return view('update', compact('data'));
        }

        public function update(Request $request, $id)
        {
            // Validate the form data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'new_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming image upload
            ]);

            // Find the user by ID
            $user = Users::findOrFail($id);

            // Update user data
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->address = $validatedData['address'];
            $user->phone = $validatedData['phone'];

            // Handle image upload if a new image is provided
            if ($request->hasFile('new_image')) {
                $image = $request->file('new_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('userimg'), $imageName);
                $user->image = $imageName;
            }

            // Save the updated user data
            $user->save();

            // Redirect back or to a specific route after updating
            return redirect()->back()->with('success', 'User updated successfully');
        }
}
