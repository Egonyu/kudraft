@extends('admin.layout.master')
@section('title', 'Page Blank')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="header">
                <h2>Stater Page</h2>
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
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>New Admission List</h2>
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
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Number</th>
                                            <th>Department</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="list-name">OU 00456</span></td>
                                            <td>Joseph</td>
                                            <td>25</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>404-447-6013</td>
                                            <td><span class="badge badge-primary">MCA</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">KU 00789</span></td>
                                            <td>Cameron</td>
                                            <td>27</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-4569</td>
                                            <td><span class="badge badge-warning">Medical</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">KU 00987</span></td>
                                            <td>Alex</td>
                                            <td>23</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-7412</td>
                                            <td><span class="badge badge-info">M.COM</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">OU 00951</span></td>
                                            <td>James</td>
                                            <td>23</td>
                                            <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>404-447-2589</td>
                                            <td><span class="badge badge-default">MBA</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">OU 00456</span></td>
                                            <td>Joseph</td>
                                            <td>25</td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>404-447-6013</td>
                                            <td><span class="badge badge-primary">MCA</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-name">OU 00953</span></td>
                                            <td>charlie</td>
                                            <td>21</td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>404-447-9632</td>
                                            <td><span class="badge badge-success">BBA</span></td>
                                        </tr>
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
