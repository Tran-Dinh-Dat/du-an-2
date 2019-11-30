@extends('frontend.layouts.master')
@section('title')
    Profile
@endsection
@section('content')
<div class="container emp-profile">
    <form method="post">
        <div class="row" style="height: 100px">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="{{asset('client/images/'. $profile->avatar)}}" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                {{ $profile->fullname }}
                            </h5>
                           
                            {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Chỉnh sửa thông tin</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$profile->id}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tên</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$profile->fullname}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$profile->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Điện thoại</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$profile->phone}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Địa chỉ</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$profile->address}}</p>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade editprofile" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{route('profile.update', Auth::user()->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Tên</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="fullname" class="form-control" value="{{$profile->fullname}}"> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="email" class="form-control" value="{{$profile->email}}"> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <label>Điện thoại</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="phone" class="form-control" value="{{$profile->phone}}"> 
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Địa chỉ</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="address" class="form-control" value="{{$profile->address}}"> 
                                </div>
                            </div>

                            <div class="row">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </form>           
</div>
@endsection

