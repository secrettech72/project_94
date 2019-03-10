@extends('admin.common.layouts')
@section('title')
<section class="content-header">
    <h1>
        Banner
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }} "><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
@endsection
@section('contents')
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">

                                @if (Request::session()->has('session'))
                                    <div class="alert alert-info">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <i class="icon-remove"></i>
                                        </button>
                                        {!! Request::session()->get('session') !!}
                                        <br>
                                    </div>
                                @endif

                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="center">
                                            <label>
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                        <th>Name</th>
                                        <th> Email</th>
                                        <th>User Images</th>
                                        <th class="hidden-480">Status</th>
                                        <th>Updated_at</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @if (isset($data['rows']) && $data['rows']->count() > 0)

                                        @foreach($data['rows'] as $row)

                                            <tr>
                                                <td class="center">
                                                    <label>
                                                        <input type="checkbox" class="ace">
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td>{{ $row->alt_text }}</td>
                                                <td>{{ $row->caption }}</td>
                                                <td>
                                                    @if(file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$row->profile_images))
                                                        <div class="editable-image">
                                                            <img src="{{ asset('Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$row->image) }}" alt="No Pictures" width="300px">
                                                        </div>
                                                        @endif
                                                </td>
                                                <td class="hidden-480">
                                                    @if ($row->status == 'Active')
                                                        <span class="label label-sm label-success">Active</span>
                                                        @else
                                                        <span class="label label-sm label-warning">InActive</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.banner.edit', $row->id.'?token='.substr(sha1('banner_edit'.$row->id),1,15)) }}"  class="btn btn-xs btn-info">
                                                            <i class="fa fa-fw fa-pencil"></i>
                                                        </a>
                                                        <a onclick="return confirm('Are You Sure To Delete This Data')" href="{{ route('admin.banner.delete', $row->id.'?token='.substr(sha1('banner_delete'.$row->id),1,15)) }}"  class="btn btn-xs btn-d" class="btn btn-xs btn-danger bootbox-confirm">
                                                            <i class="fa fa-fw fa-remove"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                            <tr><td colspan="3"></td></tr>

                                        @else
                                        <tr><td colspan="5">No data found.</td></tr>
                                    @endif

                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /span -->
                    </div><!-- /row -->


                </div><!-- /.col -->
            </div><!-- /.row -->


    @endsection


@section('page_specific_scripts')

    @endsection