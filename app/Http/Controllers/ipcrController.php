<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\ipcr;
use Illuminate\Http\Request;

class ipcrController extends Controller
{
    public function index()
    {
    	// $ipcr = ipcr::all();

    	$user= Auth::user();
    	$ipcr=$user->ipcr;


    	return view('ipcr.index',compact('ipcr'));
    }


    public function create()
    {  
    	return view('ipcr.create');
    }

    public function show($id)
    {
    	$ipcr = ipcr::findOrFail($id);

    	$notes = $ipcr->notes;

    	return view('notes.index', compact('notes','ipcr'));

    }


    public function store(Request $request)
    {
    	$dataInput= $request->all();
    	$user= Auth::user();
    	$user->ipcr()->create($dataInput);

    	//ipcr::create($dataInput);


    	return redirect('/ipcr');
    }

    public function edit($id)
    {
    	$user= Auth::user();
    	$ipcr= $user->ipcr()->find($id);
    	//$ipcr=ipcr::where('id', $id)->first();
    	return view('ipcr.edit')->with('ipcr',$ipcr);
    }

    public function update(Request $request,$id)
    {
    	//$ipcr=ipcr::where('id', $id)->first();

    	$user= Auth::user();
    	$ipcr= $user->ipcr()->find($id);
    	$ipcr->update($request->all());

    	return redirect('/ipcr');
    }

    public function destroy($id)
     {
		// $ipcr=ipcr::where('id', $id)->first();
		$user= Auth::user();
		$ipcr= $user->ipcr()->find($id);
		$ipcr->delete();

		return redirect('/ipcr');
    }
}
