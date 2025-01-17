<flux:row>
    <flux:cell>
        {{ $company->name }}
    </flux:cell>
    <flux:cell>
        <flux:badge size="sm" inset="top bottom" :color="$company->status->color()">
            {{ $company->status->label() }}
        </flux:badge>
    </flux:cell>
    <flux:cell>
        <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
    </flux:cell>
</flux:row>
