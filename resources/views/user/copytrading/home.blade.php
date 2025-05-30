<x-app-layout>
    <html>

    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
        <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
            href="https://fonts.googleapis.com/css2?display=swap&family=Manrope%3Awght%40400%3B500%3B700%3B800&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
        <title>Home</title>
        <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>

    <body>

        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="relative flex size-full min-h-screen flex-col bg-slate-50 dark:bg-navy-900 group/design-root overflow-x-hidden"
                style='font-family: Manrope, "Noto Sans", sans-serif;'>
                <div class="layout-container flex h-full grow flex-col">

                    <div class="px-40 flex flex-1 justify-center py-5">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                            <div class="flex flex-wrap justify-between gap-3 p-4">
                                <div class="flex min-w-72 flex-col gap-3">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 tracking-light text-[32px] font-bold leading-tight">
                                        Top Traders</p>
                                    <p class="text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                        Discover and copy the strategies of leading traders.</p>
                                </div>
                            </div>
                            <div class="px-4 py-3">
                                <label class="flex flex-col min-w-40 h-12 w-full">
                                    <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                                        <div class="text-slate-500 dark:text-navy-200 flex border-none bg-slate-100 dark:bg-navy-800 items-center justify-center pl-4 rounded-l-xl border-r-0"
                                            data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                fill="currentColor" viewBox="0 0 256 256">
                                                <path
                                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72,08,0,1,1,40,112Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <input placeholder="Search for traders"
                                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-slate-700 dark:text-navy-100 focus:outline-0 focus:ring-0 border-none bg-slate-100 dark:bg-navy-800 focus:border-none h-full placeholder:text-slate-500 dark:placeholder:text-navy-200 px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                                            value="" />
                                    </div>
                                </label>
                            </div>
                            <div class="flex gap-3 p-3 flex-wrap pr-4">
                                <button
                                    class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-navy-800 pl-4 pr-2">
                                    <p class="text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal">
                                        Asset</p>
                                    <div class="text-slate-700 dark:text-navy-100" data-icon="CaretDown"
                                        data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                                <button
                                    class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-navy-800 pl-4 pr-2">
                                    <p class="text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal">Risk
                                        Score</p>
                                    <div class="text-slate-700 dark:text-navy-100" data-icon="CaretDown"
                                        data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                                <button
                                    class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-slate-100 dark:bg-navy-800 pl-4 pr-2">
                                    <p class="text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal">
                                        Performance</p>
                                    <div class="text-slate-700 dark:text-navy-100" data-icon="CaretDown"
                                        data-size="20px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div class="px-4 py-3 @container">
                                <div
                                    class="flex overflow-hidden rounded-xl border border-slate-150 dark:border-navy-700 bg-slate-50 dark:bg-navy-900">
                                    <table class="flex-1">
                                        <thead>
                                            <tr class="bg-slate-200 dark:bg-navy-700">
                                                <th
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-[400px] text-sm font-medium leading-normal">
                                                    Trader</th>
                                                <th
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-[400px] text-sm font-medium leading-normal">
                                                    Performance</th>
                                                <th
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-60 text-sm font-medium leading-normal">
                                                    Risk Score</th>
                                                <th
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-[400px] text-sm font-medium leading-normal">
                                                    Followers</th>
                                                <th
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 px-4 py-3 text-left text-slate-500 dark:text-navy-200 w-60 text-sm font-medium leading-normal">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Ethan Carter</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +25.3%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">Low</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    1,250</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Olivia Bennett
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +18.7%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">Medium</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    875</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>

                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Noah Thompson
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +32.1%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">High</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    1,520</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Ava Rodriguez
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +15.9%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">Low</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    630</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Liam Walker
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +28.5%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">Medium</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    1,100</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Isabella Hayes
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +21.6%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">High</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    950</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Jackson Reed
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +12.4%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">Low</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    480</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Sophia Morgan
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +35.7%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">Medium</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    1,800</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Aiden Cooper
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +19.2%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">High</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    790</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                            <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                    Chloe Parker
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    +24.8%</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                    <button
                                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                        <span class="truncate">Low</span>
                                                    </button>
                                                </td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                    1,020</td>
                                                <td
                                                    class="table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 h-[72px] px-4 py-2 w-60 text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                                    <a href="{{ route('copy.setup') }}"> Copy</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <style>
                                    @container(max-width:120px)

                                        {
                                        .table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-120 {
                                            display: none;
                                        }
                                    }

                                    @container(max-width:240px)

                                        {
                                        .table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-240 {
                                            display: none;
                                        }
                                    }

                                    @container(max-width:360px)

                                        {
                                        .table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-360 {
                                            display: none;
                                        }
                                    }

                                    @container(max-width:480px)

                                        {
                                        .table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-480 {
                                            display: none;
                                        }
                                    }

                                    @container(max-width:600px)

                                        {
                                        .table-3c6628f6-ef4d-41fd-85d3-a13d96199dc0-column-600 {
                                            display: none;
                                        }
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </body>

    </html>




</x-app-layout>
