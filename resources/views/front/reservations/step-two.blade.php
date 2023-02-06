<x-front-layout>
    <section id="contact" class="contact-area contact-bg pt-120 pb-120 p-relative fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mb-60" >
                        <span>Step 1</span>
                        <h2>Make Reservation Now</h2>
                    </div>
                    <form action="{{route('reservations.store.step.two')}}" class="contact-form" method="POST">
                        @csrf
                        <div class="contact-field p-relative c-name mb-20">
                                <label for="table_id" class="block text-sm font-medium text-gray-700">Table</label>

                                    <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                                        @foreach ($tables as $table)
                                            <option value="{{ $table->id }}">{{ $table->name }}
                                                ({{ $table->guest_number }} Guests)
                                            </option>
                                        @endforeach
                                    </select>

                                @error('table_id')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-lg-12">
                            <div class="slider-btn">
                                <button>Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
