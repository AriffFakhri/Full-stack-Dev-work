

<template>
  <img alt="Vue logo" src="./assets/logo.png">

  <div id="app">
    <h1>Recipe app</h1>
    <div v-if="selectedRecipe">
      <button @click="selectedRecipe = null">Back recipe</button>
      <h2>{{ selectedRecipe.title }}</h2>
      <p>{{ selectedRecipe.description }}</p>
    </div>
    <div>
      <ul>
        <li v-for="recipe in recipes" :key="recipe.id">
          <button @click="selectRecipe(recipe)">{{ recipe.title }}</button>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'App',

  data() {
    return {
      recipes: [
        {
          id: 1,
          title: "Spaghetti",
          description: "here is ur best spaghetti recipe"
        },
        {
          id: 2,
          title: "Noodles",
          description: "here is ur best noodles recipe"
        },
        {
          id: 3,
          title: "Pasta",
          description: "here is ur best pasta recipe"
        },
      ],
      selectedRecipe: null,
    }
  },
  methods: {
    selectRecipe(recipe) {
      this.selectedRecipe = recipe;
    }
  }
}

</script>

<style>
#app{
  text-align: center;
  margin-top: 60px;

}
button{
  padding: 10px;
  font-size: 16px;
  margin-bottom: 10px;
  cursor: pointer;
}
ul{
  list-style: none;
  padding: 0;
}
li{
  margin-bottom: 10px;
}

</style>

