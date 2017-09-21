@component('admin.layouts.elements.body')

    {{-- Como o component pai tem essas duas variaves preciso passa-las aqui --}}
    @slot('title') Páginas @endslot
    @slot('description') Administração de paginas @endslot

    <table class="table table-hover">

        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th class="text-right">ações</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($pages as $page)

        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td class="text-right">#</td>
        </tr>

            @endforeach
        </tbody>
    </table>

@endcomponent