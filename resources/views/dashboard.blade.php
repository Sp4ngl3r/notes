<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                        <x-button light label="Default"/>
                        <x-button light black label="Black"/>
                        <x-button light white label="White"/>
                    </div>
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 xl:grid-cols-6">
                        <x-button light primary label="Primary"/>
                        <x-button light secondary label="Secondary"/>
                        <x-button light positive label="Positive"/>
                        <x-button light negative label="Negative"/>
                        <x-button light warning label="Warning"/>
                        <x-button light info label="Info"/>
                        <x-button light slate label="Slate"/>
                        <x-button light gray label="Gray"/>
                        <x-button light zinc label="Zinc"/>
                        <x-button light neutral label="Neutral"/>
                        <x-button light stone label="Stone"/>
                        <x-button light red label="Red"/>
                        <x-button light yellow label="Yellow"/>
                        <x-button light amber label="Amber"/>
                        <x-button light orange label="Orange"/>
                        <x-button light lime label="Lime"/>
                        <x-button light green label="Green"/>
                        <x-button light emerald label="Emerald"/>
                        <x-button light teal label="Teal"/>
                        <x-button light cyan label="Cyan"/>
                        <x-button light sky label="Sky"/>
                        <x-button light blue label="Blue"/>
                        <x-button light indigo label="Indigo"/>
                        <x-button light violet label="Violet"/>
                        <x-button light purple label="Purple"/>
                        <x-button light fuchsia label="Fuchsia"/>
                        <x-button light pink label="Pink"/>
                        <x-button light rose label="Rose"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
