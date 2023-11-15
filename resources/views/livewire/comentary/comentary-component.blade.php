   <!-- Appointment Section Two -->
   <div wire:ignore.self>
       <section class="appointment-section-two" style="background-image: url(images/background/7.jpg);">
           <div class="outer-box">
               <div class="auto-container">
                   <div class="row">
                       <!-- Testimonial Column -->
                       <div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
                           <div class="inner-column">
                               <!-- Sec Title -->
                               <div class="sec-title light">
                                   <span class="title">COMENTARIOS</span>
                                   <h2>OBSERVA LO QUE OTROS OPINAN DE NOSOTROS</h2>
                                   <span class="divider"></span>
                               </div>

                               <!-- Testimonial Carousel -->
                               <div class="single-item-carousel owl-carousel owl-theme default-dots light disable-arrow">
                                   @foreach($allComentaries as $comentary)
                                   <!-- Testimonial Block -->
                                   <div class="testimonial-block-three">
                                       <div class="inner-box">
                                           <div class="text-box">
                                               <p>{{$comentary->comentary}} </p>
                                           </div>
                                           <div class="info-box">
                                               <figure class="image"><img src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                                               <h4 class="name">{{$comentary->name}}</h4>
                                               <span class="designation">{{$comentary->created_at}}</span>
                                           </div>
                                       </div>
                                   </div>
                                   @endforeach
                               </div>
                           </div>
                       </div>

                       <!-- Form Column -->
                       <div class="form-column col-lg-6 col-md-12 col-sm-12">
                           <div class="inner-column">
                               <div class="appointment-form default-form">
                                   <div class="sec-title">
                                       <span class="sub-title">Déjanos saber que piensas de nosotros</span>
                                       <h2>Comenta aqui!</h2>
                                       <span class="divider"></span>
                                   </div>

                                   <!--Comment Form-->
                                   <form method="POST" action="{{ route('password.email') }}">
                                       <div class="form-group">
                                           <input type="text" name="name" placeholder="Quien comenta?" wire:model="name">
                                           <x-input-error for="name" class="mt-2" />
                                       </div>
                                       <div class="form-group">
                                           <textarea name="comentary" placeholder="Deja tu comentario" wire:model="comentary"></textarea>
                                           <x-input-error for="comentary" class="mt-2" />
                                       </div>

                                       <div class="form-group">
                                           <button class="theme-btn btn-style-one bg-dodgerblue" type="button" wire:click.prevent="store()" wire:loading.attr="disabled" wire:loading.class="disabled:opacity-50"><span class="btn-title">ENVIAR</span></button>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- End Appointment Section Two -->
   </div>