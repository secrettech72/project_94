@extends('admin.common.layouts')
@section('title')
<section class="content-header">
    <h1>
        {{ $panel }}
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{{ $panel }}</li>
    </ol>
</section>
    @endsection
@section('contents')
    <p class="help-block" style="color:red; text-align: center"> WC To DBS</p>
    @endsection