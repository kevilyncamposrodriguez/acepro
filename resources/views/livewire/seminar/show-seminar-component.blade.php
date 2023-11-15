<div>
    @if(count($allSeminars)>0)
    <!-- Team Section Two -->
    <section id="seminars" class="team-section-two alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title uppercase">SIGUE CAPACITANDOTE CON NOSOTROS</span>
                <h2 class="uppercase">SEMINARIOS</h2>
                <span class="divider"></span>
            </div>

            <div class="row">
                @foreach($allSeminars as $seminar)
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="storage/seminars/{{$seminar->seminar_image}}" alt=""></figure>
                        </div>
                        <div class="info-box">
                            <h5>{{ $seminar->name}}</h5>
                            <div class="text-justify">{{ $seminar->description}}</div>
                            <span class="designation">Inscripciones:</span>
                            <strong>{{ substr($seminar->start_date,0,10) }} - {{ substr($seminar->end_date,0,10)}}</strong>
                            <span class="designation">Fecha de seminario:</span>
                            <strong>{{ substr($seminar->class_date,0,10) }}</strong>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Team Section -->
    @endif
</div>