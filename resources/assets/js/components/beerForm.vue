<template>
  <div class="beerForm">
    <h3>Name</h3>
    <input type="text" v-model="name" />
    <h3>Style</h3>
    <input type="text" v-model="style" />
    <h3>Brewery</h3>
    <input type="text" v-model="brewery" />
    <h3>ABV</h3>
    <input type="text" v-model="ABV" />
    <button class="btn btn-primary" @click="create" >Add Beer</button>
  </div>
</template>

<script>
import axios from 'axios';

export default {
    components: {
      
    },

    data () {
      return {
      name: '',
      style: '',
      brewery: '',
      ABV: '',
      loading: false
      }
    },

    methods: {
      create () {
        console.log('BeerForm -> create');
          if (this.loading) {
            alert ('request is already being made.');
            return false;
          }
          this.loading = true;
          this.sendRequest();
      },

      sendRequest () {
        axios.post('/beers', {
          name: this.name,
          style: this.style,
          brewery: this.brewery,
          ABV: this.ABV
        })
        .then((response) => {
          console.log('beerForm -> sendRequest success');
          console.log(response.data);
          this.loading = false;
          this.reset();
        })
        .catch((error) => {
          console.log('beerForm -> sendRequest error');
        });
      },

      reset () {
        this.name = '';
        this.style = '';
        this.brewery = '';
        this.ABV = '';
      }
    }
};
</script>

<style scoped>
</style>
