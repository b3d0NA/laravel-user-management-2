@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="username">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" type="text"
                    name="username" id="username" value="{{ old('username', '') }}" required>
                @if($errors->has('username'))
                <div class="invalid-feedback">
                    {{ $errors->first('username') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                    id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                    name="password" id="password" required>
                @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dealer_code">{{ trans('cruds.user.fields.dealer_code') }}</label>
                <input class="form-control {{ $errors->has('dealer_code') ? 'is-invalid' : '' }}" type="text"
                    name="dealer_code" id="dealer_code" value="{{ old('dealer_code', '') }}" required>
                @if($errors->has('dealer_code'))
                <div class="invalid-feedback">
                    {{ $errors->first('dealer_code') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.dealer_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="endpoint">{{ trans('cruds.user.fields.endpoint') }}</label>
                <input class="form-control {{ $errors->has('endpoint') ? 'is-invalid' : '' }}" type="text"
                    name="endpoint" id="endpoint" value="{{ old('endpoint', '') }}" required>
                @if($errors->has('endpoint'))
                <div class="invalid-feedback">
                    {{ $errors->first('endpoint') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.endpoint_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="company_id">{{ trans('cruds.user.fields.company_id') }}</label>
                <input class="form-control {{ $errors->has('company_id') ? 'is-invalid' : '' }}" type="number"
                    name="company_id" id="company_id" value="{{ old('company_id', '') }}" step="1" required>
                @if($errors->has('company_id'))
                <div class="invalid-feedback">
                    {{ $errors->first('company_id') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.company_id_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="next_schedule">{{ trans('cruds.user.fields.next_schedule') }}</label>
                <input class="form-control {{ $errors->has('next_schedule') ? 'is-invalid' : '' }}" type="text"
                    name="next_schedule" id="next_schedule" value="{{ old('next_schedule', '') }}" required>
                @if($errors->has('next_schedule'))
                <div class="invalid-feedback">
                    {{ $errors->first('next_schedule') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.next_schedule_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all"
                        style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all"
                        style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]"
                    id="roles" multiple required>
                    @foreach($roles as $id => $role)
                    <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $role }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                <div class="invalid-feedback">
                    {{ $errors->first('roles') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection