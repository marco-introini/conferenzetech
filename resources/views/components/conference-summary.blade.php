@props([
    /** @var \App\Models\Conference */
    'conference'
])

<flux:card class="space-y-6 max-w-3xl">
    @if($conference->cover_image)
        <div class="">
            <img src="{{ $conference->image_url }}"
                 alt="{{ $conference->name }}"
                 class="object-cover max-w-full rounded-xl">
        </div>
    @endif
    <div>
        <flux:heading size="lg">{{$conference->name}}</flux:heading>
        <flux:text class="mt-2">{{$conference->comune->name}} ({{$conference->comune->province->name}})</flux:text>
        <flux:text class="mt-2">{{$conference->start_date->format('d/m/Y H:m')}} - {{$conference->end_date->format('d/m/Y H:m')}}</flux:text>
        <flux:text class="mt-2">Utenti registrati: {{$conference->registrations->count()}}</flux:text>
    </div>

</flux:card>


