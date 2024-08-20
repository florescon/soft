<div>
    <!-- Create Modal -->
    <x-modal wire:model="createModal">
        <x-slot name="title">
            {{ __('Modal') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="create">

                <div class="w-full px-3 mb-4">
                </div>
                <div class="w-full px-3 mb-4">
                </div>
                <div class="w-full px-3 mb-4">
                </div>
                <div class="w-full px-3 py-2">
                    <x-button primary type="submit" class="w-full text-center" wire:loading.attr="disabled">
                        {{ __('Create') }}
                    </x-button>
                </div>
            </form>
        </x-slot>
    </x-modal>
    <!-- End Create Modal -->
</div>
