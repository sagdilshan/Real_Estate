<?php

namespace App\Http\Controllers;

use App\Models\OwenerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $allowners = OwenerModel::where('deleted', 'no')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website-pages.admin.admin-dashboard', compact('allowners'));

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

    public function EditOwner($id)
    { {
            $owner = OwenerModel::findOrFail($id);
            return view('website-pages.admin.edit-owner', compact('owner'));
        }
    }

    public function UpdateOwner(Request $request)
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
        $oid = $request->id;
        $owener = OwenerModel::findOrFail($oid);

        $owener->owner_name = $validatedData['owner_name'];
        $owener->mobile = $validatedData['mobile'];
        $owener->date_l_s = $validatedData['date_l_s'];
        $owener->area = $validatedData['area'];
        $owener->price = $validatedData['price'];
        $owener->type = $validatedData['type'];
        $owener->bedroom = $validatedData['bedroom'];
        $owener->bathroom = $validatedData['bathroom'];
        $owener->ac = $validatedData['ac'];
        $owener->floor = $validatedData['floor'];
        $owener->lift = $validatedData['lift'];
        $owener->pet_freindly = $validatedData['pet_freindly'];
        $owener->street = $validatedData['street'];
        $owener->fake_street = $validatedData['fake_street'];
        $owener->date_available = $validatedData['date_available'];
        $owener->comment = $validatedData['comment'];
        $owener->page_links = $validatedData['page_links'];
        $owener->updated_by = Auth::user()->id;

        $owener->save();
        // Save the changes to the database


        //Redirect back with a success message
        $notification = array(
            'message' => 'Owner Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.dashboard')->with($notification);
    }


    public function RemoveOwner($id)
    {
        $owner = OwenerModel::find($id);

        if ($owner) {
            $owner->update([
                'deleted' => 'yes',
                'deleted_by' => Auth::user()->id, // Set the user who deleted the record
                'deleted_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Owner Details Removed',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }


}
