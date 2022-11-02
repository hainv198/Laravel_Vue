<template>
    <section class="table-template">
        <div class="view-detail">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
                    <div class="button-create-edit">
                        <router-link to="/update-template" data-toggle="modal" data-target="#exampleModalCenter" >
                            Edit
                        </router-link>
                    </div>
                </div>
            </div>
            <hr>
            <form action="">
                <h5>General Information</h5>
                <div class="detail-title">
                    <label class="p-2">Approval Title</label> <span>*</span>
                    <div class="input-detail">
                        <input
                            type="text"
                            autocomplete="customer.firstName"
                            placeholder="Interdepartmental Coopration"
                            value="Interdepartmental Coopration"
                            required
                        />
                    </div>
<!--                    <p class="err-message">
                        <span>Error message</span>
                    </p>-->
                </div>
                <div class="detail-content">
                    <label class="p-2 mt-3">Content</label>
                    <div class="input-detail">
                        <textarea placeholder="Answer" name="" id="" cols="10" rows="5"></textarea>
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Approver</label><span>*</span>
                    <div class="detail-approver">
                        <div class="row input-filter">
                            <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                <input
                                    type="text"
                                    placeholder="Select organization"
                                    required
                                    value="Select organization"
                                />
                            </div>
                            <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                <input
                                    type="text"
                                    value="Select organization"
                                    placeholder="Select approver"
                                    required
                                />
                            </div>
                        </div>
                        <div class="add-new-template m-3 d-flex justify-content-end">
                            <span class="detail-approver-add">
                                <i class='bx bx-plus-circle'></i> Add Approval
                            </span>
                        </div>
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Approval Title</label> <span>*</span>
                    <div class="input-detail">
                        <input
                            type="text"
                            autocomplete="customer.firstName"
                            placeholder="Interdepartmental Coopration"
                            value="Follower"
                            required
                        />
                    </div>
                </div>
                <h5 class="mt-4">Information Field</h5>
                <div class="detail-title">
                    <label class="p-2 mt-3">Full name</label>
                    <div class="input-detail">
                        <input
                            type="text"
                            autocomplete="customer.firstName"
                            placeholder="Interdepartmental Coopration"
                            value="Full name"
                            required
                        />
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Time application</label>
                    <div class="input-detail">
                        <input
                            type="datetime-local"
                            autocomplete="customer.firstName"
                            placeholder="Interdepartmental Coopration"
                            value="14:11:22"
                            required
                        />
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Date application</label>
                    <div class="input-detail">
                        <input
                            type="date"
                            placeholder="Interdepartmental Coopration"
                            value="1:11:2022"
                            required
                        />
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Role</label>
                    <div class="input-role-detail">
                        <ul class="mb-0">
                            <li>
                                <input value="true" type="checkbox"> Team lead
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Role</label>
                    <div class="input-role-detail">
                        <ul class="mb-0">
                            <li>
                                <input value="true" type="radio"> Team lead
                            </li>
                        </ul>
                    </div>
                </div>
                <label style="font-size: 13px; color:#757575" class="p-2 mt-3">Upload attachment</label>
                <div class="input-filter-result p-0 col-sm-12 col-md-12 col-lg-12">
                    <div class="input-right-box-2-file">
                        <div class="upload-file">
                            <div class="up-cv">
                                <button class="btn btn-outline-primary" @click="onFileChange" type="button" id="custom-button">
                                    <p class="material-symbols-outlined"> Choose File </p>
                                </button>

                                <input id="real-file" type="file" style="display: none" name="image" @change="fileName" />
                                <div class="name-cv">
                                    <span v-if="uploadedFileName">{{ uploadedFileName }}</span>
                                    <span v-else id="custom-text">Attachment (jpg, pdf, doc, dcx, xls, xlsx only..
                                                    <br>
                                                    Maximum file size 2MB )
                                                </span>
                                    <span v-if="uploadedFileName" class="material-symbols-outlined deleteBtn" @click="deleteFile">
                                                    <i class="mr-1 bx bxs-trash"></i>
                                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
export default {
    name: "ViewDetailTemplate",
    data() {
        return {
            uploadedFileName: null,
            value:'',
            SelectOrganization:'',
            SelectApprover:'',
            follower:'',
            workflow:'',
            ProcessingTime:'',
            Minimum:'',
            option:true,
        }
    },
    methods: {
        onFileChange() {
            document.getElementById('real-file').click();
        },
        fileName(e){
            this.uploadedFileName = e.target.value;
        },
        deleteFile() {
            this.uploadedFileName = null;
        },
    }
}
</script>

<style scoped lang="scss">
h5 {
    font-size: 18px;
}
.input-filter-result {
    .input-right-box-2 {
        .create-radio {
            background: #f3f3f3 ;
            border-radius: 10px;
            .group-box {
                padding: 20px;
                .select-radio {
                    div {
                        display: flex;
                        align-items: center;
                        gap: 10px;
                        input {
                            height: 16px;
                            width: 16px;
                        }
                    }
                    span {
                        font-size: 15px;
                        color: #333333;
                    }
                }
            }
        }
        .v-input-right-1 {
            border-radius: 10px;
            background: #f3f3f3;
            margin-bottom: 10px;
            padding: 10px;
            &::placeholder {

            }
        }
        .v-input-right-2 {
            border-radius: 10px;
            background: #f3f3f3;
            padding: 10px;
        }

        .v-input-right-3 {
            width: 100%;
            border: none;
            font-size: 14px;
            padding: 10px;
            border-radius: 10px;
            background: #f3f3f3;
            color: #464646;
        }

        .v-input-right-chose-file {
            background-color: #f3f3f3;
            width: 100%;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            &::file-selector-button {
                margin-left: auto;
                margin-right: auto;
                color: dodgerblue;
                padding: 0.5em;
                border: 1px dashed #2d995b;
                border-radius: 3px;
            }
        }
    }

    .input-right-box-2-file {
        width: 100%;
        .upload-file {
            text-align: center;
            padding: 20px;
            border: 1px dashed #2d995b;
            border-radius: 10px;
        }
        span {
            font-size: 13px;
            margin-top: 15px;
        }
    }

}
.group-icon-box2 {

    .input-check-box-2 {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
    }
    margin-top: 20px;
    //background: #0b8ffc;
    gap: 12px;
    label {
        color: #0b8ffc;
    }
    input {
        height: 15px;
        width: 15px;
    }
    .icon-duplication {
        font-size: 1.4rem;
        color: #0b8ffc;
        cursor: pointer;
    }
    .icon-delete-handle {
        font-size: 1.4rem;
        color: #ff3300;
        cursor: pointer;
    }
}

</style>
