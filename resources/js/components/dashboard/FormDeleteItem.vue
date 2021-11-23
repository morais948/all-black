<template>
    <form :action="rota" method="POST" @submit.prevent="submit($event)">
        <input type="hidden" :value="csrf" name="_token">
        <input type="hidden" name="_method" value="delete">
        <button class="dropdown-item" type="submit">Excluir</button>
    </form>
</template>

<script>
export default {
    props: [
        'csrf',
        'rota'
    ],
    data() {
        return {
            enviar: false
        }
    },
    methods: {
        submit(event){
            this.enviar = confirm('Tem certeza que deseja excluir o item?')
            this.enviar ? event.target.submit() : null
        }
    }
}
</script>

<style>

</style>