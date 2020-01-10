@extends('admin.layout.master')
@section('title', 'Page Blank')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="header">
                <h2>Create New Campus</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br />
                @endif
                <form id="basic-form" method="post" novalidate action="{{ route('event.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Event Title</label>
                        <input type="text" name="title" placeholder="Enter Event Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Campus</label>
                        <input type="text" name="campus" placeholder="Enter Location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Campus</label>
                        <input type="file" name="image" placeholder="Enter Location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Enter Description</label>
                        <textarea class="form-control" rows="5" name="description" placeholder="Enter text about campus here" cols="30" required></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

@stop
