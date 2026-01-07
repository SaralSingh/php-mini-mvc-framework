<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard Overview</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom scrollbar for table if needed */
        .custom-scrollbar::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="hidden w-64 flex-col border-r border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 md:flex">
            <div class="flex h-16 items-center justify-center border-b border-slate-200 px-6 dark:border-slate-800">
                <div class="flex items-center gap-2 text-primary font-bold text-xl">
                    <span class="material-symbols-outlined text-3xl">admin_panel_settings</span>
                    <span>AdminPanel</span>
                </div>
            </div>
            <div class="flex flex-1 flex-col overflow-y-auto py-4">
                <nav class="flex-1 space-y-1 px-3">
                    <a class="group flex items-center gap-3 rounded-lg bg-primary/10 px-3 py-2.5 text-sm font-medium text-primary" href="#">
                        <span class="material-symbols-outlined">dashboard</span>
                        Dashboard
                    </a>
                    <a class="group flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-white" href="#">
                        <span class="material-symbols-outlined">group</span>
                        Users
                    </a>
                    <a class="group flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-white" href="#">
                        <span class="material-symbols-outlined">person_add</span>
                        Add User
                    </a>
                    <a class="group flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-white" href="#">
                        <span class="material-symbols-outlined">verified_user</span>
                        Roles &amp; Permissions
                    </a>
                    <a class="group flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-slate-900 dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-white" href="#">
                        <span class="material-symbols-outlined">settings</span>
                        Settings
                    </a>
                </nav>
            </div>
            <div class="border-t border-slate-200 p-4 dark:border-slate-800">
                <a class="group flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-red-600 hover:bg-red-50 dark:text-red-400 dark:hover:bg-red-900/20" href="<?= url('/logout') ?>">
                    <span class="material-symbols-outlined">logout</span>
                    Logout
                </a>
            </div>
        </aside>
        <!-- Main Content -->
        <div class="flex flex-1 flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="flex h-16 items-center justify-between border-b border-slate-200 bg-white px-6 dark:border-slate-800 dark:bg-slate-900">
                <div class="flex items-center gap-4 md:hidden">
                    <button id="openSidebarBtn" class="text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <span class="text-lg font-bold text-slate-900 dark:text-white">Admin Panel</span>
                </div>
                <!-- Search Bar (Optional, for desktop layout balance) -->
                <div class="hidden max-w-md flex-1 md:block">
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400">search</span>
                        <input class="w-full rounded-lg border-slate-200 bg-slate-50 py-2 pl-10 pr-4 text-sm focus:border-primary focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-white" placeholder="Search users, roles..." type="text" />
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <button class="relative text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute -right-1 -top-1 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-[10px] font-bold text-white">3</span>
                    </button>
                    <div class="flex items-center gap-3 pl-6 border-l border-slate-200 dark:border-slate-700">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-medium text-slate-900 dark:text-white">Administrator</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Super Admin</p>
                        </div>
                        <div class="h-10 w-10 rounded-full bg-cover bg-center ring-2 ring-slate-100 dark:ring-slate-700" data-alt="Admin user profile picture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAQRKsGedYDmwCdO1gXC894UfgLgzYGGD1HSfW3A25LrXnBwrgDJnx3WSdgSpUivSacEmLwo0zhYPZ8AbzRsS7h0bCc4Xw7bMJrzpCP8X6zoExwxkI5UGtNzf643PqjkPdUw-uqJEXsHny0WEUHf-OxgW0mo-ybVhr-ZYQdoyF_7vE_uo-kQ-EMs_c-D8eNJNxp4YMN1prflWP1JZiIPA5Zz-EhR_dDRbxcRnDpBiyHnvUOhovfcNZXfLBQe8gg5B0Iz-AZf4bPU_Sg');"></div>
                    </div>
                </div>
            </header>
            <!-- Scrollable Content Area -->
            <main class="flex-1 overflow-y-auto bg-background-light p-6 dark:bg-background-dark md:p-10">
                <div class="mx-auto max-w-6xl space-y-8">
                    <!-- Page Heading -->
                    <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-900 dark:text-white">Dashboard Overview</h1>
                            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Welcome back, here's what's happening today.</p>
                        </div>
                        <button class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            Add New User
                        </button>
                    </div>
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Total Users -->
                        <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-sm transition-all hover:shadow-md dark:bg-slate-900">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Users</p>
                                    <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">1,240</p>
                                </div>
                                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">
                                    <span class="material-symbols-outlined">group</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center text-sm">
                                <span class="flex items-center text-green-600 dark:text-green-400 font-medium">
                                    <span class="material-symbols-outlined mr-1 text-base">trending_up</span>
                                    12%
                                </span>
                                <span class="ml-2 text-slate-400">vs last month</span>
                            </div>
                        </div>
                        <!-- Active Users -->
                        <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-sm transition-all hover:shadow-md dark:bg-slate-900">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Active Users</p>
                                    <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">1,180</p>
                                </div>
                                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-green-50 text-green-600 dark:bg-green-900/20 dark:text-green-400">
                                    <span class="material-symbols-outlined">check_circle</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center text-sm">
                                <span class="flex items-center text-green-600 dark:text-green-400 font-medium">
                                    <span class="material-symbols-outlined mr-1 text-base">trending_up</span>
                                    5%
                                </span>
                                <span class="ml-2 text-slate-400">vs last month</span>
                            </div>
                        </div>
                        <!-- Pending/Blocked -->
                        <div class="group relative overflow-hidden rounded-xl bg-white p-6 shadow-sm transition-all hover:shadow-md dark:bg-slate-900">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Pending / Blocked</p>
                                    <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">60</p>
                                </div>
                                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-amber-50 text-amber-600 dark:bg-amber-900/20 dark:text-amber-400">
                                    <span class="material-symbols-outlined">warning</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center text-sm">
                                <span class="flex items-center text-red-600 dark:text-red-400 font-medium">
                                    <span class="material-symbols-outlined mr-1 text-base">trending_down</span>
                                    2%
                                </span>
                                <span class="ml-2 text-slate-400">vs last month</span>
                            </div>
                        </div>
                    </div>
                    <!-- Main Content Split: Table + Activity -->
                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                        <!-- Users Table Section -->
                        <div class="rounded-xl bg-white shadow-sm dark:bg-slate-900 lg:col-span-2">
                            <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4 dark:border-slate-800">
                                <h2 class="text-lg font-bold text-slate-900 dark:text-white">Recent Users</h2>
                                <button class="text-sm font-medium text-primary hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">View All</button>
                            </div>
                            <div class="overflow-x-auto custom-scrollbar">
                                <table class="w-full text-left text-sm">
                                    <thead class="bg-slate-50 text-xs uppercase text-slate-500 dark:bg-slate-800/50 dark:text-slate-400">
                                        <tr>
                                            <th class="px-6 py-4 font-semibold">User</th>
                                            <th class="px-6 py-4 font-semibold">Role</th>
                                            <th class="px-6 py-4 font-semibold">Status</th>
                                            <th class="px-6 py-4 font-semibold text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                        <!-- Row 1 -->
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-9 rounded-full bg-slate-200 bg-cover bg-center" data-alt="Avatar of Thomas Lean" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA8HOxrCfcj5fZbEPdL_LAvUrMNcpy6AIUHjQfw4vea8tQVE4LaEAGa9pR_I_5y2ASlBLxmhBV6Fv-xGRwdoI-YHzBz9bAzLYf55FB7q7Kz9IQP70hePYkdx0YLzdCo6tYg28Ac2f-tJxI_y9p2bcZc9s_nHfL6L7U9ewAK_pCX1jBruS9sis0GpB2Yk7917_LKnH3Ydp2wnEJWY6BmGzZ_HrkQ3xYinG4h24YmQcantWRjapTrySBY08nAtBgMi7W-M5mxJ87T3hTj');"></div>
                                                    <div>
                                                        <p class="font-medium text-slate-900 dark:text-white">Thomas Lean</p>
                                                        <p class="text-xs text-slate-500 dark:text-slate-400">thomas.lean@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-slate-600 dark:text-slate-300">Editor</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center rounded-full bg-green-50 px-2.5 py-0.5 text-xs font-medium text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                                    Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <button class="flex h-8 w-8 items-center justify-center rounded-full text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-slate-800 dark:hover:text-slate-300">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                    </button>
                                                    <button class="flex h-8 w-8 items-center justify-center rounded-full text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-400">
                                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Row 2 -->
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-9 rounded-full bg-slate-200 bg-cover bg-center" data-alt="Avatar of Sarah Smith" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBY5y7smcbvHEcVPtV1YUZMTAinva2pe0VNygoqcQCtEIqSoi_Am-wiUFTlXKcd1mXUiKqmIr8S3fftfDqE-rJoEDOX-n-mp-a4hostmni9y7DbdbfS1-nozSyQxeY7dZceyqnDakw_2Mqww1QEx0TXF278UtjDHqOZHCHgUPiM21-Ia7zc776JV8QFCD3cn5rWyQ3-5P9PDch0CsBHPuujmXFJ4NZmWc8Dk6I3m6dbk4PSFNczmpcQ77v_9ST0Ahb__9_qeJHUdl1w');"></div>
                                                    <div>
                                                        <p class="font-medium text-slate-900 dark:text-white">Sarah Smith</p>
                                                        <p class="text-xs text-slate-500 dark:text-slate-400">sarah.smith@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-slate-600 dark:text-slate-300">Admin</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center rounded-full bg-green-50 px-2.5 py-0.5 text-xs font-medium text-green-700 dark:bg-green-900/30 dark:text-green-400">
                                                    Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <button class="flex h-8 w-8 items-center justify-center rounded-full text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-slate-800 dark:hover:text-slate-300">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                    </button>
                                                    <button class="flex h-8 w-8 items-center justify-center rounded-full text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-400">
                                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Row 3 -->
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-9 rounded-full bg-slate-200 bg-cover bg-center" data-alt="Avatar of Adrian Doe" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAXTAV-kwPlt2yajm6jfV5QbsrggShfS43hHTqai9XQheFNY7W5PbeNZjjlmieKKaLZqlzLHACjlj8RgmmSmJ4kyhpNe3Q1iI4N9WepbQMJflpKF-6AsUr4hsPIKXgEzvt4_GDyGsy1ouvWtL4KC1-zNHlXT4RLjycjaKw1C4am9P6fWilj89FraZB-34bWnJe5dXKS4fQH_O5Htz6ZiRNuE_95Uzp3OlR-vubj5m-0LIThEC_mFQr96zgHcon0MIk2M1__Oj79Jzhm');"></div>
                                                    <div>
                                                        <p class="font-medium text-slate-900 dark:text-white">Adrian Doe</p>
                                                        <p class="text-xs text-slate-500 dark:text-slate-400">adrian.doe@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-slate-600 dark:text-slate-300">Viewer</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center rounded-full bg-amber-50 px-2.5 py-0.5 text-xs font-medium text-amber-700 dark:bg-amber-900/30 dark:text-amber-400">
                                                    Pending
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <button class="flex h-8 w-8 items-center justify-center rounded-full text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-slate-800 dark:hover:text-slate-300">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                    </button>
                                                    <button class="flex h-8 w-8 items-center justify-center rounded-full text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-400">
                                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Row 4 -->
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-9 w-9 rounded-full bg-slate-200 bg-cover bg-center" data-alt="Avatar of Mike Ross" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDokw-y3JRcVFW3xoveqYoRwBIceO5jofSM8GKNZnyrqVpWSpbMVy_sQPnH81OSWyONhbQBuRLDvGLELsFPIUQNJrKRzDlWI5vEeeFmAsDtGWqM6ZuRhCZ8x8hU2uG9DiL5S6ftskXXIJtIO-j6IaL3NhCsiVF2iAPkYHTg3w_of7MBq11U2IByXBBG2YImZUNwnXnSjO0XfPsrEX62TzNIk7qkpGc1TZxRpb4wFpe9ufhWmwv9Sgc53oIgXu3BObUHDSswVE6q6j2j');"></div>
                                                    <div>
                                                        <p class="font-medium text-slate-900 dark:text-white">Mike Ross</p>
                                                        <p class="text-xs text-slate-500 dark:text-slate-400">mike.ross@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-slate-600 dark:text-slate-300">Editor</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center rounded-full bg-red-50 px-2.5 py-0.5 text-xs font-medium text-red-700 dark:bg-red-900/30 dark:text-red-400">
                                                    Blocked
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <button class="flex h-8 w-8 items-center justify-center rounded-full text-slate-400 hover:bg-slate-100 hover:text-slate-600 dark:hover:bg-slate-800 dark:hover:text-slate-300">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                    </button>
                                                    <button class="flex h-8 w-8 items-center justify-center rounded-full text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-400">
                                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Activity Summary Section -->
                        <div class="rounded-xl bg-white p-6 shadow-sm dark:bg-slate-900">
                            <h2 class="mb-4 text-lg font-bold text-slate-900 dark:text-white">Recent Activity</h2>
                            <div class="relative pl-4 border-l border-slate-200 dark:border-slate-800 space-y-8">
                                <!-- Item 1 -->
                                <div class="relative">
                                    <div class="absolute -left-[21px] mt-1.5 h-2.5 w-2.5 rounded-full bg-primary ring-4 ring-white dark:ring-slate-900"></div>
                                    <p class="text-sm font-medium text-slate-900 dark:text-white">New User Added</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Adrian Doe was added to the system.</p>
                                    <p class="mt-1 text-[10px] font-medium text-slate-400">2 mins ago</p>
                                </div>
                                <!-- Item 2 -->
                                <div class="relative">
                                    <div class="absolute -left-[21px] mt-1.5 h-2.5 w-2.5 rounded-full bg-slate-300 ring-4 ring-white dark:bg-slate-600 dark:ring-slate-900"></div>
                                    <p class="text-sm font-medium text-slate-900 dark:text-white">Role Updated</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Sarah Smith changed to Admin role.</p>
                                    <p class="mt-1 text-[10px] font-medium text-slate-400">1 hour ago</p>
                                </div>
                                <!-- Item 3 -->
                                <div class="relative">
                                    <div class="absolute -left-[21px] mt-1.5 h-2.5 w-2.5 rounded-full bg-slate-300 ring-4 ring-white dark:bg-slate-600 dark:ring-slate-900"></div>
                                    <p class="text-sm font-medium text-slate-900 dark:text-white">System Update</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Automated backup completed successfully.</p>
                                    <p class="mt-1 text-[10px] font-medium text-slate-400">5 hours ago</p>
                                </div>
                                <!-- Item 4 -->
                                <div class="relative">
                                    <div class="absolute -left-[21px] mt-1.5 h-2.5 w-2.5 rounded-full bg-red-400 ring-4 ring-white dark:ring-slate-900"></div>
                                    <p class="text-sm font-medium text-slate-900 dark:text-white">User Blocked</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Mike Ross was blocked for policy violation.</p>
                                    <p class="mt-1 text-[10px] font-medium text-slate-400">Yesterday</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button class="w-full rounded-lg border border-slate-200 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50 dark:border-slate-700 dark:text-slate-300 dark:hover:bg-slate-800">
                                    View Full History
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- MOBILE SIDEBAR -->
<div id="mobileSidebar"
     class="fixed inset-y-0 left-0 w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 transform -translate-x-full transition-transform duration-300 z-50 md:hidden">

    <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-slate-800">
        <span class="text-lg font-bold text-slate-900 dark:text-white">Menu</span>
        <button id="closeSidebarBtn" class="text-slate-500 dark:text-slate-300">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>

    <nav class="p-4 space-y-4">
        <a class="flex items-center gap-3 text-slate-700 dark:text-slate-300 hover:text-primary" href="#">
            <span class="material-symbols-outlined">dashboard</span> Dashboard
        </a>
        <a class="flex items-center gap-3 text-slate-700 dark:text-slate-300 hover:text-primary" href="#">
            <span class="material-symbols-outlined">group</span> Users
        </a>
        <a class="flex items-center gap-3 text-slate-700 dark:text-slate-300 hover:text-primary" href="#">
            <span class="material-symbols-outlined">person_add</span> Add User
        </a>
        <a class="flex items-center gap-3 text-slate-700 dark:text-slate-300 hover:text-primary" href="#">
            <span class="material-symbols-outlined">verified_user</span> Roles & Permissions
        </a>
        <a class="flex items-center gap-3 text-red-600 dark:text-red-400 hover:text-red-700" href="<?= url('/logout') ?>">
            <span class="material-symbols-outlined">logout</span> Logout
        </a>
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
        sidebar.classList.remove('-translate-x-full');
        backdrop.classList.remove('opacity-0', 'pointer-events-none');
    }

    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        backdrop.classList.add('opacity-0', 'pointer-events-none');
    }

    openBtn.addEventListener('click', openSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    backdrop.addEventListener('click', closeSidebar);
</script>

</body>

</html>