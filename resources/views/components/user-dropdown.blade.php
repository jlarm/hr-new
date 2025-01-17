<flux:dropdown position="top" align="start" class="max-lg:hidden">
    <flux:profile avatar="" name="{{ auth()->user()->name }}" />

    <flux:menu class="space-y-3">
        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
            <flux:radio value="light" icon="sun" />
            <flux:radio value="dark" icon="moon" />
            <flux:radio value="system" icon="computer-desktop" />
        </flux:radio.group>

        <flux:menu.item wire:navigate icon="user" href="{{ route('profile') }}">Profile</flux:menu.item>

        <flux:menu.separator />

        <livewire:logout />
    </flux:menu>
</flux:dropdown>
