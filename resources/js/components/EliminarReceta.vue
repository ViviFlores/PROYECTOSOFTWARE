<template>
     <input type="submit" class="btn btn-danger d-block w-100" value="Eliminar" v-on:click="eliminarReceta">
</template>

<script>
    export default {
        props:['idReceta'],
        methods:{
            eliminarReceta(){
                console.log("Holassss", this.idReceta);
            }
        }
    }
</script>

