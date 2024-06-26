<x-app-layout>
  <x-header.crud
    title="Criar livro"
    :btns="[
      (object)[
        'name' => 'Cancelar e Retornar',
        'type' => 'danger',
        'link' => route('books.index')
      ]
    ]"
  />
</x-app-layout>