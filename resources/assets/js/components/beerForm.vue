<template>
  <div class="beerForm">
    <div class="container">
      <div class="top">
      <h1>Best of NC Beer</h1>
        <h3>Representing the Southern State of Beer</h3>
        <p>
          With over 200 craft breweries in North Carolina,
          we're the southern state of beer. From Eric Lars Myers
          at Hillsborough's Mystery Brewing to Charlotte's
          NoDa Brewing, we're representing coast to coast of North
          Carolina beer.
        </p>
        <p>
          While we can recommend the best beers for you to try,
          why not make your own perfect list? Click here for
          a list of all of the breweries who are part of the
          North Carolina Craft Brewers Guild, and build your
          own list — your own personalized tour of North Carolina.
        </p>
      </div>
      <center>
        <h3>Name</h3>
        <input type="text" v-model="name">
        <h3>Style</h3>
        <input type="text" v-model="style" />
      <h3>Brewery</h3>
      <input type="text" v-model="brewery" />
      <h3>ABV</h3>
      <input type="text" v-model="ABV"  />
      <p>
      <button class="btn btn-primary" @click="create" >Add Beer</button>
    </p>
</center>
</div>
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
          this.$emit('created');
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
