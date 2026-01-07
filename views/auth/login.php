<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>UserManage - Login</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
</head>

<body class="bg-background-light dark:bg-background-dark text-[#0d141b] dark:text-slate-100 font-display transition-colors duration-200 min-h-screen flex flex-col">
    <div class="fixed top-0 w-full border-b border-gray-200 dark:border-gray-800 bg-surface-light/95 dark:bg-surface-dark/95 backdrop-blur-sm z-50">
        <div class="mx-auto flex h-16 max-w-[1280px] items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-4 text-primary">
                <div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-2xl">admin_panel_settings</span>
                </div>
                <a href="<?= url('/') ?>"><h2 class="text-[#0d141b] dark:text-white text-xl font-bold tracking-tight">UserManage</h2></a>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-sm text-gray-500 dark:text-gray-400 hidden sm:inline-block">Don't have an account?</span>
                <a class="text-sm font-bold text-primary hover:text-blue-600 transition-colors" href="#">Sign up</a>
            </div>
        </div>
    </div>
    <main class="flex-grow flex items-center justify-center w-full px-4 pt-20 pb-12 relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[1000px] bg-primary/5 blur-3xl rounded-full -z-10 pointer-events-none"></div>
        <div class="w-full max-w-[440px] bg-white dark:bg-surface-dark rounded-2xl shadow-xl border border-gray-200 dark:border-gray-800 p-8 sm:p-10 relative z-10 animate-fade-in-up">
            <div class="mb-8 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 dark:bg-blue-900/20 text-primary mb-4">
                    <span class="material-symbols-outlined text-2xl">lock_open</span>
                </div>
                <h1 class="text-2xl font-black text-[#0d141b] dark:text-white tracking-tight mb-2">Welcome Back</h1>
                <p class="text-gray-500 dark:text-gray-400 text-sm">Sign in to your dashboard to manage users.</p>
                <?php if($msg = flash('error')): ?>
                        <p class="text-red-500 dark:text-red-400 text-sm"><?= $msg ?></p>
                <?php endif ?>
                <?php if($msg = flash('success')): ?>
                        <p class="text-green-500 dark:text-green-400 text-sm"><?= $msg ?></p>
                <?php endif ?>
            </div>
            <form action="<?= url('/login') ?>" class="space-y-5" method="POST">
                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2" for="email">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                            <span class="material-symbols-outlined text-xl">person</span>
                        </div>
                        <input class="block w-full pl-10 rounded-lg border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-primary focus:border-primary sm:text-sm h-11 transition-shadow" id="email" name="email" placeholder="name@company.com" required="" type="text" />
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2" for="password">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                            <span class="material-symbols-outlined text-xl">lock</span>
                        </div>
                        <input class="block w-full pl-10 rounded-lg border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-surface-dark text-gray-900 dark:text-white focus:ring-primary focus:border-primary sm:text-sm h-11 transition-shadow" id="password" name="password" placeholder="••••••••" required="" type="password" />
                    </div>
                </div>
                <div class="flex items-center justify-between pt-1">
                    <div class="flex items-center">
                        <input class="h-4 w-4 text-primary border-gray-300 rounded focus:ring-primary bg-gray-50 dark:bg-surface-dark dark:border-gray-600" id="remember-me" name="remember-me" type="checkbox" />
                        <label class="ml-2 block text-sm text-gray-600 dark:text-gray-400" for="remember-me">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a class="font-medium text-primary hover:text-blue-600 transition-colors" href="#">Forgot password?</a>
                    </div>
                </div>
                <button class="w-full flex justify-center items-center gap-2 py-3 px-4 border border-transparent rounded-lg shadow-lg shadow-blue-500/20 text-sm font-bold text-white bg-primary hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all transform hover:-translate-y-0.5 mt-6" type="submit">
                    Sign in
                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </button>
            </form>
            <div class="mt-8">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white dark:bg-surface-dark text-gray-500 dark:text-gray-400">Or continue with</span>
                    </div>
                </div>
                <div class="mt-6 grid grid-cols-2 gap-3">
                    <button class="w-full inline-flex justify-center py-2.5 px-4 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors" type="button">
                        <svg aria-hidden="true" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"></path>
                        </svg>
                        Google
                    </button>
                    <button class="w-full inline-flex justify-center py-2.5 px-4 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors" type="button">
                        <svg aria-hidden="true" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" fill-rule="evenodd"></path>
                        </svg>
                        GitHub
                    </button>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-6 border-t border-gray-200 dark:border-gray-800 bg-white dark:bg-background-dark">
        <div class="mx-auto max-w-[1280px] px-4 text-center">
            <p class="text-sm text-gray-500 dark:text-gray-400">© 2023 UserManage Inc. All rights reserved.</p>
            <div class="mt-2 flex justify-center gap-6">
                <a class="text-xs text-gray-400 hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="text-xs text-gray-400 hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="text-xs text-gray-400 hover:text-primary transition-colors" href="#">Help Center</a>
            </div>
        </div>
    </footer>

</body>

</html>