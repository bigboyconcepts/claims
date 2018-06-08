@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Hello, {{ $user->name }}</p>
        <h3>Your Claims</h3>
            @foreach($claims as $claim)
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="w-50 float-left">Claim ID: {{ $claim->id }}</h3>
                        {!! Form::open([
                            'route' => ['claims.destroy', $claim->id],
                            'method' => 'delete',
                            'class' => 'float-right'
                        ]) !!}
                            <button type="submit" class="btn btn-secondary pull-right">x</button>
                        {!! Form::close() !!}
                    </div>
                    <div class="card-body container">
                        <p>Oppotunity ID: {{ $claim->opportunity_id }}</p>
                        <p>Activity Date: {{ $claim->activity_date }}</p>
                        <p>Country: {{ $claim->country }}</p>
                        <p>Value: {{ $claim->value }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route("claims.edit", $claim->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
@endsection