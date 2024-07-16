<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
   
    public function index()
    {
        $records = Record::all();
        return view('records.index', compact('records'));
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'work' => 'required',
            'medicine' => 'required',
            'date' => 'required|date',
        ]);

        Record::create($validatedData);
      

        return redirect()->route('records.index')->with('info', 'Record crater successfully');
    }

    public function edit(Record $record)
    {
        return view('records.edit', compact('record'));
    }

    public function update(Request $request, Record $record)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'work' => 'required',
            'medicine' => 'required',
            'date' => 'required|date',
        ]);

        $record->update($validatedData);
        return redirect()->route('records.index')->with('info', 'Record update successfully');
    }

    public function destroy(Record $record)
    {
        $record->delete();

        return redirect()->route('records.index')->with('info', 'Record delete successfully');
    }


    public function search(Request $request)
{
    $name = $request->input('name');

    // يمكنك تغيير اسم النموذج إذا كان اسمه غير "Record"
    $records = Record::where('name', 'like', "%$name%")->get();

    return view('records.index', compact('records'));
}


}
