@extends('backend.layouts.layout')

@section('content')
<section class="align-items-center d-flex h-100 bg-white">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto text-center py-4">
				<img src="{{ static_asset('assets/img/maintainance.svg') }}" class="img-fluid w-75">
			    <h3 class="fw-600 mt-5">{{translate('Coming Soon.')}}</h3>
			    <div class="lead">{{translate('Something Big is Coming Your Way!')}}</div>
			    <br>
			    <div class="lead">{{translate('In the meantime, kindly subscribe to our newsletter for updates')}}</div>
			    <br>
			    <div class="lead"">
                    <form class="lead" method="POST" action="{{ route('subscribers.store') }}">
                    @csrf
                        <div class="form-group mb-0">
                            <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #FCBB45">
                            {{ translate('Subscribe') }}
                        </button>
                    </form>
                </div>
			</div>
		</div>
	</div>
</section>
@endsection
