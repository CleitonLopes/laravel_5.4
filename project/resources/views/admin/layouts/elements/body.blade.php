@component('admin.layouts.default')

    <h3> {{ $title }} </h3> <smal> {{ $description }} </smal>

    {{--div.panel.panel-default>div.panel-body--}}
    <div class="panel panel-default">
        <div class="panel-body">

            {{-- Retorna o component index.blade.php --}}
            {{ $slot }}

        </div>
    </div>

@endcomponent