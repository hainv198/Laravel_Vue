<template>
    <section class=".table-template">
        <div class="register " v-if="!hasSeenCongrats">
            <transition name="slide-fade">
                <section v-show="step === 1">
                    <form class="form" method="post" action="#" @submit.prevent="next">
                        <div class="cta"
                             data-style="see-through"
                             data-alignment="right"
                             data-text-color="custom">

                            <p class="cta-color">
                            <span class="link_wrap pb-3 border_button ">
                                <input type="submit" value="Next" class="link_text" />
                            </span>
                            </p>
                        </div>

                        <div class="register-stepper">
                            <div class="step" :class="{'step-active' : step === 1, 'step-done': step > 1}">
                                <span class="step-number" style="color: #0b8ffc">1</span>
                            </div>
                            <div class="description-form">
                                <span >General Information </span>
                            </div>

                            <div class="step" :class="{'step-active' : step === 2, 'step-done': step > 2}">
                                <span class="step-number" style="color: #757575">2</span>
                                <div class="description-form-step-2">
                                    <span > Information Field</span>
                                </div>
                            </div>
                            <div class="step" :class="{'step-active' : step === 3, 'step-done': step > 3}">
                                <div class="description-form-step-3">
                                    <span >3</span>
                                </div>
                                <div class="step-number-3">
                                    <span>Preview</span>
                                </div>
                            </div>
                        </div>

                        <!--Template Name-->

                        <label class="mb-3">Template Name <span>*</span></label>
                        <input
                            type="text"
                            v-model="customer.name"
                            autocomplete="customer.firstName"
                            placeholder="Answer"
                            required
                            minlength="3" maxlength="20"
                        />
                        <p class="err-message" v-if=" customer.name === 'hainv' ">
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
                        </p>

                        <!--Description-->

                        <label class="mt-3">Description <span>*</span></label>
                        <div class="create-description">
                            <textarea
                                cols="8"
                                rows="5"
                                type="text"
                                v-model="customer.lastName"
                                autocomplete="customer.lastName"
                                placeholder="Answer"
                                required
                            />
                        </div>

                        <p class="err-message" v-if=" customer.name === 'hainv' ">
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
                        </p>

                        <!--Approver-->

                        <label class="mb-2">Approver <span>*</span></label>
                        <div class="group-input-create-template">
                            <div class="row input-filter">
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects">
                                        <vs-select
                                            filter
                                            placeholder="Select organization"
                                            v-model="SelectOrganization"
                                        >
                                            <vs-option label="HN" value="1">
                                                HN
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
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects">
                                        <vs-select
                                            filter
                                            placeholder="Select approver"
                                            v-model="SelectApprover"
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
                                            <vs-option  label="Webpack" value="6">
                                                Webpack
                                            </vs-option>
                                            <vs-option label="Nodejs" value="7">
                                                Nodejs
                                            </vs-option>
                                        </vs-select>
                                    </div>
                                </div>
                            </div>
                            <div class="add-new-template mt-3 d-flex justify-content-end">
                            <span class="Add-new">
                                <i class='bx bx-plus-circle'></i> Add Approval
                            </span>
                            </div>
                        </div>

                        <!--Follower-->

                        <label class="mt-2 mb-2">Follower <span>*</span></label>
                        <div class="center con-selects">
                            <vs-select
                                filter
                                placeholder="Enter Description"
                                v-model="follower"
                            >
                                <vs-option label="Nguyen Van Hai" value="1">
                                    Nguyen Van Hai <span class="ml-2">( hainv@ldcc.vn )</span>
                                </vs-option>
                                <vs-option label="Vue" value="2">
                                    Nguyen Van B <span class="ml-2">( bnv@ldcc.vn )</span>
                                </vs-option>

                            </vs-select>
                        </div>

                        <!--Workflow-->

                        <label class="mt-4 mb-2">Workflow <span>*</span></label>
                        <div class="center con-selects">
                            <vs-select
                                filter
                                placeholder="Select Workflow "
                                v-model="workflow"
                            >
                                <vs-option label="Parallel" value="1">
                                    Parallel
                                </vs-option>
                                <vs-option label="Sequence" value="2">
                                    Sequence
                                </vs-option>
                            </vs-select>
                        </div>

                        <!--Processing Time-->

                        <label class="mt-4 mb-2">Processing Time <span>*</span></label>
                        <div class="center con-selects">
                            <vs-select
                                filter
                                placeholder="Selection Processing Time"
                                v-model="ProcessingTime"
                            >
                                <vs-option label="1 hours" value="1">
                                    1 hours
                                </vs-option>
                                <vs-option label="2 hours" value="2">
                                    2 hours
                                </vs-option>
                                <vs-option label="3 hours" value="3">
                                    3 hours
                                </vs-option>
                                <vs-option label="4 hours" value="4">
                                    4 hours
                                </vs-option>
                                <vs-option label="5 hours" value="5">
                                    5 hours
                                </vs-option>

                            </vs-select>
                        </div>

                        <!--Minimum Approval-->

                        <label class="mt-4 mb-2">Minimum Approval <span>*</span></label>
                        <div class="center con-selects">
                            <vs-select
                                filter
                                placeholder="None"
                                v-model="Minimum"
                            >
                                <vs-option label="Nguyen Van Hai" value="1">
                                    Nguyen Van Hai <span class="ml-2">( hainv@ldcc.vn )</span>
                                </vs-option>
                                <vs-option label="Nguyen Van B" value="2">
                                    Nguyen Van B <span class="ml-2">( bnv@ldcc.vn )</span>
                                </vs-option>
                            </vs-select>
                        </div>
                    </form>
                </section>
            </transition>
            <transition name="slide-fade">
                <section v-show="step === 2">
                    <form class="form" method="post" action="#" @submit.prevent="next">
                        <div class="form-group cta-step">
                            <div class="cta prev">
                                <p class="cta-color">
                                <span class="link_wrap .border_button_2 ">
                                  <a class="link_text" href="#" @click.prevent="prev()">
                                      Back
                                  </a>
                                </span>
                                </p>
                            </div>
                            <div class="cta ">
                                <p class="cta-color">
                                    <span class="text"></span>
                                    <span class="link_wrap border_button_3">
                                        <input type="submit" value="Next" class="link_text" />
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="register-stepper">
                            <div class="step" :class="{'step-active' : step === 1, 'step-done': step > 1}">
                                <span class="step-number"><i class='bx bx-check'></i></span>
                            </div>
                            <div class="description-form">
                                <span >General Information </span>
                            </div>

                            <div class="step" :class="{'step-active' : step === 2, 'step-done': step > 2}">
                                <span class="step-number">2</span>
                                <div class="description-form-step-2">
                                    <span style="color: #0b8ffc" > Information Field</span>
                                </div>
                            </div>
                            <div class="step" :class="{'step-active' : step === 3, 'step-done': step > 3}">
                                <div class="description-form-step-3">
                                    <span >3</span>
                                </div>
                                <div class="step-number-3">
                                    <span>Preview</span>
                                </div>
                            </div>
                        </div>

                        <div class="row group-input-create-template mb-3">
                            <div class="icon-drop-drag d-flex flex-column justify-content-center"
                                 style="margin-left: 10px;">
                            <span>
                                <i class='bx bxs-grid'></i>
                            </span>
                            </div>

                            <div class="row  col-12 input-filter">
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects" >
                                        <div>
                                            <vs-select
                                                filter
                                                placeholder="Select "
                                                v-model="SelectOrganization"
                                            >
                                                <vs-option label="Text box" value="1">
                                                    Text box
                                                </vs-option>

                                                <vs-option label="CheckBox" value="2">
                                                    CheckBox
                                                </vs-option>
                                                <vs-option label="Radio box" value="3">
                                                    Radio box
                                                </vs-option>
                                                <vs-option label="Date" value="4">
                                                    Date
                                                </vs-option>
                                                <vs-option label="Time" value="5">
                                                    Time
                                                </vs-option>
                                                <vs-option label="Attachment" value="6">
                                                    Attachment
                                                </vs-option>
                                            </vs-select>
                                            <div class="d-flex group-icon-box2">
                                                <div class="input-check-box-2" >
                                                    <input type="checkbox" v-model="option"/>
                                                    <label>Request</label>
                                                </div>
                                                <span class="icon-duplication"><i class='bx bx-copy-alt'></i></span>
                                                <span class="icon-delete-handle"><i class="mr-1 bx bxs-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="input-right-box-2">
                                        <div class="center content-inputs">
                                            <input class="v-input-right-1"
                                                   type="text"
                                                   placeholder="Input field name"
                                            >
                                        </div>
                                    </div>
                                    <div class="input-right-box-2">
                                        <div class="center content-inputs">
                                            <input class="v-input-right-2"
                                                   type="text"
                                                   placeholder="Answer"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row group-input-create-template mb-3">
                            <div class="icon-drop-drag d-flex flex-column justify-content-center"
                                 style="margin-left: 10px;">
                            <span>
                                <i class='bx bxs-grid'></i>
                            </span>

                            </div>

                            <div class="row  col-12 input-filter">
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects" >
                                        <div>
                                            <vs-select
                                                filter
                                                placeholder="Select "
                                                v-model="SelectOrganization"
                                            >
                                                <vs-option label="Text box" value="1">
                                                    Text box
                                                </vs-option>

                                                <vs-option label="CheckBox" value="2">
                                                    CheckBox
                                                </vs-option>
                                                <vs-option label="Radio box" value="3">
                                                    Radio box
                                                </vs-option>
                                                <vs-option label="Date" value="4">
                                                    Date
                                                </vs-option>
                                                <vs-option label="Time" value="5">
                                                    Time
                                                </vs-option>
                                                <vs-option label="Attachment" value="6">
                                                    Attachment
                                                </vs-option>
                                            </vs-select>
                                            <div class="d-flex group-icon-box2">
                                                <div class="input-check-box-2" >
                                                    <input type="checkbox" v-model="option"/>
                                                    <label>Request</label>
                                                </div>
                                                <span class="icon-duplication"><i class='bx bx-copy-alt'></i></span>
                                                <span class="icon-delete-handle"><i class="mr-1 bx bxs-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="input-right-box-2">
                                        <div class="center content-inputs">
                                            <input class="v-input-right-1"
                                                   type="text"
                                                   placeholder="Input field name"
                                            >
                                        </div>
                                    </div>
                                    <div class="input-right-box-2">
                                        <div class="create-radio">
                                            <div class="group-box">
                                                <div class="select-radio d-flex justify-content-between align-items-center mb-2">
                                                    <div>
                                                        <input type="radio"><span>Enter name of radio button 1</span>
                                                    </div>
                                                    <span><i class='bx bx-x'></i></span>
                                                </div>
                                                <div class="select-radio d-flex justify-content-between align-items-center mb-2">
                                                    <div>
                                                        <input type="radio"><span>Enter name of radio button 2</span>
                                                    </div>
                                                    <span><i class='bx bx-x'></i></span>
                                                </div>
                                                <div class="add-new-template mt-3 d-flex justify-content-start">
                                                <span class="Add-new">
                                                    <i class='bx bx-plus-circle'></i> Add new checkbox
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row group-input-create-template mb-3">
                            <div class="icon-drop-drag d-flex flex-column justify-content-center"
                                 style="margin-left: 10px;">
                            <span>
                                <i class='bx bxs-grid'></i>
                            </span>

                            </div>
                            <div class="row  col-12 input-filter">
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects" >
                                        <div>
                                            <vs-select
                                                filter
                                                placeholder="Select "
                                                v-model="SelectOrganization"
                                            >
                                                <vs-option label="Text box" value="1">
                                                    Text box
                                                </vs-option>

                                                <vs-option label="CheckBox" value="2">
                                                    CheckBox
                                                </vs-option>
                                                <vs-option label="Radio box" value="3">
                                                    Radio box
                                                </vs-option>
                                                <vs-option label="Date" value="4">
                                                    Date
                                                </vs-option>
                                                <vs-option label="Time" value="5">
                                                    Time
                                                </vs-option>
                                                <vs-option label="Attachment" value="6">
                                                    Attachment
                                                </vs-option>
                                            </vs-select>
                                            <div class="d-flex group-icon-box2">
                                                <div class="input-check-box-2" >
                                                    <input type="checkbox" v-model="option"/>
                                                    <label>Request</label>
                                                </div>
                                                <span class="icon-duplication"><i class='bx bx-copy-alt'></i></span>
                                                <span class="icon-delete-handle"><i class="mr-1 bx bxs-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="input-right-box-2">
                                        <div class="center content-inputs">
                                            <input class="v-input-right-1"
                                                   type="text"
                                                   placeholder="Input field name"
                                            >
                                        </div>
                                    </div>
                                    <div class="input-right-box-2">
                                        <div class="create-radio">
                                            <div class="group-box">
                                                <div class="select-radio d-flex justify-content-between align-items-center mb-2">
                                                    <div>
                                                        <input type="checkbox"><span>Enter name of radio button 1</span>
                                                    </div>
                                                    <span><i class='bx bx-x'></i></span>
                                                </div>
                                                <div class="select-radio d-flex justify-content-between align-items-center mb-2">
                                                    <div>
                                                        <input type="checkbox"><span>Enter name of radio button 2</span>
                                                    </div>
                                                    <span><i class='bx bx-x'></i></span>
                                                </div>
                                                <div class="add-new-template mt-3 d-flex justify-content-start">
                                                <span class="Add-new">
                                                    <i class='bx bx-plus-circle'></i> Add new radio button
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row group-input-create-template mb-3">
                            <div class="icon-drop-drag d-flex flex-column justify-content-center"
                                 style="margin-left: 10px;">
                            <span>
                                <i class='bx bxs-grid'></i>
                            </span>
                            </div>

                            <div class="row  col-12 input-filter">
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects" >
                                        <div>
                                            <vs-select
                                                filter
                                                placeholder="Select "
                                                v-model="SelectOrganization"
                                            >
                                                <vs-option label="Text box" value="1">
                                                    Text box
                                                </vs-option>

                                                <vs-option label="CheckBox" value="2">
                                                    CheckBox
                                                </vs-option>
                                                <vs-option label="Radio box" value="3">
                                                    Radio box
                                                </vs-option>
                                                <vs-option label="Date" value="4">
                                                    Date
                                                </vs-option>
                                                <vs-option label="Time" value="5">
                                                    Time
                                                </vs-option>
                                                <vs-option label="Attachment" value="6">
                                                    Attachment
                                                </vs-option>
                                            </vs-select>
                                            <div class="d-flex group-icon-box2">
                                                <div class="input-check-box-2" >
                                                    <input type="checkbox" v-model="option"/>
                                                    <label>Request</label>
                                                </div>
                                                <span class="icon-duplication"><i class='bx bx-copy-alt'></i></span>
                                                <span class="icon-delete-handle"><i class="mr-1 bx bxs-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="input-right-box-2">
                                        <div class="center content-inputs">
                                            <input class="v-input-right-1"
                                                   type="text"
                                                   placeholder="Input field name"
                                            >
                                        </div>
                                    </div>
                                    <div class="input-right-box-2">
                                        <div class="center content-inputs">
                                            <input class="v-input-right-3" type="datetime-local">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row group-input-create-template mb-3">
                            <div class="icon-drop-drag d-flex flex-column justify-content-center"
                                 style="margin-left: 10px;">
                            <span>
                                <i class='bx bxs-grid'></i>
                            </span>
                            </div>

                            <div class="row  col-12 input-filter">
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects" >
                                        <div>
                                            <vs-select
                                                filter
                                                placeholder="Select "
                                                v-model="SelectOrganization"
                                            >
                                                <vs-option label="Text box" value="1">
                                                    Text box
                                                </vs-option>

                                                <vs-option label="CheckBox" value="2">
                                                    CheckBox
                                                </vs-option>
                                                <vs-option label="Radio box" value="3">
                                                    Radio box
                                                </vs-option>
                                                <vs-option label="Date" value="4">
                                                    Date
                                                </vs-option>
                                                <vs-option label="Time" value="5">
                                                    Time
                                                </vs-option>
                                                <vs-option label="Attachment" value="6">
                                                    Attachment
                                                </vs-option>
                                            </vs-select>
                                            <div class="d-flex group-icon-box2">
                                                <div class="input-check-box-2" >
                                                    <input type="checkbox" v-model="option"/>
                                                    <label>Request</label>
                                                </div>
                                                <span class="icon-duplication"><i class='bx bx-copy-alt'></i></span>
                                                <span class="icon-delete-handle"><i class="mr-1 bx bxs-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="input-right-box-2">
                                        <div class="center content-inputs">
                                            <input class="v-input-right-1"
                                                   type="text"
                                                   placeholder="Input field name"
                                            >
                                        </div>
                                    </div>
                                    <div class="input-right-box-2">
                                        <div class="center content-inputs">
                                            <input class="v-input-right-3" type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row group-input-create-template mb-3">
                            <div class="icon-drop-drag d-flex flex-column justify-content-center"
                                 style="margin-left: 10px;">
                            <span>
                                <i class='bx bxs-grid'></i>
                            </span>
                            </div>

                            <div class="row  col-12 input-filter">
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects" >
                                        <div>
                                            <vs-select
                                                filter
                                                placeholder="Select "
                                                v-model="SelectOrganization"
                                            >
                                                <vs-option label="Text box" value="1">
                                                    Text box
                                                </vs-option>

                                                <vs-option label="CheckBox" value="2">
                                                    CheckBox
                                                </vs-option>
                                                <vs-option label="Radio box" value="3">
                                                    Radio box
                                                </vs-option>
                                                <vs-option label="Date" value="4">
                                                    Date
                                                </vs-option>
                                                <vs-option label="Time" value="5">
                                                    Time
                                                </vs-option>
                                                <vs-option label="Attachment" value="6">
                                                    Attachment
                                                </vs-option>
                                            </vs-select>
                                            <div class="d-flex group-icon-box2">
                                                <div class="input-check-box-2" >
                                                    <input type="checkbox" v-model="option"/>
                                                    <label>Request</label>
                                                </div>
                                                <span class="icon-duplication"><i class='bx bx-copy-alt'></i></span>
                                                <span class="icon-delete-handle"><i class="mr-1 bx bxs-trash"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="input-right-box-2-file">
                                        <div class="upload-file">
                                            <div class="up-cv">
                                                <button class="btn btn-outline-primary" @click="onFileChange" type="button" id="custom-button">
                                                    <p class="material-symbols-outlined"> Choose File </p>
                                                </button>

                                                <input id="real-file" type="file" style="display: none" name="image" @change="fileName" />
                                                <div class="name-cv">
                                                    <span v-if="uploadedFileName">{{ uploadedFileName }}</span>
                                                    <span v-else id="custom-text">Attachment (jpg, pdf, doc, dcx, xls, xlsx...
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
                            </div>

                        </div>

                        <div class="btn-add-new row mb-3" >
                            <span>
                               <i class="bx bx-plus-circle"></i>
                                Add information field
                            </span>
                        </div>
                    </form>

                </section>
            </transition>
            <transition name="slide-fade">
                <section v-show="step === 3">
                    <form class="form" action="#" @submit.prevent="customerRegister">
                        <div class="form-group cta-step margin_button">
                            <div class="cta prev">
                                <p class="cta-color">
                                <span class="link_wrap">
                                  <a class="link_text" href="#" @click.prevent="prev()">
                                      Back
                                  </a>
                                </span>
                                </p>
                            </div>
                            <div class="cta button-group">
                                <div >
                                    <a class="draft">Draft</a>
                                </div>
                                <div>
                                    <a class="submit-form">Submit</a>
                                </div>
                            </div>
                        </div>

                        <!--===============-->

                        <div class="register-stepper">
                            <div class="step" :class="{'step-active' : step === 1, 'step-done': step > 1}">
                                <span class="step-number"><i class='bx bx-check'></i></span>
                            </div>
                            <div class="description-form">
                                <span >General Information </span>
                            </div>

                            <div class="step" :class="{'step-active' : step === 2, 'step-done': step > 2}">
                                <span class="step-number"><i class='bx bx-check'></i></span>
                                <div class="description-form-step-2">
                                    <span style="color: #0b8ffc" > Information Field</span>
                                </div>
                            </div>
                            <div class="step" :class="{'step-active' : step === 3, 'step-done': step > 3}">
                                <div class="description-form-step-3" style="border: 1px solid #0b8ffc">
                                    <span style="color: #0b8ffc" >3</span>
                                </div>
                                <div class="step-number-3">
                                    <span style="color: #0b8ffc">Preview</span>
                                </div>
                            </div>
                        </div>


                        <h5 class="mb-2">General Information</h5>

                        <label class="mb-3">Approval Title <span>*</span></label>
                        <input
                            type="text"
                            autocomplete="customer.firstName"
                            placeholder="Answer"
                            required
                        />
                        <p class="err-message" v-if=" customer.name === 'hainv' ">
                            <span>Error message</span>
                        </p>


                        <label class="mb-1 mt-3">Content <span>*</span></label>
                        <div class="textarea-box3">
                            <textarea
                                type="text"
                                v-model="customer.lastName"
                                autocomplete="customer.lastName"
                                placeholder="Answer"
                                required
                            />
                        </div>


                        <!--Approver-->

                        <label class="mb-2">Approver <span>*</span></label>
                        <div class="group-input-create-template">
                            <div class="row input-filter">
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects">
                                        <vs-select
                                            filter
                                            placeholder="Select organization"
                                            v-model="SelectOrganization"
                                        >
                                            <vs-option label="HN" value="1">
                                                HN
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
                                <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                    <div class="center con-selects">
                                        <vs-select
                                            filter
                                            placeholder="Select approver"
                                            v-model="SelectApprover"
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
                                            <vs-option  label="Webpack" value="6">
                                                Webpack
                                            </vs-option>
                                            <vs-option label="Nodejs" value="7">
                                                Nodejs
                                            </vs-option>
                                        </vs-select>
                                    </div>
                                </div>
                            </div>
                            <div class="add-new-template mt-3 d-flex justify-content-end">
                            <span class="Add-new">
                                <i class='bx bx-plus-circle'></i> Add Approval
                            </span>
                            </div>
                        </div>

                        <!-- Follower-->
                        <label class="mt-2 mb-2">Follower <span>*</span></label>
                        <div class="center con-selects">
                            <vs-select
                                filter
                                placeholder="Enter Description"
                                v-model="follower"
                            >
                                <vs-option label="Nguyen Van Hai" value="1">
                                    Nguyen Van Hai <span class="ml-2">( hainv@ldcc.vn )</span>
                                </vs-option>
                                <vs-option label="Vue" value="2">
                                    Nguyen Van B <span class="ml-2">( bnv@ldcc.vn )</span>
                                </vs-option>

                            </vs-select>
                        </div>

                        <!--=====================-->

                        <!--Next -->
                        <h5 class="mt-4 mb-1">Information Field</h5>

                        <label class="mb-3">Full Name <span>*</span></label>
                        <input
                            type="text"
                            v-model="customer.name"
                            autocomplete="customer.firstName"
                            placeholder="Answer"
                            required
                            minlength="3" maxlength="20"
                        />

                        <!--=====================-->

                        <label class="mt-3 mb-3">Time Application <span>*</span></label>
                        <input
                            type="text"
                            v-model="customer.name"
                            autocomplete="customer.firstName"
                            placeholder="Answer"
                            required
                            minlength="3" maxlength="20"
                        />


                        <!--=====================-->

                        <label class="mt-3 mb-3">Date Application <span>*</span></label>
                        <input
                            type="text"
                            v-model="customer.name"
                            autocomplete="customer.firstName"
                            placeholder="Answer"
                            required
                            minlength="3" maxlength="20"
                        />
                        <!--=====================-->
                        <label class="mt-3 mb-3">Role<span>*</span></label>
                        <div class="group-input-create-template">
                            <div class="role-check" >
                                <input type="checkbox" > <label>Team lead</label>
                            </div>
                            <div class="role-check">
                                <input type="checkbox" > <label>Department Manager</label>
                            </div>
                            <div class="role-check">
                                <input type="checkbox" > <label>General Manager </label>
                            </div>
                        </div>

                        <!--=====================-->

                        <label class="mt-3 mb-3">Role<span>*</span></label>
                        <div class="group-input-create-template">
                            <div class="role-check" >
                                <input type="radio" value="1" name="role" > <label>Team lead</label>
                            </div>
                            <div class="role-check">
                                <input type="radio" value="2" name="role" > <label>Department Manager</label>
                            </div>
                            <div class="role-check">
                                <input type="radio" value="3"  name="role"> <label>General Manager </label>
                            </div>
                        </div>

                        <!--=====================-->
                        <label class="mt-3 mb-3">Upload attachment<span>*</span></label>
                        <div class="group-input-create-template">
                            <div class="input-filter-result col-sm-12 col-md-12 col-lg-12">
                                <div class="input-right-box-2-file">
                                    <div class="upload-file">
                                        <div class="up-cv">
                                            <button class="btn btn-outline-primary" @click="onFileChange" type="button" id="custom-button">
                                                <p class="material-symbols-outlined"> Choose File </p>
                                            </button>

                                            <input id="real-file" type="file" style="display: none" name="image" @change="fileName" />
                                            <div class="name-cv">
                                                <span v-if="uploadedFileName">{{ uploadedFileName }}</span>
                                                <span v-else id="custom-text">Attachment (jpg, pdf, doc, dcx, xls, xlsx ...
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
                        </div>
                    </form>
                </section>
            </transition>
        </div>
    </section>


</template>

<script>
export default {
    name: "CreateNewTemplate",
    data: () => {
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

            steps: {},
            step: 1,
            customer: {

                name: "",
                lastName: "",
                phoneNumber: "",
                address: "",
                zipCode: "",
                city: "",
                birthDay: "",
                termOfService: "",
                pinCode: "",
                eMail: ""
            },
            hasSeenCongrats: false,
            tempCustomer: {
                gender: "",
                firstName: "",
                lastName: "",
                phoneNumber: "",
                address: "",
                zipCode: "",
                city: "",
                birthDay: "",
                termOfService: "",
                pinCode: "",
                eMail: ""
            },
        };
    },
    methods: {

        prev() {
            this.step--;
        },

        next() {
            this.step++;
        },

        customerRegister: function () {
            this.hasSeenCongrats = true;
        },

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

<style lang="scss">

/*.vs-select-content {
    width: 100%;
    max-width: none;
}*/
label {
    font-size: 14px;
    span {
        font-size: 12px ;
        color: #d50000;
        margin-left: 12px;
    }
}

/*.description-form {
   left: 55px;
    color: #0b8ffc;
    top:6px;
    position: absolute;
}*/
.description-form-step-2 {
    right: 210px;
    color: #333333;
    top:8.8px;
    position: absolute;
    span {
        font-size: 16px;
    }
    &::before {
        z-index: 0;
        content: "";
        display: block;
        position: absolute;
        height: 0.8px;
        top: calc(72% - 5.5px);
        background: #0b8ffc;
        width: 58%;
        left: 149px;
    }
}
/*.description-form-step-3 {
    right: 60px;
    font-weight: bold;
    color: #333333;
    top: -0.2px;
    display: flex;
    text-align: center;
    position: absolute;
    height: 40px;
    width: 40px;
    border: 1px solid;
    border-radius: 50%;
    flex-direction: column;
    justify-content: center;

}*/

/*.register-stepper .step .step-number-3 {
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2;
    width: 40px;
    height: 50px;
    margin-top: -9px;
    color: #333;
    background-color: white;
}*/


.register {

    &-icon {
        display: flex;
        background: #ffffff;
        border-radius: 2rem;
        width: 50px;
        height: 50px;
        padding: 1rem;
        margin: -50px auto 20px;
        box-shadow:  20px 20px 60px #153004, -20px -20px 60px #1d4006;

        &-item {
            width: 100%;
        }
    }

    &-title {
        font-weight: 300;
        font-size: 1.5rem;
        text-transform: uppercase;
        letter-spacing: 0.2rem;
        text-align: center;
        color: #ffffff;
        padding: 0 2rem;
        margin-top: 2rem;
    }

    &-stepper {
        display: flex;
        justify-content: space-between;
        width: 100%;
        position: relative;
        margin: 0 auto 2.5em;

        &::before {
            z-index: 0;
            content: "";
            display: block;
            position: absolute;
            height: 0.5px;
            top: calc(50% - 2px);
            background: #0b8ffc;
            width: 15%;
            left: 231px;
        }

        .step {
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
            width: 40px;
            height: 40px;
            border: 1px solid #333;
            color: #333;
            background-color: white;
            border-radius: 50%;
            min-width: 25px;
            min-height: 25px;
            line-height: 20px;
            font-size: 16px;

            &-active {
                color: #0b8ffc;
                background-color: white;
                border-color: #0b8ffc;
            }

            &-done {
                color: #0b8ffc;
                border-color: #0b8ffc;
            }

            &-number {
                font-weight: 800;
                color: #0b8ffc;
                line-height: 1;
                font-size: 18px;
                vertical-align: middle;
            }
        }
    }

    .form {
        &-group {
            display: flex;
            flex-flow: row;
            justify-content: flex-start;
            align-items: baseline;
            margin-bottom: 32px;

            label {
                text-align: left;
                //font-size: 1.1rem;
                line-height: 1.1;
                padding-bottom: 0.5rem;
            }

            &.cta-step {
                color: #ffffff;
                justify-content: space-between;
                border-bottom: 1px solid #333333 !important;
            }

            &.new-password {
                margin-top: 2rem;
            }
        }

        .cta-color,
        .cta-color input,
        .cta-color .link_text {
            //font-size: 1.1rem;
            text-decoration: none;
        }

        .cta-color .link_wrap {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            //border-bottom: 1px solid #333333;
            margin-bottom: 1rem;
            .arrow-prev {
                position: relative;
                display: inline-block;
                transform: translate(0);
                transition: transform .3s ease-in-out;

            }
            &:hover .arrow-prev {
                transform: translate(-5px);
            }

        }
    }
    // Override styles for input
    input[type="submit"],
    input[type="text"],
    input[type="tel"],
    input[type="email"],
    input[type="date"] {
        -webkit-appearance: none;
        border: 0;
        border-radius: 6px;
        padding: 12px;
        background-color:#F4F7F8;
        width: 100%;
        &::placeholder {
            font-size: .8rem;
        }
    }


    input[type="submit"] {
        cursor: pointer;
        position: relative;
        width: 100px;
        font-size:14px ;
        background: none;
        color: #ffffff;
        background: #007BFF;

        &:hover,
        &:focus {
            box-shadow: unset;
            transform: none;
        }

        &::after {
            content: "";
            display: block;
            position: absolute;
            right: 0;
            top: 50%;
            border-radius: 50px;
            border: 1px solid ;
            height: 25px;
            width: 25px;
            margin-top: -14px;
            pointer-events: none;
            transition: all 0.33s cubic-bezier(0.12, 0.75, 0.4, 1);
        }
    }

    &-btn input {
        color: #ffffff;
        font-size: 1.2rem;
        font-weight: 800;
        line-height: 1;
        width: fit-content;

    }

    // Transition SLIDE FADE
    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        display: none;
        transition: all .4s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(10px);
        opacity: 0;
    }
}

//btn back

.link_text {
    border: 1px solid #0b8ffc;
    padding: 8px;
    color: #0b8ffc;
    font-size: 14px;
    border-radius: 5px;
}

.button-group {
    display: flex;
    gap: 15px;
    .draft {
        border: 1px solid #0b8ffc;
        padding: 8px;
        color: #0b8ffc !important;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        &:hover {
            color:#0b8ffc !important; ;
        }
    }
    .submit-form {
        border: 1px solid #0b8ffc;
        padding: 8px;
        color: #ffffff;
        font-size: 14px;
        background: #0b8ffc;
        border-radius: 5px;
        cursor: pointer;
    }
}

.congrats {
    background: white;
    color: blue;
    padding: 4rem;
    text-align: center;

    &-subtitle {
        line-height: 1.3;

        strong {
            font-size: 2rem;
        }
    }
}



// follower
.vs-select__options__content {
    .vs-select__option {
        span {
            color:#0b8ffc;
            font-size: 14px;
            margin-top: 2px;
        }
    }
}

/*.vs-select__options {
    background: #f30;
}*/
// Model  select
.vs-select__options.vs-component--primary {
    z-index: 998;
}

textarea {
    width: 100%;
    margin-top: 7px;
    border: none;
    border-radius: 10px;
    &:focus-visible {
        border-radius: 3px;
        outline: none;
    }

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
            border: none;
            width: 100%;
            &::placeholder {
                font-size: 14px !important;
            }
        }
        .v-input-right-2 {
            border-radius: 10px;
            background: #f3f3f3;
            margin-bottom: 10px;
            padding: 12px;
            border: none;
            width: 100%;
            &::placeholder {
                font-size: 14px !important;
            }
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

.form .err-message {
    margin: unset;
    color: #d0211c;
    span {
        color: red !important;
        font-size: 12px;
    }
}

.btn-add-new {
    display: flex;
    justify-content: end;
    padding: 15px;
    span {
        font-size:14px;
        cursor: pointer;
        color: #0b8ffc;
    }
}

.group-input-create-template {
    padding: 15px;
    margin: 4px;
    background: #F4F7F8;
    border-radius: 10px;

    .add-new-template .Add-new {
        color: #0b8ffc !important;
        font-size: 14px;
    }
    .vs-select-content {
    }

    .role-check {
        display: flex;
        gap: 10px;
        padding: 5px;
    }

}

.vs-select__input {
    font-size: 14px !important;
}
</style>

