@extends('layouts.index')


@section('cosmeticmanajment')
    <h1>مدیریت محصولات</h1>


    {{-- <h3>افزودن محصول</h3>

    <form action="/timemanajment" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Day" class="form-label"> روز </label>
            <input type="text" name="Day" class="form-control" id="Day" aria-describedby="Day">
            <div id="Dayinf" class="form-text">اطلاععات را وارد کنید</div>
        </div>
        @if ($errors->has('Day'))
            <div class="error">{{ $errors->first('Day') }}</div>
        @endif

        <div class="mb-3">
            <label for="Month" class="form-label"> ماه </label>
            <input type="text" name="Month" class="form-control" id="Month">
        </div>
        @if ($errors->has('Month'))
            <div class="error">{{ $errors->first('Month') }}</div>
        @endif

        <div class="mb-3">
            <label for="Start" class="form-label"> ساعت شروع </label>
            <input type="text" name="Start" class="form-control" id="Start">
        </div>
        @if ($errors->has('Start'))
            <div class="error">{{ $errors->first('Start') }}</div>
        @endif

        <div class="mb-3">
            <label for="End" class="form-label"> ساعت پایانی </label>
            <input type="text" name="End" class="form-control" id="End">
        </div>
        @if ($errors->has('End'))
            <div class="error">{{ $errors->first('End') }}</div>
        @endif
        <div class="mb-3">
            <label for="Job" class="form-label"> نوع کار </label>
            <input type="text" name="Job" class="form-control" id="Job">
        </div>
        @if ($errors->has('Job'))
            <div class="error">{{ $errors->first('Job') }}</div>
        @endif


        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                رزرو شده
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                آزاد
            </label>
        </div> <br>

        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>
 --}}



    <h3>افزودن نمونه کار</h3>
    <form action="/cosmeticmanajment" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Name" class="form-label"> نام(دل خواهی) </label>
            <input type="text" name="Name" class="form-control" id="Day" aria-describedby="Day">
            <div id="Dayinf" class="form-text">  @if ($errors->has('Name'))
                <span style="color:rgb(175, 84, 84)">{{ $errors->first('Name') }}</span>
            @endif </div>
        </div>
      

        <div class="mb-3">
            <label for="Type" class="form-label"> دسته بندی </label>
            <select class="form-select" name="Type" aria-label="Default select example">
                <option value="hair">مو</option>
                <option value="nail">ناخن</option>
                <option value="body">بدن</option>
                <option value="tattoo">تتو</option>
            </select>
            <div id="Dayinf" class="form-text">  @if ($errors->has('Type'))
                <span style="color:rgb(175, 84, 84)">{{ $errors->first('Type') }}</span>
            @endif </div>
        </div>
       

        <div class="mb-3">
            <label for="Description" class="form-label"> توضیحات </label>
            <input type="text" name="Description" class="form-control" id="Description">
            <div id="Dayinf" class="form-text">   @if ($errors->has('Description'))
                <span style="color:rgb(175, 84, 84)">{{ $errors->first('Description') }}</span>
            @endif </div>

        </div>
      

        <div class="mb-3">
            <label for="file" class="form-label"> انتخاب عکس </label>
            <input type="file" name="file" class="form-control" id="file">
            <div id="Dayinf" class="form-text"> @if ($errors->has('file'))
                <span style="color:rgb(175, 84, 84)">{{ $errors->first('file') }}</span>
            @endif </div>
        </div>
        
        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>
@endsection
