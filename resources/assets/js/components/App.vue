<template>
    <div class="container">
    <h4>Beer App</h4>
    <beerForm></beerForm>
    </div>
</template>

<script>

import beerForm from './beerForm';

    export default {
        components: {
          beerForm,
        },

        mounted() {
            console.log('Component mounted.')
        }


    }
</script>
