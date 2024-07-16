<x-Layout> <!-- panggil Layout component -->
    <x-slot:title> {{ $title }} </x-slot:title> <!-- Setkan variable title -->
    <h3 class="text-xl">Welcome to my about!</h3>
    <p>Name: {{$name}}</p>
</x-Layout>