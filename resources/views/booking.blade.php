@extends('layouts.index')
@section('booking')
<head>
    <style>
        .container{
            width: 662px;
            height: 100%;
            margin: 2px auto;
        }
    </style>
</head>
    <div class="container" dir="rtl">
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
                        <th scope="row">{{ $item->Day }}</th>
                        <td>{{ $item->Month }}</td>
                        <td>{{ $item->Start }}</td>

                        @if ($item->status != 'free')
                            <td>رزرو شده</td>
                            <td>.</td>
                        @else
                            <td>آزاد</td>
                            <td><button class="btn btn-primary">رزرو</button></td>
                        @endif



                    </tr>
                </tbody>
            @endforeach

        </table>
    </div>
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

        <li class="sidebar-item ">
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
                <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">کاشت</span>
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

        <li class="sidebar-item active">
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
