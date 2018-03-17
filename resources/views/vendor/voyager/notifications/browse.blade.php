@extends('voyager::master')

@section('page_title', __('voyager.generic.viewing').' '.$dataType->display_name_plural)


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="fa fa-bell-o"></i> {{ $dataType->display_name_plural }}
        </h1>
        @if(((Auth::user() -> role_id) == '1') or ((Auth::user() -> role_id) == '2'))
          @can('add',app($dataType->model_name))
              <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-success btn-add-new">
                  <i class="voyager-plus"></i> <span>{{ __('voyager.generic.add_new') }}</span>
              </a>
          @endcan
        @endif
        @include('voyager::multilingual.language-selector')
    </div>
@stop


@section('content')
    <div class="page-content browse container-fluid">
      @include('voyager::alerts')
      <div class="row-fluid">

	@if(($dataTypeContent -> where('important', '==', 1 ) -> first()) != NULL)
              <div class="notifications-featured-title"><h4>FEATURED</h4></div>
              <div class="col col-sm-12 col-md-12 col-lg-12 notifications-featured">
	@endif

            @foreach($dataTypeContent as $data)
              @if($data -> important == '1')
                <h4 class="card notification">
                  <div class="col col-sm-12 col-md-1 col-lg-1 notification-new">
                    <?php
                    $date = $data -> created_at;
                    $now = Carbon::now();

                    $diff = $date->diffInHours($now);
                    ?>
                    @if( $diff < 24 )
                      <i>
                        New
                      </i>
                    @endif
                  </div>
                  @if(((Auth::user() -> role_id) == '1') or ((Auth::user() -> role_id) == '2'))
                  <div class="col col-sm-12 col-md-5 col-lg-6 text-center notification-message">{{ $data -> notification}}</div>
                  <div class="col col-sm-12 col-md-2 col-lg-2 text-right notification-date">{{ $data -> created_at -> diffForHumans()}}</div>
                    <div class="col col-sm-12 col-md-4 col-lg-3 no-sort no-click" id="bread-actions">
                        @can('delete', $data)
                            <a href="javascript:;" title="{{ __('voyager.generic.delete') }}" class="btn btn-sm btn-danger pull-right delete" data-id="{{ $data->{$data->getKeyName()} }}" id="delete-{{ $data->{$data->getKeyName()} }}">
                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.delete') }}</span>
                            </a>
                        @endcan
                        @can('edit', $data)
                            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $data->{$data->getKeyName()}) }}" title="{{ __('voyager.generic.edit') }}" class="btn btn-sm btn-primary pull-right edit">
                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.edit') }}</span>
                            </a>
                        @endcan
                        @can('read', $data)
                            <a href="{{ route('voyager.'.$dataType->slug.'.show', $data->{$data->getKeyName()}) }}" title="{{ __('voyager.generic.view') }}" class="btn btn-sm btn-warning pull-right">
                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.view') }}</span>
                            </a>
                        @endcan
                    </div>
                  @else
                  <div class="col col-sm-12 col-md-9 col-lg-9 text-center notification-message">{{ $data -> notification}}</div>
                  <div class="col col-sm-12 col-md-2 col-lg-2 text-right notification-date">{{ $data -> created_at -> diffForHumans()}}</div>
                  @endif
                </h4>
              @endif
            @endforeach
          </div>

          <div class="col col-sm-12 col-md-12 col-lg-12 notifications">

            @foreach($dataTypeContent as $data)
              @if($data -> important == '0')
                <h5 class="card notification">
                  <div class="col col-sm-12 col-md-1 col-lg-1 notification-new">
                    <?php
                    $date = $data -> created_at;
                    $now = Carbon::now();

                    $diff = $date->diffInHours($now);
                    ?>
                    @if( $diff < 24 )
                      <i>
                        New
                      </i>
                    @endif
                  </div>
                  @if(((Auth::user() -> role_id) == '1') or ((Auth::user() -> role_id) == '2'))
                  <div class="col col-sm-12 col-md-5 col-lg-6 text-center notification-message">{{ $data -> notification}}</div>
                  <div class="col col-sm-12 col-md-2 col-lg-2 text-right notification-date">{{ $data -> created_at -> diffForHumans()}}</div>
                    <div class="col col-sm-12 col-md-4 col-lg-3 no-sort no-click" id="bread-actions">
                        @can('delete', $data)
                            <a href="javascript:;" title="{{ __('voyager.generic.delete') }}" class="btn btn-sm btn-danger pull-right delete" data-id="{{ $data->{$data->getKeyName()} }}" id="delete-{{ $data->{$data->getKeyName()} }}">
                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.delete') }}</span>
                            </a>
                        @endcan
                        @can('edit', $data)
                            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $data->{$data->getKeyName()}) }}" title="{{ __('voyager.generic.edit') }}" class="btn btn-sm btn-primary pull-right edit">
                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.edit') }}</span>
                            </a>
                        @endcan
                        @can('read', $data)
                            <a href="{{ route('voyager.'.$dataType->slug.'.show', $data->{$data->getKeyName()}) }}" title="{{ __('voyager.generic.view') }}" class="btn btn-sm btn-warning pull-right">
                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.view') }}</span>
                            </a>
                        @endcan
                    </div>
                  @else
                  <div class="col col-sm-12 col-md-9 col-lg-9 text-center notification-message">{{ $data -> notification}}</div>
                  <div class="col col-sm-12 col-md-2 col-lg-2 text-right notification-date">{{ $data -> created_at -> diffForHumans()}}</div>
                  @endif

                </h5>
              @endif
            @endforeach
          </div>
      </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager.generic.close') }}"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager.generic.delete_question') }} {{ strtolower($dataType->display_name_singular) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                                 value="{{ __('voyager.generic.delete_confirm') }} {{ strtolower($dataType->display_name_singular) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager.generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('css')
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
<link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@endif
@stop

@section('javascript')
    <!-- DataTables -->
    @if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif
    <script>
        var deleteFormAction;
        $('div').on('click', '.delete', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) { // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');
            console.log(form.action);

            $('#delete_modal').modal('show');
        });
    </script>
@stop
