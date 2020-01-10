@extends('admin.layout.master')
@section('title', 'Page Blank')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="body">
                <div class="row clearfix">
                    @foreach ($events as $event)
                        <div class="col-lg-3 col-md-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-info"><i class="fa fa-user"></i> </div>
                                    <div class="content">
                                        <div class="text">{{$event->title}}</div>
                                        <h5 class="number">530</h5>
                                    </div>
                                    <hr>
                                    <div class="icon text-warning"><i class="fa fa-user-circle"></i> </div>
                                    <div class="content">
                                        <div class="text">{{$event->image}}</div>
                                        <h5 class="number">14</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

@stop
