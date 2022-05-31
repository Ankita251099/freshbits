@extends('layouts.main')
@section('title',' Edit Products')

@section('content')
 <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="#">
                        <span class="glyphicon glyphicon-home fs14"></span>
                    </a>
                </li>
                <li class="crumb-active">Product</li>
            </ol>
        </div>
    </header>
    <section id="content" class="table-layout animated fadeIn">
        <div class="tray tray-center">

            <form role="form" action="{{route('product.update',$products->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Edit Product</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                <label class="form-label semibold">Name</label>
                                <input type='text' name='name' id='name' class='form-control' value="{{$products->name}}" placeholder="name">
                             
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                 <label>Image</label>
                                 <input type="file" class="form-control" name="image" id="image" placeholder="Image">
                                  @if(empty($products->image))
                                  <input type="file" class="form-control" value="{{isset($products->id)? $products->image :''}}" name="image">
                                  @else
                                   <img class="image_hide " width="300px" id="my_image" src="{{asset('upload/image/'.$products->image)}}">
                                 
                                  @endif
                                 @error('image')
                                 <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </fieldset>
                        </div>
                          <div class="col-md-12">
                            <fieldset class="form-group">
                                 <label>Price</label>
                                 <input type="text" class="form-control" name="price" id="price" value="{{$products->price}}" placeholder="Price">
                                 @error('image')
                                 <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                 <label>Status</label>
                            <select name="status" id="user_id" class="js-states form-control select2">
                                <option value="">~~SELECTED~~</option>
                                <option value="Avaliable" @if('Avaliable' == $products->status) selected @endif >Avaliable</option>
                                <option value="Non-Avaliable" @if('Non-Avaliable' == $products->status) selected @endif>Non-Avaliable</option>
                                </select>
                                 @error('image')
                                 <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </fieldset>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        <a class="btn btn-danger btn-sm" href="javascript:history.back()">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
