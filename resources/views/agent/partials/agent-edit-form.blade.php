<div class="card card-block sameheight-item">                    
    {{ csrf_field() }}  
    <input name="_method" type="hidden" value="PATCH">
    <input name="user_id" type="hidden" value="{{ $user->id }}"> 

    <div class="card-title-block">
        <h3 class="title">Basic Information</h3>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{$errors->has('firstname') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Firstname <span class="required">*</span>
                </label>
                <input type="text" 
                    name="firstname" 
                    class="form-control underlined"
                    value="{{ 
                        $user->firstname
                        ?: old('firstname')                        
                    }}"
                    required
                > 
                @if ($errors->has('firstname'))                                    
                    <span class="has-error">
                        {{ $errors->first('firstname') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{$errors->has('lastname') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Lastname <span class="required">*</span>
                </label>
                <input type="text" 
                    name="lastname" 
                    class="form-control underlined"
                    value="{{ 
                        $user->lastname
                        ?: old('lastname')                        
                    }}"
                    required
                > 
                @if ($errors->has('lastname'))                                    
                    <span class="has-error">
                        {{ $errors->first('lastname') }}
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Email <span class="required">*</span>
                </label>
                <input type="email" 
                    name="email" 
                    class="form-control underlined"
                    value="{{ 
                        $user->email
                        ?: old('email')                        
                    }}"
                    required
                > 
                @if ($errors->has('email'))                                    
                    <span class="has-error">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Username <span class="required">*</span>
                </label>
                <input type="text" 
                    name="username" 
                    class="form-control underlined"
                    value="{{ 
                        $user->username
                        ?: old('username')                        
                    }}"
                    required
                > 
                @if ($errors->has('username'))                                    
                    <span class="has-error">
                        {{ $errors->first('username') }}
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{$errors->has('mobile_number') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Mobile Number <span class="required">*</span>
                </label>
                <input type="text" 
                    name="mobile_number" 
                    class="form-control underlined"
                    value="{{ 
                        $user->mobile_number
                        ?: old('mobile_number')                        
                    }}"
                    required
                > 
                @if ($errors->has('mobile_number'))                                    
                    <span class="has-error">
                        {{ $errors->first('mobile_number') }}
                    </span>
                @endif
            </div>
        </div>  
        <div class="col-md-6">
            <div class="form-group {{$errors->has('status') ? 'has-error' : ''}}"> 
                <label class="control-label">
                    Status <span class="required">*</span>
                </label>                         
                <select class="form-control underlined" name="status" required>
                    <option value=""> Select Status </option>
                    @foreach($userPresetStatus as $status)
                        <option value="{{ $status }}" 
                            @if (
                                    old('status') === $status || 
                                    isset($user) &&
                                    $user->status === $status
                                )
                                    selected
                                @endif
                        >
                            {{ ucfirst($status) }}  
                        </option> 
                    @endforeach                           
                </select>
                @if ($errors->has('status'))                                    
                    <span class="has-error">
                        {{ $errors->first('status') }}
                    </span>
                @endif
            </div>
        </div> 
    </div>

    <hr/>
    <div class="card-title-block">
        <h3 class="title">Commission Payment Information</h3>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{$errors->has('account_number') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Account Number <span class="required">*</span>
                </label>
                <input type="text" 
                    name="account_number" 
                    class="form-control underlined"
                    value="{{ 
                        $user->agentAccount->account_number
                        ?: old('account_number')                        
                    }}"
                    required
                > 
                @if ($errors->has('account_number'))                      
                    <span class="has-error">
                        {{ $errors->first('account_number') }}
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group {{$errors->has('legal_name') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Legal Name (Name on Tax Return) <span class="required">*</span>
                </label>
                <input type="text" 
                    name="legal_name" 
                    class="form-control underlined"
                    value="{{ 
                        $user->agentAccount->legal_name
                        ?: old('legal_name')                        
                    }}"
                    required
                > 
                @if ($errors->has('legal_name'))   
                    <span class="has-error">
                        {{ $errors->first('legal_name') }}
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{$errors->has('tax_id') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Tax ID (EIN or SSN) <span class="required">*</span>
                </label>
                <input type="text" 
                    name="tax_id" 
                    class="form-control underlined"
                    value="{{ 
                        $user->agentAccount->tax_id
                        ?: old('tax_id')                        
                    }}"
                    required
                > 
                @if ($errors->has('tax_id'))                                    
                    <span class="has-error">
                        {{ $errors->first('tax_id') }}
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group {{$errors->has('business_type') ? 'has-error' : ''}}">            
                <label class="control-label">
                    Business Type <span class="required">*</span>
                </label>
                <input type="text" 
                    name="business_type" 
                    class="form-control underlined"
                    value="{{ 
                        $user->agentAccount->business_type
                        ?: old('business_type')                        
                    }}"
                    required
                > 
                @if ($errors->has('business_type'))                                    
                    <span class="has-error">
                        {{ $errors->first('business_type') }}
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{$errors->has('swift_routing_number') ? 'has-error' : ''}}">            
                <label class="control-label">
                    ABA\Swift Routing Number <span class="required">*</span>
                </label>
                <input type="text" 
                    name="swift_routing_number" 
                    class="form-control underlined"
                    value="{{ 
                        $user->agentAccount->swift_routing_number
                        ?: old('swift_routing_number')                        
                    }}"
                    required 
                >
                
                <span class="small">The Legal Company Name, 
                Business Type and Tax ID must match the 
                name on the bank account information above.</span> 
                
                @if ($errors->has('swift_routing_number'))                                    
                    <span class="has-error">
                        {{ $errors->first('swift_routing_number') }}
                    </span>
                @endif
            </div>
        </div>            
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group"> 
                <br/>
                <button type="submit" class="btn btn-block btn-primary">
                    Submit
                </button> 
            </div>
        </div>  
    </div>                      
</div>