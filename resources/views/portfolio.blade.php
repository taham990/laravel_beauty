@extends('layouts.index')

@section('portfilo')
<head>
    <style>
        .imagesize{
            display: block;
            width: 335px;
            height: 200px;
            border-radius: 50px;
            padding: 1px;
            border: 1px solid #ddd;
        }
        .imagesize:hover{
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);

        }
        .mycode{
            padding: 0px;
        }
    </style>
</head>
    {{-- <img src="img/portfolio/{{$item->Path}}" alt=""> --}}
    {{-- <section class="topics-section section-padding pb-0" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">Topics</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="detail-page.html" class="custom-block-image-wrap">
                            <img src="images/topics/physician-consulting-his-patient-clinic.jpg"
                                class="custom-block-image img-fluid" alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html">
                                    Productivity
                                </a>
                            </h5>

                            <p class="badge mb-0">50 Episodes</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="detail-page.html" class="custom-block-image-wrap">
                            <img src="images/topics/repairman-doing-air-conditioner-service.jpg"
                                class="custom-block-image img-fluid" alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html">
                                    Technician
                                </a>
                            </h5>

                            <p class="badge mb-0">12 Episodes</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="detail-page.html" class="custom-block-image-wrap">
                            <img src="images/topics/woman-practicing-yoga-mat-home.jpg"
                                class="custom-block-image img-fluid" alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html">
                                    Mindfullness
                                </a>
                            </h5>

                            <p class="badge mb-0">35 Episodes</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <a href="detail-page.html" class="custom-block-image-wrap">
                            <img src="images/topics/delicious-meal-with-sambal-arrangement.jpg"
                                class="custom-block-image img-fluid" alt="">
                        </a>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 class="mb-1">
                                <a href="listing-page.html">
                                    Cooking
                                </a>
                            </h5>

                            <p class="badge mb-0">12 Episodes</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <form action="/portfolio" method="POST" class="form control">
        @csrf
    <input type="text" name="searchExamples" placeholder="search ..." >
    <button type="submit"><i class="fa fa-search"></i></button>
 </form>
 
{{-- <form action="/portfolio" method="POST">
    <select class="form-select" aria-label="Default select example">
        <option selected value="all">همه موارد</option>
        <option value="n" name="nail">کاشت ناخن</option>
        <option value="hair">مو و سر</option>
        <option value="tattoo">تتو</option>
    </select>
    <button type="submit"><i class="fa fa-search"></i></button>
</form> --}}
 

    {{-- <tr>
  <td>
    <select name="color" onchange="location.reload()">
      <option value="red">Red </option>
      <option value="blue">Blue</option>
      <option value="green">Green</option>
      <option value="pink">Pink</option>
    </select>
  </td>
</tr> --}}

    <section class="topics-section section-padding pb-0" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">همه موارد</h4>
                    </div>
                </div>
                @foreach ($collection as $item)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="booking?type={{ $item->Type }}" class="custom-block-image-wrap mycode">
                                <img class="imagesize" src="img/portfolio/{{ $item->Path }}" class="custom-block-image img-fluid"
                                    alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        {{ $item->Description }}
                                    </a>
                                </h5>

                                <p class="badge mb-0">50 Episodes</p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
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

    <li class="sidebar-item active">
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