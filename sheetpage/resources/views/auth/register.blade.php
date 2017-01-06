@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                                             <div class="form-group{{ $errors->has('Date') ? ' has-error' : '' }}">
                            <label for="Date" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="Date" type="Date" class="form-control" name="Date" value="{{ old('Date') }}" required autofocus>

                                @if ($errors->has('Date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Project') ? ' has-error' : '' }}">
                            <label for="Project" class="col-md-4 control-label">Project</label>

                            <div class="col-md-6">
                                <input id="Project" type="text" class="form-control" name="Project" value="{{ old('Project') }}" required>

                                @if ($errors->has('Project'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Project') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('TicketNumber') ? ' has-error' : '' }}">
                            <label for="TicketNumber" class="col-md-4 control-label">TicketNumber</label>
                            <div class="col-md-6">
                               <input id="TicketNumber" type="integer" class="form-control" name="TicketNumber" value="{{ old('TicketNumber') }}" required>
                               
                                @if ($errors->has('TicketNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('TicketNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('TicketSubject') ? ' has-error' : '' }}">
                            <label for="TicketSubject" class="col-md-4 control-label">Ticket Subject</label>

                            <div class="col-md-6">
                                <input id="TicketSubject" type="text" class="form-control" name="TicketSubject" value="{{ old('TicketSubject') }}" required>

                                @if ($errors->has('TicketSubject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('TicketSubject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Timein') ? ' has-error' : '' }}">
                            <label for="Timein" class="col-md-4 control-label">Timein</label>

                            <div class="col-md-6">
                                <input id="Timein" type="Time" class="form-control" name="Timein" value="{{ old('Timein') }}" required>

                                @if ($errors->has('Timein'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Timein') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group{{ $errors->has('Timeout') ? ' has-error' : '' }}">
                            <label for="Timeout" class="col-md-4 control-label">Timeout</label>

                            <div class="col-md-6">
                                <input id="Timeout" type="Time" class="form-control" name="Timeout" value="{{ old('Timeout') }}" required>

                                @if ($errors->has('Timeout'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Timeout') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
