<template>
    <section class="table-template">
        <div class="view-detail">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
                    <div class="button-create-edit mr-1">
                        <a data-toggle="modal" data-target="#exampleModalCenter" >
                            Draft
                        </a>
                    </div>

                    <div class="button-create-submit">
                        <a data-toggle="modal" data-target="#exampleModalCenter" >
                            Submit
                        </a>
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
                            placeholder="Answer"
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

                <div class="detail-content">
                    <label class="p-2 mt-3">Content</label>
                    <div class="input-detail-select">
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
                                <span class="toggle d-flex flex-column justify-content-center" >
                                    <i v-if="status" class='bx bx-chevron-down' ></i>
                                    <i v-else class='bx bx-chevron-up'></i>
                                </span>
                            </div>
                            <div class="options" v-if="focused">
                                <ul>
                                    <li v-for="option in options"
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
                </div>

                <div class="detail-title">
                    <label class="p-2 mt-3">Approver</label><span>*</span>
                    <div class="detail-approver">
                        <div class="row input-filter">
<!--                            <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                <div class="dropdown-component">
                                    <label for="btn" class="button">Drop down
                                        <span>
                                            <i class='bx bx-chevron-down'></i>
                                        </span>
                                    </label>
                                    <input type="checkbox" id="btn">
                                    <ul class="menu">
                                        <li>
                                            <label for="btn-2" class="first">Features
                                                <span>
                                                    <i class='bx bx-chevron-down'></i>
                                                </span>
                                            </label>
                                            <input type="checkbox" id="btn-2">
                                            <ul>
                                                <li><a href="#">Pages</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <label for="btn-3" class="second">Services
                                                <span>
                                                    <i class='bx bx-chevron-down'></i>
                                                </span>
                                            </label>
                                            <input type="checkbox" id="btn-3">
                                            <ul>
                                                <li><a href="#">Web Design</a></li>
                                                <li><a href="#">App Design</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="input-filter-result col-sm-6 col-md-6 col-lg-6">
                                <div class="select-box">
                                    <div class="options-container">
                                        <div class="option">
                                            <input
                                                type="radio"
                                                class="radio"
                                                id="automobiles"
                                                name="category"
                                            />
                                            <label for="automobiles">Select organization</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="film" name="category" />
                                            <label for="film">Film & Animation</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="science" name="category" />
                                            <label for="science">Science & Technology</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="art" name="category" />
                                            <label for="art">Art</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="music" name="category" />
                                            <label for="music">Music</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="travel" name="category" />
                                            <label for="travel">Travel & Events</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="sports" name="category" />
                                            <label for="sports">Sports</label>
                                        </div>
                                    </div>

                                    <div class="selected">
                                        Select organization
                                    </div>

                                </div>
                            </div>-->
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
                        <div class="add-new-template m-3 d-flex justify-content-end">
                            <span class="detail-approver-add">
                                <i class='bx bx-plus-circle'></i> Add new checkbox
                            </span>
                        </div>
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Follower</label> <span>*</span>
                    <div class="input-detail">
                        <input
                            type="text"
                            autocomplete="customer.firstName"
                            placeholder="Enter Description"
                            required
                        />
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Processing Time</label><span>*</span>
                    <div class="p-0 input-filter-result col-sm-12 col-md-12 col-lg-12">
                        <select name="" id="">
                            <option value="">Selection processing time</option>
                            <option value="">1 Hours</option>
                            <option value="">2 Hours</option>
                            <option value="">3 Hours</option>
                            <option value="">4 Hours</option>
                        </select>
                    </div>
                </div>
                <div class="detail-title">
                    <label class="p-2 mt-3">Minimum Approval</label><span>*</span>
                    <div class="p-0 input-filter-result col-sm-12 col-md-12 col-lg-12">
                        <select name="" id="">
                            <option value="">None</option>
                            <option value="">1 Hours</option>
                            <option value="">2 Hours</option>
                            <option value="">3 Hours</option>
                            <option value="">4 Hours</option>
                        </select>
                    </div>
<!--                    <select class="form-control select2" data-toggle="select2">
                        <option>Select</option>
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                    </select>-->
                </div>
                <h5 class="mt-4"> Information Field</h5>
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
                                                    <i class='bx bx-plus-circle'></i> Add Approval
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
        </div>
    </section>
</template>

<script>
export default {
    name: "UpdateTemplate",
    data() {
        return {
            uploadedFileName: null,
            SelectOrganization:'',
            SelectApprover:'',
            follower:'',
            workflow:'',
            ProcessingTime:'',
            Minimum:'',

            option:true,
            status:true,
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

        onFileChange() {
            document.getElementById('real-file').click();
        },
        fileName(e){
            this.uploadedFileName = e.target.value;
        },
        deleteFile() {
            this.uploadedFileName = null;
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

    },

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
