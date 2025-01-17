<div>
    <x-slot name="pageTitle">Create Company</x-slot>
    <x-slot name="actions">
        <livewire:company.navigation />
    </x-slot>
    <div class="mx-auto w-full max-w-2xl">
        <form class="space-y-6" wire:submit.prevent="createNewCompany">
            <flux:field>
                <flux:label>Company Name</flux:label>

                <flux:input wire:model="form.companyName" type="companyName" />

                <flux:error name="form.companyName" />
            </flux:field>

            <div class="grid grid-cols-2 gap-4">
                <flux:field>
                    <flux:label>Employee Name</flux:label>

                    <flux:input wire:model="form.employeeName" type="employeeName" />

                    <flux:error name="form.employeeName" />
                </flux:field>

                <flux:field>
                    <flux:label>Employee Email Address</flux:label>

                    <flux:input wire:model="form.employeeEmail" type="employeeEmail" />

                    <flux:error name="form.employeeEmail" />
                </flux:field>
            </div>

            <div class="flex gap-5">
                <flux:spacer />
                <flux:button wire:navigate href="{{ route('company.index') }}">Cancel</flux:button>
                <flux:button type="submit" variant="primary">Submit</flux:button>
            </div>
        </form>
    </div>
</div>
