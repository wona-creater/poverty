<x-app-layout>

    <html>

    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
        <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
            href="https://fonts.googleapis.com/css2?display=swap&family=Manrope%3Awght%40400%3B500%3B700%3B800&family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
        <title>Performance</title>
        <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>

    <body>
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="relative flex size-full min-h-screen flex-col bg-slate-50 dark:bg-navy-900 group/design-root overflow-x-hidden"
            style='font-family: Manrope, "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                <div class="gap-1 px-6 flex flex-1 justify-center py-5">

                    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        <div class="flex flex-wrap justify-between gap-3 p-4">
                            <p
                                class="text-slate-700 dark:text-navy-100 tracking-light text-[32px] font-bold leading-tight min-w-72">
                                My Portfolio</p>
                        </div>
                        <div class="pb-3">
                            <div class="flex border-b border-slate-150 dark:border-navy-700 px-4 gap-8">
                                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-primary dark:border-b-accent-light text-slate-700 dark:text-navy-100 pb-[13px] pt-4"
                                    href="#">
                                    <p
                                        class="text-slate-700 dark:text-navy-100 text-sm font-bold leading-normal tracking-[0.015em]">
                                        Copied Trades</p>
                                </a>
                                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-navy-200 pb-[13px] pt-4"
                                    href="#">
                                    <p
                                        class="text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                        My Trades</p>
                                </a>
                                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-slate-500 dark:text-navy-200 pb-[13px] pt-4"
                                    href="#">
                                    <p
                                        class="text-slate-500 dark:text-navy-200 text-sm font-bold leading-normal tracking-[0.015em]">
                                        History</p>
                                </a>
                            </div>
                        </div>
                        <h2
                            class="text-slate-700 dark:text-navy-100 text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                            Performance</h2>
                        <div class="flex flex-wrap gap-4 p-4">
                            <div
                                class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-slate-150 dark:border-navy-700">
                                <p class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal">Total
                                    Profit</p>
                                <p
                                    class="text-slate-700 dark:text-navy-100 tracking-light text-2xl font-bold leading-tight">
                                    $12,345</p>
                            </div>
                            <div
                                class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-slate-150 dark:border-navy-700">
                                <p class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal">Total
                                    Copied</p>
                                <p
                                    class="text-slate-700 dark:text-navy-100 tracking-light text-2xl font-bold leading-tight">
                                    $50,000</p>
                            </div>
                            <div
                                class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-slate-150 dark:border-navy-700">
                                <p class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal">Total
                                    Trades</p>
                                <p
                                    class="text-slate-700 dark:text-navy-100 tracking-light text-2xl font-bold leading-tight">
                                    150</p>
                            </div>
                        </div>
                        <h2
                            class="text-slate-700 dark:text-navy-100 text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                            Analytics</h2>
                        <div class="flex flex-wrap gap-4 px-4 py-6">
                            <div
                                class="flex min-w-72 flex-1 flex-col gap-2 rounded-xl border border-slate-150 dark:border-navy-700 p-6">
                                <p class="text-slate-700 dark:text-navy-100 text-base font-medium leading-normal">
                                    Portfolio Performance</p>
                                <p
                                    class="text-slate-700 dark:text-navy-100 tracking-light text-[32px] font-bold leading-tight truncate">
                                    +15%</p>
                                <div class="flex gap-1">
                                    <p class="text-slate-500 dark:text-navy-200 text-base font-normal leading-normal">
                                        Last 30 Days</p>
                                    <p class="text-warning text-base font-medium leading-normal">+2%</p>
                                </div>
                                <div class="flex min-h-[180px] flex-1 flex-col gap-8 py-4">
                                    <svg width="100%" height="148" viewBox="-3 0 478 150" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                        <path
                                            d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z"
                                            fill="url(#paint0_linear_1131_5935)"></path>
                                        <path
                                            d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25"
                                            stroke="url(#paint1_linear_1131_5935)" stroke-width="3"
                                            stroke-linecap="round"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_1131_5935" x1="236"
                                                y1="1" x2="236" y2="149"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#e2e8f0"></stop>
                                                <stop offset="1" stop-color="#e2e8f0" stop-opacity="0"></stop>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1131_5935" x1="236"
                                                y1="1" x2="236" y2="149"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#94a3b8"></stop>
                                                <stop offset="1" stop-color="#94a3b8" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="flex justify-around">
                                        <p
                                            class="text-slate-500 dark:text-navy-200 text-[13px] font-bold leading-normal tracking-[0.015em]">
                                            Jan</p>
                                        <p
                                            class="text-slate-500 dark:text-navy-200 text-[13px] font-bold leading-normal tracking-[0.015em]">
                                            Feb</p>
                                        <p
                                            class="text-slate-500 dark:text-navy-200 text-[13px] font-bold leading-normal tracking-[0.015em]">
                                            Mar</p>
                                        <p
                                            class="text-slate-500 dark:text-navy-200 text-[13px] font-bold leading-normal tracking-[0.015em]">
                                            Apr</p>
                                        <p
                                            class="text-slate-500 dark:text-navy-200 text-[13px] font-bold leading-normal tracking-[0.015em]">
                                            May</p>
                                        <p
                                            class="text-slate-500 dark:text-navy-200 text-[13px] font-bold leading-normal tracking-[0.015em]">
                                            Jun</p>
                                        <p
                                            class="text-slate-500 dark:text-navy-200 text-[13px] font-bold leading-normal tracking-[0.015em]">
                                            Jul</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2
                            class="text-slate-700 dark:text-navy-100 text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                            Copied Trades</h2>
                        <div class="px-4 py-3 @container">
                            <div
                                class="flex overflow-hidden rounded-xl border border-slate-150 dark:border-navy-700 bg-slate-50 dark:bg-navy-900">
                                <table class="flex-1">
                                    <thead>
                                        <tr class="bg-slate-200 dark:bg-navy-700">
                                            <th
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-120 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-[400px] text-sm font-medium leading-normal">
                                                Trader</th>
                                            <th
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-240 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-[400px] text-sm font-medium leading-normal">
                                                Asset</th>
                                            <th
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-360 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-[400px] text-sm font-medium leading-normal">
                                                Entry Price</th>
                                            <th
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-480 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-[400px] text-sm font-medium leading-normal">
                                                Current Price
                                            </th>
                                            <th
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-600 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-[400px] text-sm font-medium leading-normal">
                                                Profit/Loss</th>
                                            <th
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-720 px-4 py-3 text-left text-slate-700 dark:text-navy-100 w-60 text-sm font-medium leading-normal">
                                                Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                Ethan Bennett
                                            </td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                BTC/USD</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-360 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $25,000</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $26,000</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-600 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                +$1,000</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-720 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                <button
                                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                    <span class="truncate">Open</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                Olivia Hayes</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                ETH/USD</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-360 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $1,500</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $1,600</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-600 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                +$100</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-720 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                <button
                                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                    <span class="truncate">Open</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                Liam Foster</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                XRP/USD</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-360 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $0.50</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $0.45</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-600 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                -$50</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-720 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                <button
                                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                    <span class="truncate">Open</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                Ava Coleman</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                LTC/USD</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-360 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $100</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $110</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-600 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                +$10</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-720 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                <button
                                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                    <span class="truncate">Open</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-t border-t-slate-150 dark:border-t-navy-700">
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-120 h-[72px] px-4 py-2 w-[400px] text-slate-700 dark:text-navy-100 text-sm font-normal leading-normal">
                                                Noah Harper</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-240 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                ADA/USD</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-360 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $1.00</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-480 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                $1.05</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-600 h-[72px] px-4 py-2 w-[400px] text-slate-500 dark:text-navy-200 text-sm font-normal leading-normal">
                                                +$5</td>
                                            <td
                                                class="table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-720 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                                <button
                                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-slate-100 dark:bg-navy-800 text-slate-700 dark:text-navy-100 text-sm font-medium leading-normal w-full hover:text-primary dark:hover:text-accent-light">
                                                    <span class="truncate">Open</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <style>
                                @container(max-width:120px)

                                    {
                                    .table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-120 {
                                        display: none;
                                    }
                                }

                                @container(max-width:240px)

                                    {
                                    .table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-240 {
                                        display: none;
                                    }
                                }

                                @container(max-width:360px)

                                    {
                                    .table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-360 {
                                        display: none;
                                    }
                                }

                                @container(max-width:480px)

                                    {
                                    .table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-480 {
                                        display: none;
                                    }
                                }

                                @container(max-width:600px)

                                    {
                                    .table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-600 {
                                        display: none;
                                    }
                                }

                                @container(max-width:720px)

                                    {
                                    .table-a4660ac3-db82-4a8c-b360-08f58267b18b-column-720 {
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
