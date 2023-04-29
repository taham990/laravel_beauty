<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\models\Example;
use Illuminate\Support\Facades\Storage;

class cosmeticmanajment extends Controller
{
    public function addExample(Request $request)
    {
        $validatedData = request()->validate([
            'Name' => 'required' ,
            'Type' => 'required' ,
            'Description' => 'required' ,
            'file' => 'required||mimes:jpg,jpeg,png|max:5000000' ,
        ] , [
            'Name.required' => 'نام عکس را به دلخواه وارد کنید' ,
            'Type.required' => 'دسته بندی را انتخاب کنید' ,
            'Description.required' => 'لطفا توضیحات را وارد کنید' ,
            'file.required' => 'عکس مورد نظر را وارد کنید' ,
            'file.mimes' => 'نوع پسوند عکس مجاز نیست' ,
            'file.max' => 'سایز عکس حداکثر 5 مگابایت' ,

        ]);

        $imagePath = $request->file('file')->store('public/img/portfolio');
        $imageUrl = Storage::url($imagePath);


        $insert = new Example;
        $insert->Name = $request->Name;
        $insert->Type = $request->Name;
        $insert->Description = $request->Name;
        $insert->Path = $request->file('file')->getClientOriginalName();

        $insert->save();
        $final = "ثبت شد";
        return redirect('/cosmeticmanajment');

    }
}
