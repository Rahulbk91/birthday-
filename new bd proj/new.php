<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bhanudaya Model Secondary School</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-yellow-50 text-gray-900">

  <!-- Navbar -->
  <nav class="bg-white shadow-md fixed top-0 w-full z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
      <div></div>
      <div class="hidden md:flex gap-6 text-sm font-medium">
        <a href="#courses" class="hover:text-red-700">Courses</a>
        <a href="#facilities" class="hover:text-red-700">Facilities</a>
        <a href="#gallery" class="hover:text-red-700">Gallery</a>
        <a href="#testimonial" class="hover:text-red-700">Testimonials</a>
        <a href="#contact" class="hover:text-red-700">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="pt-24">
    <div class="text-center bg-gradient-to-r from-yellow-400 to-red-500 py-12 rounded-lg shadow-md mb-10 text-white">
      <h1 class="text-5xl font-extrabold uppercase">Bhanudaya Model Secondary School</h1>
      <p class="text-xl mt-4 font-semibold">Binayi Tribeni -01, Dumkibas</p>
      <p class="mt-2 text-lg">Quality Education for a Better Future</p>
    </div>
  </section>

  <main class="max-w-6xl mx-auto px-6">

    <!-- Admission Notice -->
    <div class="bg-red-700 text-white text-center py-4 px-6 rounded-lg shadow-md mb-10">
      <h2 class="text-xl font-bold animate-pulse">ADMISSION OPEN FOR CLASS 11</h2>
      <p class="text-sm mt-1">From Ashadh 15 - 2082</p>
    </div>

    <!-- Courses Section -->
    <section id="courses" class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
      <div>
        <h2 class="text-2xl font-bold mb-4">Available Courses</h2>
        <ul class="space-y-4 text-base">
          <li><span class="font-bold text-red-700">Hotel Management:</span> Learn hospitality, food production, front office, and housekeeping with a real lab experience.</li>
          <li><span class="font-bold text-red-700">Management:</span> Build foundational skills in business, finance, and leadership.</li>
          <li><span class="font-bold text-red-700">Education:</span> Ideal for future educators with focus on pedagogy and child psychology.</li>
          <li><span class="font-bold text-red-700">Science:</span> Comprehensive curriculum for medical, engineering, and technical careers.</li>
          <li><span class="font-bold text-red-700">Computer Science:</span> Focuses on software, programming, and modern ICT skills.</li>
          <li><span class="font-bold text-red-700">Computer Engineering:</span> Combination of software and hardware skills including networking and system design.</li>
        </ul>
      </div>
      <div class="overflow-hidden rounded-lg shadow-lg w-full transform hover:scale-105 transition duration-300">
        <img src="s2.jpg" alt="School Building" class="w-full h-full object-cover">
      </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="mb-16">
      <h2 class="text-2xl font-bold mb-6 text-center">Our Facilities</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <ul class="list-disc list-inside space-y-2 text-gray-800">
            <li>Well-equipped Hotel Management Lab</li>
            <li>ICT and Science Labs with modern equipment</li>
            <li>Library with physical and digital resources</li>
            <li>Free hostel for deserving students (Science Stream)</li>
            <li>Transportation service from nearby areas</li>
            <li>Peaceful and academic learning environment</li>
          </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <ul class="list-disc list-inside space-y-2 text-gray-800">
            <li>Expert and experienced faculty team</li>
            <li>CCTV surveillance & disciplined environment</li>
            <li>Scholarships for top-performing students</li>
            <li>On-site cafeteria and clean drinking water</li>
            <li>Practical-based curriculum and career guidance</li>
            <li>Extra-curricular activities and student clubs</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="mb-16">
      <h2 class="text-2xl font-bold mb-6 text-center">Our Labs & Practical Setup</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <img src="Hotel-Management-6.jpeg" alt="Hotel Lab" class="rounded-lg shadow-lg transform hover:scale-105 transition">
        <img src="cm.jpg" alt="ICT Lab" class="rounded-lg shadow-lg transform hover:scale-105 transition">
        <img src="scinece lab.webp" alt="Science Lab" class="rounded-lg shadow-lg transform hover:scale-105 transition">
      </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonial" class="bg-white p-6 rounded-lg shadow-md mb-16">
      <h2 class="text-xl font-bold mb-4">What Our Students Say</h2>
      <blockquote class="italic text-gray-700">
        “Studying at Bhanudaya has transformed my life. The practical labs and friendly teachers are the best!”<br>
        — <span class="font-semibold">Rahul Bishwokarma, Computer Engineering</span>
      </blockquote>
    </section>

    <!-- Google Map -->
    <section class="mb-16">
      <h2 class="text-2xl font-bold mb-4 text-center">Find Us Here</h2>
      <div class="rounded-lg shadow-lg overflow-hidden">
        <iframe class="w-full h-96" src="https://www.google.com/maps/embed?pb=!1m18!..." allowfullscreen loading="lazy"></iframe>
      </div>
    </section>

    <!-- Contact & Apply Form -->
    <section id="contact" class="bg-yellow-100 border-2 border-black rounded-lg p-6 mb-20">
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <h3 class="font-bold text-lg mb-2">Contact Information</h3>
          <p>Email: bhanudayahss071@gmail.com</p>
          <p><strong>Principal:</strong> 9857088315</p>
          <p><strong>Science:</strong> 9849440186</p>
          <p><strong>Computer Engineering:</strong> 9815438822</p>
          <p><strong>Hotel Management:</strong> 9857041558</p>
        </div>
        <form method="POST" class="space-y-4">
          <h3 class="font-bold text-lg mb-2">Online Admission Form</h3>
          <input type="text" name="fullname" placeholder="Full Name" class="w-full px-4 py-2 border rounded" required>
          <input type="email" name="email" placeholder="Email Address" class="w-full px-4 py-2 border rounded" required>
          <input type="tel" name="phone" placeholder="Phone Number" class="w-full px-4 py-2 border rounded" required>
          <select name="course" class="w-full px-4 py-2 border rounded" required>
            <option>Select Course</option>
            <option>Hotel Management</option>
            <option>Management</option>
            <option>Education</option>
            <option>Science</option>
            <option>Computer Science</option>
            <option>Computer Engineering</option>
          </select>
          <button type="submit" name="submit" class="bg-red-700 text-white font-bold px-6 py-2 rounded hover:bg-red-800">Submit</button>
        </form>
      </div>
    </section>

  </main>

  <!-- Floating Apply Button -->
  <div class="fixed bottom-4 right-4 z-50">
    <button class="bg-red-700 text-white px-5 py-3 rounded-full shadow-lg hover:bg-red-800">Apply Now</button>
  </div>

  <script>feather.replace()</script>

<?php
// PHP Form Handler at bottom
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  $fullname = htmlspecialchars($_POST['fullname']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $course = htmlspecialchars($_POST['course']);

  echo "<script>alert('Thank you, $fullname! Your application for $course has been submitted.');</script>";
}
?>
</body>
</html>
