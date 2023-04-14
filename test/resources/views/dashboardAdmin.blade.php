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
                    {{ __("tu es connécté!") }} <br>
                    
                    
                    <form action="/bar" method="get">
                    @csrf <!-- Ajouter le jeton CSRF pour protéger votre formulaire -->
                    <button type="submit">Créer une retrospective </button>
                    </form>
                    
                    <form action="/nonparticipant" method="get">
                    @csrf <!-- Ajouter le jeton CSRF pour protéger votre formulaire -->
                    <button type="submit">Liste des non participants</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
