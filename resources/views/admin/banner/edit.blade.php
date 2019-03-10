@extends('admin.common.layouts')

@section('title')
<section class="content-header">
    <h1>
        Banner 
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
@endsection
@section('contents')

                    {!! Form::model($data['row'], ['method' => 'POST', 'route' => ['admin.banner.update', $data['row']->id], 'class' => 'form-horizontal','enctype' =>'multipart/form-data']) !!}

                        <input type="hidden" name="id" value="{{ $data['row']->id }}">

                        @include('admin.banner.includes.form')


                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    Update
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    Reset
                                </button>
                            </div>
                        </div>

                        <div class="hr hr-24"></div>

                    </form>

    @endsection