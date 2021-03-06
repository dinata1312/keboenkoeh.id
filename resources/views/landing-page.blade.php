<x-guest-layout>

        <div class="slideshow-container" id="hero">
            <div class="slideshow" data-flex-fullscreen="true">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('img/slideshow/slider-1.jpg') }}" data-position-y="top" alt="Slideshow Image" />
                        <div class="flex-content-overlay"></div>
                        <div class="flex-content-wrapper">
                            <div class="flex-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <p class="hero-caption no-margin flex-animate" data-animate="animate__fadeInDown">Siap menyediakan kebutuhan anda</p>
                                            <hr class="hero-separator flex-animate" data-animate="animate__fadeInDown" data-animate-delay="500" />
                                            <h1 class="hero-heading flex-animate" data-animate="animate__fadeInDown" data-animate-delay="650">Lengkapi kebutuhan produk anda dengan hasil produk kami</h1>
                                            <a href="#" class="btn btn-default flex-animate" data-animate="animate__fadeInLeft" data-animate-delay="1000">Hubungi kami</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <section class="section what-we-do-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="heading-title text-center">
                            <h3>Apa <strong class="text-color">yang kami lakukan?</strong></h3>
                        </div>

                        <h2>Kebonkueh memiliki banyak pengalaman<br />dalam berbagai aspek pengelolaan dan produksi tanaman</h2>
                        <p class="gap" data-gap-bottom="30">
                            kebonkueh memiliki banyak pengalaman dalam pembibitan, penyemaian, hingga pengelolaan untuk pertumbuhan tanaman seperti tembakau, cabai, ubi-ubian, jagung, terong, dan timun.
                        </p>

                        <a href="services.html" class="btn btn-default">Lihat tawaran kami lebih banyak</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="service-item-carousel">
                            {{-- <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{ asset('img/services/service-1') }}" alt="image" />
                                <div class="service-content content-contrast">
                                    <i class="craftico-spring-grass"></i>
                                    <h4 class="service-title">
                                        <a href="lawn-garden-maintenance.html"><br />Maintenance</a>
                                    </h4>
                                    <p>It's great time, you can save your time for garden maintenance. After we finished, your garden will be a perfect place for hanging out with your family and your friends</p>
                                </div>
                            </li> --}}
                            <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{ asset('img/services/service-2') }}" alt="image" />
                                <div class="service-content content-contrast">
                                    <i class="craftico-planting"></i>
                                    <h4 class="service-title">
                                        <a href="decoration-and-landscaping.html">Pembibitan</a>
                                    </h4>
                                    <p>Kami percaya hasil panen terbaik berawal bibit-bibit unggulan yang dirawat dengan baik </p>
                                </div>
                            </li>
                            {{-- <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{ asset('img/services/service-3') }}" alt="image" />
                                <div class="service-content content-contrast">
                                    <i class="craftico-wheelbarrow"></i>
                                    <h4 class="service-title">
                                        <a href="design-and-planting.html">Design and<br />Planting</a>
                                    </h4>
                                    <p>We can create a beautiful garden in any yard with our landscaping ideas, garden plans, and request specific plans. We can realize your dream garden and bring it to your garden</p>
                                </div>
                            </li> --}}
                            <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{ asset('img/services/service-4') }}" alt="image" />
                                <div class="service-content content-contrast">
                                    <i class="craftico-garden-tools"></i>
                                    <h4 class="service-title">
                                        <a href="garden-clearance.html">Pengelolaan dan perawatan lahan</a>
                                    </h4>
                                    <p>Hasil panen yang baik didukung lokasi tanaman tumbuh, maka dari itu kami mengelola lahan dengan baik sehingga tumbuhan dapat memberikan hasil panen terbaik</p>
                                </div>
                            </li>
                            {{-- <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{ asset('img/services/service-5') }}" alt="image" />
                                <div class="service-content content-contrast">
                                    <i class="craftico-honeycomb"></i>
                                    <h4 class="service-title">
                                        <a href="stone-hardscaping.html">Stone<br />Hardscaping</a>
                                    </h4>
                                    <p>
                                        Your garden will look more natural with grass but the presence of hardscape serves as a counterweight. Your garden will look more beautiful, spacious, and characterized by the presence of the
                                        hardscape elements.
                                    </p>
                                </div>
                            </li> --}}
                            <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{ asset('img/services/service-6') }}" alt="image" />
                                <div class="service-content content-contrast">
                                    <i class="craftico-watering-can"></i>
                                    <h4 class="service-title">
                                        <a href="watering-and-irigation.html">Perawatan tumbuhan</a>
                                    </h4>
                                    <p>Kami memberikan perawatan tumbuhan yang baik sehingga dapat memberikan hasil panen terbaik</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title text-center">
                            <h3>Kenapa <strong class="text-color">harus memilih kami?</strong></h3>
                            <p class="lead">harus memilih kami?</p>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="feature icon-right">
                            <i class="craftico-agriculture"></i>
                            <div class="feature-content">
                                <h5>Hasil panen berkualitas</h5>
                                <p>Kami menjamin produk berkualitas baik dengan penanaman yang tepat</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="feature icon-right">
                            <i class="craftico-spring-day"></i>
                            <div class="feature-content">
                                <h5>Harga bersaing</h5>
                                <p>Kami menawarkan produk yang berkualitas dengan harga yang terjangkau </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="feature icon-right">
                            <i class="craftico-study"></i>
                            <div class="feature-content">
                                <h5>Hasil panen terbaik</h5>
                                <p>Kami menjual produk terbaik dari hasil panen kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="section testimonial-container">
            <div class="overlay-background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="testimonial-carousel content-contrast">
                            <li>
                                <div class="testimonial">
                                    <blockquote>
                                        <p>
                                            They listened to my requirements and preferences for the design of my garden and were able to offer lots of ideas to meet my needs. One year later, I continue to enjoy my new garden with its
                                            vibrant colours and bespoke features
                                        </p>
                                        <cite>
                                            <strong>William Franklin</strong>
                                            <span>Manager at Adelis</span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <blockquote>
                                        <p>
                                            Kebonkueh listened to our requirements when we needed to landscape our garden following a house extension. He presented several options. with a patiently designed hybrid solution diligently
                                            executed
                                        </p>
                                        <cite>
                                            <strong>Christie Greene</strong>
                                            <span>Manager at Pro Garden</span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <blockquote>
                                        <p>
                                            His documentation is clear and precise and the combination of hands on experience in the National Botanical Gardens with his professional qualifications and experience make him an excellent
                                            Landscaping Consultant
                                        </p>
                                        <cite>
                                            <strong>Jenifer Laurence</strong>
                                            <span>Manager at Eco Green</span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <blockquote>
                                        <p>
                                            Thanks for great work! Seven and a half cubic metres perfectly poured into my garden, Very happy with the excellent customer service you offer. There's one on mine...and my friends are very
                                            impressed. Thanks
                                        </p>
                                        <cite>
                                            <strong>Diena Houglas</strong>
                                            <span>Founder at Urban Farm</span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <blockquote>
                                        <p>
                                            Kebonkueh team has designed and created a wonderful garden landscape for my new office. The workmanship and the materials used are all first class and Kebonkueh team are passionate about follow up
                                            garden maintenance
                                        </p>
                                        <cite>
                                            <strong>Christine Greece</strong>
                                            <span>Human Resource at Creative Space</span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}

        <section class="section no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="heading-title gap" data-gap-top="85">
                            <h3>Kenapa kami <strong class="text-color">berbeda dengan yang lain?</strong></h3>
                        </div>
                        <p>Dari seluruh sejarah kami menjual hasil pertanian , kami tidak pernah mendapat kompain atas produk ,karena kami menawarkan produk yang berkualitas untuk konsumen.Kami juga menawarkan pelayanan terbaik kepada konsumen.</p>

                        <ul class="grid-md-2 grid-sm-2 no-wrap">
                            <li>
                                <div class="counter-box no-margin-lg no-margin-md">
                                    <i class="craftico-humans_01"></i>
                                    <div class="counter-content">
                                        <span class="count-me number" data-to="245" data-speed="2500">245</span>
                                        <h6 class="counter-title">Kepuasan mitra</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="counter-box no-margin-lg no-margin-md">
                                    <i class="craftico-flower"></i>
                                    <div class="counter-content">
                                        <span class="count-me number" data-to="358" data-speed="2500">358</span>
                                        <h6 class="counter-title">Project Selesai</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="counter-box no-margin-lg no-margin-md">
                                    <i class="craftico-ecology-award"></i>
                                    <div class="counter-content">
                                        <span class="count-me number" data-to="78" data-speed="2500">93</span>
                                        <h6 class="counter-title">Hasil panen berkualitas</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="counter-box no-margin-lg no-margin-md">
                                    <i class="craftico-urban-planning"></i>
                                    <div class="counter-content">
                                        <span class="count-me number" data-to="128" data-speed="2500">286</span>
                                        <h6 class="counter-title">Karyawan</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="estimate-form">
                            <div class="heading-title">
                                <h3>Request an <strong class="text-color">Estimate</strong></h3>
                            </div>
                            <form class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address" />
                                    </div>
                                    <div class="form-group no-margin-lg">
                                        <select class="custom-select form-control">
                                            <option>Select Service</option>
                                            <option>Lawn Maintenance</option>
                                            <option>Decoration</option>
                                            <option>Landscaping</option>
                                            <option>Planting</option>
                                            <option>Design</option>
                                            <option>Garden Clearence</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Home Address" />
                                    </div>
                                    <div class="form-group no-margin">
                                        <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr class="separator" />
                                    <div class="form-group no-margin">
                                        <button type="submit" class="btn btn-default btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title text-center">
                            <h3><strong class="text-color">Informasi</strong></h3>
                        </div>
                        <ul class="grid-lg-5 grid-md-2 grid-sm-1 client-carousel">
                            @php
                                $trivias = \App\Models\Information::orderByDesc('updated_at')->limit(6)->get();
                            @endphp
                            @foreach ($trivias as $trivia)
                                <li>
                                    <a href="{{url('content/'.$trivia->id)}}">
                                    @if (strpos($trivia->image,'http') == true)
                                        <img src="{{ $trivia->image }}" alt="{{ $trivia->title }}" />
                                    @else
                                        <img src="{{ asset($trivia->image) }}" alt="{{ $trivia->title }}" />
                                    @endif
                                        <p style="text-align: center">{{ \Illuminate\Support\Str::limit($trivia->title, 10, $end='...') }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="heading-title">
                            <h3>Frequently <strong class="text-color">Ask &amp; Questions</strong></h3>
                        </div>

                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How much does Lawn Mowing cost?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">Lawn Mowing costs start at $20 for a small lawn, and vary depending on size. If you give me a call I can organise to come out to your home for an obligation free quote.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How often should I have my grass cut?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">For a healthy vigorous lawn we recommend you cut your lawn weekly in the growing months, September through to April for buffalo being 40mm - 60mm.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Do I need to supply any tools?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">There is no need. We are fully equipped with all the appropriate tools to getting the job done.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="heading-title">
                            <h3>Our <strong class="text-color">Office</strong></h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="map-wrapper no-margin-lg">
                                    <div id="map"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p>Keboenkoeh adalah perusahaan hasil panen, yang menawarkan hasil panen berupa jagung, tembakau dan padi.</p>
                                <h5 class="text-color">Office Address :</h5>
                                <div class="contact-info">
                                    <p>
                                        Dusun Lengkok Barat Kelurahan Merawan Kecamatan Mayang, <br>
                                        Kabutaen Jember Jawa Timur
                                    </p>
                                </div>

                                <h5 class="text-color">Office Hours</h5>
                                <div class="contact-info no-margin">
                                    <p>
                                        Senin - Jum???at : 07.00-15.00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="section cta-bottom-container content-contrast">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <h2>Ready to <strong>Get Started?</strong></h2>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a href="#" class="btn btn-default btn-block">Get Free Quote</a>
                    </div>
                </div>
            </div>
        </section> --}}

</x-guest-layout>