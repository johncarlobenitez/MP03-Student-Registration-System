<!DOCTYPE html>
<html>

<head>

<title>Aurevian University | Student Profile</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-[#FAF8F2] min-h-screen">



<div class="min-h-screen">





<!-- TOP HEADER -->

<header class="relative bg-[#0F172A] text-white overflow-hidden">


<!-- Decorative Background -->

<div class="absolute inset-0 pointer-events-none">


<div class="absolute -top-24 -right-20 w-80 h-80 rounded-full bg-[#C9A227]/10 blur-3xl">
</div>


<div class="absolute -bottom-24 -left-20 w-72 h-72 rounded-full bg-white/5 blur-3xl">
</div>


</div>






<div class="relative max-w-6xl mx-auto px-6 md:px-8 py-5">



<div class="flex items-center justify-between">






<!-- UNIVERSITY BRAND -->

<div class="flex items-center gap-4">






<!-- UNIVERSITY EMBLEM -->

<div class="w-14 h-14 rounded-full border border-[#C9A227] bg-white/5 flex items-center justify-center">


<div class="w-10 h-10 rounded-full bg-[#C9A227] flex items-center justify-center">


<span class="text-[#0F172A] text-xl font-bold">

A

</span>


</div>


</div>









<!-- NAME -->

<div>


<h1 class="text-xl md:text-2xl font-semibold tracking-[0.18em]">

AUREVIAN

</h1>



<p class="text-xs text-gray-400 tracking-[0.45em] mt-1">

UNIVERSITY

</p>



</div>





</div>









<!-- RIGHT AREA -->

<div class="flex items-center gap-6">






<div class="hidden md:block text-right">


<p class="text-xs text-gray-400">

Academic Year

</p>


<p class="text-sm font-medium text-white">

2026 - 2027

</p>



</div>






<div class="hidden md:block h-10 w-px bg-white/20">

</div>







<div class="flex items-center gap-3">





<div class="text-right hidden sm:block">


<p class="text-xs text-gray-400">

Portal

</p>


<p class="text-sm font-medium text-[#C9A227]">

Student Portal

</p>


</div>







<!-- USER ICON -->

<div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center border border-white/10">


<svg 
xmlns="http://www.w3.org/2000/svg"
fill="none"
viewBox="0 0 24 24"
stroke-width="1.5"
stroke="currentColor"
class="w-5 h-5 text-[#C9A227]">


<path 
stroke-linecap="round"
stroke-linejoin="round"
d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 0115 0"/>


</svg>


</div>





</div>






</div>







</div>



</div>


</header>







<main class="max-w-5xl mx-auto p-6 md:p-10">





@if(session('success'))


<div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl">

{{ session('success') }}

</div>


@endif







<div class="mb-8">


<h1 class="text-3xl font-semibold text-[#0F172A]">

Student Profile

</h1>


<p class="text-gray-500 mt-2">

Official Aurevian University student information record.

</p>


</div>









<!-- PROFILE HEADER CARD -->


<div class="bg-white rounded-3xl border border-gray-200 shadow-sm overflow-hidden">





<div class="h-28 bg-[#111827]"></div>







<div class="-mt-14 text-center px-8">





<img

src="{{ asset('storage/'.$student->profile_picture) }}"

class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-white shadow-lg bg-white"

>







<h2 class="text-2xl font-semibold text-[#0F172A] mt-5">

{{ $student->first_name }}

@if($student->middle_name)

{{ $student->middle_name }}

@endif

{{ $student->last_name }}

</h2>







<p class="text-gray-500 mt-2">

Student ID:

<span class="font-medium text-[#0F172A]">

{{ $student->student_id }}

</span>

</p>







<span class="inline-block mt-4 px-5 py-2 rounded-full bg-[#F8F1DD] text-[#A67C00] text-sm font-medium">

Active Student

</span>







</div>










<!-- INFORMATION -->


<div class="px-8 pb-10 mt-10">







<!-- PERSONAL -->


<section class="mb-10">


<h3 class="section-title">

Personal Information

</h3>





<div class="grid md:grid-cols-2 gap-6">





<div class="info-box">

<p class="info-label">
Email Address
</p>

<p class="info-value">
{{ $student->email }}
</p>

</div>






<div class="info-box">


<p class="info-label">
Mobile Number
</p>


<p class="info-value">
{{ $student->mobile_number }}
</p>


</div>






<div class="info-box">


<p class="info-label">
Gender
</p>


<p class="info-value">
{{ $student->gender }}
</p>


</div>






<div class="info-box">


<p class="info-label">
Date of Birth
</p>


<p class="info-value">
{{ $student->date_of_birth }}
</p>


</div>






</div>


</section>









<!-- ACADEMIC -->


<section class="mb-10">


<h3 class="section-title">

Academic Information

</h3>






<div class="grid md:grid-cols-2 gap-6">






<div class="info-box">


<p class="info-label">

Program

</p>


<p class="info-value">

{{ $student->program }}

</p>


</div>







<div class="info-box">


<p class="info-label">

Year Level

</p>


<p class="info-value">

{{ $student->year_level }}

</p>


</div>






</div>



</section>









<!-- ADDRESS -->


<section>


<h3 class="section-title">

Residential Address

</h3>





<div class="address-box">


{{ $student->address }}


</div>





</section>






</div>






</div>






</main>






</div>









<style>


.section-title{

font-size:18px;

font-weight:600;

color:#0F172A;

margin-bottom:20px;

}




.info-box{


background:#FFFCF7;

border:1px solid #E5E7EB;

border-radius:16px;

padding:20px;


}





.info-label{


font-size:13px;

color:#64748B;

margin-bottom:8px;


}





.info-value{


font-size:15px;

font-weight:500;

color:#0F172A;


}





.address-box{


background:#FFFCF7;

border:1px solid #E5E7EB;

border-radius:16px;

padding:20px;

font-size:15px;

color:#0F172A;


}



</style>




</body>

</html>