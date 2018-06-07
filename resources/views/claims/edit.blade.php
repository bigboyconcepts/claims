@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ url('claims', $claim->id) }}" class="form-horizontal">
            @method('PATCH')
            @csrf
            <fieldset>
            <legend>Create New Claim</legend>
            <div class="form-group">
                <label class="col-md-4 control-label" for="customerName">CustomerName</label>  
                <div class="col-md-4">
                <input value="{{ $claim->customer_name }}" id="customerName" name="customerName" type="text" placeholder="Customer Name" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="opportunityId">Opportunity ID</label>  
                <div class="col-md-4">
                    <input value="{{ $claim->opportunity_id }}" id="opportunityId" name="opportunityId" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="country">Country</label>  
                <div class="col-md-4">
                    <input value="{{ $claim->country }}" id="country" name="country" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="activityDate">Activity Date</label>  
                <div class="col-md-4">
                    <input value="{{ $claim->activity_date }}" id="activityDate" name="activityDate" type="text" placeholder="mm/dd/yyyy" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="value">Value</label>  
                <div class="col-md-4">
                    <input value="{{ $claim->value }}" id="value" name="value" type="text" placeholder="$0.00" class="form-control input-md" required="">
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