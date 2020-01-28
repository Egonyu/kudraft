@extends('admin.layout.master')
@section('title', 'Page Blank')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Campus List</h2>
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
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Location</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($campuses as $campus)
                                        <tr>
                                            <td><span class="list-name"> {{$campus->id}} </span></td>
                                            <td>{{$campus->name}}</td>
                                            <td>{{$campus->description}}</td>
                                            <td>{{$campus->location}}</td>
                                            <td>{{$campus->email}}</td>
                                            <td><span class="badge badge-primary">{{$campus->telephoneNo}}</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
