<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Welcome • RabbitSchool</title>
  @vite(['resources/css/app.css', 'resources/js/app.js']) 
  <meta name="theme-color" content="#4f46e5">
</head>
<body class="antialiased bg-gray-50 text-gray-800">
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-6">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
          <div class="rounded-md bg-indigo-600 text-white font-bold px-3 py-2">RS</div>
          <span class="text-xl font-semibold">RabbitSchool</span>
        </a>

        <nav class="flex items-center gap-4">
          @if (Route::has('login'))
            @auth
              @if(auth()->user()->hasRole('admin'))
                <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium text-white px-6 py-3 rounded-lg shadow-sm bg-indigo-600 hover:bg-indigo-700 transition-colors delay-75  ease-in-out">Dashboard</a>
              @elseif(auth()->user()->hasRole('lecturer'))
                <a href="{{ route('lecturer.dashboard') }}" class="text-sm font-medium text-white px-6 py-3 rounded-lg shadow-sm bg-indigo-600 hover:bg-indigo-700 transition-colors delay-75  ease-in-out">Dashboard</a>
              @elseif(auth()->user()->hasRole('student'))
                <a href="{{ route('student.dashboard') }}" class="text-sm font-medium text-white px-6 py-3 rounded-lg shadow-sm bg-indigo-600 hover:bg-indigo-700 transition-colors delay-75  ease-in-out">Dashboard</a>
              @endif
            @else
              <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Sign in</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Get Started</a>
              @endif
            @endauth
          @endif
        </nav>
      </div>
    </div>
  </header>

  <main class="mt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Hero -->
      <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">Welcome to <span class="text-indigo-600">RabbitSchool</span></h1>
          <p class="mt-4 text-lg text-gray-600">A clean multi-role Laravel starter built with Spatie Permissions. Manage access for Students, Lecturers, and Admins from one unified authentication flow.</p>

          <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 rounded-lg shadow-sm bg-indigo-600 text-white hover:bg-indigo-700">
              Sign in to Continue
            </a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 rounded-lg shadow-sm bg-white border border-gray-200 hover:shadow-md text-gray-700">
                Create an Account
              </a>
            @endif
          </div>

          <dl class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg border border-gray-100 shadow-sm">
              <dt class="text-sm font-semibold text-gray-500">Students</dt>
              <dd class="mt-2 text-sm text-gray-700">Access your dashboard, view courses, submit assignments, and track your progress.</dd>
            </div>
            <div class="bg-white p-4 rounded-lg border border-gray-100 shadow-sm">
              <dt class="text-sm font-semibold text-gray-500">Lecturers</dt>
              <dd class="mt-2 text-sm text-gray-700">Manage classes, grade student work, and communicate effectively.</dd>
            </div>
            <div class="bg-white p-4 rounded-lg border border-gray-100 shadow-sm">
              <dt class="text-sm font-semibold text-gray-500">Admins</dt>
              <dd class="mt-2 text-sm text-gray-700">Control roles, permissions, and overall platform management.</dd>
            </div>
          </dl>
        </div>

        <div class="relative">
          <div class="rounded-xl overflow-hidden shadow-xl">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1200&auto=format&fit=crop" alt="students" class="w-full h-80 object-cover">
          </div>

          <div class="mt-4 grid grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg border border-gray-100 shadow-sm">
              <h4 class="text-sm font-semibold text-gray-500">Unified Login</h4>
              <p class="text-sm mt-2 text-gray-700">One login page for all roles using Spatie roles & permissions.</p>
            </div>
            <div class="bg-white p-4 rounded-lg border border-gray-100 shadow-sm">
              <h4 class="text-sm font-semibold text-gray-500">Smart Redirects</h4>
              <p class="text-sm mt-2 text-gray-700">After login, users are redirected to their respective dashboards automatically.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- How it works -->
      <section class="mt-16">
        <h2 class="text-2xl font-bold">How Multi-Auth Works</h2>
        <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <div class="p-6 bg-white rounded-lg border border-gray-100 shadow-sm">
            <h3 class="font-semibold">1. Unified Authentication</h3>
            <p class="mt-2 text-sm text-gray-600">A single login form authenticates users; Spatie determines their role.</p>
          </div>
          <div class="p-6 bg-white rounded-lg border border-gray-100 shadow-sm">
            <h3 class="font-semibold">2. Role-based Redirect</h3>
            <p class="mt-2 text-sm text-gray-600">Upon login, middleware or a service redirects to admin, lecturer, or student dashboards.</p>
          </div>
          <div class="p-6 bg-white rounded-lg border border-gray-100 shadow-sm">
            <h3 class="font-semibold">3. Role Guards</h3>
            <p class="mt-2 text-sm text-gray-600">Protect routes using `role:` middleware provided by Spatie.</p>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="mt-12 bg-indigo-600 rounded-lg p-8 text-white flex flex-col sm:flex-row items-center justify-between">
        <div>
          <h3 class="text-xl font-bold">Start your journey with RabbitSchool</h3>
          <p class="mt-2 text-sm opacity-90">Log in! and let the app take you to your personalized dashboard.</p>
        </div>
        <div class="mt-4 sm:mt-0">
          <a href="{{ route('login') }}" class="inline-flex items-center px-5 py-3 rounded-md bg-white text-indigo-600 font-semibold">Sign in</a>
        </div>
      </section>

      <!-- Footer -->
      <footer class="mt-12 py-8 text-center text-sm text-gray-500">
        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
          <p>© {{ date('Y') }} RabbitSchool. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </main>
</body>
</html>