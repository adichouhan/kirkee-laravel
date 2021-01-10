<template lang="html">
  <section class="dashboard">
    <div class="row">
      <h1>Settings</h1>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Language</label>
      <select class="form-control" v-model="lang" @change="handleChange($event)">
        <option value="en">1</option>
        <option value="zh">中文</option>
        <option value="ar">عربى</option>

      </select>
    </div>

  </section>
</template>

<script lang="js">
  export default {
    name: 'dashboard',
    data(){
      const lang= localStorage.getItem('lang') || en
      return{
        lang : lang
      }
    },

    methods:{
      handleChange(event){
        localStorage.setItem('lang', event.target.value);
        window.location.reload();
      }
    }
  }
</script>

<style scoped lang="scss">
</style>
