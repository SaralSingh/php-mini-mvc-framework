<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UserManage - Simplify Administration</title>
<!-- Fonts and Icons -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "surface-light": "#ffffff",
                        "surface-dark": "#182635",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#0d141b] dark:text-slate-100 font-display transition-colors duration-200">
<!-- Navbar -->
<div class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-gray-800 bg-surface-light/95 dark:bg-surface-dark/95 backdrop-blur-sm">
<div class="mx-auto flex h-16 max-w-[1280px] items-center justify-between px-4 sm:px-6 lg:px-8">
<div class="flex items-center gap-4 text-primary">
<div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-2xl">admin_panel_settings</span>
</div>
<h2 class="text-[#0d141b] dark:text-white text-xl font-bold tracking-tight">UserManage</h2>
</div>
<div class="hidden md:flex flex-1 justify-end gap-8 items-center">
<div class="flex items-center gap-8">
<a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors" href="#">Features</a>
<a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors" href="#">Pricing</a>
<a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors" href="#">Resources</a>
</div>
<a href="<?= url('/login') ?>" class="flex items-center justify-center rounded-lg h-10 px-6 bg-primary text-white text-sm font-bold hover:bg-blue-600 transition-colors shadow-sm shadow-blue-500/20">
<span class="truncate">Log In</span>
    </a>
</div>
<!-- Mobile Menu Icon (Placeholder) -->
<button id="openSidebarBtn" class="md:hidden text-gray-500 dark:text-gray-300">
    <span class="material-symbols-outlined">menu</span>
</button>

</div>
</div>
<!-- Main Content Wrapper -->
<div class="flex flex-col w-full overflow-hidden">
<!-- Hero Section -->
<section class="relative pt-12 pb-20 lg:pt-24 lg:pb-32 overflow-hidden bg-background-light dark:bg-background-dark">
<div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8 relative z-10">
<div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
<!-- Left Column: Content -->
<div class="flex flex-col gap-6 max-w-2xl">
<div class="inline-flex w-fit items-center rounded-full border border-blue-200 bg-blue-50 dark:border-blue-900 dark:bg-blue-900/30 px-3 py-1 text-sm font-medium text-primary">
<span class="flex h-2 w-2 rounded-full bg-primary mr-2"></span>
                            New: SSO Integration v2.0
                        </div>
<h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-[#0d141b] dark:text-white tracking-tight leading-[1.1]">
                            Simplify Your <span class="text-primary">User Admin</span> Workflow
                        </h1>
<p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed max-w-lg">
                            Secure, scalable, and intuitive user management for modern teams. Cut onboarding time in half and manage permissions with ease.
                        </p>
<div class="flex flex-wrap gap-4 mt-4">
<button class="flex h-12 px-8 items-center justify-center rounded-lg bg-primary text-white text-base font-bold hover:bg-blue-600 transition-all shadow-lg shadow-blue-500/25 transform hover:-translate-y-0.5">
                                Start Free Trial
                            </button>
<button class="flex h-12 px-8 items-center justify-center rounded-lg bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 text-[#0d141b] dark:text-white text-base font-bold hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
<span class="material-symbols-outlined text-lg mr-2">play_circle</span>
                                View Demo
                            </button>
</div>
<div class="pt-6 flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400">
<div class="flex -space-x-2">
<img alt="User avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-surface-dark" data-alt="Small avatar of a female user" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIl4V7auHEE6qM9PdyQdzkUSli1MwlBs4E9SyUMazfLdXrhmfVNtIT7pCClRWymwf5LVjBLe8Lb2TgDVSkjaYBkWomsAou5CKRZ3cLbJTQlJQJo-xhUdLk23q5kBHQdqbiThvcx9O1vJuZ8HcGVT1n9J8urOjWyclSD2d19g-gHDIC8g64phx0eF1frqkvLdXu_kzg9SJPI_i4BuhJMlu0I5DIinjUYMZabBy9yO47g-rZp9d1jU17roUzMP5JV9QREqukJqs0xTCe"/>
<img alt="User avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-surface-dark" data-alt="Small avatar of a male user" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpDMRE8CWmGfhjfMcpyD4mciV6u3G3YJ_gEutwcKIC7QmwI5pfSGeuOeOmvJkq1Qu1ZFW_LYH5HxtBHZMSwFyPR_dq2LSAhRaGB7kSfUn9TF1BHuTCkl-FwXJwxllDquzRYIl-j2xMQB9vWzGzbbw4IZW4rldWhm22QT6ysIe_AK2FKgbAEAdCbzfTB6rlQ8M12e2N5h-_Y87eBaAOBDXROfne9E8vQ-Zd51ekvKy-VV_ZhYcP0GwUJGuM51nlGkpeTh-Q8j2gEJi9"/>
<img alt="User avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-surface-dark" data-alt="Small avatar of a male user" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaOGSUqEY9Sn64BF0CPlq0sYlUAoCMjLpt9T9WFrxDVuH1voBNu4g1IBuz75CVy-w-sA-pYDX0XALKTYXxBHtLEKPBWBLfp0o33wCWhoIVpR88qI11QEW8zRilB4EByPOB4WoUqRIwduFLJWZFtciDRExTX_g0klasxWF4b39Xz6CQhza5Q7V1W27M-8ec0TKQcN-vD46YUcxEmYx5wl1hHbmCJN3n8GRda_S-a5ai43lgaJ3kIvdV1yUXKE2cAOHJLNzCyjUaEcCo"/>
</div>
<p>Trusted by 10,000+ admins</p>
</div>
</div>
<!-- Right Column: Visual -->
<div class="relative lg:h-auto w-full flex justify-center lg:justify-end">
<div class="relative w-full max-w-[600px] aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark">
<!-- Abstract Dashboard UI Representation -->
<div class="absolute inset-0 bg-cover bg-center" data-alt="Modern dashboard interface showing analytics and user charts" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAUyhp6QFXlSwOkfzFCfawmwvzrarp4BOFsGGSxe-xxKl3fv_jH6E2yIbGG0XELaM0vN-n1wLQgnHtevKgrp5BIMr0_iWtQbxkOAL0WG15lpDo6XPYQUsevor9qIn0OjY3uIjkRlNfnnLg942eaRA00bfBGJMviD0eBgm8YZPgkJiRId5hKsUVCTxaL32Gwde-o5mBuSgqbaBw4GqTWQ0G8FNHlRGGuWkwIOL8thLPkMZ4FeSEDPUDnXHW6D0s8TFtJ3l_1ic31kfVi');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-background-light/20 via-transparent to-transparent"></div>
<!-- Floating Card Overlay -->
<div class="absolute bottom-6 left-6 right-6 p-4 bg-surface-light/90 dark:bg-surface-dark/90 backdrop-blur-md rounded-xl border border-white/20 shadow-lg">
<div class="flex items-center gap-4">
<div class="bg-green-100 dark:bg-green-900/30 p-2 rounded-full text-green-600 dark:text-green-400">
<span class="material-symbols-outlined">check_circle</span>
</div>
<div>
<p class="text-sm font-bold dark:text-white">System Status: Healthy</p>
<p class="text-xs text-gray-500 dark:text-gray-400">All services operational across 4 regions.</p>
</div>
</div>
</div>
</div>
<!-- Decorative Blob -->
<div class="absolute -z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-primary/5 blur-3xl rounded-full"></div>
</div>
</div>
</div>
</section>
<!-- Logo Strip -->
<div class="w-full border-y border-gray-200 dark:border-gray-800 bg-white dark:bg-surface-dark py-10">
<div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8 text-center">
<p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-6">Powering next-gen teams at</p>
<div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
<!-- Simple Text Logos for demo purposes -->
<h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 flex items-center gap-2"><span class="material-symbols-outlined">diamond</span> Acme Corp</h3>
<h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 flex items-center gap-2"><span class="material-symbols-outlined">pentagon</span> GlobalTech</h3>
<h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 flex items-center gap-2"><span class="material-symbols-outlined">hexagon</span> HexaSystems</h3>
<h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 flex items-center gap-2"><span class="material-symbols-outlined">emergency_recording</span> Streamline</h3>
<h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 flex items-center gap-2"><span class="material-symbols-outlined">bolt</span> BoltShift</h3>
</div>
</div>
</div>
<!-- Features Section -->
<section class="py-20 lg:py-28 bg-background-light dark:bg-background-dark" id="features">
<div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-3xl mx-auto mb-16">
<h2 class="text-3xl font-black tracking-tight text-[#0d141b] dark:text-white sm:text-4xl mb-4">
                        Everything you need to manage users
                    </h2>
<p class="text-lg text-gray-600 dark:text-gray-400">
                        From granular permissions to enterprise-grade security, we've built the tools you need to scale safely.
                    </p>
</div>
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Feature 1 -->
<div class="group relative rounded-2xl bg-surface-light dark:bg-surface-dark p-8 shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md hover:border-primary/20 transition-all duration-300">
<div class="h-12 w-12 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">verified_user</span>
</div>
<h3 class="text-xl font-bold text-[#0d141b] dark:text-white mb-3">Secure Authentication</h3>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Enterprise-grade SSO, MFA support, and social logins integrated out of the box for total peace of mind.
                        </p>
</div>
<!-- Feature 2 -->
<div class="group relative rounded-2xl bg-surface-light dark:bg-surface-dark p-8 shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md hover:border-primary/20 transition-all duration-300">
<div class="h-12 w-12 rounded-lg bg-indigo-50 dark:bg-indigo-900/20 flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-6 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">admin_panel_settings</span>
</div>
<h3 class="text-xl font-bold text-[#0d141b] dark:text-white mb-3">Role Management</h3>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Define granular permissions for every team member, department, and project with our visual role builder.
                        </p>
</div>
<!-- Feature 3 -->
<div class="group relative rounded-2xl bg-surface-light dark:bg-surface-dark p-8 shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md hover:border-primary/20 transition-all duration-300">
<div class="h-12 w-12 rounded-lg bg-teal-50 dark:bg-teal-900/20 flex items-center justify-center text-teal-600 dark:text-teal-400 mb-6 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">monitoring</span>
</div>
<h3 class="text-xl font-bold text-[#0d141b] dark:text-white mb-3">Real-time Analytics</h3>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Insightful dashboards to track user activity, login attempts, and platform adoption growth in real-time.
                        </p>
</div>
<!-- Feature 4 -->
<div class="group relative rounded-2xl bg-surface-light dark:bg-surface-dark p-8 shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md hover:border-primary/20 transition-all duration-300">
<div class="h-12 w-12 rounded-lg bg-purple-50 dark:bg-purple-900/20 flex items-center justify-center text-purple-600 dark:text-purple-400 mb-6 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">group_add</span>
</div>
<h3 class="text-xl font-bold text-[#0d141b] dark:text-white mb-3">Auto-Onboarding</h3>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Create automated workflows to invite users and assign them to correct workspaces instantly.
                        </p>
</div>
<!-- Feature 5 -->
<div class="group relative rounded-2xl bg-surface-light dark:bg-surface-dark p-8 shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md hover:border-primary/20 transition-all duration-300">
<div class="h-12 w-12 rounded-lg bg-orange-50 dark:bg-orange-900/20 flex items-center justify-center text-orange-600 dark:text-orange-400 mb-6 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">api</span>
</div>
<h3 class="text-xl font-bold text-[#0d141b] dark:text-white mb-3">API First</h3>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Built for developers. Full programmatic access to manage your users from your own backend code.
                        </p>
</div>
<!-- Feature 6 -->
<div class="group relative rounded-2xl bg-surface-light dark:bg-surface-dark p-8 shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md hover:border-primary/20 transition-all duration-300">
<div class="h-12 w-12 rounded-lg bg-rose-50 dark:bg-rose-900/20 flex items-center justify-center text-rose-600 dark:text-rose-400 mb-6 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl">history</span>
</div>
<h3 class="text-xl font-bold text-[#0d141b] dark:text-white mb-3">Audit Logs</h3>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Keep a permanent record of every action taken within the system for compliance and security auditing.
                        </p>
</div>
</div>
</div>
</section>
<!-- Testimonials Section -->
<section class="py-20 bg-white dark:bg-surface-dark border-t border-gray-100 dark:border-gray-800">
<div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8">
<div class="mx-auto max-w-4xl">
<div class="flex flex-col items-center text-center">
<div class="mb-6 text-primary">
<span class="material-symbols-outlined text-5xl">format_quote</span>
</div>
<h2 class="text-2xl sm:text-3xl font-medium text-[#0d141b] dark:text-white leading-relaxed mb-8">
                            "This system saved us 20 hours a week on onboarding alone. The role management features are flexible enough for our complex enterprise needs, yet simple enough for our HR team to use daily."
                        </h2>
<div class="flex items-center gap-4">
<div class="h-14 w-14 rounded-full bg-cover bg-center ring-4 ring-gray-50 dark:ring-gray-800" data-alt="Portrait of Jane Doe, smiling professional woman" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuChbBhzr5Dt0bAPsAitVt67sZNOV9bwLMycFrI-QwmqsuikChVXOmmcje-HFa4JRgfVTDV-1ZpTID5DwusPeAH1P8wIZA4jUAAR-bikDKe3F9GkKEcrRWoIsfoKWI1HVTdhTkYtfVaWGskOzep3qdyT66b9kQCLJPDz-JASqv8sZyV-ZqeNAujNWOPe7CiXJSIcvppdVjdFkUzKKrOL0TuaIy1xXo7UBAfs_A-iXeRhnbytZZkTddt6Q49v1cPAEeIYcu5TM0R3AQk_');"></div>
<div class="text-left">
<p class="text-base font-bold text-[#0d141b] dark:text-white">Jane Doe</p>
<p class="text-sm text-gray-500 dark:text-gray-400">CTO, Software Inc.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA / Bottom Section -->
<section class="py-24 bg-primary text-white relative overflow-hidden">
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
<div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8 relative z-10 text-center">
<h2 class="text-3xl sm:text-4xl font-black mb-6">Ready to regain control?</h2>
<p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">Join thousands of companies managing their user base effectively. Start your 14-day free trial today.</p>
<div class="flex flex-col sm:flex-row items-center justify-center gap-4">
<button class="w-full sm:w-auto px-8 py-4 rounded-lg bg-white text-primary font-bold text-lg hover:bg-blue-50 transition-colors shadow-lg">
                        Get Started Now
                    </button>
<button class="w-full sm:w-auto px-8 py-4 rounded-lg bg-transparent border-2 border-white/30 text-white font-bold text-lg hover:bg-white/10 transition-colors">
                        Talk to Sales
                    </button>
</div>
</div>
</section>
<!-- Footer -->
<footer class="bg-surface-light dark:bg-background-dark pt-16 pb-8 border-t border-gray-200 dark:border-gray-800">
<div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 mb-12">
<div class="col-span-2 lg:col-span-2">
<div class="flex items-center gap-2 text-primary mb-4">
<span class="material-symbols-outlined text-2xl">admin_panel_settings</span>
<span class="text-xl font-bold text-[#0d141b] dark:text-white">UserManage</span>
</div>
<p class="text-sm text-gray-500 dark:text-gray-400 max-w-xs mb-6">
                            The complete solution for user authentication, management, and analytics. Built for modern development teams.
                        </p>
<div class="flex gap-4">
<a class="text-gray-400 hover:text-primary transition-colors" href="#"><span class="sr-only">Twitter</span><svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg></a>
<a class="text-gray-400 hover:text-primary transition-colors" href="#"><span class="sr-only">GitHub</span><svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24"><path clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" fill-rule="evenodd"></path></svg></a>
</div>
</div>
<div>
<h4 class="text-sm font-bold uppercase tracking-wider text-[#0d141b] dark:text-white mb-4">Product</h4>
<ul class="space-y-3">
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Features</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Integrations</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Pricing</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Changelog</a></li>
</ul>
</div>
<div>
<h4 class="text-sm font-bold uppercase tracking-wider text-[#0d141b] dark:text-white mb-4">Resources</h4>
<ul class="space-y-3">
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Documentation</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">API Reference</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Community</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Help Center</a></li>
</ul>
</div>
<div>
<h4 class="text-sm font-bold uppercase tracking-wider text-[#0d141b] dark:text-white mb-4">Company</h4>
<ul class="space-y-3">
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">About</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Blog</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Careers</a></li>
<li><a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors" href="#">Contact</a></li>
</ul>
</div>
</div>
<div class="border-t border-gray-200 dark:border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-gray-500 dark:text-gray-400">© 2023 UserManage Inc. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary" href="#">Privacy Policy</a>
<a class="text-sm text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary" href="#">Terms of Service</a>
</div>
</div>
</div>
</footer>
</div>

<!-- MOBILE SIDEBAR (RIGHT) -->
<div id="mobileSidebar"
     class="fixed inset-y-0 right-0 w-64 bg-surface-light dark:bg-surface-dark border-l border-gray-200 dark:border-gray-700 transform translate-x-full transition-transform duration-300 z-50">
    
    <div class="p-4 flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
        <h2 class="text-lg font-bold">Menu</h2>
        <button id="closeSidebarBtn" class="text-gray-500 dark:text-gray-300">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>

    <nav class="p-4 space-y-4 text-gray-700 dark:text-gray-300">
        <a class="block hover:text-primary" href="#">Features</a>
        <a class="block hover:text-primary" href="#">Pricing</a>
        <a class="block hover:text-primary" href="#">Resources</a>
        <a class="block hover:text-primary" href="<?= url('/login') ?>">Login</a>
    </nav>

</div>


<!-- BACKDROP -->
<div id="sidebarBackdrop"
     class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 z-40"></div>


<script>
    const openBtn = document.getElementById('openSidebarBtn');
    const closeBtn = document.getElementById('closeSidebarBtn');
    const sidebar = document.getElementById('mobileSidebar');
    const backdrop = document.getElementById('sidebarBackdrop');

    function openSidebar() {
        sidebar.classList.remove('translate-x-full');
        backdrop.classList.remove('opacity-0', 'pointer-events-none');
    }

    function closeSidebar() {
        sidebar.classList.add('translate-x-full');
        backdrop.classList.add('opacity-0', 'pointer-events-none');
    }

    openBtn.addEventListener('click', openSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    backdrop.addEventListener('click', closeSidebar);
</script>


</body>
</html>