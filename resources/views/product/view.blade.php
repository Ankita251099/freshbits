@extends('layouts.main')
@section('content')

    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/') }}">
                        <span class="glyphicon glyphicon-home fs14"></span>
                    </a>
                </li>
                <li class="crumb-active">Products</li>
            </ol>
        </div>
        <div class="topbar-right">
            <a href="{{route('product.create')}}" class="btn btn-default btn-sm light fw600 ml10">
                <span class="fa fa-plus pr5"></span>Add</a>
        </div>
    </header>
    <!-- End: Topbar -->
    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
         @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success') }}
      </div>
      @endif
      @if(Session::has('message-error'))
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('message-error') }}
      </div>
      @endif 
        <!-- begin: .tray-center -->
        <div class="row p5 pt15">
            <div class="col-lg-12">
                <div class="panel panel-visible" id="spy3">
                    <div class="panel-heading">
                        <div class="panel-title hidden-xs">
                            <span class="glyphicon glyphicon-tasks"></span>Product 
                        </div>
                    </div>
                    <div class="panel-body pn">
                        <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>UPC</th>
                                    <th>Price</th>
                                    <th>Images</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1
                                @endphp
                                @if(count($products)>0)
                                @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{$no}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->upc}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>
                                    <img class="image_hide " width="100px" height="100px" id="my_image" src="{{asset('upload/image/'.$product->image)}}"></td>
                                    <td> @if($product->status == 'Non-Avaliable')
                                        <span style=" background-color: #fd7e14; color: white ;padding: 2px;border-radius: 5px">Not Avaliable</span>
                                       
                                        @else
                                         <span style=" background-color: #0CC27E; color: white ;padding: 2px;border-radius: 5px">Avaliable </span>
                                        
                                        @endif
                                    </td>
                                    <td>
                                        <a class="badge badge-success shadow-success" href="{{route('product.edit',$product->id)}}" 
                                            >
                                            <i class="fa fa-pencil-square-o" ></i> </a>
                                            <a class="badge badge-danger shadow-danger this_destroy"  data-url="{{route('product.delete',$product->id)}}" ><i class="fa fa-trash-o"></i> </a>
                                        </td>
                                    </tr>
                                    @php
                                    $no++
                                    @endphp
                                    @endforeach
                                    @else
                                    <td colspan="4" class="text-center">No Record Found</td>
                                    @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: .tray-center -->

    </section>

    @endsection
@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script>
    // Delete 
    $('.this_destroy').on('click', function() {
            
            let del_url = $(this).attr('data-url');

            bootbox.confirm({
                message: "Are you sure to delete? ",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function(result) {
                    if(result){
                        location.replace(del_url);
                    }
                }
            });
        })


    // dataTable
    $('#datatable').dataTable({
        dom: 'Blfrtip',
        scrollX: true,
    });
</script>
@endsection