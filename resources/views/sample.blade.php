<style media="screen">
.is-error {
border: 2px solid red;
}

.form-group {
margin-top: 20px;
}
</style>
<div id="app">
  <div class="columns is-multiline">
    <div class="column is-12">
      <label class="label">Email</label>
      <p class="control has-icon has-icon-right">
          <input name="email" v-validate="'required|email|unique'" :class="{'input': true, 'is-error': errors.has('email') }" type="text" placeholder="Email">
          <i v-show="errors.has('email')" class="fa fa-warning"></i>
          <span v-show="errors.has('email')" class="help is-danger">@{{ errors.first('email') }}</span>
      </p>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
<script type="text/javascript" src="js/vee-validate.min.js"></script>
<script>
        Vue.use(VeeValidate);

        new Vue({
            el: '#app'
        });
</script>
