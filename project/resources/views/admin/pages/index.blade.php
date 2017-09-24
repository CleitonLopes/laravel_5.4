@component('admin.layouts.elements.body')

    {{-- Como o component pai tem essas duas variaves preciso passa-las aqui --}}
    @slot('title') Páginas @endslot
    @slot('description') Administração de paginas @endslot

    <a href="{{ route('pages.create') }}" class="btn btn-default"> novo </a>

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
            <td class="text-right">

                {{-- pages.show, rota + metodo show controller, $pages->id parametro da rota --}}
                <a href="{{ route('pages.show', $page->id) }}" class="btn btn-default btn-xs">

                    <span class="glyphicon glyphicon-plus"></span>

                </a>

            </td>
        </tr>

            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $pages->links() }}
    </div>


@endcomponent