@extends('layouts.web')

@section('title', 'Contact Us')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-5">Contact Us</h1>

                <form>
                    @csrf

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>

                <div class="mt-5">
                    <h4>Contact Information</h4>
                    <p>Email: info@example.com</p>
                    <p>Phone: +1 (123) 456-7890</p>
                    <p>Address: 123 Main Street, Cityville, Country</p>
                </div>
            </div>
        </div>
    </div>
@endsection
