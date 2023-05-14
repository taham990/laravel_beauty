<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\models\Example;
use Illuminate\Support\Facades\Storage;
use App\Models\Time;

class cosmeticmanajment extends Controller
{
    public function addExample(Request $request)
    {
        $validatedData = request()->validate([
            'Name' => 'required' ,
            'Type' => 'required' ,
            'Description' => 'required' ,
            'file' => 'required' ,
        ] , [
            'Name.required' => 'نام عکس را به دلخواه وارد کنید' ,
            'Type.required' => 'دسته بندی را انتخاب کنید' ,
            'Description.required' => 'لطفا توضیحات را وارد کنید' ,
            'file.required' => 'عکس مورد نظر را وارد کنید' ,
            'file.mimes' => 'نوع پسوند عکس مجاز نیست' ,
            // 'file.max' => 'سایز عکس حداکثر 5 مگابایت' ,

        ]);
        // $path = $request->file('file')->store('public');

        // // Create a new CosmeticManajment instance and set its properties
        // $cosmeticManajment = new CosmeticManajment();
        // $cosmeticManajment->Name = $validated['Name'];
        // $cosmeticManajment->Type = $validated['Type'];
        // $cosmeticManajment->Description = $validated['Description'];
        // $cosmeticManajment->file = $path;
    
        // // Save the instance to the database
        // $cosmeticManajment->save();


        $filename = $request->file('file')->getClientOriginalName();
        // $request->file('file')->store('public/img/portfolio' , $filename);
        $request->file->move(public_path('img\portfolio'), $filename);
        // $imageUrl = Storage::url($imagePath);



        $insert = new Example;
        $insert->Name = $request->Name;
        $insert->Type = $request->Name;
        $insert->Path = $filename;
        $insert->Description = $request->Name;
        $witch = $request->Type;

        switch($witch)
        {
            case 'hair':
                $insert->Type = 'hair'; 
                break;
            case 'nail':
                $insert->Type = 'nail'; 
                break;
            case 'body':
                $insert->Type = 'body'; 
                break;
            case 'tattoo':
                $insert->Type = 'tattoo';
                break;
        }

        // $insert->$request->file('file')->getClientOriginalName();
        $insert->save();
        $request->session()->flash('final', 'عملیات با موفقیت انجام شد');

        // $show = new Time;
        // $showall = $show->all();

        $fromAddress = "my@gmail.com";
        $to = "you@gmail.com";
        $subject = ' با موفقیت اضافه شد';
        $body='عضویت شما در سایت با موفقیت انجام شد';
        $fullname = ' اقای فلان ابن فلان';
        $username = 'taham990';

        if(Mail::to($to)->send(new TestMail($fromAddress ,$body , $subject , $fullname ,$username)))
        return redirect('/cosmeticmanajment');


    }
  

    public function showfordelete()
    {
        $article = new Example;
        $showall = $article->all();

        return view("cosmeticmanajment-delete" , ["collection" => $showall]);


    }

    public function showforupdate()
    {
        $article = new Example;
        $showall = $article->all();

        return view("manajment.cosmeticmanajment-update" , ["collection" => $showall]);


    }

    public function update(Request $request)
    {   
        $validateddata = request()->validate([
            'newname' => 'requierd',
            'newdescription' => 'ewquierd|max:100',
            
        ] ,[
            'newname.required' => 'نام عکس را به دلخواه وارد کنید' ,
            'newdescription.required' => 'لطفا توضیحات را وارد کنید' ,
        ]);


        

        // $newobj = new Example::where('id' , 1);
        // $newobj->update([
        //     'Name' => $request->newname,
            
             
        //  ]);

    }

    // public function update($id)
    // {
        

        
    // }
}