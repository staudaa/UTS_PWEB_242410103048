@props(['type' => 'info', 'message' => 'Pesan notifikasi'])

@php
    switch ($type) {
        case 'success':
            $bg = 'transparent';
            $icon = 'bi-check-circle-fill';
            break;
        case 'error':
            $bg = 'linear-gradient(90deg, #ffd1d1, #ffe6e6)';
            $icon = 'bi-exclamation-circle-fill';
            break;
        case 'warning':
            $bg = 'linear-gradient(90deg, #fff5cc, #fff8e6)';
            $icon = 'bi-exclamation-triangle-fill';
            break;
        default:
            $bg = 'linear-gradient(90deg, #ffbde6, #cce3ff)';
            $icon = 'bi-info-circle-fill';
            break;
    }
@endphp

<div class="alert d-flex align-items-center gap-2 shadow-sm fade show" style="background: {{ $bg }}; border: none; border-radius: 15px;
           padding: 12px 16px; font-weight: 500; margin-bottom: 18px;
           color: #333; box-shadow: 0 3px 10px rgba(0,0,0,0.05);">
    <i class="bi {{ $icon }}" style="font-size: 18px; color:#ff5fa0;"></i>
    <span>{{ $message }}</span>
</div>
