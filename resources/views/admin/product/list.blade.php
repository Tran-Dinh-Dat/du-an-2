@extends('admin.home')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Detail</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $pro)
                            <tr class="even gradeC" align="center">
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->name}}</td>
                                <td>{{$pro->price}}</td>
                                <td>{{$pro->quantity}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a  href="{{route('product_detail',$pro->id)}}">Detail</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@if(\Session::has('product'))
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <div class="modal-body">
                  <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                         Product name
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                          Unitprice
                        </th>
                      </tr></thead>
                      <tbody>
                        <tr>
                        <table class="table">
                      <thead class=" text-primary">

                      </thead>
                      <tbody>
                          <img src="public/{{Session::get('product')->id}}" alt="">
                        <tr>
                          <td> 
                            {{ Session::get('product')->id }}
                          </td>
                          <td>
                            {{ Session::get('product')->name }} </a>
                          </td>
                          <td>
                            {{ Session::get('product')->quantity }} </a>
                          </td>
                          <td>
                            {{ Session::get('product')->price }} </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                      </tbody>
                    </table>
            </div>
              <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
<script type="text/javascript">
    $(window).load(function(){        
   $('#myModal').modal('show');
    }); 
</script>
@endif
        @endsection