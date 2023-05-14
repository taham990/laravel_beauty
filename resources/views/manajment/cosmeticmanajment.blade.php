@extends('layouts.index')


@section('cosmeticmanajment')
    <h1>مدیریت محصولات</h1>
    @if (session('final'))
    <div class="alert">
      {{ session('final') }}
    </div>
    @endif

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
    <form action="/cosmeticmanajment" method="POST" enctype="multipart/form-data">
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

{{-- 
    <h3>همه موارد</h3>
    <table class="table table-dark table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">روز</th>
            <th scope="col">ماه</th>
            <th scope="col">ساعت</th>
            <th scope="col">وضعیت</th>
            <th scope="col">.</th>
        </tr>
    </thead>
    @foreach ($collection as $item)

    <tbody>
        <tr>
            <th scope="row">{{$item->Day}}</th>
            <td>{{$item->Month}}</td>
            <td>{{$item->Start}}</td>

            @if ($item->status != 'free')
            <td>رزرو شده</td>
            <td>.</td>
            @else
            <td>آزاد</td>
            <td><a href="#">رزرو</a></td>
            @endif



        </tr>
    </tbody> --}}


@endsection



@section('sidebar')
<ul class="sidebar-nav">
    <li class="sidebar-header">
        مدیریت
    </li>
    <li class="sidebar-item ">
        <a class="sidebar-link" href="/timemanajment">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">مدیریت
                وقت</span>
        </a>
    </li>

    <li class="sidebar-item ">
        <a class="sidebar-link" href="/coursemanajment">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">مدیریت دوره
                ها</span>
        </a>
    </li>

    <li class="sidebar-item active">
        <a class="sidebar-link" href="/cosmeticmanajment">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">مدیریت
                محصولات</span>
        </a>
    </li>

</ul>
<ul class="sidebar-nav">
    <li class="sidebar-header">
        لوازم آرایشی
    </li>

    <li class="sidebar-item ">
        <a class="sidebar-link" href="/">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">مو</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="pages-profile.html">
            <i class="align-middle" data-feather="user"></i> <span class="align-middle">چشم</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="pages-sign-in.html">
            <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">ابرو </span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="pages-sign-up.html">
            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">لب</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="pages-blank.html">
            <i class="align-middle" data-feather="book"></i> <span class="align-middle">دست و
                صورت</span>
        </a>
    </li>

    <li class="sidebar-header">
        آموزش ها
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="courses/tattoo">
            <i class="align-middle" data-feather="square"></i> <span class="align-middle">تتو </span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="courses/kasht">
            <i class="align-middle" data-feather="check-square"></i> <span
                class="align-middle">کاشت</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="courses/heir">
            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">رنگ مو</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="courses/nail">
            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">آموزش
                بند
                ناخن</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="courses/body">
            <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">آموزش
                زیبایی
                خاص</span>
        </a>
    </li>

    <li class="sidebar-header">
        درخشش شما
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="portfolio">
            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">نمونه
                کار
                های ما</span>
        </a>
    </li>

    <li class="sidebar-item ">
        <a class="sidebar-link" href="booking">
            <i class="align-middle" data-feather="map"></i> <span class="align-middle">رزرو
                وقت</span>
        </a>
    </li>
</ul>

<div class="sidebar-cta">
    <div class="sidebar-cta-content">
        <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
        <div class="mb-3 text-sm">
            Are you looking for more components? Check out our premium version.
        </div>
        <div class="d-grid">
            <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
        </div>
    </div>
</div>
</div>
</nav>
@endsection