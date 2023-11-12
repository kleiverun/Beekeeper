@foreach ($bikuber as $hive)
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 relative">
    <!-- Delete Button -->
    <button type="button" class="absolute top-2 right-2 text-red-500 hover:text-red-700 focus:outline-none" onclick="deleteBikube({{ $hive->id }})">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
            <path d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <div class="p-5">
        <!-- Bee Image -->
        <img class="rounded-t-lg" src="{{ asset('storage/img/hive.jpg') }}" alt="Bee Image" />

        <!-- Beehive Details -->
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            Apiary #{{ $hive->id }}
        </h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            Identifikasjon: {{ $hive->identifikasjon }}
        </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            Styrke på hive: {{ $hive->estimertStyrke }}
        </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            Antall skattekasser: {{ $hive->antallSkattekasser }}
        </p>

        <!-- Increase Skattekasser Button -->
        <button type="button" class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50" onclick="increaseSkattekasser({{ $hive->id }})">
            + Legg til skattekasse
        </button>

        <!-- Decrease Skattekasser Button -->
        <button type="button" class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-opacity-50" onclick="decreaseSkattekasser({{ $hive->id }})">
            - Fjern skattekasse
        </button>
    </div>
</div>
@endforeach