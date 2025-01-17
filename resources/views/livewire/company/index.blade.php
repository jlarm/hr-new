<div>
    <x-slot name="pageTitle">Companies</x-slot>
    <x-slot name="actions">
        <livewire:company.navigation />
    </x-slot>
    <div>
        <flux:table :paginate="$this->companies">
            <flux:columns>
                <flux:column
                    sortable
                    :sorted="$sortBy === 'name'"
                    :direction="$sortDirection"
                    wire:click="sort('name')"
                >
                    Name
                </flux:column>
                <flux:column
                    sortable
                    :sorted="$sortBy === 'status'"
                    :direction="$sortDirection"
                    wire:click="sort('status')"
                >
                    Status
                </flux:column>
                <flux:column></flux:column>
            </flux:columns>

            <flux:rows>
                @foreach ($this->companies as $company)
                    <livewire:company.index-item :$company :key="$company->id" />
                @endforeach
            </flux:rows>
        </flux:table>
    </div>
</div>
