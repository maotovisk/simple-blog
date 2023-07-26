<x-card-border>
    <x-badge :clickableLink="$categoryLink ?? '#'" :icon="$categoryIcon ?? null" :text="$category ?? 'Default'"></x-badge>
    <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">{{ $title ?? 'Default Title' }}
    </h1>
    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">{{ $description ?? 'Lorem ipsum....' }}</p>

    {{ $slot }}

    <x-redirect-button :btnLink="$btnLink ?? '#'">Read more <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
    </x-redirect-button>
</x-card-border>
