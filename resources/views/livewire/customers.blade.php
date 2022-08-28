<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-jet-button class="mr-5" wire:click="dispatchEvent">
            {{ __('Dispatch Event') }}
        </x-jet-button>
        <x-jet-button wire:click="createShowModal">
            {{ __('Create') }}
        </x-jet-button>
    </div>

    {{-- The data table --}}
 <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">CompanyName</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ContactName</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">mobile</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if ($data->count())
                            @foreach ($data as $item)
                                <tr>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                        {{ $item->CompanyName }}
                                    </td>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                        {{ $item->ContactName }}
                                    </td>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                        {{ $item->mobile }}
                                    </td>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap">
                                        {{ $item->Email }}
                                    </td>
                                    <td class="px-6 py-4 text-right text-sm">
                                        <x-jet-button wire:click="updateShowModal({{ $item->id }})">
                                            {{ __('Update') }}
                                        </x-jet-button>
                                        <x-jet-danger-button wire:click="deleteShowModal({{ $item->id }})">
                                            {{ __('Delete') }}
                                        </x-jet-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No Results Found</td>
                            </tr>
                        @endif

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

<br/>

        {{-- Modal Form --}}
        <x-jet-dialog-modal wire:model="modalFormVisible">
            <x-slot name="title">
                {{ __('Save Page') }}
            </x-slot>

            <x-slot name="content">
                <div class="mt-4">
                    <x-jet-label for="CompanyName" value="{{ __('CompanyName') }}" />
                    <x-jet-input id="CompanyName" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="CompanyName" />
                    @error('CompanyName') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="flex flex-wrap  mb-2 mt-3">
                    <div class="w-1/2 md:w-1/2   mb-6 md:mb-0">
                        <x-jet-label for="ContactName" value="{{ __('ContactName') }}" />
                        <x-jet-input id="ContactName" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="ContactName" />
                        @error('ContactName') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-1/2 md:w-1/2 pr-4 mb-6 md:mb-0">
                        <x-jet-label for="ContactTitle" value="{{ __('ContactTitle') }}" />
                        <x-jet-input id="ContactTitle" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="ContactTitle" />
                        @error('ContactTitle') <span class="error">{{ $message }}</span> @enderror
                    </div>

                  </div>


                <div class="mt-4">
                    <x-jet-label for="Address" value="{{ __('Address') }}" />
                    <x-jet-input id="Address" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="Address" />
                    @error('Address') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="flex flex-wrap -mx-3 mb-2 mt-3">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <x-jet-label for="City" value="{{ __('City') }}" />
                        <x-jet-input id="City" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="City" />
                        @error('City') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <x-jet-label for="Phone" value="{{ __('Phone') }}" />
                        <x-jet-input id="Phone" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="Phone" />
                        @error('Phone') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <x-jet-label for="mobile" value="{{ __('mobile') }}" />
                        <x-jet-input id="mobile" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="mobile" />
                        @error('mobile') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>







                  <label for="Note" value="{{ __('Note') }}" class="block text-sm font-medium text-gray-700">
                    Note
                  </label>
                  <div class="mt-1">
                    <textarea  wire:model.debounce.800ms="Note" id="Note" name="Note" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-3/4 sm:text-sm border border-gray-300 rounded-md" ></textarea>
                  </div>

                </div>

                  <div>


                    <div class="flex flex-wrap  mb-2 mt-3">
                        <div class="w-1/2 md:w-1/2   mb-6 md:mb-0">
                            <x-jet-label for="Email" value="{{ __('Email') }}" />
                            <x-jet-input id="Email" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="Email" />
                            @error('Email') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-1/2 md:w-1/2 pr-4 mb-6 md:mb-0">
                            <x-jet-label for="WebSite" value="{{ __('WebSite') }}" />
                            <x-jet-input id="WebSite" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="WebSite" />
                            @error('WebSite') <span class="error">{{ $message }}</span> @enderror
                        </div>

                      </div>

                      <div class="flex flex-wrap  mb-2 mt-3">
                        <div class="w-1/2 md:w-1/2   mb-6 md:mb-0">
                            <x-jet-label for="Logo" value="{{ __('Logo') }}" />
                            <x-jet-input id="Email" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="Logo" />
                            @error('Logo') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-1/2 md:w-1/2 pr-4 mb-6 md:mb-0">
                            <x-jet-label for="CurrentOrder" value="{{ __('CurrentOrder') }}" />
                            <x-jet-input id="CurrentOrder" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="CurrentOrder" />
                            @error('CurrentOrder') <span class="error">{{ $message }}</span> @enderror
                        </div>

                      </div>

                <div class="mt-4">
                    <x-jet-label for="DiscountType" value="{{ __('DiscountType') }}" />
                    <x-jet-input id="DiscountType" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="DiscountType" />
                    @error('DiscountType') <span class="error">{{ $message }}</span> @enderror
                </div>


            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                    {{ __('Nevermind') }}
                </x-jet-secondary-button>

                @if ($modelId)
                    <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                        {{ __('Update') }}
                    </x-jet-danger-button>
                @else
                    <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                        {{ __('Create') }}
                    </x-jet-danger-button>
                @endif

            </x-slot>
        </x-jet-dialog-modal>


