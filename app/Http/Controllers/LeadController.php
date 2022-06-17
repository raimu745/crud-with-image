<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LeadController extends Controller
{
    public function show(Request $request){
        
       
        $request->validate([
            'name'=> 'required',
            'password'=> 'required|min:5',
            'file'=> 'required|mimes:png,jpeg|max:2048'
        ]);
        // return $request->input();
        // dd($request->all());
        
        $form = new Form;
        $form->name = $request->input('name');
        $form->password = $request->input('password');
        if($request->hasFile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('upload',$filename);
            $form->file = $filename;
        }
        $form->save();
        return redirect()->back()->with('msg','data inserted successfully');
    }
  
  public function data(){
      $form = Form::paginate(5);
      return view('table',compact('form'));
  }
   public function destroy($id){
       $form =Form::find($id);
       $form->delete();
       return redirect()->back()->with('msg','data deleted successfull');
   }
   public function edit($id){

       $edit =Form::find($id);
       return view('edit',compact('edit'));
   }
   public function update(Request $request,$id){
     
    $form = Form::find($id);

    $form->name = $request->input('name');
    $form->password = $request->input('password');
    if($request->hasFile('file')){
        $destination = 'upload/'.$form->file;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' .$extension;
        $file->move('upload/',$filename);
        $form->file = $filename;
    }
    $form->update();

   
    return redirect('show')->with('msg','data updated successfully');
     
   }
   public function test(){
       return view('upload');
   }
   public function imgupload(Request $request){
      return $request->file('file')->store('upload');   
   }
}
