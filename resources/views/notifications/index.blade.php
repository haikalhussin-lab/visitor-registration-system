@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2">
                    <span>{{ __('Notifications') }}</span>
                    <div class="d-flex flex-wrap gap-2">
                        @if (auth()->user()->unreadNotifications()->exists())
                            <form action="{{ route('notifications.read-all') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-primary">{{ __('Mark all as read') }}</button>
                            </form>
                        @endif
                        @if (auth()->user()->notifications()->exists())
                            <form action="{{ route('notifications.destroy-all') }}" method="POST" class="d-inline"
                                  onsubmit="return confirm(@json(__('Delete all notifications? This cannot be undone.')));">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">{{ __('Delete all') }}</button>
                            </form>
                        @endif
                    </div>
                </div>
                <div class="card-body p-0">
                    @if ($notifications->isEmpty())
                        <p class="text-muted mb-0 p-3">{{ __('You have no notifications yet.') }}</p>
                    @else
                        <div class="list-group list-group-flush">
                            @foreach ($notifications as $notification)
                                <a href="{{ route('notifications.show', $notification->id) }}"
                                   class="list-group-item list-group-item-action d-flex justify-content-between align-items-start {{ $notification->read_at ? '' : 'list-group-item-light fw-semibold' }}">
                                    <div class="me-2">
                                        <div class="small text-muted">{{ class_basename($notification->type) }}</div>
                                        <div>{{ $notification->data['message'] ?? __('Notification') }}</div>
                                        <div class="small text-muted mt-1">{{ $notification->created_at->diffForHumans() }}</div>
                                    </div>
                                    @if ($notification->read_at === null)
                                        <span class="badge bg-primary rounded-pill align-self-center">{{ __('Unread') }}</span>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                        <div class="p-3">
                            {{ $notifications->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
