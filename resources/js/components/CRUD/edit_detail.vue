<template>
    <div>
        <h1>Edit</h1>
        <h1>{{name}}</h1>
        <p>{{city}}</p>
    </div>

</template>

<script>
export default {
    props:['name', 'city'],
}
</script>

<style scoped>
    h1 {
        background-color: #9CCC65;
    }
</style>
