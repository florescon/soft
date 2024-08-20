<div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
    <div class="pt-6 pl-6 pr-6 mb-0 rounded-t-2xl">
        <h5 class="dark:text-white">{{ __('Add Food') }}</h5>
        <p class="dark:text-white">{{ __('Create a new food') }}</p>
        <div class="my-auto ml-auto lg:mt-0">
            <div class="my-auto ml-auto">
                <a href="{{ route('foods') }}" class="float-right inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">
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
                        <input wire:model.blur="name" type="text" placeholder="{{ __('Enter name') }}" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                    </div>

                    @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror

                </div>
                <div class="w-6/12 max-w-full px-3 flex-0">
                    <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">
                        {{ __('Price') }}
                    </label>
                    <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                        <input wire:model.blur="price" type="number" step="any" placeholder="{{ __('Enter price') }}" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                    </div>

                    @error('price') <span class="error text-red-500">{{ $message }}</span> @enderror

                </div>

                <div class="w-6/12 max-w-full px-3 flex-0">
                    <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">
                        {{ __('Image') }}
                    </label>
                    <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                        <input wire:model="image" type="file" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                    </div>

                    @error('image') <span class="error text-red-500">{{ $message }}</span> @enderror

                </div>

                <div class="w-6/12 max-w-full px-3 flex-0">
                    <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">
                        {{ __('Description') }}
                    </label>
                    <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                        <input wire:model.blur="description" type="text" placeholder="{{ __('Enter description') }}" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                    </div>

                    @error('description') <span class="error text-red-500">{{ $message }}</span> @enderror

                </div>

                <div class="w-6/12 max-w-full px-3 flex-0">
                    <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">
                        {{ __('Category') }}
                    </label>
                      <select id="category_id" wire:model.blur="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Elegir una categoría</option>
                        <option value="1">Entremeses</option>
                        <option value="2">Fajitas</option>
                        <option value="3">Pastas</option>
                        <option value="4">Carnes</option>
                        <option value="5">Burritos</option>
                        <option value="6">Bebidas</option>
                      </select>
                    @error('category_id') <span class="error text-red-500">{{ $message }}</span> @enderror

                </div>

                <div class="flex-auto p-4 pt-0">
                    <button type="submit" class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-neutral bg-gradient-dark-gray leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">{{ __('Add Food') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>