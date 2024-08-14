<x-app-layout>
<body>
    <main>
        <div>
            <div class="font-bold text-white">ayam</div>
        </div>
        {{-- @foreach($teachers as $teacher)
            <h2>{{ $teacher->name }}</h2>
            <p>Kelas yang diajarkan:</p>
            <ul>
                @foreach($teacher->teacher_classroom as $classroom)
                    <li>{{ $classroom->name }}</li>
                @endforeach
            </ul>
        @endforeach
        
        @foreach($students as $student)
            <h2>{{ $student->name }}</h2>
            <p>Kelas yang diikuti:</p>
            <ul>
                @foreach($student->student_classroom as $classroom)
                    <li>{{ $classroom->name }}</li>
                @endforeach
            </ul>
        @endforeach --}}
    
    
    </main>
</body>
</x-app-layout>