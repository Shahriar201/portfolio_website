@extends('backend.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage About</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
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

                            @if($countAbout<1)
                                <h3>About Me List
                                    
                                    {{-- @if($countContact<1) --}}
                                    <a class="btn btn-success float-right btn-sm" href="{{ route('abouts.add') }}">
                                        <i class="fa fa-plus-circle"></i>Add About</a>
                                    {{-- @endif --}}

                                </h3>
                            @endif
                            
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($allData as $key => $about)

                                        <tr class= {{ $about->id }}>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $about->title }}</td>
                                            <td>{{ $about->description }}</td>
                                            <td><img src="{{ (!empty($about->image))?url('public/upload/about_images/'.$about->image):url('public/upload/no_image.jpg') }}" width="120px" height="130px"></td>
                                            <td>
                                                <a title="Edit" id="edit" class="btn btn-sm btn-primary" href="{{ route('abouts.edit', $about->id)}}">
                                                    <i class="fa fa-edit"> </i>
                                                </a>
                                                <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('abouts.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $about->id }}">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            
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