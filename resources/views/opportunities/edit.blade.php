@extends('layouts.app')

@section('content')
    <h1>Edit Opportunity</h1>
    <p>Please enter information for editing this opportunity</p>
    {!! Form::open(['action' => ['OpportunityController@update', $opp->id], 'method' => 'POST']) !!}
        <form>
            <div class="form-row">
                {!! Form::label('name', 'Opportunity Name', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('name', $opp->name, ['class' => 'form-control', 'placeholder' => 'Opportunity Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('center', 'Center', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('center', $opp->center, ['class' => 'form-control', 'placeholder' => 'Center'])}}
                </div>
            </div>
            &nbsp;
            <div style="padding-top: 10px">
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                <a href="{{ URL::previous() }}" class="btn btn-secondary">Go Back</a>
            </div>
        </form>
    {!! Form::close() !!}
@endsection