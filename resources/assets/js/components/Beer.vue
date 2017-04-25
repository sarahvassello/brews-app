<template>
    <div class="Beer col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="img/beer.jpg" style="width:304px;height:400px;" alt="img/beer.jpg">
        <div class="caption">
          <h3> {{ beer.name}} </h3>
            <h4> {{ beer.brewery}} </h4>
            <h5> {{beer.style }} </h5>
            <h5> {{beer.ABV}} </h5>
          <p><a href="#" class="btn btn-primary" role="button" @click.prevent="editing = true" v-show="!editing">Edit</a> <a href="#" class="btn btn-default" role="button" @click.prevent="remove" >Delete</a></p>
          <div class="editing" v-show="editing">
            <p>
              <input type="text" v-model="name" />
              <input type="text" v-model="style" />
              <input type="text" v-model="brewery" />
              <input type="text" v-model="abv" />
            </p>
            <p>
              <button class="btn btn-success" @click="save">Save</button>
              <button class="btn btn-default" @click="cancel">Cancel</button>
            </p>
        </div>
        </div>
      </div>
    </div>
</template>

<script>
  import axios from 'axios';

  export default {
    props: [
      'beer'
    ],

    mounted () {
      console.log('Beer -> mounted');
      console.log(this.beer);
    },

    data () {
      return {
        name: this.beer.name,
        brewery: this.beer.brewery,
        style: this.beer.style,
        abv: this.beer.ABV,
        editing: false,
        loading: false
      }
    },

    methods: {

      remove () {
        console.log ('Beer -> remove');
          this.loading = true;
          axios.delete(`/beers/${this.beer.id}`)
            .then((response) => {
              console.log('Beer -> remove success.');
              this.$emit('deleted')
              this.loading = false;
            })
            .catch((error) => {
              console.log('Beer -> remove error.');
            });
        },

        save () {
          console.log('Beer -> save');
          axios.put(`/beers/${this.beer.id}`, {
            beer: this.beer,
            brewery: this.brewery,
            style: this.style,
            abv: this.ABV
          })
          .then((response) => {
            console.log('Beer -> save success');
            this.$emit('updated', {
              name: this.beer,
              brewery: this.brewery,
              style: this.style,
              abv: this.abv
            });
            this.editing = false;
          })
          .catch((error) => {
            console.log('Beer -> save error');
          });
        },

        cancel () {
          console.log('Beer -> cancel');
          this.name = this.beer.name;
          this.brewery = this.beer.brewery;
          this.style = this.beer.style;
          this.abv = this.beer.ABV;
          this.editing = false;
      }
    }


  }
</script>
