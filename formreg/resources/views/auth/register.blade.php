@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="margin-top: 5%;">
                <div class="card-header bg-secondary text-white">{{ __('Individual Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row">
							<div class="col-md-6">
								<label for="gender" class="col-md-6 col-form-label text-md-right">{{ __('Gender') }}</label>
								<br>
								<label for="male">{{ __('Male') }}</label>
								<input id="male" type="radio" name="gender" value="Male">
								<label for="female">{{ __('Female') }}</label>
								<input id="female" type="radio" name="gender" value="Female">
								
							</div>
							<div class="col-md-6">
								<label for="date" class="col-md-6 col-form-label text-md-right">{{ __('Date of birth') }}</label>

								<input id="date" type="date" placeholder="Enter date of birth" class="form-control" name="date" value="{{ old('date') }}">

								
							</div>

						</div>

                        <div class="row">
                            

                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nationality">Nationality</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" id="nationality" name="nationality">
                                        <option value="" selected>Select nationality</option>
                                        <option value="Malawian">Malawian</option>
                                        <option value="Kenyan">Kenyan</option>
                                        <option value="Tanzanian">Tanzanian</option>
                                        <option value="Angolise">Angolise</option>
                                        <option value="Mocambican">Mocambican</option>
                                        <option value="South African">South African</option>
                                        <option value="Zambian">Zambian</option>
                                        <option value="Nigerian">Nigerian</option>
                                    </select>
                                    </div>
                                 <span class="text-danger">@error('nationality'){{ $message }}@enderror</span>    
                                </div>
								{{-- <label for="nationality" class="col-md-6 col-form-label text-md-right">{{ __('Nationality') }}</label>

								<input id="nationality" type="text" placeholder="Enter nationality" class="form-control" name="nationality" value="{{ old('nationality') }}"> --}}

								
							</div> 
							
							<div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <div class="form-control">
                                    <select  class="dropdown-item" id="country" name="country">
                                        <option value="" selected>Select country</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Mocambiqe">Mocambiqe</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Nigeria">Nigeria</option>
                                    </select>
                                    </div>
                                 <span class="text-danger">@error('country'){{ $message }}@enderror</span>    
                                </div>
								{{-- <label for="country" class="col-md-6 col-form-label text-md-right">{{ __('Country') }}</label>

								<input id="country" type="text" placeholder="Enter Country" class="form-control" name="country" value="{{ old('country') }}"> --}}

								
							</div>

						</div>

                        <div class="row">
                            

                            <div class="col-md-12">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-6 offset-md-4" style="margin-left: 40%;">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Submit registration') }}
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
