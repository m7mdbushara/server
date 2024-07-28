<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Kid\StoreRequest;
use App\Http\Requests\Dashboard\Kid\UpdateRequest;
use App\Models\Kid;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;

class kidController extends Controller
{
    public function index()
    {
    //    Benchmark::dd(fn() => auth()->guard('parent')->user()->load('kids'));
        $parent = auth()->guard('parent')->user()->load('kids');

        return view('dashboard.customer.kids.index', compact('parent'));
    }
    public function create()
    {
        return view('dashboard.customer.kids.create');
    }

    public function store(StoreRequest $request)
    {
        auth()->guard('parent')->user()->kids()->create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'id_number' => $request->id_number,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'school_name' => $request->school_name,
            'level' => $request->level
        ]);

        alert()->success(__('تم أضافة أبن بنجاح'));

        return to_route('kids.index');
    }

    public function edit(Kid $kid)
    {
        return view('dashboard.customer.kids.edit', compact('kid'));
    }


    public function update(UpdateRequest $request)
    {
        auth()->guard('parent')->user()->kids()->update([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'id_number' => $request->id_number,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'school_name' => $request->school_name,
            'level' => $request->level
        ]);

        alert()->success(__('تم تعديل البيانات بنجاح'));

        return to_route('kids.index');
    }
}
