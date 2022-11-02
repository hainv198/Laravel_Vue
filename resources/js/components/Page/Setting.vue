<template>
    <section class="table-template">
       <div class="setting ">
           <div class="nav-setting row">
               <div class="title-setting ">
                <span>Permissions Configuration</span>
               </div>
               <div class="button-setting">
                   <div class="button-setting-reset">
                       <a class="button-reset">Reset</a>
                   </div>
                   <div class="button-setting-save">
                       <a class="button-save">Save</a>
                   </div>
               </div>
           </div>
           <hr>
           <div class="body-setting">
               <div class="search-title">
                   <label class="mb-2">User</label>
                   <div class="center con-selects">
                       <vs-select
                           filter
                           placeholder="Creator"
                           v-model="creator"
                       >
                           <vs-option label="Vuesax" value="1">
                               Vuesax
                           </vs-option>
                           <vs-option label="Vue" value="2">
                               Vue
                           </vs-option>
                           <vs-option label="Javascript" value="3">
                               Javascript
                           </vs-option>
                           <vs-option label="Sass" value="4">
                               Sass
                           </vs-option>
                           <vs-option label="Typescript" value="5">
                               Typescript
                           </vs-option>
                           <vs-option label="Webpack" value="6">
                               Webpack
                           </vs-option>
                           <vs-option label="Nodejs" value="7">
                               Nodejs
                           </vs-option>
                       </vs-select>
                   </div>
               </div>
           </div>
           <div class="check-request">
               <div class="item-request">
                   <input type="checkbox"> Request
                   <ul class="mb-0">
                       <li>
                           <input type="checkbox"> Create Request
                       </li>
                       <li>
                           <input type="checkbox"> View Request
                       </li>
                       <li>
                           <input type="checkbox"> Edit Request
                       </li>
                       <li>
                           <input type="checkbox"> Delete Request
                       </li>
                       <li>
                           <input type="checkbox"> Dulicate Request
                       </li>
                   </ul>
               </div>
           </div>
           <div class="check-approval">
               <div class="item-request">
                   <input type="checkbox"> Request
                   <ul class="mb-0">
                       <li>
                           <input type="checkbox"> Create Request
                       </li>
                       <li>
                           <input type="checkbox"> View Request
                       </li>
                       <li>
                           <input type="checkbox"> Edit Request
                       </li>
                       <li>
                           <input type="checkbox"> Delete Request
                       </li>
                       <li>
                           <input type="checkbox"> Dulicate Request
                       </li>
                   </ul>
               </div>
           </div>
           <div class="check-template">
               <div class="item-request">
                   <input type="checkbox"> Request
                   <ul class="mb-0">
                       <li>
                           <input type="checkbox"> Create Request
                       </li>
                       <li>
                           <input type="checkbox"> View Request
                       </li>
                       <li>
                           <input type="checkbox"> Edit Request
                       </li>
                       <li>
                           <input type="checkbox"> Delete Request
                       </li>
                       <li>
                           <input type="checkbox"> Dulicate Request
                       </li>
                   </ul>
               </div>
           </div>
       </div>

    </section>
</template>

<script>
export default {
    name: "Setting",
    data() {
        return {
            SelectOrganization:'',
        }
    }
}
</script>

<style scoped>

</style>
