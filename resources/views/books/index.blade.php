<x-app-layout>
  <div>
    <div>
      <h1>Books</h1>
      <a href="{{ route('books.create') }}">
        <button>Criar</button>
      </a>
    </div>
    
    <ul>
      @foreach ($books as $book)
      <li>
        <a href="/books/{{ $book->id }}">{{ $book->name }}</a>
      </li>
      @endforeach
    </ul>
    
  </div>
</x-app-layout>