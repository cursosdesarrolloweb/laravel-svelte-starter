<script>
    import { page } from '@inertiajs/inertia-svelte'
    export let name
</script>

<div class="text-center">
    <h1 class="text-4xl mb-5">Hola Mundo con {name}</h1>
    <pre>{JSON.stringify($page, null, 4)}</pre>

    <a class="text-blue-500 underline" href="{window.route('hola-mundo')}">Actualizar página</a>
</div>
