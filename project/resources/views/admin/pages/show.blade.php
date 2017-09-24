@component('admin.layouts.elements.body')

@slot('title') Páginas @endslot
@slot('description') Exibição de paginas @endslot

    <h4>{{ $page->title }}</h4>

    {{-- Previne injeção de código, não escapa o código html --}}
    {{--{!! $page->body !!}}--}}

    <p>
        <small>
            Criado em {{ $page->created_at->format('d/m/Y H:i:s') }} | Atualizado em {{ $page->updated_at->format('d/m/Y H:i:s') }}
        </small>
    </p>

    {{-- Previne injeção de código, não escapa o código html --}}
    {!! $page->body !!}

    <a href="{{ route('pages.index') }}" class="btn btn-xs btn-default"> voltar </a>
    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-xs btn-default"> editar </a>
    <form action="{{ route('pages.destroy', $page->id) }}" class="form-horizontal" method="post" style="display: inline-block">

        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="remover" class="btn btn-xs btn-default">

    </form>

@endcomponent