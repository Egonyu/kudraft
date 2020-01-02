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
                <form id="basic-form" method="post" novalidate action="{{ route('admin.campuses.addNew') }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Enter Campus Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location" placeholder="Enter Campus Location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter Campus Contact Email Address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Telephone Number</label>
                        <input type="telephone" name="telephoneNo" placeholder="Enter Campus Contact Number" class="form-control" required>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Image</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
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

@section('page-script')

    $(function() {
        // markdown editor
        var initContent = '<h4>Hello there</h4> ' +
            '<p>How are you? I have below task for you :</p> ' +
            '<p>Select from this text... Click the bold on THIS WORD and make THESE ONE italic, ' +
            'link GOOGLE to google.com, ' +
            'test to insert image (and try to tab after write the image description)</p>' +
            '<p>Test Preview And ending here...</p> ' +
            '<p>Click "List"</p> Enjoy!';

        $('#markdown-editor').text(toMarkdown(initContent));
    });

@stop
