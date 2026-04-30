@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blog Details') }}</div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $blog->title }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" rows="4" readonly>{{ $blog->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="author" class="col-md-4 col-form-label text-md-end">Author</label>
                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control" name="author" value="{{ $blog->author }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('blogs.index') }}" class="btn btn-warning">{{ __('Back') }}</a>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                                <a onclick="return confirm('Are you sure want to delete this blog?')" href="{{ route('blogs.delete', $blog->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

