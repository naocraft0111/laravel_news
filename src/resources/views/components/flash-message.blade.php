{{-- 投稿：下書き保存 --}}
@if (session('saveDraft'))
    <div class="bg-blue-200 border-t border-b border-blue-500 text-blue-700 text-center px-4 py-3 font-bold">
        {{ session('saveDraft')}}
    </div>
{{-- 投稿：公開 --}}
@elseif (session('release'))
    <div class="bg-green-200 border-t border-b border-green-500 text-green-700 text-center px-4 py-3 font-bold">
        {{ session('release')}}
    </div>
{{-- 投稿：公開予約 --}}
@elseif (session('reservation_release'))
    <div class="bg-amber-200 border-t border-b border-amber-500 text-amber-700 text-center px-4 py-3 font-bold">
        {{ session('reservation_release')}}
    </div>
@endif
