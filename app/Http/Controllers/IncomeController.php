<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\income;

class IncomeController extends Controller
{
    public function create()
    {
        return view('Income.create');
    }
    public function store(Request $request)
    {
        $request->validate([
          'Enter source of Income|alpha' => 'required',
          'Enter Amount|numeric' => 'required',
          'Enter Month|alpha' => 'required',
        ]);

        // Income::create($request->all());

        return redirect()->back()->with(['message' => 'Success']);
        
    }
    public function list()
    {
        // $Income = income::paginate(10);
        return view('Income.list');
        // return view('Income.list', compact('Income'));
    }
    public function edit(Request $request)
    {
        $Income = income::find($request->id);
        return view('Income.edit', compact('product'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'Enter source of Income|alpha' => 'required',
            'Enter Amount|numeric' => 'required',
            'Enter Month|alpha' => 'required',
          ]);

          $Income = income::find($request->id)->update($request->all());
          return redirect()->back()->with(['message' => 'Update Success']);
    }
    public function delete(Request $request)
    {
        $Income = income::find($request->id)->delete();
        return redirect()->route('Income.list');
    }
}
