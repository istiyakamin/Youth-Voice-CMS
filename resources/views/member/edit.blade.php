@extends('layouts.app')

@section('content')

@if (session('message'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="fa fa-check pr10"></i>
    <strong>{{ session('message') }}</strong></div>
@endif

<div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["200","fadeIn"]'>
    <div class="mw1100 center-block">

        <!-- begin: .admin-form -->
        <div class="admin-form">

            <div id="p1" class="panel heading-border">

                <div class="panel-body bg-light">
                    <form method="POST" action="{{ url('/profile/' . Auth()->user()->id .'/edit/update')}}" enctype="multipart/form-data" id="account2">
                        {{ csrf_field() }}
                        <div class="panel-body p25 bg-light">
                            <div class="section-divider mt10 mb40">
                                <span>Edit your Profile Information</span>
                            </div>
                            <!-- .section-divider -->

                            <div class="section">
                                    <label for="name" class="field prepend-icon">
                                        <input type="text" name="name" id="name" value="{{ $user_edit->name }}" class="gui-input" >
                                        <label for="name" class="field-icon"><i class="fa fa-user"></i>
                                        </label>

                                        
                                        @if($errors->has('name'))
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <i class="fa fa-warning pr10"></i>
                                                <strong>Oops!!</strong> {{ $errors->first('name') }}
                                            </div>
                                        @endif

                                    </label>
                                <!-- end section -->

                            
                                <!-- end section -->
                            </div>
                            <!-- end .section row section -->

                            <div class="section">
                                <label class="field prepend-icon append-button file">
                                    <span class="button btn-primary">Choose Photo</span>
                                    <input class="gui-file" name="profile_picture"  id="file1" onchange="document.getElementById('uploader1').value = this.value;" accept="image/*" type="file">
                                    <input class="gui-input" name="profile_picture" value="{{$user_edit->profile_picture}}" id="uploader1" placeholder="Please Upload a Profile Picture" type="text">
                                    <label class="field-icon"><i class="fa fa-upload"></i>
                                    </label>
                                </label>
                            </div>

                        
                            <div class="section">
                                <label for="gender" class="field select">
                                    <div class="field select">
                                        <select name="gender" id="gender" class="gui-input">
                                            <option value="">Select Gender</option>
                                            <option {{ $user_edit->gender == 'Male'? 'selected':''}} value="Male">Male</option>
                                            <option {{ $user_edit->gender == 'Female'? 'selected':''}} value="Female">Female</option>
                                            <option {{ $user_edit->gender == 'Others'? 'selected':''}} value="Others">Others</option>
                                        </select>
                                    </div>

                                    @if($errors->has('gender'))
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <i class="fa fa-warning pr10"></i>
                                                <strong>Oops!!</strong> {{ $errors->first('gender') }}
                                            </div>
                                        @endif
                                    
                                </label>
                            </div>
                            <!-- end section -->

                        
                            <div class="section">
                                <label for="occupation" class="field prepend-icon">
                                    <input type="text" name="occupation" id="occupation" value="{{$user_edit->occupation}}" class="gui-input" placeholder="occupation">
                                    <label for="occupation" class="field-icon"><i class="fa fa-briefcase"></i>
                                    </label>
                                </label>
                                @if($errors->has('occupation'))
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <i class="fa fa-warning pr10"></i>
                                        <strong>Oops!!</strong> {{ $errors->first('occupation') }}
                                    </div>
                                @endif
                            </div>

                            <div class="section">
                                <div class="smart-widget sm-left sml-160">
                                    <label class="field">
                                        <input id="sm2" name="facebook" class="gui-input" placeholder="https://facebook.com/yourProfile"
                                        value="{{$user_edit->facebook}}" pattern="https://facebook.com.*" type="url">
                                    </label>
                                    <label for="sm2" class="button btn-primary">Facebook Profile</label>
                                </div>
                                <!-- end .smart-widget section -->
                            </div>

                            <div class="section">
                                <div class="smart-widget sm-left sml-160">
                                    <label class="field">
                                        <input id="sm2" name="twitter" class="gui-input" placeholder="https://twitter.com/yourProfile"
                                        value="{{$user_edit->twitter}}" pattern="https://twitter.com.*" type="url">
                                    </label>
                                    <label for="sm2" class="button btn-primary">Twitter Profile</label>
                                </div>
                                <!-- end .smart-widget section -->
                            </div>

                            <div class="section">
                                <div class="smart-widget sm-left sml-160">
                                    <label class="field">
                                        <input id="sm2" name="linkedin" class="gui-input" placeholder="https://linkedin.com/yourProfile"
                                        value="{{$user_edit->linkedin}}" pattern="https://linkedin.com.*" type="url">
                                    </label>
                                    <label for="sm2" class="button btn-primary">Linkedin Profile</label>
                                </div>
                                <!-- end .smart-widget section -->
                            </div>

                            <div class="section">
                                <label class="field prepend-icon">
                                    <textarea class="gui-textarea" id="address" name="address" placeholder="Put Down your address">{{$user_edit->address    }}</textarea>
                                    <label for="address" class="field-icon"><i class="fa fa-home"></i>
                                    </label>
                                    <span class="input-footer">
                                        <strong>Hint:</strong>Don't give any false information here...</span>
                                </label>
                                <br>    
                                @if($errors->has('address'))
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <i class="fa fa-warning pr10"></i>
                                                <strong>Oops!!</strong> {{ $errors->first('address') }}
                                            </div>
                                        @endif
                            </div>

                            <div class=" clearfix">
                                <button type="submit" class="button btn-primary btn-lg">Update Account</button>
                            </div>

                        </div>
                        <!-- end .form-body section -->
                        
                        <!-- end .form-footer section -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript" src="{{ asset('assets/js/pages/login/EasePack.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/login/rAF.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/login/TweenLite.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/login/login.js')}}"></script>
@endsection