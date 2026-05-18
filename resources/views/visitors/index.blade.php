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
                <div class="card-header">{{ __('List of Visitors') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Create at</th>
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
                                        <a href="{{ route('visitors.show', $visitor->id) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('visitors.edit', $visitor->id) }}" class="btn btn-warning">Edit</a>
                                        <a onclick="return confirm('Are you sure want to delete this visitor?')" href="{{ route('visitors.delete', $visitor->id) }}" class="btn btn-danger">Delete</a>
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('List of Deleted Visitors') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Deleted at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deletedVisitors as $deletedVisitor)
                                <tr>
                                    <td>{{ $deletedVisitor->name }}</td>
                                    <td>{{ $deletedVisitor->phone }}</td>
                                    <td>{{ $deletedVisitor->email }}</td>
                                    <td>{{ $deletedVisitor->deleted_at->diffForHumans() }}</td>
                                    <td>
                                       <a href="" class="btn btn-success">Restore</a>
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