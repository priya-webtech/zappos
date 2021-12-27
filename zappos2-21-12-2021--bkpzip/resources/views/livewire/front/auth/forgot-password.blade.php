<div>
 <x-customer-layout>
 	  <div class="forgot-pass-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="create-new-pass-form">
                            
                            <div class="forgot-pass-form">
                                <h3 class="h3">Forgot Password</h3>
                                <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                                 @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route('password.email.front') }}" method="POST">
                                	@csrf
                                    <div class="form-group">
                                        <label for="ForgotEmail">Email</label>
                                        <input type="email" class="form-control" id="ForgotEmail" aria-describedby="emailHelp" placeholder="Enter your email" name="email">
                                    </div>
                                    @if(session()->has('screen') && session()->get('screen') == 'forgot-password')
                                    @error('email')<span class="error text-danger">{{ $message }}</span> @enderror
                                        @php
                                            Illuminate\Support\Facades\Session::forget('screen');
                                        @endphp
                                    @endif
                                    <div class="form-group">
                                        <button type="submit" class="site-btn blue-btn">Email Password Reset Link</button>
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