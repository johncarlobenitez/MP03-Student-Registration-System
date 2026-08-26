<!DOCTYPE html>
<html>

<head>

<title>Student Profile</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-100">


<div class="max-w-xl mx-auto mt-10 bg-white rounded-xl shadow p-8">


@if(session('success'))

<div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">

{{ session('success') }}

</div>

@endif



<div class="text-center">


<img 
src="{{ asset('storage/'.$student->profile_picture) }}"
class="w-40 h-40 mx-auto rounded-full object-cover border-4 border-gray-200">


<h1 class="text-3xl font-bold mt-5">

{{ $student->first_name }}
{{ $student->last_name }}

</h1>


<p class="text-gray-600 mt-2">

Student ID: {{ $student->student_id }}

</p>


</div>




<div class="mt-8 space-y-3">


<div>
<strong>Email:</strong>
{{ $student->email }}
</div>


<div>
<strong>Mobile:</strong>
{{ $student->mobile_number }}
</div>


<div>
<strong>Gender:</strong>
{{ $student->gender }}
</div>


<div>
<strong>Program:</strong>
{{ $student->program }}
</div>


<div>
<strong>Year Level:</strong>
{{ $student->year_level }}
</div>


<div>
<strong>Birthday:</strong>
{{ $student->date_of_birth }}
</div>


<div>
<strong>Address:</strong>
{{ $student->address }}
</div>


</div>


</div>


</body>

</html>