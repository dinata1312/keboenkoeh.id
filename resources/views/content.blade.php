<x-guest-layout>
    <div id="page-header" class="content-contrast">
        <div class="page-title-container">
            <div class="background-overlay"></div>
            <div class="container centered-container">
                <div class="centered-inner-container">
                    <h1 class="page-title">{{ $data->title }}</h1>
                    <hr class="separator small-separator">
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $data->created_at }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            
                            <div class="col-lg-12 col-md-12">
                    <article class="post-item single-post">
                        <div class="post-media">
                            <div class="post-type-carousel owl-carousel owl-loaded owl-drag">
                                
                                
                                
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-3000px, 0px, 0px); transition: all 0s ease 0s; width: 5250px;">
                                    <div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 400px;">
                                        <img src="{{ asset($data->image) }}" alt="Blog Image"  style="width: 400px;">
                                    </div>
                                </div>
                                {{-- <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button>
                                    <button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button>
                                </div>
                                <div class="owl-dots disabled"></div> --}}
                            </div>
                        </div>

                        <div class="post-container">
                            <div class="post-content">

                                <p>{{$data->content}}</p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- sidebar -->
                
                </div>
    </div>
</x-guest-layout>