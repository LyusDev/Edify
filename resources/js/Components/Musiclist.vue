<template>
  <div>
    <h1>What to play?</h1>
    <div class="d-flex">
    <input type="search" class="form-control" v-model="searchbox"/><input type="button" value="Search" class="btn btn-outline-success" v-on:click="searchMusic(searchbox)">
    </div>
    <br/>
    <div v-if="getDeezerAPI.data != 0">
    <div v-for="music in getDeezerAPI.data" :key="music.id">
      <div class="d-flex">
        <img v-bind:src="music.album.cover" height="120" class="rounded" />

        <div class="ml-2">
          <h4>{{music.title}}</h4>
          <h6>{{music.artist.name}}</h6>

          <h6>{{music.album.title}}</h6>
          <div class="d-flex">
            <button
              class="btn btn-default mr-1"
              v-on:click="showIndex = music.id"
              style="background-color:#ec9852; outline-color:#f7b36c"
            >Play</button>
            <button class="btn btn-success mr-1" v-on:click="ss = music.id" v-if="ss !== music.id">+</button>
            <form
              method="post"
              action="/addToPlaylist"
              enctype="multipart/form-data"
              class="d-flex"
            >
              <input type="hidden" name="_token" :value="csrf" />
              <input type="hidden" name="music_id" :value="music.id" />

              <select
                class="form-control mr-1"
                name="playlist_id"
                onchange="this.form.submit()"
                v-if="ss === music.id"
                style="background-color:#ebbf76"
              >
                <option>Add to playlist</option>
                <option
                  type="submit"
                  v-for="playlist in getPlaylist"
                  :key="playlist.id"
                  v-bind:label="playlist.playlist_name"
                  v-bind:value="playlist.id"
                />
              </select>
            </form>
          </div>
        </div>
      </div>
      <br />
      <audio controls  v-if="showIndex === music.id" classs="volume:0.2">
        <source v-bind:src="music.preview" type="audio/mpeg" />Your browser doest not support the audio element
      </audio>

      <br />
    
    </div>
    </div>
    <div v-else><h1>No Music found!</h1></div>
  </div>
</template>

<script>
export default {
  name: "Musiclist",

  data() {
    return {
      getPlaylist: Array,
      getDeezerAPI: Array,
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      isHidden: true,
      ss: null,
      showIndex: null,
      search:null,
      searchbox:null
      
    };
  },

  created() {
    this.fetchMMusiclist();
  },

  methods: {

    fetchMMusiclist() {
      
      axios.get("/getPlaylist").then(response => {
        this.getPlaylist = response.data;
      });
      axios
        .get('https://deezerdevs-deezer.p.rapidapi.com/search?q=eminem', {
          params: {},
          headers: {
            "x-rapidapi-host": "deezerdevs-deezer.p.rapidapi.com",
            "x-rapidapi-key":
              ""
          }
        })

        .then(response => {
          this.getDeezerAPI = response.data;
          
        });
    },

    searchMusic(searchItem){
      axios
        .get('https://deezerdevs-deezer.p.rapidapi.com/search?q=' + searchItem, {
          params: {},
          headers: {
            "x-rapidapi-host": "deezerdevs-deezer.p.rapidapi.com",
            "x-rapidapi-key":
              "4b53101162mshdc4d68e9bdbf3b0p16a4b4jsn85719e693be8"
          }
        })
        .then(response => {
          this.getDeezerAPI = response.data;         
        });
    }
  }
};
</script>
