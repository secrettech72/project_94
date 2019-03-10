@extends('admin.common.layouts')

@section('title')
<section class="content-header">
    <h1>
        User 
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
@endsection

@section('contents')
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <p>There was some validation errors on form submit.</p>
                        </div>
                    @endif


                   {!! Form::open(['method' => 'POST', 'route' => 'admin.user.store', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        @include('admin.user.includes.form')
                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    Submit
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    Reset
                                </button>
                            </div>
                        </div>

                        <div class="hr hr-24"></div>

                  {{ Form::close() }}


    @endsection