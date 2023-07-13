<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request('search');
        if ($search) {
            $cashier = User::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })
                ->orderBy('name')
                ->where('id', '!=', '1')
                ->paginate(20)
                ->withQueryString();
        } else {
            $cashier = User::where('id', '!=', '1')
                ->orderBy('name')
                ->paginate(10);
        }
        // dd($cashiers);
        return view('cashier.index', compact('cashier'));
    }

    public function makeadmin(User $cashier)
    {
        $cashier->timestamps = false;
        $cashier->is_admin   = true;
        $cashier->save();
        return back()->with('success', 'Make admin successfully!');
    }

    public function removeadmin(User $cashier)
    {
        if ($cashier->id != 1) {
            $cashier->timestamps = false;
            $cashier->is_admin   = false;
            $cashier->save();
            return back()->with('success', 'Remove admin successfully!');
        } else {
            return redirect()->route('cashier.index');
        }
    }
    public function destroy(User $cashier)
    {
        if ($cashier->id != 1) {
            $cashier->delete();
            return back()->with('success', 'Delete user successfully!');
        } else {
            return redirect()->route('cashier.index')->with('danger', 'Delete user failed!');
        }
    }
}