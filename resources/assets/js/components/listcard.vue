<template>

<div class="uk-card uk-card-small uk-card-default">
          <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                  <div class="uk-width-auto">
                      <img class="uk-border-circle " width="40" height="40" :src="userimage">
                  </div>
                  <div class="uk-width-expand">
                      <h3 class="uk-card-title uk-margin-remove-bottom ">{{contact}}</h3>
                      <div class="uk-card-badge uk-label uk-margin-large-left uk-margin-large-bottom">Php. {{productprice}}</div>
                      <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">{{createdat}}</time></p>
                  </div>
              </div>
          </div>
          <div class="uk-card-header">
                      <img class="uk-align-center minimum" :src="productimage">
          </div>
          <div class="uk-card-footer">
              <a class="uk-button uk-button-text" :href="go">{{firstname}} {{lastname}}</a>
               <h6 class="uk-align-right" style="color:black">{{city}}</h6>
          </div>
      </div>

</template>

<script>
export default{
  props:['go','userimage','contact','productimage','productdescription','createdat','productprice','firstname','lastname','city']

}
</script>
