@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Hello, {{ $user->name }}</p>
        <h3>Your Claims</h3>
            @foreach($claims as $claim)
                <div class="card container">
                    <p>Claim ID: {{ $claim->id }}</p>
                    <p>Oppotunity ID: {{ $claim->opportunity_id }}</p>
                    <p>Activity Date: {{ $claim->activity_date }}</p>
                    <p>Country: {{ $claim->country }}</p>
                    <p>Value: {{ $claim->value }}</p>
                    <a href="{{ route("claims.edit", $claim->id) }}" class="btn btn-primary">Edit</a>
                    {!! Form::open([
                        'route' => ['claims.destroy', $claim->id],
                        'method' => 'delete'
                    ]) !!}
                        <a type="submit" class="btn btn-secondary">Delete</button>
                    {!! Form::close() !!}
                </div>
            @endforeach
        </ul>
    </div>
@endsection