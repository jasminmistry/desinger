@foreach ([
        'PO#' => $orderDetails->po,
        'Placement' => $orderDetails->placement,
        'Width' => $orderDetails->width,
        'Height' => $orderDetails->height,
        'Unit' => $orderDetails->unit,
        'Number Of Colors In Mind' => $orderDetails->no_of_colors,
    ] as $label => $value)
    @if (!empty($value))
        <div>
            <div class="flex items-center gap-1 mb-1">
                <div class="bg-default-100 h-6 w-6 rounded-full grid place-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-primary w-3.5 h-3.5">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div><span class="text-sm font-medium text-default-900">{{ $label }}</span>
            </div>
            <div class="relative"><span class="text-sm font-medium text-default-500">{{ $value }}</span></div>
        </div>
    @endif
@endforeach
