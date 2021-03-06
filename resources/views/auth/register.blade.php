@extends('front.welcome')
@section('title','Registration')
@push('css')
<style>
    .formfield * {
  vertical-align: middle;
}
</style>
@endpush
@section('content')
<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>Register</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
            <div class=" main-content-area">
                <div class="wrap-login-item ">
                    <div class="register-form form-item ">
                        <form action="{{ route('register') }}" class="form-stl" action="#" name="frm-login" method="post" >
                            @csrf
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Create an account</h3>
                            </fieldset>									
                            <fieldset class="wrap-input">
                                <label for="frm-reg-lname">Name*</label>
                                <input type="text" id="frm-reg-lname" name="name" placeholder="Your name*">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">Email Address*</label>
                                <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">Mobile Number*</label>
                                <input type="text" id="frm-reg-email" name="number" placeholder="Contact number">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">Country*</label>
                                <input type="text" id="frm-reg-email" name="country" placeholder="Your Country">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">City*</label>
                                <input type="text" id="frm-reg-email" name="city" placeholder="Your City">
                            </fieldset>
                            <fieldset class="formfield">
                                <label for="frm-reg-email">Address*</label>
                                <textarea type="text" id="address" name="address" cols="60" rows="4" placeholder="Your address"> </textarea>
                            </fieldset>
                            <fieldset class="formfield">
                                <label for="frm-reg-email">Payment Type*</label>
                                <select name="payment_type" id="payment_type">
                                    <option value="bekash">Bekash</option>
                                    <option value="cashOn">Cash on Delivery</option>
                                </select>
                            </fieldset>
                          
                          
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Login Information</h3>
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half left-item ">
                                <label for="frm-reg-pass">Password *</label>
                                <input type="password" id="password" name="password" placeholder="Password">
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half ">
                                <label for="frm-reg-cfpass">Confirm Password *</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                            </fieldset>
                            <input type="submit" class="btn btn-sign" value="Register" name="register">
                        </form>
                    </div>											
                </div>
            </div><!--end main products area-->		
        </div>
    </div><!--end row-->

</div>
@endsection
