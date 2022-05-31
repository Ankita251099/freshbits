@extends('layouts.main')
@section('title',' Add Products')

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

            <form role="form" action="{{route('product.add')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Add Product</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                <label class="form-label semibold">Name</label>
                                <input type='text' name='name' id='title' class='form-control' value='' placeholder="name">
                             
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="form-group">
                                 <label>Image</label>
                                 <input type="file" class="form-control" name="image" id="answer" placeholder="Image">
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
                                 <input type="text" class="form-control" name="price" id="answer" placeholder="Price">
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
                                <option value="" selected="">~~SELECTED~~</option>
                                <option value="Avaliable">Avaliable</option>
                                <option value="Non-Avaliable">Non-Avaliable</option>
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
