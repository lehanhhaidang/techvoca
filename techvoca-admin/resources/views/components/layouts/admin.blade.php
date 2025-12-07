<x-layouts.app>
    <div class="min-h-screen flex">
        <aside class="hidden md:flex md:w-64 flex-col bg-slate-900 text-slate-100">
            <div class="h-14 flex items-center px-5 border-b border-slate-800">
                <span class="text-sm font-semibold tracking-tight">TechVoca Admin</span>
            </div>
            <nav class="flex-1 px-3 py-4 text-sm space-y-1">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-2 rounded-lg px-3 py-2 bg-slate-800 text-slate-50 font-medium">
                    <span>Dashboard</span>
                </a>
            </nav>
            <div class="px-3 py-4 border-t border-slate-800 text-xs flex items-center justify-between">
                <div class="truncate max-w-36">
                    <div class="font-semibold truncate">{{ auth()->user()->name ?? 'User' }}</div>
                    <div class="text-slate-400 truncate">{{ auth()->user()->email ?? '' }}</div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center rounded-md bg-red-500 px-3 py-1.5 text-xs font-medium text-white hover:bg-red-600">
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0">
            <header class="md:hidden border-b border-slate-200 bg-white/80 backdrop-blur-sm">
                <div class="h-14 px-4 flex items-center justify-between">
                    <span class="text-sm font-semibold text-slate-900">TechVoca Admin</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="inline-flex items-center rounded-md bg-red-500 px-3 py-1.5 text-xs font-medium text-white hover:bg-red-600">
                            Logout
                        </button>
                    </form>
                </div>
            </header>

            <main class="flex-1 p-4 md:p-6 lg:p-8">
                {{$slot}}
            </main>
        </div>
    </div>
</x-layouts.app>