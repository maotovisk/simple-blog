<a href="{{ $clickableLink ?? '#' }}"
    class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
    {!! $icon ??
        "<svg class='w-2.5 h-2.5 mr-1.5' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor'
                            viewBox='0 0 20 14'>
                            <path
                                d='M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z' />
                        </svg>" !!}
    {{ $text ?? 'Default' }}
</a>
