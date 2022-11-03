<template>
    <div>
        <button data-toggle="modal" data-target="#exampleModalCenter"
                v-on="$listeners"
                :class="[outline_primary ? 'outline_primary' : 'outline_danger']">
            {{buttonText}}
        </button>
<!--
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLongTitle">Template</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span class="description-model">Approval Title</span>
                        <span class="err-message-model">*</span>
                        <div class="select-dropdown">
                            <select :name="name" :id="id" ref="input" v-model="value">
                                <option v-for="option in options" :value="option.value">
                                    {{ option.text }}
                                </option>
                            </select>
                            <div class="select-box" v-on:click="status = !status">
                                <span class="value" @click="toggleFocus">
                                    {{ [ null, '' ].includes(value) ? placeholder : findText(value)}}
                                </span>
                                <span class="toggle" >
                                    <i v-if="status" class='bx bx-chevron-down' ></i>
                                    <i v-else class='bx bx-chevron-up'></i>
                                </span>
                            </div>
                            <div class="options" v-if="focused">
                                <ul>
                                    <li
                                        v-for="option in options"
                                        @click="selectOption(option.value)"
                                        :data-value="option.value"
                                        :class="{selected: value === option.value}"
                                    >
                                        {{ option.text }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </div>
        </div>
-->
    </div>
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
        },
    },
    data () {
        return {
            status:'',

            id: "test",
            name: "test",
            placeholder: "Status",
            useRealInput: false,
            value: "",
            focused: false,
            options: [
                { value: 1, text: "Option 1" },
                { value: 2, text: "Option 2" },
                { value: 3, text: "Option 3" },
            ],
        }
    },
    methods: {
        makeActive: function (item) {
            this.active = item;
        },
        toggleFocus() {
            if (this.useRealInput) {
                this.$refs.input.focus();
            } else {
                this.focused = !this.focused;
            }
        },
        selectOption(value) {
            if (value !== this.value) {
                this.value = value;
                this.$refs.input.value = value;
                this.toggleFocus();
            }
        },
        findText(value) {
            const option = this.options.filter((option) => {
                if (option.value === value) return true;
            })[0];
            return option === undefined ? "" : option.text;
        },
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
