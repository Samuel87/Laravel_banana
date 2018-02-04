@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        	<div class="col-md-3">
				@component('components.sidebar')@endcomponent
        	</div>
        	<div class="col-md-5">
				<h3>Contact Us</h3>
                <form class="contact-form js-contact">
                    {{ csrf_field() }}

                    <label class="control-label">Name</label>
                    <div class="form-group">
                        <input type="text" class="form-control form_field js-field-name" name="name" required>
                    </div>
                    <label class="control-label">E-mail</label>
                    <div class="form-group">
                        <input type="email" class="form-control form_field js-field-email" name="email" required>
                    </div>
                    <label class="control-label">Message</label>
                    <div class="form-group">
                        <textarea class="form-control form_field js-field-message" type="textarea" maxlength="140" rows="7" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form_submit">Send</button>

                </form>
        	</div>
    </div>
</div>
@endsection
