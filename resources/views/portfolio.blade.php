@extends('layouts.index')

@section('portfilo')
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
                            <a href="booking?type={{ $item->Type }}" class="custom-block-image-wrap">
                                <img src="img/portfolio/{{ $item->Path }}" class="custom-block-image img-fluid"
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
