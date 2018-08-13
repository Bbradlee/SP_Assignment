@extends('layouts.app')

@section('content')
    <h1>New Volunteer</h1>
    <p>Please enter information for creating a new volunteer</p>
    {!! Form::open(['action' => 'VolunteersController@store', 'method' => 'POST']) !!}
        <form>
            <div class="form-row">
                {!! Form::label('firstName', 'First Name', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('firstName', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('lastName', 'Last Name', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('lastName', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('userName', 'Username', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('userName', '', ['class' => 'form-control', 'placeholder' => 'User Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('password', 'Password', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('status', 'Status', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {!!  Form::select('status', ['Active' => 'Active', 'Inactive' => 'Inactive', 'Approved' => 'Approved', 'Pending Approval' => 'Pending Approval', 'Disapproved' => 'Disapproved'],  'Pending Approval', ['class' => 'form-control' ]) !!}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('location', 'Perferred Center', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Perferred Center'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('availability', 'Availability', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('availability', '', ['class' => 'form-control', 'placeholder' => 'Availability'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('address', 'Home Address', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address Line 1'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-2">
                </div>
                <div class="col col-md-2">
                    {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address Line 2'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-2">
                </div>
                <div class="col col-md-2">
                    {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-2">
                </div>
                <div class="col col-md-2">
                    {{Form::text('state', '', ['class' => 'form-control', 'placeholder' => 'State'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-2">
                </div>
                <div class="col col-md-2">
                    {{Form::text('zip', '', ['class' => 'form-control', 'placeholder' => 'Zip'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('homePhone', 'Home Phone', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('homePhone', '', ['class' => 'form-control', 'placeholder' => 'Home Phone'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('cellPhone', 'Cell Number', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('cellPhone', '', ['class' => 'form-control', 'placeholder' => 'Cell Phone'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('education', 'Education', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('education', '', ['class' => 'form-control', 'placeholder' => 'Education'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('licenses', 'Professional Licenses', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('licenses', '', ['class' => 'form-control', 'placeholder' => 'Licenses'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('ecName', 'Emergency Contact Name', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('ecName', '', ['class' => 'form-control', 'placeholder' => 'Emergency Contact Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('ecPhone', 'Emergency Contact Phone', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('ecPhone', '', ['class' => 'form-control', 'placeholder' => 'Emergency Contact Phone Number'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
            {!! Form::label('ecEmail', 'Emergency Contact Email', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('ecEmail', '', ['class' => 'form-control', 'placeholder' => 'Emergency Contact Email'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
            {!! Form::label('ecAddress', 'Emergency Contact Address', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('ecAddress', '', ['class' => 'form-control', 'placeholder' => 'Emergancy Contact Address'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
            {!! Form::label('copyLicense', 'Do we have a copy of license?', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('copyLicense', '', ['class' => 'form-control', 'placeholder' => '0 or 1'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
            {!! Form::label('copySS', 'Do we have a copy of SS?', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-2">
                    {{Form::text('copySS', '', ['class' => 'form-control', 'placeholder' => '0 or 1'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                    {!! Form::label('skills', 'Skills', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-4">
                    {{Form::textarea('skills', '', ['class' => 'form-control', 'rows' => 8, 'cols' => 4, 'placeholder' => 'Skills'])}}
                </div>
            </div>
            <div style="padding-top: 10px">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                <a class="btn btn-secondary" href="/volunteers" role="button">Back</a>
            </div>
        </form>
    {!! Form::close() !!}
@endsection