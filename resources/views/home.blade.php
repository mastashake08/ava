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

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Front Page Literature</div>

					<div class="panel-body">
						To change service icons refer to this <a target="_blank" href="https://fortawesome.github.io/Font-Awesome/cheatsheet/">cheatsheet</a>
						<form class="form-horizontal" role="form" action="/new-front-page-lit" method="post">
							<div class="form-group">
								<input class="form-control" name="title" placeholder="Title" value="{{$frontPage->title}}" />
								<br>
								<input class="form-control" name="company_name" placeholder="Company Name" value="{{$frontPage->company_name}}" />
								Top Page Header 	<input class="form-control"  name="top_page_header" value="{{$frontPage->top_page_header}}">
								Top Page Body 	<textarea class="form-control"  name="top_page_body" value="">{{$frontPage->top_page_body}}</textarea>
								About Page Header 	<input class="form-control"  name="about_page_header" value="{{$frontPage->about_page_header}}">
								About Page Body 	<textarea class="form-control"  name="about_page_body" value="">{{$frontPage->about_page_body}}</textarea>
								Services Page Header 	<input class="form-control"  name="services_page_header" value="{{$frontPage->services_page_header}}">
								Services Page Header1 	<input class="form-control"  name="services_page_header1" value="{{$frontPage->services_page_header1}}">
								Services Page Icon1 	<input class="form-control"  name="services_page_icon1" value="{{$frontPage->services_page_icon1}}">
								Services Page Body1 	<textarea class="form-control"  name="services_page_body1" value="">{{$frontPage->services_page_body1}}</textarea>
								Services Page Header2 	<input class="form-control"  name="services_page_header2" value="{{$frontPage->services_page_header2}}">
								Services Page Icon2 	<input class="form-control"  name="services_page_icon2" value="{{$frontPage->services_page_icon2}}">
								Services Page Body2 	<textarea class="form-control"  name="services_page_body2" value="">{{$frontPage->services_page_body2}}</textarea>
								Services Page Header3 	<input class="form-control"  name="services_page_header3" value="{{$frontPage->services_page_header3}}">
								Services Page Icon3 	<input class="form-control"  name="services_page_icon3" value="{{$frontPage->services_page_icon3}}">
								Services Page Body3 	<textarea class="form-control"  name="services_page_body3" value="">{{$frontPage->services_page_body3}}</textarea>
								Services Page Header4 	<input class="form-control"  name="services_page_header4" value="{{$frontPage->services_page_header4}}">
								Services Page Icon4 	<input class="form-control"  name="services_page_icon4" value="{{$frontPage->services_page_icon4}}">
								Services Page Body4 	<textarea class="form-control"  name="services_page_body4" value="">{{$frontPage->services_page_body4}}</textarea>
								Call To Action 	<input class="form-control"  name="call_to_action_body" value="{{$frontPage->call_to_action_body}}">
								Contact Page Header 	<input class="form-control" type="text" name="contact_page_header" value="{{$frontPage->contact_page_header}}">
								Contact Page Phone 	<input class="form-control" type="tel" name="contact_page_phone" value="{{$frontPage->contact_page_phone}}">
								Contact Page Email 	<input class="form-control" type="email" name="contact_page_email" value="{{$frontPage->contact_page_email}}">
								Contact Page Body 	<textarea class="form-control"  name="contact_page_body" value="">{{$frontPage->contact_page_body}}</textarea>
								<button type="submit" class="btn btn-success">Set Literature</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	@endif
</div>
@endsection
