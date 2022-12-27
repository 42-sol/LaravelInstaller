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
      <div>
        <label for='useSeeders'>{{ trans('installer_messages.database.label') }}</label>
        <input type='checkbox' id='useSeders' name='useSeeders'>
      </div>

      <div class="buttons">
        <button type='submit' class="button button-wizard">{{ trans('installer_messages.database.migrate') }}</button>
      </div>
    </form>


    @if(isset($status))
      @if($status==true)
        <div>
          {{ trans('installer_messages.database.statusOK') }}<br>
        </div>
      @else
        <div>
          {{ trans('installer_messages.database.statusError') }}<br>
          {{ $error }}
        </div>
      @endif
    @endif

    <div class="buttons">
      <a href="{{ route('LaravelInstaller::admin') }}" class="button">
        {{ trans('installer_messages.database.next') }}
        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
      </a>
    </div>
@endsection
