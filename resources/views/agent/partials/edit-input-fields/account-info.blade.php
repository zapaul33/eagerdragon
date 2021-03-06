<div class="card card-block">
    <div class="card-title-block">
        <h3 class="title">Account Information</h3>
    </div>
    <div class="row">
		<div class="col-md-6">
			<div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
                <label class="control-label">
                    Username <span class="required">*</span>
                </label>
                <input type="username" 
                    name="username" 
                    class="form-control"
                    @if (old('username'))
                        value="{{ old('username') }}"
                    @elseif (isset($user))
                        value="{{ $user->username }}"
                    @endif
                    required
                > 
                @if ($errors->has('username'))                                    
                    <span class="has-error">
                        {{ $errors->first('username') }}
                    </span>
                @endif
            </div>
		</div>
		<div class="col-md-6">
			<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                <label class="control-label">
                    Email <span class="required">*</span>
                </label>
                <input type="email" 
                    name="email" 
                    class="form-control"
                    @if (old('email'))
                        value="{{ old('email') }}"
                    @elseif (isset($user))
                        value="{{ $user->email }}"
                    @endif
                    required
                > 
                @if ($errors->has('email'))                                    
                    <span class="has-error">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
		</div>
    </div>
</div>