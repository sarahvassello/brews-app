<template>
    <div class="container">
    <h4>Beer App</h4>
    <beerForm></beerForm>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import beerForm from './beerForm';

    export default {
        components: {
          beerForm
        },

        mounted() {
            console.log('Component mounted.')
        }


    }
</script>
