@extends('layouts.frontend')
@section('content')
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    @include('frontend.contact.partials.breadcrumb')
    <!-- breadcrumb start-->

    

    <!-- ================ contact section start ================= -->
    <section class="contact-section padding_top">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div class=" text-center">
                    <iframe src="{{$infos[0]->localisation}}" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">

                    

                    <form class="form-contact contact_form" action="{{ route('storemessage') }} " method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message' required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                    @auth
                                    value="{{ Auth::user()->name }}"                        
                                    @endauth
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder='Enter your name' required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                    @auth
                                    value="{{ Auth::user()->email }}"                        
                                    @endauth
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                        placeholder='Enter email address' required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="sujet" id="sujet" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder='Enter Subject' required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn_3 button-contactForm" type="submit">
                              Send Message
                            </button>
                        </div>


                    </form>


                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>{{$infos[0]->adresse}}</h3>
                            <p>{{$infos[0]->adresse}}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>{{$infos[0]->tel}}</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{$infos[0]->email}}</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
