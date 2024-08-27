<?php

namespace App\Http\Controllers;

use App\Models\OwenerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('website-pages.admin.admin-dashboard');

    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function AddOwner()
    {
        return view('website-pages.admin.add-owner');

    }

    public function AdminStoreOwners(Request $request)
    {
        $validatedData = $request->validate([
            'owner_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'date_l_s' => 'required',
            'area' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'type' => 'required|string|max:50',
            'bedroom' => 'required|integer|min:0',
            'bathroom' => 'required|integer|min:0',
            'ac' => 'required|string|max:10',
            'floor' => 'required|integer|min:0',
            'lift' => 'required|string|max:10',
            'pet_freindly' => 'required|string|max:10',
            'street' => 'required|string|max:255',
            'fake_street' => 'nullable|string|max:255',
            'date_available' => 'required',
            'comment' => 'nullable|string|max:1000',
            'page_links' => 'nullable|max:255',

        ]);

        $owners = new OwenerModel();
        $owners->owner_name = $validatedData['owner_name'];
        $owners->mobile = $validatedData['mobile'];
        $owners->date_l_s = $validatedData['date_l_s'];
        $owners->area = $validatedData['area'];
        $owners->price = $validatedData['price'];
        $owners->type = $validatedData['type'];
        $owners->bedroom = $validatedData['bedroom'];
        $owners->bathroom = $validatedData['bathroom'];
        $owners->ac = $validatedData['ac'];
        $owners->floor = $validatedData['floor'];
        $owners->lift = $validatedData['lift'];
        $owners->pet_freindly = $validatedData['pet_freindly'];
        $owners->street = $validatedData['street'];
        $owners->fake_street = $validatedData['fake_street'];
        $owners->date_available = $validatedData['date_available'];
        $owners->comment = $validatedData['comment'];
        $owners->page_links = $validatedData['page_links'];
        $owners->created_by = Auth::user()->id;


        $owners->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Owners Added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.dashboard')->with($notification);
    }

}
