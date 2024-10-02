<x-app
    title="Users"
>

<x-table :columns="[['label' => 'Usuário', 'key' => 'name'], ['label' => 'Advisor', 'key' => 'advisor.name'], ['label' => 'Edit', 'key' => 'edit']]" :items="$users" />

</x-app>