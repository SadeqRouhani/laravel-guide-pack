@php use Hiradrayan\Guide\Models\Guide; @endphp
@if($guide)
    @if($guide->type == Guide::TYPE_TOOLTIP)
        <span class="guide-button" data-bs-toggle="tooltip" data-placement="top" data-bs-html="true" data-bs-title="{{ $guide->content ?? '--' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none"><path stroke="#5C8984" stroke-linecap="round" stroke-width="1.5" d="M10.125 8.875a1.875 1.875 0 1 1 2.828 1.615c-.475.281-.953.708-.953 1.26V13"/><circle cx="12" cy="16" r="1" fill="#5C8984"/><path stroke="#5C8984" stroke-linecap="round" stroke-width="1.5" d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536"/></g></svg>
        </span>

    @elseif($guide->type == Guide::TYPE_SIDEBAR)
        <div style="display: none;" id="guide-content">{{ $guide->content }}</div>
        <span class="guide-button" onclick="openGuideSidebar(`{{ $guide->content }}`);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="کلیک کنید">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none"><path stroke="#5C8984" stroke-linecap="round" stroke-width="1.5" d="M10.125 8.875a1.875 1.875 0 1 1 2.828 1.615c-.475.281-.953.708-.953 1.26V13"/><circle cx="12" cy="16" r="1" fill="#5C8984"/><path stroke="#5C8984" stroke-linecap="round" stroke-width="1.5" d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536"/></g></svg>
        </span>
    @endif
@else
    <span data-guide-slug="{{ $slug }}" class="guide-button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="متاسفانه این راهنما یافت نشد">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none"><path stroke="#5C8984" stroke-linecap="round" stroke-width="1.5" d="M10.125 8.875a1.875 1.875 0 1 1 2.828 1.615c-.475.281-.953.708-.953 1.26V13"/><circle cx="12" cy="16" r="1" fill="#5C8984"/><path stroke="#5C8984" stroke-linecap="round" stroke-width="1.5" d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2s7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536"/></g></svg>
    </span>
@endif

