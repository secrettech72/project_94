<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="username"> Name </label>

    <div class="col-sm-9">
        {{ Form::text('username',null,['class'=>'form-control','required']) }}
        @if (count($errors) > 0 && $errors->has('username'))
            <p class="help-block error">{{ $errors->first('username') }}</p>
        @endif
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right">Email</label>
    <div class=" col-sm-9">
        {{ Form::text('email',null,['class'=>'form-control','required']) }}
    </div>
    @if(count($errors) > 0 && $errors->has('email'))
        <p class="help-block error ">{{ $errors->has('email') }}</p>
    @endif
</div>
@if(isset($data['row']))
    <hr>
@endif

<div class="form-group">
    <label class="control-label col-sm-3 no-padding-right">Password</label>
    <div class="col-sm-9">
        {{ form::password('password',['class'=>'form-control',isset($data['row']) ? '' : 'required']) }}
        @if(count($errors) > 0 && $errors->has('password'))
            <p class="help-block error error-container">{{ $errors->first('password') }}</p>
        @endif
    </div>
</div>

@if(isset($data['row']))
    <div class="form-group">
        <label class="control-label col-sm-3 no-padding-right">Confirm Password</label>
        <div class="col-sm-9">
            {{ form::password('password_confirmation',['class'=>'form-control',isset($data['row']) ? '' :'required']) }}
            @if(count($errors) > 0 && $errors->has('password_confirmation'))
                <p class="help-block error error-container">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>
    </div>
@endif
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right">First_name</label>
    <div class=" col-sm-9">
        {{ Form::text('first_name',null,['class'=>'form-control','required' ]) }}
    </div>
    @if(count($errors) > 0 && $errors->has('first_name'))
        <p class="help-block error ">{{ $errors->has('first_name') }}</p>
    @endif
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right">Last Name</label>
    <div class=" col-sm-9">
        {{ Form::text('last_name',null,['class'=>'form-control','required']) }}
    </div>
    @if(count($errors) > 0 && $errors->has('last_name'))
        <p class="help-block error ">{{ $errors->has('last_name') }}</p>
    @endif
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right">Profiles Images</label>
    <div class=" col-sm-9">
        {{ Form::file('profile_images',['class'=>'form-control']) }}
    </div>
    @if(count($errors) > 0 && $errors->has('profile_images'))
        <p class="help-block error ">{{ $errors->has('profile_images') }}</p>
    @endif
</div>
    
    @if(isset($data['row']->profile_images) && file_exists(public_path().DIRECTORY_SEPARATOR.'Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$data['row']->profile_images))
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right">Current Images</label>
            <div class=" col-sm-9">
                <div class="editable-image">
                    <img src="{{ asset('Images'.DIRECTORY_SEPARATOR.'Banner'.DIRECTORY_SEPARATOR.$data['row']->profile_images) }}" style="width: 300px; height: 250px;"  alt="Picture Error">
                </div>
            </div>
        </div>
    @endif

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="status"> Choose Roles </label>
        <div class="col-sm-9">
            <div class="control-group">
                           {{ Form::radio('role_id',1,['class'=>'form-control']) }} superadmin  
                           {{ Form::radio('role_id',2,['class'=>'form-control']) }} teacher
                           {{ Form::radio('role_id',3,['class'=>'form-control']) }} student                
                        <div class="space-4"></div>
                {{--    <label>
                        <input name="role" value="product-admin"  type="checkbox" class="ace">
                        <span class="lbl"> product Admin</span>
                    </label>

                    <label>
                        <input name="role" value="customer"  type="checkbox" class="ace">
                        <span class="lbl"> Customer</span>
                    </label>--}}
            </div>
        </div>

    </div>


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
