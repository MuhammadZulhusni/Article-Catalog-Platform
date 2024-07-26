<x-Layout> <!-- panggil Layout component -->
  <x-slot:title> {{ $title }} </x-slot:title> <!-- Setkan variable title -->
  @include('components/content')
  @include('components.framework')
</x-Layout>
