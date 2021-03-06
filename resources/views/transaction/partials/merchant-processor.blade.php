<div class="row">
	<div class="col-md-6">
		<div class="card card-block card-success">
		<div class="card-title-block">
		    <h3 class="title">{{ trans('app.merchants') }}</h3>
		</div>
			<div class="row">
			    <div class="col-md-12">
					<div class="form-group">
						<select name="merchant_id" 
							class="form-control trans-merchant"
							required 
						>
							<option value="all">-- All Merchants --</option>
							@foreach ($merchants as $merchant)
								<option value="{{ $merchant->id}}">
									{{ $merchant->firstname }} 
									{{ $merchant->lastname }}
								</option>
							@endforeach
						</select>
					</div>
			    </div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card card-block card-success">
		<div class="card-title-block">
		    <h3 class="title">Processors</h3>
		</div>
			<div class="row">
			    <div class="col-md-12">
					<div class="form-group">
						<label class="trans-processor-text">
							-- First Select a Merchant --
						</label>
						<select name="processor_id" 
							class="form-control trans-processor hidden">
						</select>
					</div>
			    </div>
			</div>
		</div>
	</div>
</div>


