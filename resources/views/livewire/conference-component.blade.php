<div class="mx-6 my-6">

    @foreach ($conferences as $conference)
        <x-conference-summary :conference="$conference"/>
    @endforeach


</div>
