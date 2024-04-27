<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Perdoruesi;
 
class PerdoruesiController extends Controller
{
    public function index()
    {
        $perdoruesit = Perdoruesi::all();
        return view ('perdoruesit.index')->with('perdoruesit', $perdoruesit);
    }
 
    
    public function create()
    {
        return view('perdoruesit.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Perdoruesi::create($input);
        return redirect('perdoruesi')->with('flash_message', 'Perdoruesi u Shtua!');  
    }
 
    
    public function show($id)
    {
        $perdoruesi = Perdoruesi::find($id);
        return view('perdoruesit.show')->with('perdoruesit', $perdoruesi);
    }
 
    
    public function edit($id)
    {
        $perdoruesi = Perdoruesi::find($id);
        return view('perdoruesit.edit')->with('perdoruesit', $perdoruesi);
    }
 
  
    public function update(Request $request, $id)
    {
        $perdoruesi = Perdoruesi::find($id);
        $input = $request->all();
        $perdoruesi->update($input);
        return redirect('perdoruesi')->with('flash_message', 'Perdoruesi u Modifikua!');  
    }
 
   
    public function destroy($id)
    {
        Perdoruesi::destroy($id);
        return redirect('perdoruesi')->with('flash_message', 'Perdoruesi u Fshi!');  
    }
}