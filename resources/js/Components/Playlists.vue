<template>
  <div>
    <div v-if="getMusicID === null">
      <div class="row">
        <div class="col-md-4" v-for="playlist in getPlaylist" :key="playlist.id">
          <div class="card-body card align-items-center">
            <img src="/storage/music/music_img_folder/Yellow_Hearts.png" />
            <h4 class="text-center">{{playlist.playlist_name}}</h4>
            <button
              class="btn btn-outline-success"
              v-on:click="playlistID = playlist.id, searchPlaylist(playlist.id)"
            >View</button>
          </div>
        </div>
      </div>
    </div>
    <div v-else-if="getMusicID !== null">
      <div v-for="music in getMusicID" :key="music.id">
        <h4>{{music.music_id}}</h4>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Playlist",

  data() {
    return {
      getPlaylist: Array,
      getMusicID: null,
      getMusic: null,
    };
  },

  created() {
    this.fetchPlaylist();
  },

  methods: {
    fetchPlaylist() {
      axios.get("/getPlaylist").then((response) => {
        this.getPlaylist = response.data;
      });
    },
    searchPlaylist(ID) {
      axios.get("/getMusic/" + ID).then((response) => {
        var list = response.data;

        const ax = list.forEach((music) => {
           return music;
        });
        console.log(ax);
      });
    },
  },
};
</script>