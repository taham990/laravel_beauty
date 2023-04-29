@extends('layouts.index')
@section('booking')
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
        </tbody>




        @endforeach
        
    </table>
@endsection
