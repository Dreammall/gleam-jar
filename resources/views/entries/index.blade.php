<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Entries
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">

                <a href="{{ route('entries.create') }}" class="text-blue-600 underline">
                    新規作成
                </a>

                <ul class="mt-4 space-y-2">
                    @forelse ($entries as $entry)
                        <li class="border-b pb-2">
                            [{{ $entry->type }}] {{ $entry->content }}
                        </li>
                    @empty
                        <li>まだ entry がありません。</li>
                    @endforelse
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>