@extends('installer::layouts.master')

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

      @if(isset($inProgress) && $inProgress)
        <p>{{ trans('installer_messages.database.inProgress') }}</p>
      @endif

      @if(isset($error))
        <p>{{ trans('installer_messages.database.statusError') }}</p>
      @endif

      @if(!$inProgress)
        <div class="block_check_label">
          <label for='useSeeders' class="label_check">
            {{ trans('installer_messages.database.label') }}
          </label>
          <input type='checkbox' class="checkbox_data" id='useSeders' name='useSeeders'>
        </div>
      @endif

      <div class="buttons">
        <button type='submit' class="button button-wizard">{{ trans('installer_messages.database.migrate') }}</button>
      </div>
    </form>

    <script type="text/javascript">
      window.flag = {{ $inProgress }};
      if(window.flag) {
        setTimeout(function () { window.location.reload() }, 1000 * 5)
      }
    </script>
@endsection
