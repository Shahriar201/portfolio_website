@extends('backend.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Team</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Team</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-md-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Team
                                <a class="btn btn-success float-right btn-sm" href="{{ route('teams.view') }}">
                                    <i class="fa fa-list"></i>Team List</a>
                            </h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">

                        {{-- User add form --}}
                        <form method="post" action="{{ route('teams.update', $editData->id) }}" id="myForm" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row">
                               
                                {{-- <div class="form-group col-md-12">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $editData->title }}">
                                </div> --}}
                                
                                <div class="form-group col-md-12">
                                    <label>Member Name</label>
                                    <input type="text" name="member_name" class="form-control" value="{{ $editData->member_name }}">
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control" value="{{ $editData->designation }}">
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="5">{{ $editData->description }}</textarea>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" class="form-control" value="{{ $editData->twitter }}">
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" class="form-control" value="{{ $editData->facebook }}">
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label>Linkedin</label>
                                    <input type="text" name="linkedin" class="form-control" value="{{ $editData->linkedin }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>

                               <div class="form-group col-md-2">
                                    <img id="showImage" src="{{ (!empty($editData->image))?url('public/upload/team_images/'.$editData->image):url('upload/no_image.jpg') }}"
                                     style="width: 150px; height: 160px; border: 1px solid #000;">
                                </div>

                                <div class="form-group col-md-4" style="padding-top:30px">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </div>    
                              
                              
                          </form>

                            
                        </div>
                        <!-- /.card-body -->
                    </div>

                </section>

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection