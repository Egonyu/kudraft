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
                                    <div class="content">
                                        <div class="text">{{$event->title}}</div>
                                    <h5 class="number">{{$event->campus}}</h5>
                                    </div>
                                    <br>
                                    <div class="content">
                                    <img src="{{ asset('storage/') }}/{{ $event->image }}" style="width:50%; height:50%px;" alt="">
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
