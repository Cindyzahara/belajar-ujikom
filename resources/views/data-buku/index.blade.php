@extends('template_back.content')

@section('content')
    <!-- row -->
    <div class="row row-sm ">
        <div class="col-md-12 col-xl-12">
            <div class="card overflow-hidden review-project">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10">All Projects</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-3">A project is an activity to meet the creation of a unique product or service and thus activities that are undertaken to accomplish routine activities cannot be considered projects. <a href="">Learn more</a></p>
                    <div class="table-responsive mb-0">
                        <table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped ">
                            <thead>
                                <tr>
                                    <th>Project</th>
                                    <th>Team Members</th>
                                    <th>Categorie</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="project-contain">
                                            <h6 class="mb-1 tx-13">Angular Project</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/11.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/12.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/2.jpg"></div>
                                    </td>
                                    <td>Web Design</td>
                                    <td>01 Jan 2020</td>
                                    <td><span class="badge bg-primary-gradient">Ongoing</span></td>
                                    <td>15 March 2020</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="project-contain">
                                            <h6 class="mb-1 tx-13">PHP Project</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/16.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/8.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/7.jpg"></div>
                                    </td>
                                    <td>Web Development</td>
                                    <td>03 March 2020</td>
                                    <td><span class="badge bg-success-gradient">Ongoing</span></td>
                                    <td>15 Jun 2020</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="project-contain">
                                            <h6 class="mb-1 tx-13">Python</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/3.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/12.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/15.jpg"></div>
                                    </td>
                                    <td>Web Development</td>
                                    <td>15 March 2020</td>
                                    <td><span class="badge bg-danger-gradient">Pending</span></td>
                                    <td>15 March 2020</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="project-contain">
                                            <h6 class="mb-1 tx-13">Android App</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/7.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/6.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/16.jpg"></div>
                                    </td>
                                    <td>Android</td>
                                    <td>15 March 2020</td>
                                    <td><span class="badge bg-success-gradient">Ongoing</span></td>
                                    <td>15 March 2020</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="project-contain">
                                            <h6 class="mb-1 tx-13">Mobile Application</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/8.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/11.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/15.jpg"></div>
                                    </td>
                                    <td>Android</td>
                                    <td>15 March 2020</td>
                                    <td><span class="badge bg-pink-gradient">Ongoing</span></td>
                                    <td>15 March 2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->