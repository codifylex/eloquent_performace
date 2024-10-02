<div>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                @foreach ($columns as $column)
                    <th class="py-2 px-4 border-b text-left text-gray-600">{{ $column['label'] }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr class="hover:bg-gray-100">
                    @foreach ($columns as $column)
                        <td class="py-2 px-4 border-b text-gray-800">{{ data_get($item, $column['key']) }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <x-paginator :paginator="$items"/>
</div>
