<template>
    <form :action="rota" method="POST" class="d-flex justify-content-center mr-2" @submit.prevent="submit($event)">
        <input type="hidden" :value="csrf" name="_token">
        <button type="submit" class="dropdown-item"><i class="fas fa-eraser"></i> Limpar Base de Dados</button>
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
            this.enviar = confirm('Tem certeza que deseja limpar TODA a base de dados?')
            this.enviar ? event.target.submit() : null
        }
    }
}
</script>

<style>

</style>