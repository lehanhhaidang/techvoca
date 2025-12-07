<div class="mx-auto max-w-6xl space-y-6">
    <div class="flex flex-col gap-2">
        <h1 class="text-xl font-semibold text-slate-900">
            Dashboard
        </h1>
        <p class="text-sm text-slate-500">Trang chủ</p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="text-xs font-medium text-slate-500 mb-1">Chào mừng</div>
            <div class="text-lg font-semibold text-slate-900">
                {{ auth()->user()->name ?? 'Admin' }}
            </div>
            <div class="mt-2 text-xs text-slate-500">
                Đây là trang dashboard. Bạn có thể mở rộng thêm các widget thống kê, biểu đồ, danh sách gần
                đây...
            </div>
        </div>

        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm md:col-span-2">
            <div class="flex items-center justify-between mb-2">
                <div class="text-xs font-medium text-slate-500">Trạng thái hệ thống</div>
            </div>
            <div class="text-sm text-slate-600">
                Nội dung placeholder. Sau này bạn có thể hiển thị số lượng user, khoá học, bài kiểm tra,
                v.v.
            </div>
        </div>
    </div>
</div>