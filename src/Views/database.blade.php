@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.database.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
    {!! trans('installer_messages.database.title') !!}
@endsection

@section('container')
    <form method="post" action="{{ route('LaravelInstaller::databaseMigrate') }}">
      @csrf

      @if(isset($status))
        @if($status==false)
          <div>
            {{ trans('installer_messages.database.statusError') }}<br>
            {{ $error }}
          </div>
        @endif
      @endif

      <div class="block_check_label">
        <label for='useSeeders' class="label_check">
          {{ trans('installer_messages.database.label') }}
        </label>
        <input type='checkbox' class="checkbox_data" id='useSeders' name='useSeeders'>
      </div>

      <div class="buttons">
        <button type='submit' class="button button-wizard">{{ trans('installer_messages.database.migrate') }}</button>
      </div>
    </form>
@endsection
