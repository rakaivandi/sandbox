@extends('layout.main')

@section('content')
    <main class="main">
        <!-- ===============================Home========================================= -->
        <section class="home section" id="home">
            <div class="home__container">
                <div class="home__img">
                    <img src="img/gambar1.jpg" alt="">
                </div>
                <div class="home__content container grid">



                    <div class="home__data">
                        <h3 class="home__subtitle">Welcome To</h3>
                        <h1 class="home__title">SANDBOX</h1>
                        <p class="home__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <img src="img/proto.png" alt="">
                </div>
        </section>

        <!-- =========================================Services==================================== -->
        <section class="services section" id="services">
            <h2 class="section__title">Properties</h2>
            <span class="section__subtitle">list of properties we are working on</span>

            <div class="services__container container grid">
                <!-- Services 1 -->
                @foreach ($properties as $item)
                    <div class="services__content">
                        <div>
                            <i class="uil uil-web-grid services__icon"></i>
                            <h3 class="services__title">{{ $item->name }}</h3>
                        </div>

                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">

                                <i class="uil uil-times services__modal-close"></i>
                                {{-- test --}}
                                <div class="card-wrapper">
                                    <div class="card">

                                        <!-- card left -->
                                        <ul class="services__modal-services grid">
                                            <li class="services__modal-service">
                                                <div class="product-imgs">
                                                    <div class="img-display">
                                                        <div class="img-showcase">
                                                            <img src="/images/{{ $item->image }}">
                                                            <img src="/images/{{ $item->image }}">
                                                            <img src="/images/{{ $item->image }}">
                                                            <img src="/images/{{ $item->image }}">
                                                        </div>
                                                    </div>
                                                    <div class="img-select">
                                                        <div class="img-item">
                                                            <a href="#" data-id="1">
                                                                <img src="/images/{{ $item->image }}">
                                                            </a>
                                                        </div>
                                                        <div class="img-item">
                                                            <a href="#" data-id="2">
                                                                <img src="/images/{{ $item->image }}">
                                                            </a>
                                                        </div>
                                                        <div class="img-item">
                                                            <a href="#" data-id="3">
                                                                <img src="/images/{{ $item->image }}">
                                                            </a>
                                                        </div>
                                                        <div class="img-item">
                                                            <a href="#" data-id="4">
                                                                <img src="/images/{{ $item->image }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- detail --}}
                                                <div class="productxx-info">
                                                    <h4 class="services__modalxx-title">{{ $item->name }}</h4>
                                                    <h4>Description</h4>
                                                    <p>{{ Str::words($item->description, 5, '...') }}</p>
                                                    <h4>Type</h4>
                                                    <p>{{ Str::words($item->type) }}</p>
                                                    <h4>Location</h4>
                                                    <p>{{ $item->location }}</p>
                                                    <h4>Category</h4>
                                                    <p>{{ $item->category }}</p>
                                                    <h4>Price</h4>
                                                    <p>Rp {{ $item->price }}</p>
                                                </div>


                                            </li>
                                            {{-- <h4 class="services__modalxx-title">{{ $item->name }}</h4> --}}

                                        </ul>
                                        <!-- card right -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <!-- Services 2 -->
            <div class="services__content">
                <div>
                    <i class="uil uil-arrow services__icon"></i>
                    <h3 class="services__title">Frontend <br> Developer</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    View More
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modalxx-title">Frontend <br> Developer</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I develop the user interface</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Web page development</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I create ux element interaction</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Services 3 -->
            <div class="services__content">
                <div>
                    <i class="uil uil-pen services__icon"></i>
                    <h3 class="services__title">Branding <br> Designer</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    View More
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modalxx-title">Branding <br> Designer</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I develop the user interface</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Web page development</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I create ux element interaction</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </section>
        {{-- <section style="display: flex; width:100%; justify-content:center">{{ $properties->links() }}</section> --}}

        <!-- ====================================Contact Me======================================= -->
        <section class="contactme section" id="contactme">
            <h2 class="section__title">Contact Me</h2>
            <spam class="section__subtitle">Get in touch</spam>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-mobile-android contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call Me For More Info</h3>
                            <p class="contact__subtitle">087-7189-3471</p>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope-heart contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Email</h3>
                            <p class="contact__subtitle">rkx1227@gmail.com</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('message.store') }}" method="POST" class="contact__form grid">
                    @csrf
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Name</label>
                            <input type="text" class="contact__input" name="name"></input>
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" class="contact__input" name="email"></input>
                        </div>
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Project</label>
                        <input type="text" class="contact__input" name="phone"></input>
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Message</label>
                        <textarea id="" cols="0" rows="7" class="contact__input" name="message"></textarea>
                    </div>

                    <div>
                        <button style="border:none" type="save" class="button button--flex">
                            Send Message
                            <i class="uil uil-message button__icon"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- ================================= Contact ===================================== -->
    </main>
@endsection
