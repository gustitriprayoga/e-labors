@extends('layouts.backend.masters')
@section('title', 'Data')
@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Laboratorium</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Laboratorium</li>
            </ol>
        </div>

    </div>
    <!-- PAGE-HEADER END -->

    @role('admin')
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">File Export</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">Name</th>
                                        <th class="border-bottom-0">Position</th>
                                        <th class="border-bottom-0">Office</th>
                                        <th class="border-bottom-0">Age</th>
                                        <th class="border-bottom-0">Start date</th>
                                        <th class="border-bottom-0">Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    @endrole

    @role('user')
        @include('errors.403')
    @endrole

    <!-- End Row -->
@endsection
