<div>
 <x-customer-layout>
 	  <div class="forgot-pass-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="create-new-pass-form">
                           
                            <div class="forgot-pass-form">
                                <h3 class="h3">Create new password</h3>
                                <p>We'll ask for this password whenever you Sign-In.</p>

                                <x-jet-validation-errors class="mb-4 text-danger" />
                                <form method="POST" action="{{ route('password.update.front') }}">
                                     @csrf

                                    <input type="hidden" name="token" value="{{ request()->get('token') }}">

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" readonly="readonly" value="{{request()->get('email')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="Newpassword">New password</label>
                                        <input type="password" class="form-control" id="Newpassword" aria-describedby="emailHelp" name="password" >
                                        <span>Passwords must be at least 8 characters <br> (must contains uppercase, lowercase, special character, digit)</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="Re-enterPassword">Re-enter password</label>
                                        <input type="password" class="form-control" id="Re-enterPassword" aria-describedby="emailHelp" name="password_confirmation" >
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="site-btn blue-btn">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
 </x-customer-layout>
</div>