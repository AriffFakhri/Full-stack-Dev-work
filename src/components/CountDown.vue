<!-- <template>
  <img alt="Vue logo" src="./assets/logo.png">
 
  <div id="app">
    <h1>Count the App</h1>
    <label>Set countdown (in seconds)</label>
    <input type="number" id="duration" v-model="duration" min="1" />
    <button @click="startCountdown()" :disabled="counting">Start</button>

    <div v-if="counting">
      <h2>Time remaining</h2>
      <p>{{ minutes }} : {{ seconds }}</p>
    </div>

    <div>
      <h2 v-if="coundownComplete">Countdown complete</h2>
    </div>

  </div>

  
</template>

<script>

export default {
  name: 'App',
  data() {
    return{
    durattion:0,
    counting: false,
    minutes:0,
    seconds:0,
    coundownComplete:false,
    intervalis: null,

  }
  },
  methods:{
    startCountdown() {
      if(this.duration > 0 && !this.counting){
        this.counting = true; 
        this.intervalid = setInterval(() => {
          if(this.duration > 0 ){
            this.duration--;
            this.calculateTime();
          }
          else{
            clearInterval(this.intervalid);
            this.counting = false;
            this.countdownComplete = true
          }
        }, 1000)
      }
    },
      calculateTime() {
        this.minutes = Math.floor(this.duration / 60);
        this.seconds = this.duration % 60;
      }
  
    }
  }
  
}
</script>

<style>
#app{
  text-align: center;
  margin-top: 60px;

}
input {
  padding: 10px;
  font-size: 18px;
  margin-bottom: 10px;
}

</style> -->

<template>
    <div id="app">
      <h1>Countdown App</h1>
      <label>Set countdown (in seconds)</label>
      <input type="number" id="duration" v-model="duration" min="1" />
      <button @click="startCountdown()" :disabled="counting">Start</button>
  
      <div v-if="counting">
        <h2>Time remaining</h2>
        <p> {{ hours }}:{{ minutes }} : {{ seconds }}</p>
      </div>
  
      <div>
        <h2 v-if="countdownComplete">Countdown complete</h2>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'App',
    data() {
      return {
        duration: 0,
        counting: false,
        hours: 0,
        minutes: 0,
        seconds: 0,
        countdownComplete: false,
        intervalid: null,
      };
    },
    methods: {
      startCountdown() {
        
        if (this.duration > 0 && !this.counting) {
          this.counting = true;
          this.intervalid = setInterval(() => {
            if (this.duration > 0) {
              this.duration--;
              this.calculateTime();
            } else {
              clearInterval(this.intervalid);
              this.counting = false;
              this.countdownComplete = true;
            }
          }, 1000);
        }
      },
      calculateTime() {
        this.hours = Math.floor(this.duration / 3600)
        this.minutes = Math.floor((this.duration % 3600) / 60);
        this.seconds = this.duration % 60;
      },
    },
  };
  </script>
  
  <style>
  #app {
    text-align: center;
    margin-top: 60px;
  }
  
  input {
    padding: 10px;
    font-size: 18px;
    margin-bottom: 10px;
  }
  </style>
  