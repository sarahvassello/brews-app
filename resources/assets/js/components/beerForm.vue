<template>
  <div class="container">
    <div class="beerForm">
      <h1>BEST OF NC BEER</h1>
        <h3>Representing the Southern State of Beer</h3>
        <p>
          With over 200 craft breweries in North Carolina,
          we're the southern state of beer. From popular Asheville staple Wicked Weed
          to Charlotte's  NoDa Brewing to Wilmington's Front Street Brewery, we're representing the mountains to coast of North
          Carolina beer.
        </p>
        <p>
          While we can recommend the best beers for you to try,
          why not make your own perfect list? Click <a target="_ " href="https://ncbeer.org/our-breweries/">here</a>
          for an interactive list of all of the breweries that are part of the
          North Carolina Craft Brewers Guild, and build your
           list below— your own personalized tour of North Carolina.
        </p>
      </div>
      <center>
        <div class="row">
          <div class="col-md-2"></div>
        <div class="form-group col-md-4">
          <label for="beer_name">Name</label>
          <input class="form-control" v-model="name" type="text" name="Name" placeholder="ex: Don't Be Mean to People"/>
        </div>
        <div class="form-group col-md-4">
          <label for="beer_style">Style</label>
          <input class="form-control" v-model="style"type="text" name="Style" placeholder="ex: Saison" />
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
      <div class="form-group col-md-4">
        <label for="beer_brewery">Brewery</label>
        <input class="form-control" v-model="brewery" type="text" name="Brewery" placeholder="ex: Mystery Brewing"/>
      </div>
      <div class="form-group col-md-4">
        <label for="beer_abc">ABV</label>
        <input class="form-control" v-model="ABV" type="text" name="ABV" placeholder="ex: 3.9"/>
        <div class="col-md-2"></div>
      </div>
    </div>
    <p>
    <button class="btn btn-primary" @click="create" :disabled="loading" >Add Beer</button>
    </p>
      </center>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import Loader from './Loader';


export default {
    components: {
      Loader
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
            alert ('Request is already being made.');
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
          console.error('beerForm -> sendRequest error');
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
