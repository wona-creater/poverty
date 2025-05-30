<x-app-layout>


    <html>

    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
        <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
            href="https://fonts.googleapis.com/css2?display=swap&family=Manrope%3Awght%40400%3B500%3B700%3B800&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
        <title>Setup</title>
        <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>

    <body>

        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="relative flex size-full min-h-screen flex-col bg-slate-50 dark:bg-navy-900 group/design-root overflow-x-hidden"
                style='font-family: Manrope, "Noto Sans", sans-serif;'>
                <div class="layout-container flex h-full grow flex-col">

                    <div class="px-40 flex flex-1 justify-center py-5">
                        <div
                            class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
                            <div class="flex flex-wrap gap-2 p-4">
                                <a class="text-slate-500 dark:text-navy-200 text-base font-medium leading-normal hover:text-primary dark:hover:text-accent-light"
                                    href="#">Copy Traders</a>
                                <span
                                    class="text-slate-500 dark:text-navy-200 text-base font-medium leading-normal">/</span>
                                <span
                                    class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal">Copy
                                    Trader</span>
                            </div>
                            <div class="flex flex-wrap justify-between gap-3 p-4">
                                <div class="flex min-w-72 flex-col gap-3">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 tracking-light text-[32px] font-bold leading-tight">
                                        Copy Trader</p>
                                    <p class="text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                        Configure your allocation, risk settings, and confirm copying this trader.</p>
                                </div>
                            </div>
                            <div class="flex p-4 @container">
                                <div
                                    class="flex w-full flex-col gap-4 @[520px]:flex-row @[520px]:justify-between @[520px]:items-center">
                                    <div class="flex gap-4">
                                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAlHE-07GSkBuqzdlQaFikDEXbyamob-KxOsyZJ9QqHbJnqFSAG9bbcGX_0LidGB5d2JwqD42YzJrpGXxNVdRWtsiadT3BEYcT5CLkRE4Sy2PTD7-62O_RMvfFkAqs142532lnwDYXUJSeF7OA-BQyrYbcCuLo_2mO8J6AaYRDrqwUSs7tjrnml5XO5FOHt7PTtbtx7SeQORe-OWV5EtDr5W5KPee8CygTQ5uuB-JWMhkoglIUOAtgsVJo43X3nDmtE24NNnWFsg9W6");'>
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <p
                                                class="text-slate-700 dark:text-navy-100 text-[22px] font-bold leading-tight tracking-[-0.015em]">
                                                Alex Turner</p>
                                            <p
                                                class="text-slate-500 dark:text-navy-200 text-base font-normal leading-normal">
                                                Trader</p>
                                            <p
                                                class="text-slate-500 dark:text-navy-200 text-base font-normal leading-normal">
                                                1,234 followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-3 px-4 py-3">
                                <div
                                    class="flex min-w-[111px] flex-1 basis-[fit-content] flex-col gap-2 rounded-lg border border-slate-150 dark:border-navy-700 p-3 items-start">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 tracking-light text-2xl font-bold leading-tight">
                                        12%</p>
                                    <div class="flex items-center gap-2">
                                        <p class="text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                            Avg.
                                            Monthly Return</p>
                                    </div>
                                </div>
                                <div
                                    class="flex min-w-[111px] flex-1 basis-[fit-content] flex-col gap-2 rounded-lg border border-slate-150 dark:border-navy-700 p-3 items-start">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 tracking-light text-2xl font-bold leading-tight">
                                        20%</p>
                                    <div class="flex items-center gap-2">
                                        <p class="text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                            Max
                                            Drawdown</p>
                                    </div>
                                </div>
                                <div
                                    class="flex min-w-[111px] flex-1 basis-[fit-content] flex-col gap-2 rounded-lg border border-slate-150 dark:border-navy-700 p-3 items-start">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 tracking-light text-2xl font-bold leading-tight">
                                        100%</p>
                                    <div class="flex items-center gap-2">
                                        <p class="text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                            Win
                                            Rate</p>
                                    </div>
                                </div>
                            </div>
                            <h2
                                class="text-slate-700 dark:text-navy-100 text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                Allocation</h2>
                            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                                <label class="flex flex-col min-w-40 flex-1">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal pb-2">
                                        Amount to Copy</p>
                                    <input placeholder="$0.00"
                                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-700 dark:text-navy-100 focus:outline-0 focus:ring-0 border-none bg-slate-100 dark:bg-navy-800 focus:border-none h-14 placeholder:text-slate-500 dark:placeholder:text-navy-200 p-4 text-base font-normal leading-normal"
                                        value="" />
                                </label>
                            </div>
                            <h2
                                class="text-slate-700 dark:text-navy-100 text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                Risk Settings</h2>
                            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                                <label class="flex flex-col min-w-40 flex-1">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal pb-2">
                                        Stop Loss</p>
                                    <input placeholder="$0.00"
                                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-700 dark:text-navy-100 focus:outline-0 focus:ring-0 border-none bg-slate-100 dark:bg-navy-800 focus:border-none h-14 placeholder:text-slate-500 dark:placeholder:text-navy-200 p-4 text-base font-normal leading-normal"
                                        value="" />
                                </label>
                            </div>
                            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                                <label class="flex flex-col min-w-40 flex-1">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal pb-2">
                                        Take Profit</p>
                                    <input placeholder="$0.00"
                                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-700 dark:text-navy-100 focus:outline-0 focus:ring-0 border-none bg-slate-100 dark:bg-navy-800 focus:border-none h-14 placeholder:text-slate-500 dark:placeholder:text-navy-200 p-4 text-base font-normal leading-normal"
                                        value="" />
                                </label>
                            </div>
                            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                                <label class="flex flex-col min-w-40 flex-1">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal pb-2">
                                        Max Open Trades</p>
                                    <input placeholder="0"
                                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-700 dark:text-navy-100 focus:outline-0 focus:ring-0 border-none bg-slate-100 dark:bg-navy-800 focus:border-none h-14 placeholder:text-slate-500 dark:placeholder:text-navy-200 p-4 text-base font-normal leading-normal"
                                        value="" />
                                </label>
                            </div>
                            <div class="flex px-4 py-3">
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 flex-1 bg-[#53d22c] text-slate-900 dark:text-navy-50 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-green-400">
                                    <span class="truncate">Copy Trader</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

    </html>

</x-app-layout>
