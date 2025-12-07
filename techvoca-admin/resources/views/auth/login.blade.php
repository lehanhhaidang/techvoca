@php($title = 'Đăng nhập')
@php($subtitle = 'Truy cập trang quản trị TechVoca')

<x-layouts.app :title="$title" :subtitle="$subtitle">
    <div class="min-h-screen flex items-center justify-center p-6 bg-gray-50">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
            <div class="mb-6 text-center">
                <h1 class="text-2xl font-bold text-gray-900">{{ $title }}</h1>
                <p class="text-sm text-gray-500 mt-1">{{ $subtitle }}</p>
            </div>

            {{-- @if($errors->any())
                <div class="mb-4 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg text-sm">
                    {{ __('Có lỗi xảy ra, vui lòng kiểm tra lại thông tin.') }}
                </div>
            @endif --}}

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mật khẩu</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Ghi nhớ đăng nhập
                        </label>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Quên mật khẩu?</a>
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Đăng nhập
                </button>

                <div class="text-center text-sm text-gray-500 mt-4">
                    Chưa có tài khoản?
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>