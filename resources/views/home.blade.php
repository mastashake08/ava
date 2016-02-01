@extends('spark::layouts.app')

@section('content')
<!-- Main Content -->
<div class="container spark-screen">
	@if (Spark::usingTeams() && ! Auth::user()->hasTeams())

		<!-- Teams Are Enabled, But The User Doesn't Have One -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">You Need A Team!</div>

					<div class="panel-body bg-warning">
						It looks like you haven't created a team!
						You can create one in your <a href="/settings?tab=teams">account settings</a>.
					</div>
				</div>
			</div>
		</div>

	@else

		<!-- Teams Are Disabled Or User Is On Team -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Send Notification</div>

					<div class="panel-body">
						<form class="form-horizontal" role="form" action="/notification" method="post">
							<div class="form-group">
								<input class="form-control" placeholder="Message" name="message"/>
								<button type="submit" class="btn btn-success">Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	@endif
</div>
@endsection
