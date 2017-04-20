<template>
  <div class="row">
    <div class="Beer col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="Desktop/meow.jpg" alt="Desktop/meow.jpg">
        <div class="caption">
          <h3> {{ beer.name}} </h3>
            <h4> {{ beer.brewery}} </h4>
          <p>meow meow meow meow</p>
          <p><a href="#" class="btn btn-primary" role="button">Save</a> <a href="#" class="btn btn-default" role="button">Delete</a></p>
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
    }
  }
</script>
