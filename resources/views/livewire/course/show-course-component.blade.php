<div>
    <!-- Services Section Five -->
    @if(count($allCourses)>0)
    <section id="courses" class="services-section-five">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Dispuestos a aumentar tu conocimiento</span>
                <h2>Nuestros Cursos</h2>
                <span class="divider"></span>
            </div>

            <div class="carousel-outer">
                <!-- Services Carousel -->
                <div class="services-carousel owl-carousel owl-theme default-dots">
                    @foreach($allCourses as $course)
                    <div class="service-block-five">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="storage/courses/{{$course->course_image}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <h5>{{ $course->name}}</h5>
                                <div class="text-justify">{{ $course->description}}</div>
                                <span class="designation">Inscripciones: </span>
                                <strong>{{ substr($course->start_date,0,10) }} - {{ substr($course->end_date,0,10)}}</strong>
                                <label class="designation">Inicio: </label>
                                <strong>{{ substr($course->class_date,0,10) }}</strong>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section Five -->
    @endif
</div>