@foreach ([
        'PO#' => $orderDetails->po,
        'Placement' => $orderDetails->placement,
        'Width' => $orderDetails->width,
        'Height' => $orderDetails->height,
        'Unit' => $orderDetails->unit,
        'Number Of Colors In Mind' => $orderDetails->no_of_colors,
        'Fabric Color' => $orderDetails->febric_color,
        'Trapping Or Bubble Out' => $orderDetails->trapping,
        'PSD Color Seperation' => $orderDetails->psd_color,
        'Amount Of Details Looking For' => $orderDetails->amount_of_details,
        'Color Type' => $orderDetails->color_type,
        'Separation' => $orderDetails->separation,
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
@foreach ([
        'Underbase' => $orderDetails->underbase,
        'Vector Super Detailed Work' => $orderDetails->vector_detail_work,
        'Vector File Format' => $orderDetails->vector_file_format,
        'Vector Printing Process List' => $orderDetails->vector_printing_process,
        'Vector Color List' => $orderDetails->vector_color_list,
        'Vector Always Want Separations' => $orderDetails->vector_separation,
        'Additional Instructions For Designer' => $orderDetails->additional_instruction,
        'Instructions About Your Logo' => $orderDetails->instructions,
    ] as $label => $value)
    @if (!empty($value))
        <div>
            <div class="flex items-center gap-1 mb-1">
                <div class="bg-default-100 h-6 w-6 rounded-full grid place-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="text-primary w-3.5 h-3.5">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div><span class="text-sm font-medium text-default-900">{{ $label }}</span>
            </div>
            <div class="relative"><span class="text-sm font-medium text-default-500">{{ $value }}</span></div>
        </div>
    @endif
@endforeach
