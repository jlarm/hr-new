<flux:dropdown position="top" align="start" class="max-lg:hidden">
    <flux:profile avatar="" name="{{ auth()->user()->name }}" />

    <flux:menu>
        <flux:menu.radio.group>
            <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
            <flux:menu.radio>Truly Delta</flux:menu.radio>
        </flux:menu.radio.group>

        <flux:menu.separator />

        <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
    </flux:menu>
</flux:dropdown>