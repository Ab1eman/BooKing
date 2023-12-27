@extends('layouts.web')

@section('title', 'About Us')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-5">About Us</h1>

                <p class="lead">
                    Welcome to our bookstore, where passion for reading meets a curated collection of exceptional books.
                    Our mission is to provide book enthusiasts with a diverse and enriching reading experience.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum finibus massa, eget
                    dapibus justo tristique vel. Integer cursus fringilla neque, sit amet luctus justo fermentum id.
                    Nunc nec purus vel odio feugiat ullamcorper. Proin vitae lacus eget libero pharetra imperdiet.
                    Suspendisse potenti. Curabitur a purus vel mauris commodo imperdiet ut id odio.
                </p>

                <p>
                    Fusce id felis ac libero dignissim dapibus. In hac habitasse platea dictumst. Duis sodales
                    tincidunt ligula, nec malesuada odio. Suspendisse ullamcorper euismod felis, id dapibus velit
                    gravida nec. Etiam euismod lectus eget consequat malesuada.
                </p>

                <p class="text-center mt-5">
                    <strong>Our Team</strong>
                </p>

                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="{{ asset('images/team-member1.jpg') }}" alt="Team Member 1" class="img-fluid rounded-circle mb-3" style="width: 150px;">
                        <h4>John Doe</h4>
                        <p class="text-muted">Founder</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/team-member2.jpg') }}" alt="Team Member 2" class="img-fluid rounded-circle mb-3" style="width: 150px;">
                        <h4>Jane Doe</h4>
                        <p class="text-muted">Designer</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/team-member3.jpg') }}" alt="Team Member 3" class="img-fluid rounded-circle mb-3" style="width: 150px;">
                        <h4>Mark Smith</h4>
                        <p class="text-muted">Developer</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
