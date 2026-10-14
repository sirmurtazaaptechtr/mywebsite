<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Lara App - Page {{ $number }}</title>
</head>
<body>
    <h1>User Profile</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Age:</strong> {{ $age }}</p>
    <p><strong>ID Number:</strong> {{ $number }}</p>

    @if($cattype)
        <p><strong>Category Type:</strong> {{ $cattype }}</p>
    @else
        <p><strong>Category Type:</strong> No type provided.</p>
    @endif

    <h2>Students</h2>
    <ul>
        @forelse ($students as $student)
            <li>{{ $student }}</li>
        @empty
            {{ "No Student Found" }}        
        @endforelse
    </ul>
</body>
</html>