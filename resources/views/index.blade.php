<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlNOUR</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <style>
        #imges{
    width: 45px;
}
    </style>
</head>
<body>

    <!-- header -->
    <header class="header bg-blue">
        <nav class="navbar bg-blue">
            <div class="container flex">
                <a href="index.html" class="navbar-brand">
                    <img src="/logo.png" id="imges" alt="site logo">
                </a>
                <button type="button" class="navbar-show-btn">
                    <img src="images/ham-menu-icon.png">
                </button>
                <div class="navbar-collapse bg-white">
                    <button type="button" class="navbar-hide-btn">
                        <img src="images/close-icon.png">
                    </button>
                    <div class="navbar-nav">
                        <!-- بدء عنصر ال select -->
    <select class="nav-item" onchange="window.location.href = this.value;">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <option value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            @if(LaravelLocalization::getCurrentLocale()==$localeCode) selected @endif>
        {{ $properties['native'] }}
    </option>
    @endforeach
</select>
    @if (auth()->check())
        
        <div class="nav-item">
            <a href="/profile" class="nav-link"> {{ trans('messages.profile') }}</a>
        </div>
        <div class="nav-item">
            <a href="/reservations" class="nav-link"> {{ trans('messages.dashboard') }}</a>
        </div>
    @else
        <div class="nav-item">
            <a href="/login" class="nav-link"> {{ trans('messages.login') }}</a>
        </div>
    @endif
   



    <!-- انتهاء عنصر ال select -->

    <div class="nav-item">
        <a href="/videos" class="nav-link">{{ trans('messages.our_works') }}</a>
    </div>
    <div class="nav-item">
        <a href="#services" class="nav-link">{{ trans('messages.our_services') }}</a>
    </div>
    <div class="nav-item">
        <a href="#post" class="nav-link"> {{ trans('messages.medical_articles') }}</a>
    </div>
</div>

   
    
</div>

                </div> 
            </div>
        </nav>

        <div class="header-inner text-white text-center">
            <div class="container grid">
                <div class="header-inner-left">
                    <h1> <br> <span>{{ trans('messages.Noor') }}  </span></h1>
                    <p class="lead">{{ trans('messages.we_at_our_clinic_are_committed_to_providing_high_quality_medical_services') }}  </p>
                    <p class="text text-md">{{ trans('messages.we_take_pride_in_providing_high_quality_dental_services_with_personal_care_to_our_valued_patients') }}</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-white"> {{ trans('messages.learn_more') }}</a>
                        <a href="/login" class="btn btn-light-blue"> {{ trans('messages.login') }} </a>
                    </div>
                </div>
                <div class="header-inner-right">
                    <img src="logo.png">
                </div>
            </div>
        </div>

    </header>
    <!-- end of header -->

    <main>
        <!-- about section -->
        <section id="about" class="about py">
            <div class="about-inner">
                <div class="container grid">
                    <div class="about-left text-center">
                        <div class="section-head">
                            <h2>About Us</h2>
                            <div class="border-line"></div>
                        </div>
                        <p class="text text-lg"> {{ trans('messages.I_am_a_specialist_dentist_with_a_Bachelor_degree_in_Dentistry_from_Cairo_University') }}  </p>
                        <a href="#" class="btn btn-white">Learn More</a>
                    </div>
                    <div class="about-right flex">
                        <div class="img">
                            <img src="images/doc-group-2.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- services section -->
        <section id="services" class="services py">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="lead">{{ trans('messages.services') }}</h2>
                    <p class="text text-lg">      </p>
                    <div class="line-art flex">
                        <div></div>
                        <img src="images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class="services-inner text-center grid">
                    <article class="service-item">
                        <div class="icon">
                        <img src="images/imag_1.png">
                        </div>
                        <h3>   {{ trans('messages.oral_and_maxillofacial_surgery') }} </h3>
                        <p class="text text-sm"> {{ trans('messages.including_extraction_of_teeth_and_dental_tumors_fixation_of_jaws_and_repair_of_tooth_fractures_excision_of_tumors_and_abscesses_in_the_oral_and_facial_areas') }}</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                        <img src="images/image_2.png">
                        </div>
                        <h3> {{ trans('messages.orthodontics') }} </h3>
                        <p class="text text-sm"> {{ trans('messages.utilizing_the_latest_orthodontic_techniques_to_correct_tooth_alignment_and_improve_jaw_appearance') }}</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                        <img src="images/imag_1.png">
                        </div>
                        <h3> {{ trans('messages.dental_implants') }} </h3>
                        <p class="text text-sm"> {{ trans('messages.dental_implants_for_replacing_missing_teeth_and_restoring_function_and_natural_appearance_to_the_mouth') }}</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                        <img src="images/image_2.png">
                        </div>
                        <h3>  {{ trans('messages.cosmetic_treatments') }} </h3>
                        <p class="text text-sm"> {{ trans('messages.teeth_whitening_using_the_latest_safe_and_effective_techniques_correction') }}</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of services section -->
        <!-- package services section -->
        <section id="package-service " class="package-service py text-center">
            <div class="container">
                <div class="package-service-head text-white">
                    <h2 id="post">{{ trans('messages.Articles') }} </h2>
                </div>
                <div class="package-service-inner grid">
                @if (isset($posts) && !$posts->isEmpty())
            @foreach($posts as $post)
                <div class="card">
                    <div class="card_head">
                    <img src="images/imag_1.png">
                        <p>AlNOUR</p>
                    </div>
                    <div class="card-body">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
            @endforeach
        @else
        
        @endif


                </div>
            </div>
        </section>
        <!-- end of package services section -->

        <!-- contact section -->
        <section id="contact" class="contact py">
            <div class="container grid">
            <div class="contact-left">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1074.4157303168217!2d36.730787990368356!3d36.20038166964988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1525709eb87eab7b%3A0xa2b2a7425ecd32e!2z2LPYsdmF2K_Yp9iMINiz2YjYsdmK2Kc!5e0!3m2!1sar!2s!4v1714668634890!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead"> اتصل بنا </h3>
                        <p class="text text-md">احجز دور في اليعادة السنية </p>
                    </div>
                    <form action="{{ route('reservations.store') }}" method="post">
                        @csrf
                        <div class="form-element">
                            <input type="text" name="name" class="form-control" placeholder="الاسم الثلاثي">
                        </div>
                        <div class="form-element">
                            <input type="number" name="age" class="form-control" placeholder="العمر">
                        </div>
                        <div class="form-element">
                            <input type="text" name="address" class="form-control" placeholder="مكان الاقامة">
                        </div>
                        <div class="form-element">
                            <input type="text" name="hour" class="form-control" placeholder="رقم الواتس">
                        </div>
                        <div class="form-element">
                            <input type="text" name="day" class="form-control" placeholder="اليوم">
                        </div>
                        <div class="form-element">
                            <input type="datetime-local" name="date_time" class="form-control" placeholder="التاريخ والوقت">
                        </div>
                        <button type="submit" class="btn btn-white btn-submit">
                            <i class="fas fa-arrow-right"></i> إرسال الرسالة
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
    </main>

    <!-- footer  -->
    <footer id="footer" class="footer text-center">
        <div class="container">
            <div class="footer-inner text-white py grid">
                <div class="footer-item">
                    <h3 class="footer-head">about us</h3>
                    <div class="icon">
                        <img src="/logo.png">
                    </div>
                    <p class="text text-md">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis saepe incidunt fugiat optio corporis ea!</p>
                    <address>
                        Medic Clinic <br>
                        69 Deerpark Rd, Mount Merrion <br>
                        Co. Dublin, A94 E9D3 <br>
                        Ireland
                    </address>
                </div>
                <div class="footer-item">
                    <h3 class="footer-head">tags</h3>
                    <ul class="tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>medication</li>
                        <li>nurse</li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h3 class="footer-head">Quick Links</h3>
                    <ul>
                        <li><a href="#" class="text-white">Our Services</a></li>
                        <li><a href="#" class="text-white">Our Plan</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Appointment Schedule</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h3 class="footer-head">make an appointment</h3>
                    <p class="text text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, omnis.</p>
                    <ul class="appointment-info">
                        <li>8:00 AM - 11:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>8:00 PM - 11:00 PM</li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>revomedic@gmail.com</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+003 478 2834(00)</span>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>
    </footer>
    <!-- end of footer  -->

    <!-- custom js -->
    <script src="js/script.js"></script>

 

    <script>
@if(session('info'))
toastr.options={ "progressBar":true,}
toastr.success('{{ session('info') }}');
@endif
</script>
<script src="{{ asset('sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
    <script src="{{ asset('sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    
</body>

</html>
