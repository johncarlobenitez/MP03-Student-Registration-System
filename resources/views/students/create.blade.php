<!DOCTYPE html>
<html>

<head>

<title>Aurevian University | Student Registration</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-[#FAF8F2] min-h-screen">


<div class="flex min-h-screen">


<!-- SIDEBAR -->

<aside class="hidden md:flex w-64 bg-[#0F172A] text-white flex-col p-6">


<div>

<h1 class="text-xl font-semibold tracking-wide">
AUREVIAN
</h1>

<p class="text-xs text-gray-400 tracking-widest">
UNIVERSITY
</p>

</div>



<div class="mt-10 space-y-3">


<div class="bg-white/10 rounded-lg px-4 py-3 text-sm text-[#C9A227]">
Registration
</div>


<div class="px-4 py-3 text-sm text-gray-300">
Student Information
</div>


<div class="px-4 py-3 text-sm text-gray-300">
Academic Services
</div>


<div class="px-4 py-3 text-sm text-gray-300">
Support
</div>


</div>



<div class="mt-auto text-xs text-gray-400">

© 2026 Aurevian University

</div>


</aside>






<!-- MAIN CONTENT -->


<main class="flex-1 p-6 md:p-10">


<div class="max-w-5xl mx-auto">



<div class="mb-8">


<h1 class="text-3xl font-semibold text-[#0F172A]">
Student Registration Portal
</h1>





</div>






<div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-8">



@if ($errors->any())


<div class="mb-6 bg-red-50 border border-red-200 rounded-xl p-4">


<ul class="text-sm text-red-600 list-disc ml-5">


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







<!-- PERSONAL INFORMATION -->


<section class="mb-10 pb-8 border-b border-gray-100">


<h2 class="section-title">
Personal Information
</h2>




<div class="grid md:grid-cols-2 gap-5">






<!-- STUDENT ID -->


<div>


<label class="label">
Student ID
</label>


<input
class="input"
type="text"
name="student_id"
placeholder="Enter Student ID Number"
value="{{ old('student_id') }}"
maxlength="10"
pattern="[0-9]+"
inputmode="numeric"
oninput="this.value=this.value.replace(/[^0-9]/g,'')"
required>




</div>








<!-- FIRST NAME -->


<div>


<label class="label">
First Name
</label>


<input
class="input"
type="text"
name="first_name"
placeholder="Enter First Name"
value="{{ old('first_name') }}"
required>


</div>







<!-- MIDDLE NAME -->


<div>


<label class="label">
Middle Name
</label>


<input
class="input"
type="text"
name="middle_name"
placeholder="Enter Middle Name"
value="{{ old('middle_name') }}">


</div>








<!-- LAST NAME -->


<div>


<label class="label">
Last Name
</label>


<input
class="input"
type="text"
name="last_name"
placeholder="Enter Last Name"
value="{{ old('last_name') }}"
required>


</div>







<!-- DATE -->


<div>


<label class="label">
Date of Birth
</label>


<input
class="input cursor-pointer"
type="date"
name="date_of_birth"
max="{{ date('Y-m-d') }}"
value="{{ old('date_of_birth') }}"
required>


</div>







<!-- GENDER -->


<div>


<label class="label">
Gender
</label>



<select
class="input"
name="gender"
required>


<option value="">
Select Gender
</option>


<option value="Male">
Male
</option>


<option value="Female">
Female
</option>


</select>



</div>





</div>


</section>









<!-- CONTACT INFORMATION -->


<section class="mb-10 pb-8 border-b border-gray-100">


<h2 class="section-title">
Contact Information
</h2>





<div class="grid md:grid-cols-2 gap-5">





<!-- EMAIL -->


<div>


<label class="label">
Email Address
</label>


<input
class="input"
type="email"
name="email"
placeholder="student@email.com"
value="{{ old('email') }}"
required>


</div>







<!-- MOBILE -->


<div>


<label class="label">
Mobile Number
</label>


<input
class="input"
type="text"
name="mobile_number"
placeholder="09XXXXXXXXX"
value="{{ old('mobile_number') }}"
maxlength="11"
minlength="11"
pattern="[0-9]{11}"
inputmode="numeric"
oninput="this.value=this.value.replace(/[^0-9]/g,'')"
required>


</div>




</div>








<!-- ADDRESS -->


<div class="mt-6">


<label class="label">
Residential Address
</label>



<textarea
class="address-input"
name="address"
rows="4"
placeholder="House No., Street, Barangay, City, Province"
required>{{ old('address') }}</textarea>




</div>


</section>

<!-- ACADEMIC INFORMATION -->


<section class="mb-10 pb-8 border-b border-gray-100">


<h2 class="section-title">
Academic Information
</h2>




<div class="grid md:grid-cols-2 gap-5">





<!-- PROGRAM -->


<div>


<label class="label">
Program
</label>


<select
class="input"
name="program"
required>


<option value="">
Select Program
</option>


<option value="Bachelor of Science in Information Technology">
Bachelor of Science in Information Technology
</option>


<option value="Bachelor of Science in Computer Science">
Bachelor of Science in Computer Science
</option>


<option value="Bachelor of Science in Information Systems">
Bachelor of Science in Information Systems
</option>


<option value="Bachelor of Science in Business Administration">
Bachelor of Science in Business Administration
</option>


<option value="Bachelor of Science in Accountancy">
Bachelor of Science in Accountancy
</option>


<option value="Bachelor of Science in Civil Engineering">
Bachelor of Science in Civil Engineering
</option>


<option value="Bachelor of Science in Electrical Engineering">
Bachelor of Science in Electrical Engineering
</option>


<option value="Bachelor of Elementary Education">
Bachelor of Elementary Education
</option>


<option value="Bachelor of Secondary Education">
Bachelor of Secondary Education
</option>


<option value="Bachelor of Science in Hospitality Management">
Bachelor of Science in Hospitality Management
</option>


<option value="Bachelor of Science in Tourism Management">
Bachelor of Science in Tourism Management
</option>


</select>


</div>







<!-- YEAR LEVEL -->


<div>


<label class="label">
Year Level
</label>



<select
class="input"
name="year_level"
required>


<option value="">
Select Year Level
</option>


<option value="1st Year">
1st Year
</option>


<option value="2nd Year">
2nd Year
</option>


<option value="3rd Year">
3rd Year
</option>


<option value="4th Year">
4th Year
</option>


</select>



</div>





</div>


</section>








<!-- PROFILE PICTURE -->


<section>


<h2 class="section-title">
Profile Picture
</h2>





<div class="upload-card">





<div class="upload-icon">


<svg
xmlns="http://www.w3.org/2000/svg"
fill="none"
viewBox="0 0 24 24"
stroke-width="1.5"
stroke="#C9A227"
class="w-8 h-8">


<path
stroke-linecap="round"
stroke-linejoin="round"
d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 0115 0"/>


</svg>


</div>





<h3 class="mt-4 font-medium text-[#0F172A]">
Upload Profile Picture
</h3>




<p class="text-sm text-gray-500 mt-1">
Choose a clear ID-style photo
</p>






<label
for="profile_picture"
class="upload-button">


Choose File


</label>




<input
id="profile_picture"
type="file"
name="profile_picture"
accept="image/png,image/jpeg,image/jpg"
class="hidden"
required>





<p class="text-xs text-gray-400 mt-4">
PNG, JPG, JPEG • Maximum 2MB
</p>





</div>



</section>







<button
type="submit"
class="mt-8 w-full bg-[#0F172A] text-white py-3 rounded-xl font-medium hover:bg-[#1e293b] transition">


Complete Registration


</button>





</form>


</div>



</div>


</main>


</div>








<style>


.section-title {

font-size:18px;

font-weight:600;

color:#0F172A;

margin-bottom:20px;

}





.label {

display:block;

font-size:14px;

font-weight:500;

color:#0F172A;

margin-bottom:8px;

}





.input {


width:100%;


height:45px;


padding:0 16px;


border:1px solid #E5E7EB;


border-radius:12px;


background:white;


font-size:14px;


color:#0F172A;


outline:none;


transition:.2s;


}




.input:focus,
.address-input:focus {


border-color:#C9A227;


box-shadow:0 0 0 3px rgba(201,162,39,.15);


}






.address-input {


width:100%;


padding:14px 16px;


border:1px solid #E5E7EB;


border-radius:14px;


background:white;


font-size:14px;


resize:none;


outline:none;


transition:.2s;


}






.upload-card {


border:1px dashed #D6D3D1;


background:#FFFCF7;


border-radius:20px;


padding:40px;


text-align:center;


}





.upload-icon {


width:64px;


height:64px;


margin:auto;


border-radius:50%;


background:#F8F1DD;


display:flex;


align-items:center;


justify-content:center;


}







.upload-button {


display:inline-flex;


margin-top:20px;


padding:12px 28px;


background:#0F172A;


color:white;


border-radius:12px;


font-size:14px;


font-weight:500;


cursor:pointer;


transition:.2s;


}



.upload-button:hover {


background:#1e293b;


}


</style>





</body>

</html>