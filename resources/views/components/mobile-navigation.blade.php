<flux:navbar class="w-full lg:hidden">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:spacer />

    <flux:dropdown position="top" align="start">
        <flux:profile avatar="" />

        <flux:menu>
            <flux:menu.radio.group>
                <flux:menu.radio checked>{{ auth()->user()->name }}</flux:menu.radio>
                <flux:menu.radio>Truly Delta</flux:menu.radio>
            </flux:menu.radio.group>

            <flux:menu.separator />

            <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</flux:navbar>
