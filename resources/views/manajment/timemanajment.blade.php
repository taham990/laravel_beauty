@extends('layouts.index')

@section('timemanajment')
    <h1>مدیریت وقت</h1>

    <h3>ایجاد</h3>
    {{-- @if (isset($final))
    <h3>{{$final}}</h3>
    @endif --}}


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
@endsection
