@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Authentication Logs') }}</div>
                <div class="card-body">
                    <p class="text-muted small mb-3">{{ __('Recent sign-ins and sign-outs for your account.') }}</p>
                    <div class="table-responsive">
                        <table class="table table-sm align-middle">
                            <thead>
                                <tr>
                                    <th>{{ __('Login at') }}</th>
                                    <th>{{ __('Logout at') }}</th>
                                    <th>{{ __('IP address') }}</th>
                                    <th>{{ __('User agent') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($logs as $log)
                                    <tr>
                                        <td>{{ optional($log->login_at)->format('Y-m-d H:i:s') ?? '—' }}</td>
                                        <td>{{ optional($log->logout_at)->format('Y-m-d H:i:s') ?? '—' }}</td>
                                        <td><code class="small">{{ $log->ip_address ?? '—' }}</code></td>
                                        <td class="small text-break" title="{{ $log->user_agent }}">{{ \Illuminate\Support\Str::limit($log->user_agent ?? '—', 100) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-muted">{{ __('No authentication activity recorded yet.') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($logs->hasPages())
                        <div class="d-flex justify-content-center mt-3">
                            {{ $logs->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
