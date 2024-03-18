@extends('layouts')

@section('content')
    <div class="card pb-3">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Position</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->position }}</td>
                            <td>{{ $user->status->status_name }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  
@endsection
