<x-app
    title="Users"
>

<x-table :columns="[['label' => 'Título', 'key' => 'title'], ['label' => 'Autor', 'key' => 'author.name'], ['label' => 'Edit', 'key' => 'edit']]" :items="$posts" />

</x-app>