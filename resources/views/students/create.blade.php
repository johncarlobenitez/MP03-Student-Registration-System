<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">


<div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">


<h1 class="text-3xl font-bold mb-6 text-gray-800">
    Student Registration Form
</h1>


@if ($errors->any())

<div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg mb-6">

    <ul class="list-disc ml-5">

        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif



<form action="{{ route('students.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf



<div class="grid grid-cols-2 gap-5">


<!-- Student ID -->
<div>

<label class="block mb-2 font-medium">
Student ID
</label>

<input 
class="w-full border p-3 rounded-lg"
type="text"
name="student_id"
value="{{ old('student_id') }}"
placeholder="Enter Student ID"
required>

</div>



<!-- First Name -->
<div>

<label class="block mb-2 font-medium">
First Name
</label>

<input 
class="w-full border p-3 rounded-lg"
type="text"
name="first_name"
value="{{ old('first_name') }}"
placeholder="Enter First Name"
required>

</div>



<!-- Middle Name -->
<div>

<label class="block mb-2 font-medium">
Middle Name
</label>

<input 
class="w-full border p-3 rounded-lg"
type="text"
name="middle_name"
value="{{ old('middle_name') }}"
placeholder="Optional">

</div>



<!-- Last Name -->
<div>

<label class="block mb-2 font-medium">
Last Name
</label>

<input 
class="w-full border p-3 rounded-lg"
type="text"
name="last_name"
value="{{ old('last_name') }}"
placeholder="Enter Last Name"
required>

</div>



<!-- Email -->
<div>

<label class="block mb-2 font-medium">
Email Address
</label>

<input 
class="w-full border p-3 rounded-lg"
type="email"
name="email"
value="{{ old('email') }}"
placeholder="example@email.com"
required>

</div>



<!-- Mobile -->
<div>

<label class="block mb-2 font-medium">
Mobile Number
</label>

<input 
class="w-full border p-3 rounded-lg"
type="text"
name="mobile_number"
value="{{ old('mobile_number') }}"
placeholder="09XXXXXXXXX"
required>

</div>



<!-- Birthday -->
<div>

<label class="block mb-2 font-medium">
Date of Birth
</label>

<input 
class="w-full border p-3 rounded-lg"
type="date"
name="date_of_birth"
value="{{ old('date_of_birth') }}"
required>

</div>



<!-- Gender -->
<div>

<label class="block mb-2 font-medium">
Gender
</label>

<select
class="w-full border p-3 rounded-lg"
name="gender"
required>


<option value="">
Select Gender
</option>


<option value="Male"
{{ old('gender') == 'Male' ? 'selected' : '' }}>
Male
</option>


<option value="Female"
{{ old('gender') == 'Female' ? 'selected' : '' }}>
Female
</option>


</select>

</div>



<!-- Program -->
<div>

<label class="block mb-2 font-medium">
Program
</label>

<input
class="w-full border p-3 rounded-lg"
name="program"
value="{{ old('program') }}"
placeholder="BS Information Technology"
required>

</div>



<!-- Year Level -->
<div>

<label class="block mb-2 font-medium">
Year Level
</label>

<input
class="w-full border p-3 rounded-lg"
name="year_level"
value="{{ old('year_level') }}"
placeholder="1st Year / 2nd Year"
required>

</div>


</div>




<!-- Address -->

<div class="mt-5">

<label class="block mb-2 font-medium">
Address
</label>


<textarea
class="border p-3 rounded-lg w-full"
name="address"
rows="4"
placeholder="Enter complete address"
required>{{ old('address') }}</textarea>


</div>




<!-- Profile Picture -->

<div class="mt-5">

<label class="block mb-2 font-medium">
Profile Picture
</label>


<input
type="file"
name="profile_picture"
accept="image/png,image/jpeg,image/jpg"
class="border p-3 rounded-lg w-full"
required>


<p class="text-sm text-gray-500 mt-2">
Accepted format: JPG, JPEG, PNG (Maximum 2MB)
</p>


</div>





<button
type="submit"
class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg mt-6">


Register Student


</button>



</form>


</div>


</body>
</html>