<x-front-layout>
    <section id="contact" class="contact-area contact-bg pt-120 pb-120 p-relative fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mb-60" >
                        <span>Step 1</span>
                        <h2>Make Reservation Now</h2>
                    </div>
                    <form action="{{route('reservations.store.step.one')}}" class="contact-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input value="{{old('first_name',$reservation->first_name ??'' ) }}" name="first_name" type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input value="{{old('last_name',$reservation->last_name ??'')}}" name="last_name" type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-email mb-20">
                                    <input value="{{old('email',$reservation->email??'') }}" name="email"type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input value="{{old('phone',$reservation->phone ??'') }}" name="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input   min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                             max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                             value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}" name="res_date" type="datetime-local" placeholder="Reservation Date">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input value="{{old('guest_number',$reservation->guest_number ??'') }}" name="guest_number" type="number" placeholder="Guest Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="slider-btn">
                                   <button>Continue</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
</x-front-layout>
