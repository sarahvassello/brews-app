<template>
    <div class="container">
    <h4>Beer App</h4>
    <beerForm @created="fetch"></beerForm>
      <div class="BeerList" v-show="beers.length > 0">
        <Beer v-for="(beer, index) in beers" :key="index" :beer="beer"></Beer>
      </div>
      <p v-show="beers.length === 0">You don't have any beers listed yet.</p>
    </div>
</template>

<script>

import axios from 'axios';
import beerForm from './beerForm';
import Beer from './Beer';

export default {
    components: {
      Beer,
      beerForm
    },

    data () {
      return {
        beers: [],
        loading: false
      }
    },

    mounted() {
        this.fetch();
    },

    methods: {

      fetch () {
        console.log('App -> fetch');
        this.loading = true;
        axios.get('/beers')
          .then((response) => {
            console.log('App -> fetch successful');
            console.log(response.data);
            this.beers = response.data;
            this.loading = false;
          })
          .catch((response) => {
            console.log('App -> fetch error');
            this.loading = false;
          })
    }
  }
}
</script>
