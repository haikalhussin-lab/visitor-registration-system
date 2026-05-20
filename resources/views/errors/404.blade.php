<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 - Page Not Found</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      overflow: hidden;
    }

    .glass {
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(18px);
      -webkit-backdrop-filter: blur(18px);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .floating {
      animation: float 5s ease-in-out infinite;
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-14px);
      }
      100% {
        transform: translateY(0px);
      }
    }

    .glow {
      box-shadow: 0 0 90px rgba(59, 130, 246, 0.25);
    }

    .grid-pattern {
      background-image:
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
      background-size: 40px 40px;
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-white flex items-center justify-center px-6 py-10 relative grid-pattern">

  <!-- Background Effects -->
  <div class="absolute top-10 left-10 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl"></div>
  <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-cyan-400/10 rounded-full blur-3xl"></div>

  <div class="max-w-7xl w-full grid lg:grid-cols-2 gap-16 items-center relative z-10">

    <!-- Left Content -->
    <div>

      <div class="inline-flex items-center gap-2 glass px-4 py-2 rounded-full mb-8">
        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
        <span class="text-sm text-slate-200 tracking-wide">
          Resource Not Available
        </span>
      </div>

      <h1 class="text-7xl md:text-9xl font-black leading-none bg-gradient-to-r from-blue-400 via-cyan-300 to-sky-100 text-transparent bg-clip-text">
        404
      </h1>

      <h2 class="text-4xl md:text-5xl font-bold mt-6 leading-tight">
        Page Not Found
      </h2>

      <p class="text-slate-300 text-lg mt-6 leading-relaxed max-w-2xl">
        The page you are looking for might have been removed, renamed,
        or is temporarily unavailable. Please check the URL or return
        to the main dashboard.
      </p>

      <div class="flex flex-wrap gap-4 mt-10">
        <a href="#"
           class="px-7 py-4 rounded-2xl bg-white text-slate-900 font-semibold hover:scale-105 transition-all duration-300 shadow-2xl">
          Go Home
        </a>

        <a href="#"
           class="px-7 py-4 rounded-2xl glass hover:bg-white/10 transition-all duration-300">
          Contact Support
        </a>
      </div>

      <div class="grid grid-cols-3 gap-4 mt-12 max-w-xl">
        <div class="glass rounded-3xl p-5">
          <h3 class="text-2xl font-bold">100%</h3>
          <p class="text-sm text-slate-400 mt-1">System Online</p>
        </div>

        <div class="glass rounded-3xl p-5">
          <h3 class="text-2xl font-bold">24/7</h3>
          <p class="text-sm text-slate-400 mt-1">Availability</p>
        </div>

        <div class="glass rounded-3xl p-5">
          <h3 class="text-2xl font-bold">Fast</h3>
          <p class="text-sm text-slate-400 mt-1">Recovery</p>
        </div>
      </div>

    </div>

    <!-- Right Side Illustration -->
    <div class="relative flex justify-center floating">

      <div class="absolute w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>

      <div class="glass glow rounded-[36px] p-8 w-full max-w-md relative overflow-hidden">

        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 via-cyan-300 to-sky-100"></div>

        <div class="flex items-center justify-between mb-10">
          <div>
            <p class="text-slate-400 text-sm">Navigation Status</p>
            <h3 class="text-3xl font-bold mt-1">Missing Route</h3>
          </div>

          <div class="w-16 h-16 rounded-2xl bg-blue-500/20 border border-blue-300/20 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-cyan-200">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
          </div>
        </div>

        <div class="space-y-5">

          <div class="bg-slate-900/60 border border-white/10 rounded-2xl p-5">
            <div class="flex justify-between items-center mb-3">
              <span class="text-slate-400 text-sm">Requested URL</span>
              <span class="text-cyan-300 font-medium text-sm">Unavailable</span>
            </div>

            <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
              <div class="w-2/5 h-full bg-gradient-to-r from-blue-400 to-cyan-300 rounded-full"></div>
            </div>
          </div>

          <div class="bg-slate-900/60 border border-white/10 rounded-2xl p-5">
            <div class="flex justify-between items-center mb-3">
              <span class="text-slate-400 text-sm">System Routing</span>
              <span class="text-yellow-200 font-medium text-sm">Searching</span>
            </div>

            <div class="flex gap-3 mt-4">
              <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10"></div>
              <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10"></div>
              <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10"></div>
            </div>
          </div>

          <div class="rounded-2xl p-5 bg-gradient-to-r from-blue-500/20 to-cyan-300/10 border border-cyan-300/10">
            <h4 class="text-lg font-semibold">Smart Navigation System</h4>
            <p class="text-slate-300 text-sm mt-2 leading-relaxed">
              The requested page could not be located within the enterprise application environment.
            </p>
          </div>

        </div>
      </div>
    </div>

  </div>

</body>
</html>
