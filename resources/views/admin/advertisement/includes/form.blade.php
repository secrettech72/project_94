<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="title"> Title </label>

    <div class="col-sm-9">
        {{ Form::text('title',null,['class'=>'form-control','required']) }}
        @if (count($errors) > 0 && $errors->has('title'))
            <p class="help-block error">{{ $errors->first('title') }}</p>
        @endif
    </div>
</div>


@if(isset($data['row']))
    <hr>
@endif

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="published_date"> Published Date </label>

    <div class="col-sm-9">
        {{ Form::text('published_date',null,['class'=>'form-control datepicker','required']) }}
        @if (count($errors) > 0 && $errors->has('published_date'))
            <p class="help-block error">{{ $errors->first('published_date') }}</p>
        @endif
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="un_published_date"> Unpublished Date</label>

    <div class="col-sm-9">
        {{ Form::text('un_published_date',null,['class'=>'form-control datepicker','required']) }}
        @if (count($errors) > 0 && $errors->has('un_published_date'))
            <p class="help-block error">{{ $errors->first('un_published_date') }}</p>
        @endif
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right">Advertisement Images</label>
    <div class=" col-sm-9">
        {{ Form::file('ads_images',['class'=>'form-control']) }}
    </div>
    @if(count($errors) > 0 && $errors->has('ads_images'))
        <p class="help-block error ">{{ $errors->has('ads_images') }}</p>
    @endif
</div>

@if(isset($data['row']->ads_images) && file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$data['row']->image))
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Current Images</label>
        <div class=" col-sm-9">
            <div class="editable-image">
                <img src="{{ asset('Images'.DIRECTORY_SEPARATOR.'Advertisement'.DIRECTORY_SEPARATOR.$data['row']->ads_images) }}" style="width: 300px; height: 250px;"  alt="Picture Error">
            </div>
        </div>
    </div>
@endif

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="status"> Status </label>

    <div class="col-sm-9">
        <div class="control-group">

            <div class="radio">
                <label>
                    <input name="status" value="1"  type="radio" class="ace" required>
                    <span class="lbl"> Active</span>
                </label>
            </div>

            <div class="radio">
                <label>
                    <input name="status" value="2" type="radio" class="ace" required>
                    <span class="lbl"> In-active</span>
                </label>
            </div>

        </div>
    </div>
</div>

<div class="space-4"></div>
