<div class="max-w-6xl mx-auto">
    <header class="flex justify-between space-x-12">
        <p>TodoList</p>

        <div class="flex justify-end space-x-28">
            <form method="post" action="">
                <x-jet-button class="bg-red-400 hover:bg-red-800 text-white rounded px-4 py-2">ログアウト</x-jet-button>
            </form>
        </div>
    </header>

    <div class="text-left m-2 p-2">
        <x-jet-button class="bg-blue-600" wire:click="showTodoModal">タスク検索</x-jet-button>
    </div>



    <main class="flex justify-between space-x-4">

        <input type="text" name="task" size="80">
        @error('task')<span class="error text-red-400">{{ $message }}</span>@enderror

        <select name="tag_id" class="select_tag">
            <option value="1">家事</option>
            <option value="2">勉強</option>
            <option value="3">運動</option>
            <option value="4">食事</option>
            <option value="5">移動</option>
        </select>

        <x-jet-button class="bg-red-400 hover:bg-red-800 text-white rounded px-4 py-2">追加</x-jet-button>

    </main>


    <div class="m-2 p-2">
        <table class="flex:justify-bettween">
            @foreach($todos as $todo)
            <thead class="flex-row m-32 p-10">
                <tr class="">
                    <th class="">作成日{{ $todo->created_at }}</th>
                    <th class="">タスク名{{ $todo->content }}</th>
                    <th class="">タグ</th>
                    <th class="">更新{{ $todo->updated_at }}</th>
                    <th class="">削除</th>
                </tr>
                @endforeach
            </thead>

            <tbody class="">

                <tr class="">
                    <td class="">

                    </td>
                </tr>

                <tr class="">
                    <td class="">

                    </td>
                </tr>

                <tr class="">
                    <td class="">
                        <button class=" updated"></button>
                    </td>
                </tr>

                <tr class="">
                    <td class="">
                        <button class="delete"></button>
                    </td>
                </tr>

            </tbody>
    </div>
</div>


<x-jet-dialog-modal wire:model="liveModal">


    <x-slot name="title">
        <h2 class="text-green-600">タスク検索</h2>
    </x-slot>


    <x-slot name="content" class="flex-row">
        <p class="mb-4">
            <input type class=" form-control block w-96 px-3 py-1.5 text-base font-nomar text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0">

            <button name="submit" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 " type="submit">検索</button>
            <x-jet-button wire:click="searchPost">検索</x-jet-button>
        </p>
        </div>

        <div class="felx-row">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                作成日
            </label>
            <label class="block text-gray-700 text-sm font-bold mb-2">
                タスク名
            </label>
            <label class="block text-gray-700 text-sm font-bold mb-2">
                タグ
            </label>
            <label class="block text-gray-700 text-sm font-bold mb-2">
                更新
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    削除
                </label>
        </div>
    </x-slot>
    </div>


    <x-slot name="footer">
        <x-jet-button wire:click="backPost">戻る</x-jet-button>
    </x-slot>




</x-jet-dialog-modal>



</div>