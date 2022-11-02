<template>
    <section class="table-template">
        <section class="recent">
            <div class="v-activity-grid">
                <div class="activity-card">
                    <div class="nav-setting m-3">
                        <div class="button-setting">
                            <span>
                                <i class='bx bxs-chevron-left'></i>
                            </span>
                            <span>
                                <i class='bx bxs-chevron-right' ></i>
                            </span>
                        </div>
                        <div class="button-detail">
                            <span>Widthdraw</span>
                        </div>
                        <div class="button-detail">
                            <span>Widthdraw</span>
                        </div>
                        <div class="button-detail">
                            <span>Widthdraw</span>
                        </div>
                    </div>
                    <hr>
                    <h4>General Information</h4>
                    <div class="table-responsive-detail">
                        <table  class="table-responsive">
                            <tbody>
                                <tr>
                                    <th>Approval Title</th>
                                    <td>Đề xuất tăng lương giảm giờ làm</td>
                                </tr>
                                <tr>
                                    <th>Creator</th>
                                    <td>Hai nv</td>
                                </tr>
                                <tr>
                                    <th>Content</th>
                                    <td>Đề xuất tăng lương giảm giờ làm</td>
                                </tr>
                                <tr>
                                    <th>Workflow</th>
                                    <td>Hai nv 198</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>Processing</td>
                                </tr>
                                <tr>
                                    <th>Due Date:</th>
                                    <td>11/1/2011</td>
                                </tr>
                                <tr>
                                    <th>Reason:</th>
                                    <td>Phục vụ công việc</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <h4>Information Field</h4>
                    <div class="detail-request">
                        <p class="mt-2 mb-2">Full name</p>
                        <div class="name-detail">
                            <span>Nguyễn Văn Hải</span>
                        </div>
                    </div>
                    <div class="detail-request">
                        <p class="mt-2 mb-2">Time Application</p>
                        <div class="name-detail">
                            <span>22:10:00</span>
                            <i class='bx bx-alarm'></i>
                        </div>
                    </div>
                    <div class="detail-request">
                        <p class="mt-2 mb-2">Date Application</p>
                        <div class="name-detail">
                            <span>1/1/2100</span>
                            <i class='bx bxs-calendar-event'></i>
                        </div>
                    </div>
                    <div class="detail-request">
                        <p class="mt-2 mb-2">Role</p>
                        <div class="role-detail">
                            <p>
                                <input type="checkbox"> Team lead
                            </p>
                            <p>
                                <input type="checkbox"> Department Manager
                            </p>
                            <p>
                                <input type="checkbox"> General Manager
                            </p>
                        </div>
                    </div>
                    <div class="detail-request">
                        <p class="mt-2 mb-2">Role</p>
                        <div class="role-detail">
                            <p>
                                <input type="radio" name="1"> Team lead
                            </p>
                            <p>
                                <input type="radio" name="1"> Department Manager
                            </p>
                            <p>
                                <input type="radio" name="1"> General Manager
                            </p>
                        </div>
                    </div>
                    <div class="detail-request">
                        <p class="mt-2 mb-2">Upload attachment</p>

                        <div class="upload-detail">
                            <a >
                                <span>Download All</span>
                            </a>
                            <hr>
                            <div class="download-detail">
                                <span>Metting Booking Download</span>
                                <i class='bx bx-download' ></i>
                            </div>
                            <div class="download-detail">
                                <span>Metting Booking Download</span>
                                <i class='bx bx-download' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="summary">
                    <div class="bday-card">
                        <div class="card-approver">
                            <h5>Approver</h5>
                            <div class="card-info">
                                <img src="../image/cute.jpg" alt="E-Approval" width="30">
                                <span>Nguyễn Văn Hải</span>
                            </div>
                        </div>
                        <div class="card-approver">
                            <h5>Follower</h5>
                            <div class="card-info mb-2">
                                <img src="../image/cute.jpg" alt="E-Approval" width="30">
                                <span>Nguyễn Văn Hải</span>
                            </div>
                            <div class="card-info mb-2">
                                <img src="../image/cute.jpg" alt="E-Approval" width="30">
                                <span>Nguyễn Văn Hải</span>
                            </div>
                        </div>
                        <div class="card-approver">
                            <h5>Process</h5>
                            <div class="approver-process">
                                <div class="timeline-block timeline-block-right">
                                    <div class="marker active">
                                        <i class='bx bx-check' aria-hidden="true"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <span>Draft</span>
                                    </div>
                                </div>
                                <div class="timeline-block timeline-block-right active">
                                    <div class="marker active">
                                        <i class='bx bx-check'></i>
                                    </div>
                                    <div class="timeline-content">

                                        <span>Processing</span>
                                    </div>
                                </div>
                                <div class="timeline-block timeline-block-left">
                                    <div class="marker">
                                        3
<!--                                        <i class='bx bx-check' aria-hidden="true"></i>-->
                                    </div>
                                    <div class="timeline-content">
                                        <span>Result</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-approver">
                            <h5>Activities</h5>
                            <div class="activities-item">
                                <ul>
                                    <li><span>1/1/2100</span></li>
                                    <li><b>Nguyen Van Hai</b></li>
                                    <li><span>Created this request</span></li>
                                </ul>
                            </div>
                            <div class="activities-item">
                                <ul>
                                    <li><span>1/1/2100</span></li>
                                    <li><b>Nguyen Van Hai</b></li>
                                    <li><span>Created this request</span></li>
                                </ul>
                            </div>
                            <div class="activities-item">
                                <ul>
                                    <li><span>1/1/2100</span></li>
                                    <li><b>Nguyen Van Hai</b></li>
                                    <li><span>Created this request</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</template>

<script>
export default {
    name: "RequestDetail"
}
</script>

<style scoped>

</style>
