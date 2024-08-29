<x-layout>
    <h1>Create Student</h1>
    <form action="/students" method="post">
        @csrf
        <input type="submit" value="Submit">
    </form>
</x-layout>