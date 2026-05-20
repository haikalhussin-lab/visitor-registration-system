<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>403 - Access Denied</title>

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
        transform: translateY(-12px);
      }
      100% {
        transform: translateY(0px);
      }
    }

    .glow {
      box-shadow: 0 0 80px rgba(239, 68, 68, 0.25);
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-white flex items-center justify-center px-6 py-10 relative">

  <!-- Background Glow -->
  <div class="absolute top-20 left-20 w-72 h-72 bg-red-500/20 rounded-full blur-3xl"></div>
  <div class="absolute bottom-10 right-10 w-96 h-96 bg-orange-400/10 rounded-full blur-3xl"></div>

  <div class="max-w-7xl w-full grid lg:grid-cols-2 gap-14 items-center relative z-10">

    <!-- Left Side -->
    <div>
      <div class="inline-flex items-center gap-2 glass px-4 py-2 rounded-full mb-8">
        <span class="w-2 h-2 rounded-full bg-red-400 animate-pulse"></span>
        <span class="text-sm text-slate-200 tracking-wide">
          Security Protection
        </span>
      </div>

      <h1 class="text-7xl md:text-9xl font-black bg-gradient-to-r from-red-400 via-orange-300 to-yellow-200 text-transparent bg-clip-text leading-none">
        403
      </h1>

      <h2 class="text-4xl md:text-5xl font-bold mt-6 leading-tight">
        Access Forbidden
      </h2>

      <p class="text-slate-300 text-lg mt-6 leading-relaxed max-w-2xl">
        You do not have sufficient permissions to access this page or resource.
        Please contact your administrator if you believe this is an error.
      </p>

      <div class="flex flex-wrap gap-4 mt-10">
        <a href="#"
           class="px-7 py-4 rounded-2xl bg-white text-slate-900 font-semibold hover:scale-105 transition-all duration-300 shadow-2xl">
          Back to Dashboard
        </a>

        <a href="#"
           class="px-7 py-4 rounded-2xl glass hover:bg-white/10 transition-all duration-300">
          Contact Support
        </a>
      </div>

      <div class="grid grid-cols-3 gap-4 mt-12 max-w-xl">
        <div class="glass rounded-3xl p-5">
          <h3 class="text-2xl font-bold">99.9%</h3>
          <p class="text-sm text-slate-400 mt-1">System Security</p>
        </div>

        <div class="glass rounded-3xl p-5">
          <h3 class="text-2xl font-bold">24/7</h3>
          <p class="text-sm text-slate-400 mt-1">Monitoring</p>
        </div>

        <div class="glass rounded-3xl p-5">
          <h3 class="text-2xl font-bold">AES</h3>
          <p class="text-sm text-slate-400 mt-1">Encryption</p>
        </div>
      </div>
    </div>

    <!-- Right Side Card -->
    <div class="relative flex justify-center floating">
      <div class="absolute w-96 h-96 bg-red-500/20 rounded-full blur-3xl"></div>

      <div class="glass glow rounded-[36px] p-8 w-full max-w-md relative overflow-hidden">

        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-red-400 via-orange-300 to-yellow-200"></div>

        <div class="flex items-center justify-between mb-10">
          <div>
            <p class="text-slate-400 text-sm">Security Status</p>
            <h3 class="text-3xl font-bold mt-1">Restricted</h3>
          </div>

          <div class="w-16 h-16 rounded-2xl bg-red-500/20 border border-red-300/20 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-red-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-1.5 0h12a1.5 1.5 0 011.5 1.5v7.5a1.5 1.5 0 01-1.5 1.5h-12A1.5 1.5 0 014.5 19.5V12a1.5 1.5 0 011.5-1.5z" />
            </svg>
          </div>
        </div>

        <div class="space-y-5">

          <div class="bg-slate-900/60 border border-white/10 rounded-2xl p-5">
            <div class="flex justify-between items-center mb-3">
              <span class="text-slate-400 text-sm">User Authorization</span>
              <span class="text-red-300 font-medium text-sm">Denied</span>
            </div>

            <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
              <div class="w-1/4 h-full bg-gradient-to-r from-red-400 to-orange-300 rounded-full"></div>
            </div>
          </div>

          <div class="bg-slate-900/60 border border-white/10 rounded-2xl p-5">
            <div class="flex justify-between items-center mb-3">
              <span class="text-slate-400 text-sm">Authentication Layer</span>
              <span class="text-yellow-200 font-medium text-sm">Required</span>
            </div>

            <div class="flex gap-3 mt-4">
              <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10"></div>
              <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10"></div>
              <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10"></div>
            </div>
          </div>

          <div class="rounded-2xl p-5 bg-gradient-to-r from-red-500/20 to-orange-300/10 border border-red-300/10">
            <h4 class="text-lg font-semibold">Protected Enterprise Environment</h4>
            <p class="text-slate-300 text-sm mt-2 leading-relaxed">
              Access is controlled by enterprise-grade authentication and role-based permission policies.
            </p>
          </div>

        </div>
      </div>
    </div>

  </div>

</body>
</html>