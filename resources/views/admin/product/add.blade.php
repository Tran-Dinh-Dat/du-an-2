@extends('admin.home')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
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
                        <form action="{{route('add_product_save')}}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                 <label for="">Category</label>
                                 <select class="form-control" name="category_id" id="">
                                     @foreach($category as $cate)
                                   <option value='{{$cate->id}}'> {{$cate->name}} </option>
                                    @endforeach
                                 </select>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type='number' name="price" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Sale</label>
                                <input class="form-control" type='number' name="sale" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" type='number' name="quantity" placeholder="Please Enter Password" />
                            </div>  
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" name='description' rows="3"></textarea>
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