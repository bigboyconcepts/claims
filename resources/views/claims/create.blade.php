@extends('layouts.app')

@section('content')
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}
        @endforeach
    </ul>
    <div class="container">
        <form method="POST" action="{{ url('claims') }}" class="form-horizontal">
            @csrf
            <fieldset>
            <legend>Create New Claim</legend>
            <div class="form-group">
                <label class="col-md-4 control-label" for="customerName">Customer Name</label>
                <div class="col-md-4">
                    <input id="customerName" name="customerName" type="text" placeholder="Customer Name" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="opportunityId">Opportunity ID</label>  
                <div class="col-md-4">
                    <input id="opportunityId" name="opportunityId" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="country">Country</label>  
                <div class="col-md-4">
                    <input id="country" name="country" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="activityDate">Activity Date</label>  
                <div class="col-md-4">
                    <input id="activityDate" name="activityDate" type="text" placeholder="mm/dd/yyyy" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="value">Value</label>  
                <div class="col-md-4">
                    <input id="value" name="value" type="text" placeholder="$0.00" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="submitClaim"></label>
                <div class="col-md-4">
                    <button id="submitClaim" name="submitClaim" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </fieldset>
        </form>
    </div>
@endsection