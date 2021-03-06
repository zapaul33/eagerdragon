<div class="row sameheight-container">
    <div class="col-md-12">
        <div class="card card-block sameheight-item">
            <form role="form" method="POST" action="{{ url('roles') }}">
                {{ csrf_field() }}
                @if(session()->has('success'))
                    <div class="alert alert-success fade in alert-dismissable">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                            <label class="control-label">
                                Name <span class="required">*</span>
                            </label>
                            <input type="text"
                                name="name"
                                class="form-control underlined"
                                value="{{ old('name') }}"
                                required
                                placeholder="Ex. master-admin"
                            >
                            @if ($errors->has('name'))
                                <span class="has-error">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                            <label class="control-label">
                                Title <span class="required">*</span>
                            </label>
                            <input type="text"
                                name="title"
                                class="form-control underlined"
                                value="{{ old('title') }}"
                                required
                                placeholder="Ex. Master Administrator"
                            >
                            @if ($errors->has('title'))
                                <span class="has-error">
                                    {{ $errors->first('title') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <br/>
                    <button type="submit" class="btn btn-block btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>