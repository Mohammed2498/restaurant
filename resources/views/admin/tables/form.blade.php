<div class="sm:col-span-6">
    <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
    <div class="mt-1">
        <input value="{{old('name',$table->name)}}" type="text" id="name" name="name"
               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror"/>
    </div>
    @error('name')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6">
    <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number </label>
    <div class="mt-1">
        <input value="{{old('guest_number',$table->guest_number)}}" type="number" id="guest_number" name="guest_number"
               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-400 @enderror"/>
    </div>
    @error('guest_number')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6 pt-5">
    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
    <div class="mt-1">
        <select id="status" name="status" class="form-multiselect block w-full mt-1">
            @foreach (App\Enums\TableStatus::cases() as $status)
                <option value="{{ $status->value }}"{{ old('status', $table->status->value) == $status->value ? 'selected' : '' }} >{{$status->name }}</option>
            @endforeach
        </select>
    </div>
    @error('status')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="sm:col-span-6 pt-5">
    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
    <div class="mt-1">
        <select id="location" name="location" class="form-multiselect block w-full mt-1">
            @foreach(App\Enums\TableLocation::cases() as $location)
                <option value="{{ $location->value }}" {{ old('location', $table->location->value) == $location->value ? 'selected' : '' }} >{{ $location->name }}</option>
            @endforeach
        </select>
    </div>
    @error('location')
    <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
</div>
<div class="mt-6 p-4">
    <button type="submit"
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store
    </button>
</div>
