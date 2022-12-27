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
      <div>
        <label for="admin_name">
          {{ trans('installer_messages.admin.name') }}
        </label>
        <input type="text" name="admin_name" id="admin_name"/>
      </div>

      <div>
        <label for="admin_login">
          {{ trans('installer_messages.admin.login') }}
        </label>
        <input type="text" name="admin_login" id="admin_login"/>
      </div>

      <div>
        <label for="admin_email">
          {{ trans('installer_messages.admin.email') }}
        </label>
        <input type="email" name="admin_email" id="admin_email"/>
      </div>

      <div>
        <label for="admin_password">
          {{ trans('installer_messages.admin.password') }}
        </label>
        <input type="password" name="admin_password" id="admin_password"/>
      </div>

      <div class="buttons">
        <button type='submit' class="button button-wizard">{{ trans('installer_messages.admin.create') }}</button>
      </div>
    </form>


    @if(isset($status))
      @if($status==true)
        <div>
          {{ trans('installer_messages.admin.statusOK') }}<br>
        </div>
      @else
        <div>
          {{ trans('installer_messages.admin.statusError') }}<br>
          {{ $error }}
        </div>
      @endif
    @endif

    <div class="buttons">
      <a href="{{ route('LaravelInstaller::final') }}" class="button">
        {{ trans('installer_messages.admin.next') }}
        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
      </a>
    </div>
@endsection
