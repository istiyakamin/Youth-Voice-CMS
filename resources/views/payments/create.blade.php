@extends('layouts.app')

@section('content')
<div class="admin-form theme-primary">

    <div id="p1" class="panel heading-border panel-primary">

            

        <div class="panel-body bg-light">

            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="fa fa-warning pr10"></i>
                    <strong>Owwa!!</strong> {{ session()->get('message') }}
                </div>
            @endif

            <form method="POST" action="{{ route('payment.store') }}" id="form-ui">
                {{ csrf_field() }}
                <div class="section-divider " id="spy1">
                    <span>Create a New Payment</span>
                </div>
                <!-- .section-divider -->

                <!-- Basic Inputs -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section">
                            <label class="field select">
                                <select name="name">
                                    <option value="">Select UserName</option>
                                    @foreach ($user_payment as $member_single_name)
                                        <option {{ old('name') == $member_single_name->id? 'selected':'' }} value="{{$member_single_name->id}}">{{ $member_single_name->name }}</option>
                                    @endforeach
                                    
                                </select>
                                <i class="arrow"></i>
                            </label>
                            @if($errors->has('name'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="fa fa-warning pr10"></i>
                                    <strong>Oops!!</strong> {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Input Icons -->
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="section">
                            <label class="field prepend-icon">
                                <input name="which_month_payment" id="which_month_payment" class="gui-input" value="{{old('which_month_payment')}}" placeholder="Which month Payment" type="text">
                                <label for="which_month_payment" class="field-icon"><i class="fa fa-user"></i>
                                </label>
                            </label>
                            @if($errors->has('which_month_payment'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="fa fa-warning pr10"></i>
                                    <strong>Oops!!</strong> {{ $errors->first('which_month_payment') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section">
                            <label class="field append-icon">
                                <input name="amount" min="100" id="amount" class="gui-input" value="{{old('amount')}}" placeholder="Amount" type="number">
                                <label for="amount" class="field-icon"><i class="fa fa-user"></i>
                                </label>
                            </label>
                            @if($errors->has('amount'))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-warning pr10"></i>
                                <strong>Oops!!</strong> {{ $errors->first('amount') }}
                            </div>
                        @endif
                        </div>
                    </div>
                    
                </div>

                <!-- Input Formats -->
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="section">
                            <label class="field prepend-icon">
                                <input name="payment_date" id="payment_date" class="gui-input" value="{{old('payment_date')}}" placeholder="URL input" type="date">
                                <label for="payment_date" class="field-icon"><i class="fa fa-globe"></i>
                                </label>
                            </label>
                            @if($errors->has('payment_date'))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-warning pr10"></i>
                                <strong>Oops!!</strong> {{ $errors->first('payment_date') }}
                            </div>
                        @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section">
                            <label class="field select">
                                <select id="country" name="payment_method">
                                    <option value="">Select Payment Method</option>
                                    <option {{ old('payment_method') == 'Bkash'? 'selected':'' }} value="Bkash">Bkash</option>
                                    <option {{ old('payment_method') == 'Cash'? 'selected':'' }} value="Cash">Cash</option>
                                    <option {{ old('payment_method') == 'Rocket'? 'selected':'' }} value="Rocket">Rocket</option>
                                    <option {{ old('payment_method') == 'Bank Transfer'? 'selected':'' }} value="Bank Transfer">Bank Transfer</option>
                                </select>
                                <i class="arrow"></i>
                            </label>
                            @if($errors->has('payment_method'))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-warning pr10"></i>
                                <strong>Oops!!</strong> {{ $errors->first('payment_method') }}
                            </div>
                        @endif
                        </div>
                    </div>
                    
                    
                </div>

                <!-- Text Areas -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section">
                            <label class="field prepend-icon">
                                <textarea class="gui-textarea" id="comment" name="comment"  placeholder="Note something about this payment">{{old('comment')}}</textarea>
                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                </label>
                                <span class="input-footer">
                                    <strong>Hint:</strong>Don't give any garbase value</span>
                            </label>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
                
               
            </form>
           
        </div>
    </div>
</div>
@endsection