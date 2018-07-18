@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th width="90%">Todo</th>
                                <th>Completed</th>
                            </tr>
                        </thead>
                        @foreach ( $todos as $todo )
                            <tr>
                                <td>{{ $todo->todo }}</td>
                                <td class="text-center">{{ $todo->completed ? 'Ja' : 'Nej' }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
