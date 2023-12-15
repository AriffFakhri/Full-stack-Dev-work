<template>
    <div id="app">
      <h1>Count the App</h1>
      <label>Set countdown:</label>
      <div>
        <label>Hours:</label>
        <input type="number" id="hours" v-model="hours" min="0" />
      </div>
      <div>
        <label>Minutes:</label>
        <input type="number" id="minutes" v-model="minutes" min="0" max="59" />
      </div>
      <div>
        <label>Seconds:</label>
        <input type="number" id="seconds" v-model="seconds" min="0" max="59" />
      </div>
      <button @click="startCountdown()" :disabled="counting">Start</button>
  
      <div v-if="counting">
        <h2>Time remaining</h2>
        <p>{{ hours }} : {{ minutes }} : {{ seconds }}</p>
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
        hours: 0,
        minutes: 0,
        seconds: 0,
        counting: false,
        countdownComplete: false,
        intervalid: null,
      };
    },
    methods: {
      startCountdown() {
        const totalSeconds = this.hours * 3600 + this.minutes * 60 + this.seconds;
  
        if (totalSeconds > 0 && !this.counting) {
          this.counting = true;
          this.intervalid = setInterval(() => {
            if (totalSeconds > 0) {
              totalSeconds--;
              this.calculateTime(totalSeconds);
            } else {
              clearInterval(this.intervalid);
              this.counting = false;
              this.countdownComplete = true;
            }
          }, 1000);
        }
      },
      calculateTime(totalSeconds) {
        this.hours = Math.floor(totalSeconds / 3600);
        this.minutes = Math.floor((totalSeconds % 3600) / 60);
        this.seconds = totalSeconds % 60;
      },
    },
  };
  </script>
  
  <style>
  #app {
    text-align: center;
    margin-top: 60px;
  }
  
  label {
    display: inline-block;
    margin-bottom: 5px;
  }
  
  input {
    padding: 10px;
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  button {
    margin-top: 10px;
  }
  </style>
  