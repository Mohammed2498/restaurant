<div class="sm:col-span-6">
    <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name </label>
    <div class="mt-1">
        <input value="{{old('first_name',$reservation->first_name)}}" type="text" id="first_name" name="first_name"
               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-400 @enderror"/>
    </div>
    @error('first_name')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6">
    <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name  </label>
    <div class="mt-1">
        <input value="{{old('last_name',$reservation->last_name)}}" type="text" id="last_name" name="last_name"
               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-400 @enderror"/>
    </div>
    @error('last_name')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6">
    <label for="email" class="block text-sm font-medium text-gray-700"> Email  </label>
    <div class="mt-1">
        <input value="{{old('email',$reservation->email)}}" type="email" id="email" name="email"
               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror"/>
    </div>
    @error('email')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6">
    <label for="phone" class="block text-sm font-medium text-gray-700"> Phone  </label>
    <div class="mt-1">
        <input value="{{old('phone',$reservation->phone)}}" type="number" id="phone" name="phone"
               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('phone') border-red-400 @enderror"/>
    </div>
    @error('phone')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6">
    <label for="res_date" class="block text-sm font-medium text-gray-700"> Reservation Date  </label>
    <div class="mt-1">
        <input value="{{old('res_date',$reservation->res_date)}}" type="datetime-local" id="res_date" name="res_date"
               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-400 @enderror"/>
    </div>
    @error('res_date')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6">
    <label for="table_id" class="block text-sm font-medium text-gray-700"> Table ID  </label>
    <div class="mt-1">
        <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
            @foreach ($tables as $table)
                <option value="{{ $table->id }}"{{ old('table_id', $reservation->table_id) == $table->id ? 'selected' : '' }} >{{$table->name }} ({{$table->guest_number}})</option>
            @endforeach
        </select>
    </div>
    @error('table_id')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6">
    <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number  </label>
    <div class="mt-1">
        <input value="{{old('guest_number',$reservation->guest_number)}}" type="number" id="guest_number" name="guest_number"
               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-400 @enderror"/>
    </div>
    @error('guest_number')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="mt-6 p-4">
    <button type="submit"
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store
    </button>
</div>
