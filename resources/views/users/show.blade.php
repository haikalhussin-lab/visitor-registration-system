@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Details') }}</div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('users.index') }}" class="btn btn-warning">{{ __('Back') }}</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                                <a onclick="return confirm('Are you sure want to delete this user?')" href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

