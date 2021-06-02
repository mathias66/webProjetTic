<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\webProjetModel;

class webProjetController extends Controller
{
    //
    
    public function index(){
         $webprojet = webProjetModel::latest()->paginate(5);
        return view('webProjetDb.index',compact('webprojet'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(){
        return view('webProjetDb.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            
            'email' => 'required',
            
            'phone' => 'required',
            
            'address' => 'required',
            
            'job' => 'required',
        ]);
        webProjetModel::create($request->all());
        return redirect()->route('home')->with('success','webProjetModel created successfully.');
    }

    public function show($id)
    {
        //
        $contact = webProjetModel::find($phone);
        return view('webProjetDb.show',compact('contact'));
    }
    public function edit($id){
        $contact = webProjetModel::find($id);
        return view('webProjetDb.edit', compact('contact'));
    }


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */

     /** */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
           'name' => 'required',
           'last_name' => 'required',
           'email' => 'required',
           'phone' => 'required',
           'address' => 'required',
           'job' => 'required',
       ]);
        $webprojetmodel = webProjetModel::find($id)->update($request->all());
        if($webprojetmodel){
            return redirect()->route('home')
            ->with('success','webProjetModel updated successfully');
        }else{
            return redirect()->back();
        }
    }
    
    public function destroy($id)
    {
        //
        $contactt = webProjetModel::find($id);
        $contactt->delete();
        return redirect()->route('home')
        ->with('success','webProjetModel deleted successfully');
    }

    public function getForm()
    {
        return view('webProjetDb.getForm');
    }
    
    public function postForm(Request $request)
    {
        return 'Le nom est ' . $request->input('nom'); 
    }
    
}
