@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <a href="{{ route('notifications.index') }}" class="btn btn-outline-secondary btn-sm">{{ __('Back to notifications') }}</a>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ class_basename($notification->type) }}</span>
                    <span class="small text-muted">{{ $notification->created_at->diffForHumans() }}</span>
                </div>
                <div class="card-body">
                    <p class="mb-0">{{ $notification->data['message'] ?? __('Notification') }}</p>
                    @if (isset($notification->data) && count($notification->data) > 1)
                        <hr>
                        <dl class="row small mb-0">
                            @foreach ($notification->data as $key => $value)
                                @if ($key !== 'message' && is_scalar($value))
                                    <dt class="col-sm-3">{{ ucfirst(str_replace('_', ' ', $key)) }}</dt>
                                    <dd class="col-sm-9">{{ $value }}</dd>
                                @endif
                            @endforeach
                        </dl>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
