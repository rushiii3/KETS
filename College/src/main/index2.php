<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <nav class="flex justify-center">
        <ul class="flex flex-wrap items-center font-medium text-sm">
            <li class="p-4 lg:px-8">
                <a class="text-slate-800 hover:text-slate-900" href="#">Prospects</a>
            </li>
            <li class="p-4 lg:px-8">
                <a class="text-slate-800 hover:text-slate-900" href="#">History</a>
            </li>
            <li class="p-4 lg:px-8 relative flex items-center space-x-1" x-data="{ open: false }"
                @mouseenter="open = true" @mouseleave="open = false">
                <a class="text-slate-800 hover:text-slate-900" href="#0" :aria-expanded="open">Flyout Menu</a>
                <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open">
                    <span class="sr-only">Show submenu for "Flyout Menu"</span>
                    <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                        <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
                    </svg>
                </button>
                <!-- 2nd level menu -->
                <ul class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl hidden"
                    x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" x-cloak
                    @focusout="await $nextTick();!$el.contains($focus.focused()) && (open = false)">
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            <span class="whitespace-nowrap">Priority Ratings</span>
                        </a>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            <span class="whitespace-nowrap">Insights</span>
                        </a>
                    </li>
                    <li class="relative" x-data="{ subMenuOpen: false }" @mouseenter="subMenuOpen = true"
                        @mouseleave="subMenuOpen = false">
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#"
                            :aria-expanded="subMenuOpen">
                            <span class="whitespace-nowrap">Item Mirror</span>
                        </a>
                        <!-- 3rd level menu -->
                        <ul class="origin-top-right absolute top-0 left-full -translate-x-2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl hidden"
                            x-show="subMenuOpen" x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" x-cloak
                            @focusout="await $nextTick();!$el.contains($focus.focused()) && (subMenuOpen = false)">
                            <li>
                                <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                                    <span class="whitespace-nowrap">Subitem 3.1</span>
                                </a>
                            </li>
                            <li class="relative" x-data="{ subSubMenuOpen: false }"
                                @mouseenter="subSubMenuOpen = true" @mouseleave="subSubMenuOpen = false">
                                <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#"
                                    :aria-expanded="subSubMenuOpen">
                                    <span class="whitespace-nowrap">Subitem 3.2</span>
                                </a>
                                <!-- 4th level menu -->
                                <ul
                                    class="origin-top-right absolute top-0 left-full -translate-x-2 min-w-[240px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl hidden"
                                    x-show="subSubMenuOpen"
                                    x-transition:enter="transition ease-out duration-200 transform"
                                    x-transition:enter-start="opacity-0 -translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-out duration-200"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak
                                    @focusout="await $nextTick();!$el.contains($focus.focused()) && (subSubMenuOpen = false)">
                                    <li>
                                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                                            <span class="whitespace-nowrap">Subsubitem 4.1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                                            <span class="whitespace-nowrap">Subsubitem 4.2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="#">
                            <span class="whitespace-nowrap">Support Center</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="p-4 lg:px-8">
                <a class="text-slate-800 hover:text-slate-900" href="#">Contacts</a>
            </li>
            <li class="p-4 lg:px-8">
                <a class="text-slate-800 hover:text-slate-900" href="#">Numbers</a>
            </li>
        </ul>
    </nav>

    <script>
        $(document).ready(function () {
            // Toggle visibility of the 2nd level menu
            $(".relative").hover(
                function () {
                    $(this).find("ul").removeClass("hidden");
                },
                function () {
                    $(this).find("ul").addClass("hidden");
                }
            );
        });
    </script>
</body>

</html>
