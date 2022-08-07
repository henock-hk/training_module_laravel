<template>
  <div class="content">
    <p>
      <strong>Liste Comments</strong>
      -
      <small>Module Comment</small>
    </p>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Contenus</th>
           <th>date publication</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="comment in comments" :key="comment.id">
          <td>{{ comment.description }}</td>
          <td>{{ comment.created_at }}</td>
        </tr>
      </tbody>
    </table>

    <br />
  </div>
</template>

<script>
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios)
export default {


  data: function () {
    return {

      comments:[]
    }

  },

  methods: {
    //to get the all apps
    getComments: function () {
      Vue.axios.get("/api/comment/get_comments")

        .then(
          function (response) {
            if (response.status == 200) {
              this.comments = response.data;
              console.log(response.data)
            }
          }.bind(this)
        );
    },
  },
  created() {
this.getComments();
  },
};
</script>
