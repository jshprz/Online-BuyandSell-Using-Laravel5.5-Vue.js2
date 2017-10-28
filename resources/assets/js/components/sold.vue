<template>
<div>
<thead>
    <tr>

        <th class="uk-width-small"></th>
        <th class="uk-width-small"></th>
        <th class="uk-width-small"></th>
        <th class="uk-width-large"></th>
    </tr>
</thead>
<tbody>
    <tr>
    &nbsp
        <td><button class="uk-button uk-button-primary uk-button-default" @click="$emit('soldme')">Sold</button></td>
        <td><img class="uk-preserve-width " :src="image" width="60" alt=""></td>
          <td class="uk-table-link">
            <a class="uk-link-reset" href="">{{description}}</a>
        </td>
        <td class="uk-text-nowrap">{{price}}</td>
    </tr>
</tbody>
</div>
</template>
<script>
    export default {
    props:['image','description','price','clicks']
    }
</script>
