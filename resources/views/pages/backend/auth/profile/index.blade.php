@extends('layouts.backend.masters')
@section('title', 'Data')
@section('content')
    <!-- Row -->
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">App</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>

    <div class="d-flex align-items-center mb-4 flex-wrap">
        <h3 class="me-auto">Dashboard</h3>
        <div>
            <a href="new-job.html" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New Job</a>
        </div>
    </div>
@endsection
