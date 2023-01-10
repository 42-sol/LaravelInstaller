@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.admin.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
    {!! trans('installer_messages.admin.title') !!}
@endsection

@section('container')
    <form method='post' action='{{ route('LaravelInstaller::adminCreate')}}'>
      @csrf

      @if(isset($status))
        @if($status==false)
          <div>
            {{ trans('installer_messages.admin.statusError') }}<br>
            {{ $error }}
          </div>
        @endif
      @endif

      <div>
        <label for="admin_name">
          {{ trans('installer_messages.admin.name') }}
        </label>
        <input type="text" name="name" id="admin_name"/>
      </div>

      <div>
        <label for="admin_login">
          {{ trans('installer_messages.admin.login') }}
        </label>
        <input type="text" name="username" id="admin_login"/>
      </div>

      <div>
        <label for="admin_email">
          {{ trans('installer_messages.admin.email') }}
        </label>
        <input type="email" name="email" id="admin_email"/>
      </div>

      <div>
        <label for="admin_password">
          {{ trans('installer_messages.admin.password') }}
        </label>
        <input type="password" name="password" id="admin_password"/>
      </div>

      <div class="buttons">
        <button type='submit' class="button button-wizard">{{ trans('installer_messages.admin.next') }}</button>
      </div>
    </form>
@endsection
