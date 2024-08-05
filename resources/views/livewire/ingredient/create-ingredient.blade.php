<div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
    <div class="pt-6 pl-6 pr-6 mb-0 rounded-t-2xl">
        <h5 class="dark:text-white">{{ __('Add Ingredient') }}</h5>
        <p class="dark:text-white">{{ __('Create a new ingredient') }}</p>
        <div class="my-auto ml-auto lg:mt-0">
            <div class="my-auto ml-auto">
                <a href="{{ route('ingredients') }}" class="float-right inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">
                    {{ __('Back to list') }}
                </a>
            </div>
        </div>
    </div>
    <div class="flex-auto p-6 pt-0">
        <form wire:submit="store" enctype="multipart/form-data">
            <div class="flex flex-wrap -mx-3">
                <div class="w-6/12 max-w-full px-3 flex-0">
                    <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">
                        {{ __('Name') }}
                    </label>
                    <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                        <input wire:model.blur="name" type="text" placeholder="Enter name" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                    </div>

                    @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror

                </div>
                <div class="flex-auto p-4 pt-0">
                    <button type="submit" class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-neutral bg-gradient-dark-gray leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">{{ __('Add Ingredient') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>