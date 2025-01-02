    <!DOCTYPE html>
    <html lang="en">

    <head>
        <x-cdn />
        <title>Dee Sweat Camp</title>
    </head>

    <body>
        <div class="main-div-hero vh-100 d-flex flex-column" id="hero">
            <x-navbarlight />
            <div class="my-auto mx-5 hero-header offer-card">
                <div class="text-white">
                    <h1 class="my-3">Dee Sweat Camp</h1>
                    <p class="my-3"> Less chatting more Sweating. Get your money's worth.</p>
                </div>
                <div class="d-flex gap-5 my-5">
                    <a href="{{Route('price')}}">
                        <button class="button-71" role="button">Get Started</button>

                    </a>
                </div>
            </div>
        </div>
        <div class="p-5 text-white rounded text-center jumbo" style="background:#585858;">
            <h1 class="mb-5">Welcome to Dee Sweat Camp</h1>
            <p class="my-5 fs-5">At our gym, you’re more than just a member—you’re family.
                From the moment you walk through the doors, you’re greeted with smiles, encouragement,
                and a genuine sense of belonging. Our coaches know your name, celebrate your progress,
                and are always there to support your goals. Fellow members become friends, sharing
                not just workouts but laughter and motivation.
                It’s a place where fitness meets community, and together, we push limits,
                lift each other up, and grow stronger every day.</p>
        </div>
        <section id="offer-div">
            <h1 class="text-center my-4">What We Offer</h1>
            <div class="contact-container row my-5 card-effect card-hide offer-card">
                <div class="col-sm-12 col-md-12 col-lg-6 col-img bg-light  d-flex flex-column">
                    <img src="/p1.jpg" class="">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 py-5 form-div">
                    <h4 class="text-center ">Strength Training</h4>
                    <p class="lead my-3 text-center mx-auto"
                        style="text-align:justify;word-wrap: break-word;max-width:50%">
                        Our gym specializes in strength training,
                        providing a fully equipped space with free weights,
                        machines, and expert coaching to help you build muscle,
                        improve endurance, and reach your fitness goals. Whether
                        you're a beginner or an experienced lifter, we offer a supportive
                        environment to push your limits and see real results.
                    </p>
                </div>
            </div>
            <div class="contact-container row my-5 game-div card-effect card-hide offer-card" id="reverse-offer">
                <div class="col-sm-12 col-md-12 col-lg-6 py-5">
                    <h4 class="text-center">Weight Loss</h4>
                    <p class="lead my-3 text-center mx-auto"
                        style="text-align:justify;word-wrap: break-word;max-width:50%">
                        Our gym focuses on weight loss through a
                        combination of personalized workout plans, cardio sessions,
                        and nutrition guidance. With a supportive community and expert trainers,
                        we help you burn fat, increase energy, and achieve sustainable results in a motivating
                        and results-driven environment.
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-img bg-light text-dark d-flex flex-column sign-up-img-div">
                    <img src="/p2.jpg">
                </div>
            </div>
            <div class="contact-container row my-5 card-effect card-hide offer-card">
                <div
                    class="h-100 col-sm-12 col-md-12 col-lg-6 col-img bg-light text-dark d-flex flex-column sign-up-img-div">
                    <img src="/p3.jpg" style="height:100%">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 py-5 form-div">
                    <h4 class="text-center">Medical Therapy</h4>
                    <p class="lead my-3 text-center mx-auto"
                        style="text-align:justify;word-wrap: break-word;max-width:50%">
                        Our gym offers vibration therapy
                        as part of a holistic approach to fitness,
                        helping to improve muscle strength, flexibility, and
                        circulation. Using advanced vibration platforms, our
                        sessions target muscle activation and recovery, enhancing your
                        workout results and promoting overall wellness in a relaxing, low-impact way.
                    </p>
                </div>
            </div>
        </section>
        <x-pricecard />
        <section id="testimonial" class="testimonial my-5 min-vh-100 p-5">
            <div class="row mb-5">
                <h1 class="text-center mt-5 mb-4" style="line-height:1.7;">What our clients say</h1>
            </div>
            <div class="row text-center g-5">
                <div class="col-lg-3 col-sm-12">
                    <div class="card-effect h-100">
                        <div>
                            <p class="my-3"> ~ Sid Honey</p>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                        </div>
                        <p class="mt-3 text-dark">
                            Perfect blend of high-quality equipment and a supportive,
                            motivating atmosphere. I always leave feeling stronger and more
                            energized, and the staff is incredibly welcoming
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="card-effect h-100">
                        <div>
                            <p class="my-3"> ~ B3lla B3llz</p>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                        </div>
                        <p class="mt-3 text-dark">
                            No-nonsense and full of energy,
                            with everything you need to crush your workout.
                            It’s a great place for anyone serious about getting stronger and pushing their limits
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="card-effect h-100">
                        <div>
                            <p class="my-3"> ~ Robyn Stephenson</p>

                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                        </div>
                        <p class="mt-3 text-dark">
                            Combines strength training with mindfulness
                            in a calm, inspiring environment. It’s the perfect
                            place to find balance while challenging your body in new ways
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="card-effect h-100">
                        <div>
                            <p class="my-3"> ~ Domonique Haughton</p>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                            <i class="fa-solid fa-star rating-star"></i>
                        </div>
                        <p class="mt-3 text-dark">
                            Customer service at Iron Haven is outstanding.
                            The staff is always friendly, approachable, and willing to
                            help with any questions or concerns, whether it's about equipment, classes,
                            or personal training
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container text-center">
            <h1 class="my-5">Our Training Session</h1>
            <p class="fs-5">No talking. Get a first hand sneak peak of what our training session is like</p>
            <section id="lesson-section">
                <div id="video-section">
                    <div class="container d-flex">
                        <div class="video-links-container">
                            <a href="/v1.mp4" class="video-links my-5" name="video-btn">01 Strength Training</a>
                            <a href="/v2.mp4" class="video-links my-5" name="video-btn">02.Cardio Session</a>
                            <a href="/v3.mp4" class="video-links my-5" name="video-btn">03.Group Session</a>
                        </div>
                        <div class="video-container" id="video-container">
                            <video src="/v1.mp4" controls class="video" id="lesson-video"></video>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="my-5">
            <h4>Recent Blogs</h4>
            <hr>
            @foreach($postData as $post)
            <a href="/canvas-ui/posts/{{$post['slug']}}" class="text-decoration-none text-dark">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset($post['featured_image'])}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title my-3 bold">{{$post['title']}}</h3>
                                <p class="card-text my-3">
                                    {{$post['summary']}}</p>
                                <p class="card-text"><small class="text-muted">Published at:
                                        {{date_format($post['published_at'],"M d,Y")}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </section>
        <script src="/js/intersection.js"></script>
        <script>
            let video_link = document.getElementsByName('video-btn');
            let lesson_video = document.getElementById('lesson-video');
            let lesson_section = document.getElementById('video-container');
            video_link.forEach((video_btn) => {
                video_btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    let src = video_btn.getAttribute('href');
                    lesson_video.src = src;
                    lesson_section.scrollIntoView();
                    lesson_video.play();
                })
            });
        </script>
        <x-footer />
    </body>

    </html>
    <!-- HTML !-->