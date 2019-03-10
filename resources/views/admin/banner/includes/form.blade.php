<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="alt_text"> Alt Text </label>

    <div class="col-sm-9">
        {{ Form::text('alt_text',null,['class'=>'form-control','required']) }}
        @if (count($errors) > 0 && $errors->has('alt_text'))
            <p class="help-block error">{{ $errors->first('alt_text') }}</p>
        @endif
    </div>
</div>


@if(isset($data['row']))
    <hr>
@endif

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="caption"> Caption </label>

    <div class="col-sm-9">
        {{ Form::text('caption',null,['class'=>'form-control','required']) }}
        @if (count($errors) > 0 && $errors->has('caption'))
            <p class="help-block error">{{ $errors->first('caption') }}</p>
        @endif
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="username"> Link </label>

    <div class="col-sm-9">
        {{ Form::text('link',null,['class'=>'form-control','required']) }}
        @if (count($errors) > 0 && $errors->has('link'))
            <p class="help-block error">{{ $errors->first('link') }}</p>
        @endif
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right">Banner Images</label>
    <div class=" col-sm-9">
        {{ Form::file('image',['class'=>'form-control']) }}
    </div>
    @if(count($errors) > 0 && $errors->has('image'))
        <p class="help-block error ">{{ $errors->has('image') }}</p>
    @endif
</div>

@if(isset($data['row']->image) && file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$data['row']->image))
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Current Images</label>
        <div class=" col-sm-9">
            <div class="editable-image">
                <img src="{{ asset('Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$data['row']->image) }}" style="width: 300px; height: 250px;"  alt="Picture Error">
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
