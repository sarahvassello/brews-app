<template>
  <div class="beerForm"></div>

  <input type=”text” v-model="name" />
  <input type=”text” v-model="style" />
  <input type=”text” v-model="brewery" />
  <input type=”text” v-model="ABV" />
  <button class=”btn btn-primary” @click >Create Beer</button>


</template>
import axios from 'axios';

export default {

    data () {
      name: '',
      style: '',
      brewery: '',
      ABV: '',
      loading: false
    }
}
