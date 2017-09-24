@component('admin.layouts.default')

    <h3> {{ $title }}  <small> {{ $description }} </small> </h3>

    {{--div.panel.panel-default>div.panel-body--}}
    <div class="panel panel-default">
        <div class="panel-body">

            {{-- Retorna o component index.blade.php --}}
            {{ $slot }}

        </div>
    </div>

@endcomponent