<template>
    <button :class="[outline_primary ? 'outline_primary' : 'outline_danger',  ]">
        {{buttonText}}
    </button>
</template>

<script>

export default {
    name:'Button',
    props : {
        buttonText: {
            type:String,
            default: () => "Label"
        },
        outline_primary: {
            type:Boolean,
            default: () => false
        }
    }


}

</script>

<style scoped>
.outline_primary {
    border: 1px solid #0b8ffc;
    border-radius: 8px;
    padding: 10px;
    color: #0b8ffc;

}
.outline_danger {
    border: 1px solid #ff3300;
    border-radius: 8px;
    padding: 10px;
    color: #ff3300;
}

.btn-default {
    border: none;
    border-radius: 8px;
    padding: 10px;
    color: var(--main-color);
    background-color: #0b8ffc;
}
</style>
