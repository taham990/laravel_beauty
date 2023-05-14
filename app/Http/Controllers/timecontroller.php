<?php

namespace App\Http\Controllers;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class timecontroller extends Controller
{
    public function addfild(Request $request): RedirectResponse
    {
        $validatedData = request()->validate([
            'Day' => 'required',
            'Month' => 'required',
            'Start' => 'required',
            'End' => 'required',
            'Job' => 'required',
        ], [
                'Day.required' => 'روز انجام کار را ذکر کنید',
                'Month.required' => 'ماه مورد نظر را ذکر کنید',
                'Start.required' => 'ساعت شروع را ذکر کنید',
                'End.required' => 'ساعت پایانی را ذکر کنید',
                'Job.required' => 'لطفا بگویید چه کاری انجام میشود' ,
                // 'password.required' => 'گذرواژه را وارد کنید',
                
            ]);

        // $flight->name = $request->name;

        $myDay = $request->Day;
        $myMonth = $request->Month;
        $myStart =$request->Start;
        $myEnd = $request->End;
        $myJob = $request->Job;
        $witchradio = $request->flexRadioDefault;
        // $myradio = request('flexRadioDefault');
        // dd($myradio);

        // $insert = new User;
        // $insert->Username = $name;
        // $insert->Email = $email;
        // $insert->Password = $password;
        // $insert->phone = $phone;
        // $insert->save();

        $insert = new Time;
        $insert ->Day = $myDay;
        $insert ->Month = $myMonth;
        $insert ->Start = $myStart;
        $insert ->End = $myEnd;
        $insert ->Job = $myJob;
        $witch = $witchradio;
        if($witch == 'free')
        {
            $insert ->status = 'free';
        }else{
            $insert ->status = 'resreved';
        }
        $insert -> save();
        
        // session(['final' => 'عملیات با موفقیت انجام شد']);

        $request->session()->flash('final', 'عملیات با موفقیت انجام شد');
        return redirect('/timemanajment');
    }

    public function showdata()
    {
        $show = new Time;
        $showall = $show->all();
        return view('/booking' , ['collection' => $showall]);





    }
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

        //
    }
}