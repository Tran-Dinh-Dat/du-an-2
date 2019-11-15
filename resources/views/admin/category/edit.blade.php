@extends('admin.home')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>New</small>
                        </h1>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (\Session::has('success'))
                            <h5 class="alert alert-danger">{!! \Session::get('success') !!}</h5>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form  method="POST"action="{{route('editcategory_save',$category->id)}}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" value='{{$category->id}}' name="id"  disabled   />
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" value='{{$category->name}}' name="name" />
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input class="form-control" name="slug" value='{{$category->slug}}' placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description"  value='{{$category->description}}'  placeholder="Please Enter Category Keywords" />
                            </div>
                           
                          
                            <button type="submit" class="btn btn-default">Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
            <!-- /.container-fluid -->
        </div>
@endsection