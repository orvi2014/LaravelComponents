<div class="row">
<div class="col-md-8 justify-content-center">
<div class="card">
<div class="card-header">Test from email</div>
<div class="card-body">
<form method="POST" action="{{url ('send/email')}}">
					{{ csrf_field() }}
					<div class="col-md-6">
						<div class="form-group">
							<input id="name" name="name" type="text" class="form-control" placeholder="Name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input id="email" name="email" type="text" class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<textarea id="message" name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
						</div>
					</div>
					<button class="btn btn-primary" type="submit">Send Message</button>
</form>

</div>

</div>

</div>
</div>