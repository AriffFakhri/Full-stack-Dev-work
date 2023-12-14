<template>
    <img alt="Vue logo" src="./assets/logo.png">
   
    <div id="app">
      <h1>Todo App</h1>
      <input placeholder="Add todo" @keyup.enter = "addTodo" v-model = "newTodo" />
      
      <button id="addbtn" @click = AddTask>Add Task </button>
  
      <ul>
        <li v-for = "(todo, index) in todos" :key="index">
          {{ todo }}
  
          <button @click = "removeTodo(index)">Remove</button>
          
        </li>
        
      </ul>
    </div>
    
  </template>
  
  <script>
  
  export default {
    name: 'App',
    data(){
      return{
        newTodo: '',
        todos: [],
      }
    },
    methods:{
      addTodo(){
        if(this.newTodo.trim() !== ''){
          this.todos.push(this.newTodo.trim());
          this.newTodo = '';
        }
      },
      removeTodo(index) {
        this.todos.splice(index, 1)
      },
      AddTask() {
        this.addTodo();
      },
    }
  }
  </script>
  
  <style>
  #app{
    text-align: center;
    margin-top: 60px;
  
  }
  input{
    padding: 10px;
    font-size: 16px;
    margin-bottom: 10px;
  }
  ul{
    list-style-type: none;
  }
  li{
    margin: 5px;
  }
  #addbtn{
    margin-top: 10px;
    margin-left: 10px;
    background-color: greenyellow;
    color: black bold;
    height: 30px;
    width: 110px;
  }
  </style>
  
  