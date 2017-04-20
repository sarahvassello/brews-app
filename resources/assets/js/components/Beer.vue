<template>
  <div class="row">
    <div class="Beer col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="img/beer.jpg" alt="img/beer.jpg">
        <div class="caption">
          <h3> {{ beer.name}} </h3>
            <h4> {{ beer.brewery}} </h4>
          <p>meow meow meow meow</p>
          <p><a href="#" class="btn btn-primary" role="button" @click.prevent="edit">Edit</a> <a href="#" class="btn btn-default" role="button" @click.prevent="remove" >Delete</a></p>
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
        name: this.beer.beer,
        brewery: this.beer.brewery
      }
    },

    methods: {

        remove () {
          console.log ('Beer -> remove');
          this.loading = true;
          axios.delete(`/beers/${this.beer.id}`)
            .then((response) => {
              console.log('Beer -> remove success.');
              this.emit$('deleted')
              this.loading = false;
            })
            .catch((error) => {
              console.log('Beer -> remove error.');
            });
        }
    }


  }
</script>
