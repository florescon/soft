<div class="w-full max-w-full px-3 flex-0">
    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="pt-6 pr-6 pl-6 mb-0 rounded-t-2xl">
            <h5 class="dark:text-white">{{ __('Kitchen Management') }}</h5>
            <p class="dark:text-white"> {{ __('Here you can manage kitchens.') }} </p>
        </div>
        <div class="my-auto ml-auto pr-6">
            <a href="{{ route('kitchen-create') }}"><button type="button" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">+&nbsp;
            {{ __('Add Kitchen') }}</button></a>
        </div>
        <div class="overflow-x-auto">
            <div class="mb-4 flex justify-between pl-6 pr-6 pt-4">
                <div class="flex flex-row items-center">
                    <p class="text-size-sm mt-3 mr-2">{{ __('Show') }}</p>
                    <select wire:model.live="perPage" class="text-size-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="entries">
                        <option value="5">5</option>
                        <option selected value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                    <p class="text-size-sm mt-3 ml-2 mr-2">{{ __('entries') }}</p>
                </div>
                <div class="relative flex flex-wrap items-stretch transition-all rounded-lg ease-soft" style="max-height: 40.3693px">
                    <span class="text-size-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </span>
                    <input wire:model.live="search" maxlength="20" type="text" class="pl-9 text-size-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="{{ __('Search') }}..." />
                </div>
            </div>
            <table class="items-center w-full mb-4 align-top border-gray-200 text-slate-500 dark:border-white/40">
                <thead class="align-bottom">
                    <tr>
                        <th wire:click="sortBy('id')" :direction="$sortField === 'id' ? $sortDirection : null" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                            ID<span><i class="fas fa-sort cursor-pointer ml-1 dark:text-white/80" aria-hidden="true"></i></span>
                        </th>
                        <th wire:click="sortBy('name')" :direction="$sortField === 'name' ? $sortDirection : null" class="px-6 py-3 pl-2 font-bold text-left uppercase bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                            {{ __('Name') }}<span><i class="fas fa-sort cursor-pointer ml-1 dark:text-white/80" aria-hidden="true"></i></span>
                        </th>
                        <th wire:click="sortBy('description')" :direction="$sortField === 'description' ? $sortDirection : null" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                            {{ __('Description') }}<span><i class="fas fa-sort cursor-pointer ml-1 dark:text-white/80" aria-hidden="true"></i></span>
                        </th>
                        <th wire:click="sortBy('created_at')" :direction="$sortField === 'created_at' ? $sortDirection : null" class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                            {{ __('Creation Date') }}<span><i class="fas fa-sort cursor-pointer ml-1 dark:text-white/80" aria-hidden="true"></i></span>
                        </th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 dark:border-white/40 dark:text-white dark:opacity-80">
                            {{ __('Action') }}
                        </th>
                    </tr>
                </thead>
                <tbody class="border-t-2 border-current border-solid dark:border-white/40">
                    @forelse($kitchens as $kitchen)
                        <tr wire:key="row-{{ $kitchen->id }}">
                            <td class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                <p class="mb-0 font-semibold leading-tight text-size-xs text-slate-400 dark:text-white/80">
                                {{ $kitchen->id }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                <p class="mb-0 font-semibold leading-tight text-size-xs text-slate-400 dark:text-white/80">
                                {{ $kitchen->name }}</p>
                            </td>
                            <td class="pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                <p class="mb-0 font-semibold leading-tight text-size-xs text-slate-400 dark:text-white/80">
                                Stay in touch with the latest trends</p>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                <p class="mb-0 font-semibold leading-tight text-size-xs text-slate-400 dark:text-white/80">
                                {{ $kitchen->created_at_for_humans }}</p>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                <p class="mb-0 font-semibold leading-tight text-base">
                                    <a rel="tooltip" href="{{ route('kitchen-edit', $kitchen->id) }}">
                                        <svg class="h-8 w-6 text-blue-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
                                    </a>
                                    <button type="button" onclick="confirm('Are you sure you want to delete this kitchen?') || event.stopImmediatePropagation()" wire:click="destroy({{ $kitchen->id }})">
                                        <svg class="h-8 w-6 text-red-500"  width="24" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7" x2="20" y2="7" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" />  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>    
                                    </button>
                                </p>
                            </td>
                        </tr>
                    @empty
                        <tr class="w-full left-0 bg-gray-100 p-2 -bottom-10">
                            <td colspan="5" class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-white/40">
                                <p class="mb-0 font-semibold leading-tight text-size-xs text-slate-400 dark:text-white/80">
                                    {{ __('No data') }} 

                                    <svg class="h-8 w-6 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>

                                </p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="p-4">
                {{ $kitchens->links() }}
            </div>
        </div>
    </div>
</div>