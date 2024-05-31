@props(['href' => false])

<button
{{ $attributes->merge(['class' => 'inline-flex items-center justify-center rounded-md text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none dark:text-default-950 border bg-transparent hover:text-primary-foreground text-muted-foreground dark:bg-transparent hover:bg-default-500 dark:hover:bg-default-500/50 border-default-500 h-7 w-7']) }} {{ $href ? 'onclick=window.location.href=\''.$href.'\'': '' }}><svg
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
        class=" h-4 w-4   iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="m16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8l.8-2.685a4.5 4.5 0 0 1 1.13-1.897zm0 0L19.5 7.125">
        </path>
    </svg></button>
