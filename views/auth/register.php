<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>User Management Registration</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen font-display transition-colors duration-200">
    <div class="relative flex flex-col min-h-screen">
        <!-- TopNavBar Component -->
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e7edf3] dark:border-slate-800 bg-white dark:bg-slate-900 px-6 lg:px-10 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-4 text-[#0d141b] dark:text-white">
                <div class="size-6 text-primary">
                    <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z" fill="currentColor"></path>
                    </svg>
                </div>
                <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">UserFlow</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="hidden md:flex items-center gap-9">
                    <a class="text-[#0d141b] dark:text-slate-300 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Features</a>
                    <a class="text-[#0d141b] dark:text-slate-300 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">Pricing</a>
                    <a class="text-[#0d141b] dark:text-slate-300 text-sm font-medium leading-normal hover:text-primary transition-colors" href="#">About</a>
                </div>
                <a href="<?= url('/login') ?>" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-all">
                    <span class="truncate">Log In</span>
                </a>
            </div>
        </header>
        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col items-center justify-center py-12 px-4">
            <div class="w-full max-w-[480px] bg-white dark:bg-slate-900 p-8 rounded-xl shadow-sm border border-[#e7edf3] dark:border-slate-800">
                <!-- Headline & Body Text -->
                <div class="mb-8">
                    <h1 class="text-[#0d141b] dark:text-white tracking-light text-[32px] font-bold leading-tight text-center pb-2">Create your account</h1>
                    <p class="text-[#4c739a] dark:text-slate-400 text-base font-normal leading-normal text-center px-4">Join our user management system today</p>
                    <?php if ($msg = flash('error')): ?>
                        <p class="text-red-500 dark:text-red-400 text-sm"><?= $msg ?></p>
                    <?php endif ?>
                    <?php if ($msg = flash('success')): ?>
                        <p class="text-green-500 dark:text-green-400 text-sm"><?= $msg ?></p>
                    <?php endif ?>
                </div>
                <!-- Registration Form -->
                <form action="<?= url('/register') ?>" method="POST" class="space-y-4">
                    <!-- Full Name Field -->
                    <div class="flex flex-col gap-2">
                        <label class="flex flex-col w-full">
                            <p class="text-[#0d141b] dark:text-slate-200 text-base font-medium leading-normal pb-2">Full Name</p>
                            <input name="name" class="form-input flex w-full rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfdbe7] dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-14 placeholder:text-[#4c739a] p-[15px] text-base font-normal leading-normal" placeholder="Enter your full name" type="text" />
                        </label>
                    </div>
                    <!-- Email Address Field -->
                    <div class="flex flex-col gap-2">
                        <label class="flex flex-col w-full">
                            <p class="text-[#0d141b] dark:text-slate-200 text-base font-medium leading-normal pb-2">Email Address</p>
                            <input name="email" class="form-input flex w-full rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfdbe7] dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-14 placeholder:text-[#4c739a] p-[15px] text-base font-normal leading-normal" placeholder="name@company.com" type="email" />
                        </label>
                    </div>
                    <!-- Password Field -->
                    <div class="flex flex-col gap-2 relative">
                        <label class="flex flex-col w-full">
                            <p class="text-[#0d141b] dark:text-slate-200 text-base font-medium leading-normal pb-2">Password</p>
                            <div class="relative">
                                <input name="password" class="form-input flex w-full rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfdbe7] dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-14 placeholder:text-[#4c739a] p-[15px] pr-12 text-base font-normal leading-normal" placeholder="••••••••" type="password" />
                                <button class="absolute right-4 top-1/2 -translate-y-1/2 text-[#4c739a]" type="button">
                                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                                </button>
                            </div>
                        </label>
                    </div>
                    <!-- Confirm Password Field -->
                    <!-- <div class="flex flex-col gap-2">
                        <label class="flex flex-col w-full">
                            <p class="text-[#0d141b] dark:text-slate-200 text-base font-medium leading-normal pb-2">Confirm Password</p>
                            <input class="form-input flex w-full rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-[#cfdbe7] dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-14 placeholder:text-[#4c739a] p-[15px] text-base font-normal leading-normal" placeholder="••••••••" type="password" />
                        </label>
                    </div> -->
                    <!-- Terms and Conditions -->
                    <div class="flex items-start gap-3 px-1 py-2">
                        <input class="mt-1 h-5 w-5 rounded border-[#cfdbe7] text-primary focus:ring-primary focus:ring-offset-0 dark:bg-slate-800 dark:border-slate-700" id="terms" type="checkbox" />
                        <label class="text-sm text-[#4c739a] dark:text-slate-400 leading-tight" for="terms">
                            I agree to the <a class="text-primary font-medium hover:underline" href="#">Terms and Conditions</a> and <a class="text-primary font-medium hover:underline" href="#">Privacy Policy</a>.
                        </label>
                    </div>
                    <!-- Sign Up Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full flex items-center justify-center rounded-lg h-14 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-all shadow-md active:scale-[0.98]" type="submit">
                            Sign Up
                        </button>
                    </div>
                </form>
                <!-- Footer Link -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-[#4c739a] dark:text-slate-400">
                        Already have an account?
                        <a class="text-primary font-bold hover:underline ml-1" href="<?= url('/login') ?>">Log in</a>
                    </p>
                </div>
            </div>
        </main>
        <!-- Optional Footer with background -->
        <footer class="mt-auto py-8 text-center text-[#4c739a] dark:text-slate-500 text-xs">
            © 2023 UserFlow Inc. All rights reserved.
        </footer>
    </div>
</body>

</html>