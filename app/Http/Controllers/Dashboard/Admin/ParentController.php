<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\ParentChild;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        $parents = ParentChild::query()->select('id', 'parent_name', 'nationality', 'gender', 'id_number', 'id_expiration_date')->get();
        return view('dashboard.admin.parents.index', compact('parents'));
    }

    public function details(ParentChild $parent)
    {
        $parent->load('bankInformation', 'contactInformation', 'parentAddress');

        return view('dashboard.admin.parents.details', compact('parent'));
    }
}
