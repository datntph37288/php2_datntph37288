@extends('layouts.master')

@section('title')
Chi Tiết User : {{$user['name']}}
@endsection

@section('content')






@extends('layouts.master')

@section('title')
    Danh sách User
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Chi Tiết User : {{$category['name']}}</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>TRƯỜNG DỮ LIỆU</th>
                                    <th>GIÁ TRỊ</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                        
                                @foreach ($categories as $field =>$value)
                                    <tr>
                                        <td>{{$field}}</td>
                                        <td> {{ $value }} </td>
                                @endforeach
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection









@endsection

