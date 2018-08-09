@extends('layouts.app')

@section('content')
    <h1>Edit Volunteer</h1>
    <p>Please enter information for updating thjis volunteer</p>
    {!! Form::open(['action' => ['VolunteersController@update', $vol->id], 'method' => 'POST']) !!}
        <form>
            <div class="form-row">
                <div class="col col-md-2">
                        {{Form::text('firstName', $vol->firstName, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                </div>
                <div class="col col-md-2">
                        {{Form::text('lastName', $vol->lastName, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('userName', $vol->userName, ['class' => 'form-control', 'placeholder' => 'User Name'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('password', $vol->password, ['class' => 'form-control', 'placeholder' => 'Password'])}}
                </div>
            </div>
            &nbsp;

            <div class="form-row">
                {{Form::label('status', 'Status', ['class' => 'col-lg-2 control-label'] )}}
                <div class="col col-md-2">
                    {!! Form::select('status', ['Active' => 'Active', 'Inactive' => 'Inactive', 'Approved' => 'Approved', 'Pending Approval' => 'Pending Approval', 'Disapproved' => 'Disapproved'], 'Pending Approval', ['class' => 'form-control', 'value' => '{{ $vol->status }}' ]) !!}
                </div>
            </div>
            <div style="padding-top: 10px">
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                <a href="{{ URL::previous() }}" class="btn btn-secondary">Go Back</a>
            </div>
        </form>
    {!! Form::close() !!}
@endsection