<template>
    <div class="container">
      <beerForm @created="fetch"></beerForm>
      <div class="BeerList" v-show="beers.length > 0">
        <Beer v-for="(beer, index) in beers" :key="index" :beer="beer" @deleted="remove(index)"></Beer>
      </div>
      <p v-show="beers.length === 0">You don't have any beers listed yet.</p>
    </div>
</template>

<script>

import axios from 'axios';
import beerForm from './beerForm';
import Beer from './Beer';
import Loader from './Loader';


export default {
    components: {
      Beer,
      beerForm,
      Loader
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
    },

    update (data) {
      var i = this.beer.indexOf(data.beers);
      for (var d in data) {
        this.beers[i][d] = data[d];
      }
    },

    remove (i) {
      console.log(`App -> remove ID: ${i}`);
      this.beers.splice(i,1);
    }
  }
}
</script>

<style>

</style>
