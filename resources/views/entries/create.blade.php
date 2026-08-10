<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規 Entry
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">

                <form method="POST" action="{{ route('entries.store') }}">
                    @csrf

                    <div>
                        <label>種類</label>
                        <select name="type">
                            <option value="heart">heart</option>
                            <option value="star">star</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <label>内容</label>
                        <input type="text" name="content" maxlength="255">
                    </div>

                    <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">
                        保存
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>