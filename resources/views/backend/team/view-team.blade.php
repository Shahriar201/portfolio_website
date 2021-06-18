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
                            <h3>Team Member List
                                <a class="btn btn-success float-right btn-sm" href="{{ route('teams.add') }}">
                                    <i class="fa fa-plus-circle"></i>Add Team Member</a>
                                
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 3%">SL.</th>
                                        {{-- <th style="width: 15%">Title</th> --}}
                                        <th style="width: 15%">Member</th>
                                        <th style="width: 10%">Designation</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($allData as $key => $team)

                                    <tr class="{{ $team->id }}">
                                        <td>{{ $key+1 }}</td>
                                        {{-- <td>{{ $team->title }}</td> --}}
                                        <td>{{ $team->member_name }}</td>
                                        <td>{{ $team->designation }}</td>
                                        <td>{{ $team->description }}</td>
                                        <td><img src="{{ (!empty($team->image))?url('public/upload/team_images/'.$team->image):url('public/upload/no_image.jpg') }}" width="100px" height="110px"></td>

                                        <td>
                                            <a title="Edit" id="edit" class="btn btn-sm btn-primary" href="{{ route('teams.edit', $team->id)}}">
                                                <i class="fa fa-edit">

                                                </i>
                                            </a>
                                            <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('teams.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $team->id }}">
                                                <i class="fa fa-trash">

                                                </i>
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