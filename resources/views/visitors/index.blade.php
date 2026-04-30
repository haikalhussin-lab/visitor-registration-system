@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('List of Visitors') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>create at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visitors as $visitor)
                                <tr>
                                    <td>{{ $visitor->name }}</td>
                                    <td>{{ $visitor->phone }}</td>
                                    <td>{{ $visitor->email }}</td>
                                    <td>{{ $visitor->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="" class="btn btn-info">Show</a>
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection