<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datepicker/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">

</head>

<body>
    <!-- Multi select box -->
    <style>
        .modal .choices__inner {
            border: 1px solid #e0e0e0;
        }

        .choices__inner {
            display: inline-block;
            vertical-align: top;
            width: 100%;
            background-color: #fff;
            padding: 0.3rem 0.5rem;
            border: 1px solid #ebebeb;
            border-radius: 0px;
            font-size: 14px;
            min-height: 18px;
        }

        .choices {
            position: relative;
            margin-bottom: 0px;
        }

        .choices__input {
            display: inline-block;
            vertical-align: baseline;
            background-color: #fff;
            font-size: 13px;
            margin-bottom: 0px !important;
            border: 0;
            border-radius: 0;
            width: 100% !important;
            padding: 0px;
        }

        .choices__list--multiple .choices__item {
            display: inline-block;
            vertical-align: middle;
            border-radius: 39px;
            padding: 3px 9px;
            font-size: 11px;
            font-weight: 500;
            margin-right: 3.75px;
            margin-bottom: 3.75px;
            background-color: #3b65ef;
            border: 1px solid #3b65ef;
            color: #fff;
            word-break: break-all;
        }

        .choices[data-type*=select-multiple] .choices__button,
        .choices[data-type*=text] .choices__button {
            position: relative;
            display: inline-block;
            margin: 0 -4px 0 8px;
            padding-left: 16px;
            border-left: 1px solid #6e8ef9;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==);
            background-size: 8px;
            width: 8px;
            line-height: 1;
            opacity: .75;
            border-radius: 0;
        }

        .choices__list--dropdown .choices__item {
            position: relative;
            padding: 0.3rem 0.5rem;
            font-size: 12.5px;
            color: #666;
        }

        .choices__list--dropdown {
            border: 1px solid #ebebeb;
        }

        .is-open .choices__list--dropdown {
            border-color: #ebebeb;
        }

        .choices__list--dropdown {
            z-index: 10000;
        }
    </style>

    <?php include 'loader.php';?>
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex align-items-center">
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="">
                            </span>
                        </a>
                    </div>

                </div>
                <?php include 'options-buttons.php'; ?>

            </div>
        </header>

        <div class="page-content">

            <div class="container-fluid px-0">


                <div class="top-bar-main">
                    <div class="col-12">
                        <div class="top-bar d-flex justify-content-between align-items-center">
                            <div class="hd-title-bx">
                                <i class="fa-regular fa-folder"></i>
                                <div class="hd-title">
                                    <h2>Documents</h2>
                                    <ul class="breadcrump">
                                        <li><a href="#">Home <span>/</span></a></li>
                                        <li><a href="#">Documents</a></li>
                                    </ul>
                                </div>

                            </div>


                            <div class="d-flex flex-wrap gap-3 event-btns ">
                                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary bg-1" data-bs-toggle="modal"
                                        data-bs-target="#create-folder"><i
                                            class="fas fa-folder-open"></i>+Folder</button>
                                    <a href="modify.php"><button type="button" class="btn btn-outline-primary bg-2"><i
                                                class="fas fa-users-cog"></i></i>Modify</button></a>
                                    <!-- <button type="button" class="btn btn-outline-primary bg-3" data-bs-toggle="modal"
                                        data-bs-target="#colum-modal"><i
                                            class="fa-solid fa-table-columns"></i>Columns</button> -->
                                    <a href="meta.php"><button type="button" class="btn btn-outline-primary clr4"><i
                                                class="fa-solid fa-tag"></i>Meta</button></a>
                                    <button type="button" class="btn btn-outline-primary clr5" data-bs-toggle="modal"
                                        data-bs-target="#retention-modal"><i
                                            class="far fa-folder"></i>Retention</button>
                                    <button type="button" class="btn btn-outline-primary clr6" data-bs-toggle="modal"
                                        data-bs-target="#workflow-modal"><i
                                            class="fa-solid fa-handshake"></i>Workflow</button>
                                    <a href="audit-log.php"><button type="button"
                                            class="btn btn-outline-primary clr7"><i class="far fa-sticky-note"></i>Audit
                                            Log</button></a>
                                    <button type="button" class="btn btn-outline-primary bg-3" data-bs-toggle="modal"
                                        data-bs-target="#numbering-modal"><i
                                            class="fas fa-list-ol"></i>Numbering</button>

                                </div>
                            </div>




                            <div class="d-flex rightside-btns">

                                <div class="input-group search-inpt">
                                    <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i></div>
                                    <input type="text" class="form-control border-start-0 ps-0"
                                        id="inlineFormInputGroupUsername" placeholder="Search this list ">
                                    <div class="dropdown drpdwn-fg">
                                        <button type="button"
                                            class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                            id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                                            data-mdb-auto-close="outside">
                                            <i class="bx bx-filter-alt"></i>

                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown"
                                            aria-labelledby="dropdownMenuButton">
                                            <div class="dropdown-row">
                                                <div class="col-md-4 border-right px-0">
                                                    <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>My
                                                                Events</a></span>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>Upcoming/Running</span></a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>Published</span></a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                            Stage <i class="fas fa-angle-right arrow"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-submenu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Live
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Drafts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Past
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Cancelled
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    All
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Trash
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                            Start Date <i class="fas fa-angle-right arrow"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-submenu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="reg-date w-100">
                                                                        <label for="">Date</label>
                                                                        <input type="date" class="form-control-sm">
                                                                    </div>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>Archived</span></a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                            Add Custom Filter <i class="fas fa-angle-right arrow"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-submenu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="reg-date w-100">
                                                                        <input type="text" class="form-control-sm"
                                                                            placeholder="Type here">

                                                                    </div>

                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Apply</button>

                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>


                                                </div>
                                                <div class="col-md-4 border-right px-0">
                                                    <h3><i class="bx bxs-layer"></i>Group By</h3>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>Responsible</a></span>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>Template</span></a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>Stage</span></a>
                                                    </li>

                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                            Start Date <i class="fas fa-angle-right arrow"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-submenu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="reg-date w-100">
                                                                        <label for="">Date</label>
                                                                        <input type="date" class="form-control-sm">
                                                                    </div>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>

                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                            Add Custom Group <i class="fas fa-angle-right arrow"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-submenu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Company
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Country
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Created by
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Created on
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </div>
                                                <div class="col-md-4 px-0">
                                                    <h3><i class="bx bxs-star fav"></i>Favorites</h3>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>My
                                                                Events</a></span>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item" href="#"><span><i
                                                                    class="fas fa-check me-2"></i>Upcoming
                                                                Events</span></a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <li>
                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                            Save current search <i class="fas fa-angle-right arrow"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-submenu"
                                                            style="margin-top: 40px;left: auto;width: 100%;">
                                                            <li>
                                                                <a class="dropdown-item" href="#">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheck1">
                                                                        <label class="form-check-label"
                                                                            for="formCheck1">
                                                                            Default filter
                                                                        </label>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheck1">
                                                                        <label class="form-check-label"
                                                                            for="formCheck1">
                                                                            Shared
                                                                        </label>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                                                                </a>
                                                            </li>


                                                        </ul>
                                                    </li>
                                                </div>
                                            </div>

                                        </ul>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <hr class="topbar-bottomline">

                    </div>
                </div>

            </div>


            <div class="main-content-div">
                <div class="leftside-menu">
                    <!-- <h4><i class="fa-regular fa-folder"></i> Workspace</h4> -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#nav1" role="tab"
                                aria-selected="true">
                                <span>Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#nav2" role="tab" aria-selected="false"
                                tabindex="-1">
                                <span>Team Work</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#nav3" role="tab" aria-selected="false"
                                tabindex="-1">
                                <span>Project</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#nav4" role="tab" aria-selected="false"
                                tabindex="-1">
                                <span>Partners</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#nav5" role="tab" aria-selected="false"
                                tabindex="-1">
                                <span>Accounting</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#nav6" role="tab" aria-selected="false"
                                tabindex="-1">
                                <span>Human Resources</span>
                            </a>
                        </li>

                    </ul>
                    <button type="button" class="btn btn-create-new br-50 small" data-bs-toggle="modal"
                        data-bs-target="#create-section">
                        <i class="bx bx-plus-circle"></i>Create new section
                    </button>
                </div>


                <div class="rightside-menu">

                    <div class="tab-content">
                        <div class="tab-pane active" id="nav1" role="tabpanel">

                            <div class="file-detail-tab">
                                <div class="row h-100">
                                    <div class="col-md-12">
                                        <div class="right-side-topbar file-detail-topbar align-items-center">
                                            <div class="file-detail-header">
                                                <img src="assets/images/doc/file.png" alt="">
                                                <div class="file-detail-header-title">
                                                    <h4>Default metadata fields for files in folder "Inbox"</h4>
                                                    <ul class="breadcrump">
                                                        <li><a href="#">Documents <span>/</span></a></li>
                                                        <li><a href="#">Inbox</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                onclick="importData()">
                                                Upload
                                            </button>


                                        </div>

                                        <div class="audit-header">
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                data-bs-toggle="modal" data-bs-target="#add-meta">
                                                Add
                                            </button>
                                            <div class="row-selected me-0" style="display: none;">
                                                <button type="button" class="btn btn-light selected-num me-1">
                                                    <span>8</span>Selected<i class="bx bx-x"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-cog me-1"></i>Actions</button>
                                                    <div class="dropdown-menu dropdown-menu-sm">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fas fa-download me-2"
                                                                aria-hidden="true"></i>Edit</a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="bx bxs-trash-alt me-2"
                                                                aria-hidden="true"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="audit-table-overflow">
                                            <table id="event-table" class="table table-resizable table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="46px"><input class="form-check-input "
                                                                type="checkbox" name="Main_Checkbox"
                                                                id="selectAll"><span class="resize"></span>
                                                        </th>
                                                        <th>Name<span class="resize"></span></th>
                                                        <th width="100px">Required<span class="resize"></span></th>
                                                        <th width="100px">Recursive<span class="resize"></span></th>
                                                        <th>Include<span class="resize"></span></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-check-input check-input" type="checkbox"
                                                                id="formCheck1"><span class="resize"></span></td>
                                                        <td>Accounting <span class="resize"></span></td>
                                                        <td>
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="formRadio31" id="formRadio31" checked
                                                                    disabled></div>
                                                            <span class="resize"></span>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="formRadio32" id="formRadio32" disabled></div>
                                                            <span class="resize"></span>
                                                        </td>
                                                        <td>
                                                            <div><span>Files, </span><span>Links,
                                                                </span><span>Folders</span></div><span class="resize">
                                                                </span</td> </tr> <tr>
                                                        <td><input class="form-check-input check-input" type="checkbox"
                                                                id="formCheck1"><span class="resize"></span></td>
                                                        <td>Human Resources <span class="resize"></span></td>
                                                        <td>
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="formRadio33" id="formRadio33" disabled></div>
                                                            <span class="resize"></span>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="formRadio34" id="formRadio34" checked
                                                                    disabled></div>
                                                            <span class="resize"></span>
                                                        </td>
                                                        <td>
                                                            <div><span>Files, </span><span>Links,
                                                                </span><span>Folders</span></div><span class="resize">
                                                                </span</td> </tr> <tr>
                                                        <td><input class="form-check-input check-input" type="checkbox"
                                                                id="formCheck1"><span class="resize"></span></td>
                                                        <td>Projects <span class="resize"></span></td>
                                                        <td>
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="formRadio35" id="formRadio35" checked
                                                                    disabled></div>
                                                            <span class="resize"></span>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="formRadio36" id="formRadio36" disabled></div>
                                                            <span class="resize"></span>
                                                        </td>
                                                        <td>
                                                            <div><span>Files, </span><span>Links,
                                                                </span><span>Folders</span></div><span class="resize">
                                                                </span</td> </tr> </tbody> </table> </div> </div> </div>
                                                                    </div> </div> <div class="tab-pane" id="nav2"
                                                                    role="tabpanel">
                                                                <div class="right-side-topbar">
                                                                    <button type="button"
                                                                        class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                                        onclick="importData()">
                                                                        Upload
                                                                    </button>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="row-selected"
                                                                            style="display: none;">
                                                                            <button type="button"
                                                                                class="btn btn-light selected-num me-1">
                                                                                <span>8</span>Selected<i
                                                                                    class="bx bx-x"></i>
                                                                            </button>
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-primary dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="fas fa-cog me-1"></i>Actions</button>
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="#"><i
                                                                                            class="fas fa-download me-2"
                                                                                            aria-hidden="true"></i>Export</a>
                                                                                    <div class="dropdown-divider"></div>
                                                                                    <a class="dropdown-item" href="#"><i
                                                                                            class="bx bxs-archive-in me-2"
                                                                                            aria-hidden="true"></i>Archive</a>
                                                                                    <div class="dropdown-divider"></div>
                                                                                    <a class="dropdown-item" href="#"><i
                                                                                            class="bx bxs-archive-out me-2"
                                                                                            aria-hidden="true"></i>Unarchive</a>
                                                                                    <div class="dropdown-divider"></div>
                                                                                    <a class="dropdown-item" href="#"><i
                                                                                            class="bx bxs-trash-alt me-2"
                                                                                            aria-hidden="true"></i>Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="nav nav-pills event-tab-nav"
                                                                            role="tablist">

                                                                            <li class="nav-item waves-effect waves-light"
                                                                                role="presentation">
                                                                                <a class="nav-link active"
                                                                                    data-bs-toggle="tab"
                                                                                    href="#doc-list-tab1" role="tab"
                                                                                    aria-selected="false" tabindex="-1">
                                                                                    <button type="button"
                                                                                        class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="bottom"
                                                                                        title="List">
                                                                                        <svg width="16" height="16"
                                                                                            viewBox="0 0 25 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M8.5 6H21.5"
                                                                                                stroke="black"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path d="M8.5 12H21.5"
                                                                                                stroke="black"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path d="M8.5 18H21.5"
                                                                                                stroke="black"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path d="M3.5 6H3.51"
                                                                                                stroke="black"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path d="M3.5 12H3.51"
                                                                                                stroke="black"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path d="M3.5 18H3.51"
                                                                                                stroke="black"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                        </svg>

                                                                                    </button>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item waves-effect waves-light"
                                                                                role="presentation">
                                                                                <a class="nav-link" data-bs-toggle="tab"
                                                                                    href="#doc-grid-tab1" role="tab"
                                                                                    aria-selected="false" tabindex="-1">
                                                                                    <button type="button"
                                                                                        class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="bottom"
                                                                                        title="Grid">
                                                                                        <svg width="14" height="14"
                                                                                            viewBox="0 0 21 20"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z"
                                                                                                stroke="black"
                                                                                                stroke-width="1.4"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path
                                                                                                d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                                                                stroke="black"
                                                                                                stroke-width="1.4"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path
                                                                                                d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                                                                stroke="black"
                                                                                                stroke-width="1.4"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path
                                                                                                d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z"
                                                                                                stroke="black"
                                                                                                stroke-width="1.4"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                        </svg>

                                                                                    </button>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="doc-list-tab1"
                                                                        role="tabpanel">
                                                                        <div class="event-table">
                                                                            <table id="event-table"
                                                                                class="table table-resizable table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th width="46px"><input
                                                                                                class="form-check-input "
                                                                                                type="checkbox"
                                                                                                name="Main_Checkbox"
                                                                                                id="selectAll"><span
                                                                                                class="resize"></span>
                                                                                        </th>
                                                                                        <th>Name<span
                                                                                                class="resize"></span>
                                                                                        </th>
                                                                                        <th>Tags<span
                                                                                                class="resize"></span>
                                                                                        </th>
                                                                                        <th>Owner<span
                                                                                                class="resize"></span>
                                                                                        </th>
                                                                                        <th>Type<span
                                                                                                class="resize"></span>
                                                                                        </th>
                                                                                        <th>Created On<span
                                                                                                class="resize"></span>
                                                                                        </th>
                                                                                        <th></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td><input
                                                                                                class="form-check-input check-input"
                                                                                                type="checkbox"
                                                                                                id="formCheck1"><span
                                                                                                class="resize"></span>
                                                                                        </td>
                                                                                        <td><a href="#"
                                                                                                class="link-color"><i
                                                                                                    class="fa-regular fa-folder folder-icn"></i>Arabic_Folder</a><span
                                                                                                class="resize"></span>
                                                                                        </td>

                                                                                        <td class="tag-dov"> <span
                                                                                                class="inbox">Inbox</span>
                                                                                            <span
                                                                                                class="validated">Validated</span>
                                                                                        </td>
                                                                                        <td>Arshad</td>
                                                                                        <td>PNG</td>
                                                                                        <td>07/30/2023</td>
                                                                                        <td class="td-overflow">
                                                                                            <div
                                                                                                class="file-tbl-btns float-right">
                                                                                                <i
                                                                                                    class="fa-solid fa-share"></i>
                                                                                                <i
                                                                                                    class="fa-solid fa-download"></i>

                                                                                                <div class="dropdown">
                                                                                                    <a href="#"
                                                                                                        class="dropdown-toggle"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">
                                                                                                        <i
                                                                                                            class="fa-solid fa-gear"></i></a>
                                                                                                    <div
                                                                                                        class="dropdown-menu dropdown-menu-sm">
                                                                                                        <a class="dropdown-item"
                                                                                                            href="conference.php">Edit</a>
                                                                                                        <a class="dropdown-item"
                                                                                                            href="#"
                                                                                                            data-bs-toggle="modal"
                                                                                                            data-bs-target="#trash-popup">Trash</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <span class="resize"></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><input
                                                                                                class="form-check-input check-input"
                                                                                                type="checkbox"
                                                                                                id="formCheck1"><span
                                                                                                class="resize"></span>
                                                                                        </td>
                                                                                        <td><a href="#"
                                                                                                class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                                                class="resize"></span>
                                                                                        </td>


                                                                                        <td class="tag-dov"> <span
                                                                                                class="inbox">Inbox</span>
                                                                                            <span
                                                                                                class="validated">Validated</span>
                                                                                        </td>
                                                                                        <td>Arshad</td>
                                                                                        <td>SVG</td>
                                                                                        <td>07/30/2023</td>
                                                                                        <td class="td-overflow">
                                                                                            <div
                                                                                                class="file-tbl-btns float-right">
                                                                                                <i
                                                                                                    class="fa-solid fa-share"></i>
                                                                                                <i
                                                                                                    class="fa-solid fa-download"></i>

                                                                                                <div class="dropdown">
                                                                                                    <a href="#"
                                                                                                        class="dropdown-toggle"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">
                                                                                                        <i
                                                                                                            class="fa-solid fa-gear"></i></a>
                                                                                                    <div
                                                                                                        class="dropdown-menu dropdown-menu-sm">
                                                                                                        <a class="dropdown-item"
                                                                                                            href="conference.php">Edit</a>
                                                                                                        <a class="dropdown-item"
                                                                                                            href="#"
                                                                                                            data-bs-toggle="modal"
                                                                                                            data-bs-target="#trash-popup">Trash</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <span class="resize"></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><input
                                                                                                class="form-check-input check-input"
                                                                                                type="checkbox"
                                                                                                id="formCheck1"><span
                                                                                                class="resize"></span>
                                                                                        </td>
                                                                                        <td><a href="#"
                                                                                                class="link-color">white_background.png</a><span
                                                                                                class="resize"></span>
                                                                                        </td>


                                                                                        <td class="tag-dov"> <span
                                                                                                class="inbox">Inbox</span>
                                                                                            <span class="tovalidated">To
                                                                                                Validated</span>
                                                                                        </td>
                                                                                        <td>Arshad</td>
                                                                                        <td>PNG</td>
                                                                                        <td>07/30/2023</td>
                                                                                        <td class="td-overflow">
                                                                                            <div
                                                                                                class="file-tbl-btns float-right">
                                                                                                <i
                                                                                                    class="fa-solid fa-share"></i>
                                                                                                <i
                                                                                                    class="fa-solid fa-download"></i>

                                                                                                <div class="dropdown">
                                                                                                    <a href="#"
                                                                                                        class="dropdown-toggle"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">
                                                                                                        <i
                                                                                                            class="fa-solid fa-gear"></i></a>
                                                                                                    <div
                                                                                                        class="dropdown-menu dropdown-menu-sm">
                                                                                                        <a class="dropdown-item"
                                                                                                            href="conference.php">Edit</a>
                                                                                                        <a class="dropdown-item"
                                                                                                            href="#"
                                                                                                            data-bs-toggle="modal"
                                                                                                            data-bs-target="#trash-popup">Trash</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <span class="resize"></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><input
                                                                                                class="form-check-input check-input"
                                                                                                type="checkbox"
                                                                                                id="formCheck1"><span
                                                                                                class="resize"></span>
                                                                                        </td>
                                                                                        <td><a href="#"
                                                                                                class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                                                class="resize"></span>
                                                                                        </td>


                                                                                        <td class="tag-dov"> <span
                                                                                                class="inbox">Inbox</span>
                                                                                            <span class="tovalidated">To
                                                                                                Validated</span>
                                                                                        </td>
                                                                                        <td>Arshad</td>
                                                                                        <td>SVG</td>
                                                                                        <td>07/30/2023</td>
                                                                                        <td class="td-overflow">
                                                                                            <div
                                                                                                class="file-tbl-btns float-right">
                                                                                                <i
                                                                                                    class="fa-solid fa-share"></i>
                                                                                                <i
                                                                                                    class="fa-solid fa-download"></i>

                                                                                                <div class="dropdown">
                                                                                                    <a href="#"
                                                                                                        class="dropdown-toggle"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">
                                                                                                        <i
                                                                                                            class="fa-solid fa-gear"></i></a>
                                                                                                    <div
                                                                                                        class="dropdown-menu dropdown-menu-sm">
                                                                                                        <a class="dropdown-item"
                                                                                                            href="conference.php">Edit</a>
                                                                                                        <a class="dropdown-item"
                                                                                                            href="#"
                                                                                                            data-bs-toggle="modal"
                                                                                                            data-bs-target="#trash-popup">Trash</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <span class="resize"></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><input
                                                                                                class="form-check-input check-input"
                                                                                                type="checkbox"
                                                                                                id="formCheck1"><span
                                                                                                class="resize"></span>
                                                                                        </td>
                                                                                        <td><a href="#"
                                                                                                class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                                                class="resize"></span>
                                                                                        </td>
                                                                                        <td class="tag-dov"> <span
                                                                                                class="inbox">Inbox</span>
                                                                                            <span
                                                                                                class="validated">Validated</span>
                                                                                        </td>
                                                                                        <td>Arshad</td>
                                                                                        <td>SVG</td>
                                                                                        <td>07/30/2023</td>
                                                                                        <td class="td-overflow">
                                                                                            <div
                                                                                                class="file-tbl-btns float-right">
                                                                                                <i
                                                                                                    class="fa-solid fa-share"></i>
                                                                                                <i
                                                                                                    class="fa-solid fa-download"></i>

                                                                                                <div class="dropdown">
                                                                                                    <a href="#"
                                                                                                        class="dropdown-toggle"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">
                                                                                                        <i
                                                                                                            class="fa-solid fa-gear"></i></a>
                                                                                                    <div
                                                                                                        class="dropdown-menu dropdown-menu-sm">
                                                                                                        <a class="dropdown-item"
                                                                                                            href="conference.php">Edit</a>
                                                                                                        <a class="dropdown-item"
                                                                                                            href="#"
                                                                                                            data-bs-toggle="modal"
                                                                                                            data-bs-target="#trash-popup">Trash</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <span class="resize"></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><input
                                                                                                class="form-check-input check-input"
                                                                                                type="checkbox"
                                                                                                id="formCheck1"><span
                                                                                                class="resize"></span>
                                                                                        </td>
                                                                                        <td><a href="#"
                                                                                                class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                                                class="resize"></span>
                                                                                        </td>

                                                                                        <td class="tag-dov"> <span
                                                                                                class="inbox">Inbox</span>
                                                                                            <span
                                                                                                class="validated">Validated</span>
                                                                                        </td>
                                                                                        <td>Arshad</td>
                                                                                        <td>SVG</td>
                                                                                        <td>07/30/2023</td>
                                                                                        <td class="td-overflow">
                                                                                            <div
                                                                                                class="file-tbl-btns float-right">
                                                                                                <i
                                                                                                    class="fa-solid fa-share"></i>
                                                                                                <i
                                                                                                    class="fa-solid fa-download"></i>

                                                                                                <div class="dropdown">
                                                                                                    <a href="#"
                                                                                                        class="dropdown-toggle"
                                                                                                        data-bs-toggle="dropdown"
                                                                                                        aria-expanded="false">
                                                                                                        <i
                                                                                                            class="fa-solid fa-gear"></i></a>
                                                                                                    <div
                                                                                                        class="dropdown-menu dropdown-menu-sm">
                                                                                                        <a class="dropdown-item"
                                                                                                            href="conference.php">Edit</a>
                                                                                                        <a class="dropdown-item"
                                                                                                            href="#"
                                                                                                            data-bs-toggle="modal"
                                                                                                            data-bs-target="#trash-popup">Trash</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <span class="resize"></span>
                                                                                        </td>
                                                                                    </tr>


                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="doc-grid-tab1"
                                                                        role="tabpanel">
                                                                        <div class="kanban-doc">
                                                                            <div class="row gx-3">
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad1" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="30"
                                                                                                viewBox="0 0 60 61"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>

                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>sample.png</h5>
                                                                                            <h6 class="validated">
                                                                                                Validated</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad2" id="">
                                                                                            </div>
                                                                                            <svg width="32" height="34"
                                                                                                viewBox="0 0 131 136"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>


                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>Conference.php</h5>
                                                                                            <h6 class="inbox">Inbox</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad3" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="34"
                                                                                                viewBox="0 0 96 128"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>Mails_inbox.pdf</h5>
                                                                                            <h6 class="tovalidated">To
                                                                                                Validate</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad4" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="30"
                                                                                                viewBox="0 0 60 61"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>people.jpg</h5>
                                                                                            <h6 class="validated">
                                                                                                Validated</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad5" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="34"
                                                                                                viewBox="0 0 96 128"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>invoice OpenValue.pdf
                                                                                            </h5>
                                                                                            <h6 class="inbox">Inbox</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad6" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="30"
                                                                                                viewBox="0 0 60 61"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>azureinterior.jpg</h5>
                                                                                            <h6 class="tovalidated">To
                                                                                                Validate</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad7" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="34"
                                                                                                viewBox="0 0 96 128"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>sample.pdf</h5>
                                                                                            <h6 class="validated">
                                                                                                Validated</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad8" id="">
                                                                                            </div>
                                                                                            <svg width="32" height="34"
                                                                                                viewBox="0 0 131 136"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>


                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>Conference.php</h5>
                                                                                            <h6 class="validated">
                                                                                                Validated</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad9" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="34"
                                                                                                viewBox="0 0 96 128"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>Mails_inbox.pdf</h5>
                                                                                            <h6 class="tovalidated">To
                                                                                                Validate</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad11" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="30"
                                                                                                viewBox="0 0 60 61"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>people.jpg</h5>
                                                                                            <h6 class="validated">
                                                                                                Validated</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="kanban-bx">
                                                                                        <div class="doc-img">
                                                                                            <div
                                                                                                class="form-check form-radio-success">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="rad12" id="">
                                                                                            </div>
                                                                                            <svg width="30" height="34"
                                                                                                viewBox="0 0 96 128"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                                    fill="#193567" />
                                                                                                <path
                                                                                                    d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                                    fill="#193567" />
                                                                                            </svg>


                                                                                        </div>
                                                                                        <div class="doc-content">
                                                                                            <h5>invoice OpenValue.pdf
                                                                                            </h5>
                                                                                            <h6 class="inbox">Inbox</h6>
                                                                                            <div class="bottom-kandoc">
                                                                                                <p> 07/30/2023</p>
                                                                                                <div><img
                                                                                                        src="assets/images/users/avatar-2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        </div>
                                        <div class="tab-pane" id="nav3" role="tabpanel">
                                            <div class="right-side-topbar">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                    onclick="importData()">
                                                    Upload
                                                </button>
                                                <div class="d-flex align-items-center">
                                                    <div class="row-selected" style="display: none;">
                                                        <button type="button" class="btn btn-light selected-num me-1">
                                                            <span>8</span>Selected<i class="bx bx-x"></i>
                                                        </button>
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                    class="fas fa-cog me-1"></i>Actions</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-download me-2"
                                                                        aria-hidden="true"></i>Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-archive-in me-2"
                                                                        aria-hidden="true"></i>Archive</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-archive-out me-2"
                                                                        aria-hidden="true"></i>Unarchive</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-trash-alt me-2"
                                                                        aria-hidden="true"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-pills event-tab-nav" role="tablist">

                                                        <li class="nav-item waves-effect waves-light"
                                                            role="presentation">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#doc-list-tab2" role="tab" aria-selected="false"
                                                                tabindex="-1">
                                                                <button type="button"
                                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="List">
                                                                    <svg width="16" height="16" viewBox="0 0 25 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.5 6H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 12H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 18H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 6H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 12H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 18H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </button>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item waves-effect waves-light"
                                                            role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#doc-grid-tab2" role="tab" aria-selected="false"
                                                                tabindex="-1">
                                                                <button type="button"
                                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="Grid">
                                                                    <svg width="14" height="14" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </button>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="doc-list-tab2" role="tabpanel">
                                                    <div class="event-table">
                                                        <table id="event-table"
                                                            class="table table-resizable table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th width="46px"><input class="form-check-input "
                                                                            type="checkbox" name="Main_Checkbox"
                                                                            id="selectAll"><span class="resize"></span>
                                                                    </th>
                                                                    <th>Name<span class="resize"></span></th>
                                                                    <th>Tags<span class="resize"></span></th>
                                                                    <th>Owner<span class="resize"></span></th>
                                                                    <th>Type<span class="resize"></span></th>
                                                                    <th>Created On<span class="resize"></span></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">white_background.png</a><span
                                                                            class="resize"></span></td>

                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>PNG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">white_background.png</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="tovalidated">To Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>PNG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="tovalidated">To Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>
                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>

                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="doc-grid-tab2" role="tabpanel">
                                                    <div class="kanban-doc">
                                                        <div class="row gx-3">
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad1" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>

                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>sample.png</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad2" id="">
                                                                        </div>
                                                                        <svg width="32" height="34"
                                                                            viewBox="0 0 131 136" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Conference.php</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad3" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Mails_inbox.pdf</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad4" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>people.jpg</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad5" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>invoice OpenValue.pdf</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad6" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>azureinterior.jpg</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad7" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>sample.pdf</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad8" id="">
                                                                        </div>
                                                                        <svg width="32" height="34"
                                                                            viewBox="0 0 131 136" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Conference.php</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad9" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Mails_inbox.pdf</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad11" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>people.jpg</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad12" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>invoice OpenValue.pdf</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="nav4" role="tabpanel">
                                            <div class="right-side-topbar">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                    onclick="importData()">
                                                    Upload
                                                </button>
                                                <div class="d-flex align-items-center">
                                                    <div class="row-selected" style="display: none;">
                                                        <button type="button" class="btn btn-light selected-num me-1">
                                                            <span>8</span>Selected<i class="bx bx-x"></i>
                                                        </button>
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                    class="fas fa-cog me-1"></i>Actions</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-download me-2"
                                                                        aria-hidden="true"></i>Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-archive-in me-2"
                                                                        aria-hidden="true"></i>Archive</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-archive-out me-2"
                                                                        aria-hidden="true"></i>Unarchive</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-trash-alt me-2"
                                                                        aria-hidden="true"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-pills event-tab-nav" role="tablist">

                                                        <li class="nav-item waves-effect waves-light"
                                                            role="presentation">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#doc-list-tab3" role="tab" aria-selected="false"
                                                                tabindex="-1">
                                                                <button type="button"
                                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="List">
                                                                    <svg width="16" height="16" viewBox="0 0 25 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.5 6H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 12H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 18H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 6H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 12H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 18H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </button>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item waves-effect waves-light"
                                                            role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#doc-grid-tab3" role="tab" aria-selected="false"
                                                                tabindex="-1">
                                                                <button type="button"
                                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="Grid">
                                                                    <svg width="14" height="14" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </button>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="doc-list-tab3" role="tabpanel">
                                                    <div class="event-table">
                                                        <table id="event-table"
                                                            class="table table-resizable table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th width="46px"><input class="form-check-input "
                                                                            type="checkbox" name="Main_Checkbox"
                                                                            id="selectAll"><span class="resize"></span>
                                                                    </th>
                                                                    <th>Name<span class="resize"></span></th>
                                                                    <th>Tags<span class="resize"></span></th>
                                                                    <th>Owner<span class="resize"></span></th>
                                                                    <th>Type<span class="resize"></span></th>
                                                                    <th>Created On<span class="resize"></span></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">white_background.png</a><span
                                                                            class="resize"></span></td>

                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>PNG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">white_background.png</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="tovalidated">To Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>PNG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="tovalidated">To Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>
                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>

                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="doc-grid-tab3" role="tabpanel">
                                                    <div class="kanban-doc">
                                                        <div class="row gx-3">
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad1" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>

                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>sample.png</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad2" id="">
                                                                        </div>
                                                                        <svg width="32" height="34"
                                                                            viewBox="0 0 131 136" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Conference.php</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad3" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Mails_inbox.pdf</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad4" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>people.jpg</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad5" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>invoice OpenValue.pdf</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad6" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>azureinterior.jpg</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad7" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>sample.pdf</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad8" id="">
                                                                        </div>
                                                                        <svg width="32" height="34"
                                                                            viewBox="0 0 131 136" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Conference.php</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad9" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Mails_inbox.pdf</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad11" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>people.jpg</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad12" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>invoice OpenValue.pdf</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="nav5" role="tabpanel">
                                            <div class="right-side-topbar">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                    onclick="importData()">
                                                    Upload
                                                </button>
                                                <div class="d-flex align-items-center">
                                                    <div class="row-selected" style="display: none;">
                                                        <button type="button" class="btn btn-light selected-num me-1">
                                                            <span>8</span>Selected<i class="bx bx-x"></i>
                                                        </button>
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                    class="fas fa-cog me-1"></i>Actions</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-download me-2"
                                                                        aria-hidden="true"></i>Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-archive-in me-2"
                                                                        aria-hidden="true"></i>Archive</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-archive-out me-2"
                                                                        aria-hidden="true"></i>Unarchive</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-trash-alt me-2"
                                                                        aria-hidden="true"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-pills event-tab-nav" role="tablist">

                                                        <li class="nav-item waves-effect waves-light"
                                                            role="presentation">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#doc-list-tab4" role="tab" aria-selected="false"
                                                                tabindex="-1">
                                                                <button type="button"
                                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="List">
                                                                    <svg width="16" height="16" viewBox="0 0 25 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.5 6H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 12H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 18H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 6H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 12H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 18H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </button>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item waves-effect waves-light"
                                                            role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#doc-grid-tab4" role="tab" aria-selected="false"
                                                                tabindex="-1">
                                                                <button type="button"
                                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="Grid">
                                                                    <svg width="14" height="14" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </button>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="doc-list-tab4" role="tabpanel">
                                                    <div class="event-table">
                                                        <table id="event-table"
                                                            class="table table-resizable table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th width="46px"><input class="form-check-input "
                                                                            type="checkbox" name="Main_Checkbox"
                                                                            id="selectAll"><span class="resize"></span>
                                                                    </th>
                                                                    <th>Name<span class="resize"></span></th>
                                                                    <th>Tags<span class="resize"></span></th>
                                                                    <th>Owner<span class="resize"></span></th>
                                                                    <th>Type<span class="resize"></span></th>
                                                                    <th>Created On<span class="resize"></span></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">white_background.png</a><span
                                                                            class="resize"></span></td>

                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>PNG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">white_background.png</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="tovalidated">To Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>PNG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="tovalidated">To Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>
                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>

                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="doc-grid-tab4" role="tabpanel">
                                                    <div class="kanban-doc">
                                                        <div class="row gx-3">
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad1" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>

                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>sample.png</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad2" id="">
                                                                        </div>
                                                                        <svg width="32" height="34"
                                                                            viewBox="0 0 131 136" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Conference.php</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad3" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Mails_inbox.pdf</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad4" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>people.jpg</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad5" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>invoice OpenValue.pdf</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad6" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>azureinterior.jpg</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad7" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>sample.pdf</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad8" id="">
                                                                        </div>
                                                                        <svg width="32" height="34"
                                                                            viewBox="0 0 131 136" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Conference.php</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad9" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Mails_inbox.pdf</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad11" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>people.jpg</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad12" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>invoice OpenValue.pdf</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="nav6" role="tabpanel">
                                            <div class="right-side-topbar">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                    onclick="importData()">
                                                    Upload
                                                </button>
                                                <div class="d-flex align-items-center">
                                                    <div class="row-selected" style="display: none;">
                                                        <button type="button" class="btn btn-light selected-num me-1">
                                                            <span>8</span>Selected<i class="bx bx-x"></i>
                                                        </button>
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                    class="fas fa-cog me-1"></i>Actions</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-download me-2"
                                                                        aria-hidden="true"></i>Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-archive-in me-2"
                                                                        aria-hidden="true"></i>Archive</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-archive-out me-2"
                                                                        aria-hidden="true"></i>Unarchive</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="bx bxs-trash-alt me-2"
                                                                        aria-hidden="true"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-pills event-tab-nav" role="tablist">

                                                        <li class="nav-item waves-effect waves-light"
                                                            role="presentation">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#doc-list-tab5" role="tab" aria-selected="false"
                                                                tabindex="-1">
                                                                <button type="button"
                                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="List">
                                                                    <svg width="16" height="16" viewBox="0 0 25 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.5 6H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 12H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 18H21.5" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 6H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 12H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.5 18H3.51" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </button>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item waves-effect waves-light"
                                                            role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#doc-grid-tab5" role="tab" aria-selected="false"
                                                                tabindex="-1">
                                                                <button type="button"
                                                                    class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="Grid">
                                                                    <svg width="14" height="14" viewBox="0 0 21 20"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z"
                                                                            stroke="black" stroke-width="1.4"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </button>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="doc-list-tab5" role="tabpanel">
                                                    <div class="event-table">
                                                        <table id="event-table"
                                                            class="table table-resizable table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th width="46px"><input class="form-check-input "
                                                                            type="checkbox" name="Main_Checkbox"
                                                                            id="selectAll"><span class="resize"></span>
                                                                    </th>
                                                                    <th>Name<span class="resize"></span></th>
                                                                    <th>Tags<span class="resize"></span></th>
                                                                    <th>Owner<span class="resize"></span></th>
                                                                    <th>Type<span class="resize"></span></th>
                                                                    <th>Created On<span class="resize"></span></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">white_background.png</a><span
                                                                            class="resize"></span></td>

                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>PNG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">white_background.png</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="tovalidated">To Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>PNG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>


                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="tovalidated">To Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>
                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input"
                                                                            type="checkbox" id="formCheck1"><span
                                                                            class="resize"></span></td>
                                                                    <td><a href="#"
                                                                            class="link-color">50px_x_50px_coloured_logo_on_white_background.svg</a><span
                                                                            class="resize"></span></td>

                                                                    <td class="tag-dov"> <span
                                                                            class="inbox">Inbox</span> <span
                                                                            class="validated">Validated</span>
                                                                    </td>
                                                                    <td>Arshad</td>
                                                                    <td>SVG</td>
                                                                    <td>07/30/2023</td>
                                                                    <td class="td-overflow">
                                                                        <div class="file-tbl-btns float-right">
                                                                            <i class="fa-solid fa-share"></i>
                                                                            <i class="fa-solid fa-download"></i>

                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"> <i
                                                                                        class="fa-solid fa-gear"></i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-sm">
                                                                                    <a class="dropdown-item"
                                                                                        href="conference.php">Edit</a>
                                                                                    <a class="dropdown-item" href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#trash-popup">Trash</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="doc-grid-tab5" role="tabpanel">
                                                    <div class="kanban-doc">
                                                        <div class="row gx-3">
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad1" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>

                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>sample.png</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad2" id="">
                                                                        </div>
                                                                        <svg width="32" height="34"
                                                                            viewBox="0 0 131 136" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Conference.php</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad3" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Mails_inbox.pdf</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad4" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>people.jpg</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad5" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>invoice OpenValue.pdf</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad6" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>azureinterior.jpg</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad7" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>sample.pdf</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad8" id="">
                                                                        </div>
                                                                        <svg width="32" height="34"
                                                                            viewBox="0 0 131 136" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M15.3343 63.2044H11.569C5.33062 63.2044 0.273071 68.262 0.273071 74.5003V128.469C0.273071 132.629 3.64437 136 7.80367 136H123.273C125.27 136 127.185 135.207 128.598 133.794C130.01 132.382 130.804 130.467 130.804 128.469C130.804 118.851 130.804 97.9253 130.804 88.3066C130.804 86.3095 130.01 84.3937 128.598 82.9816C127.185 81.5694 125.27 80.776 123.273 80.776H118.252V33.082C118.252 32.5386 118.076 32.0103 117.75 31.5759L95.1586 1.4535C94.6845 0.821531 93.9405 0.449219 93.1507 0.449219H22.8649C20.8678 0.449219 18.952 1.24264 17.5398 2.65478C16.1277 4.06752 15.3343 5.9827 15.3343 7.97982V63.2044ZM123.273 85.7962H11.5641C9.31521 85.7962 7.13616 85.1257 5.29327 83.8949V128.47C5.29327 129.856 6.41744 130.98 7.80367 130.98H123.273C123.939 130.98 124.577 130.715 125.048 130.245C125.518 129.774 125.783 129.135 125.783 128.469V88.3066C125.783 87.6409 125.518 87.0023 125.048 86.5312C124.577 86.0607 123.939 85.7962 123.273 85.7962ZM31.0232 112.467H41.9793C46.326 112.467 49.8497 108.943 49.8497 104.597V101.197C49.8497 96.8505 46.326 93.3268 41.9793 93.3268C36.4139 93.3268 28.5128 93.3268 28.5128 93.3268C27.1266 93.3268 26.0024 94.4504 26.0024 95.8372V120.939C26.0024 122.324 27.1272 123.449 28.5128 123.449C29.8984 123.449 31.0232 122.324 31.0232 120.939V112.467ZM86.2472 112.467H97.2033C101.55 112.467 105.074 108.943 105.074 104.597V101.197C105.074 96.8505 101.55 93.3268 97.2033 93.3268C91.6385 93.3268 83.7374 93.3268 83.7374 93.3268C82.3506 93.3268 81.227 94.4504 81.227 95.8372V120.939C81.227 122.324 82.3518 123.449 83.7374 123.449C85.1224 123.449 86.2472 122.324 86.2472 120.939V112.467ZM70.8721 105.878H59.263C59.0461 105.878 58.8358 105.905 58.6352 105.957V95.8372C58.6352 94.4516 57.5104 93.3268 56.1248 93.3268C54.7398 93.3268 53.615 94.4516 53.615 95.8372V120.939C53.615 122.324 54.7398 123.449 56.1248 123.449C57.5104 123.449 58.6352 122.324 58.6352 120.939V110.819C58.84 110.871 59.0509 110.898 59.263 110.898H70.8721V120.939C70.8727 122.324 71.9975 123.449 73.3825 123.449C74.7682 123.449 75.8929 122.324 75.8929 120.939V95.8372C75.8929 94.4516 74.7682 93.3268 73.3825 93.3268C71.9975 93.3268 70.8727 94.4516 70.8721 95.8372V105.878ZM31.0232 107.446H41.9793C43.5529 107.446 44.8289 106.171 44.8289 104.597V101.197C44.8289 99.623 43.5529 98.347 41.9793 98.347H31.0232V107.446ZM86.2472 107.446H97.2033C98.7775 107.446 100.053 106.171 100.053 104.597V101.197C100.053 99.623 98.7775 98.347 97.2033 98.347H86.2472V107.446ZM90.6403 5.47002H22.8649C22.1992 5.47002 21.5606 5.73449 21.0901 6.20501C20.6189 6.67552 20.3545 7.31411 20.3545 7.97982V80.776H113.232V35.5924H98.1708C94.0115 35.5924 90.6403 32.2205 90.6403 28.0618V5.47002ZM15.3343 68.2246H11.569C8.10309 68.2246 5.29327 71.0344 5.29327 74.5003V74.5051C5.29327 76.1685 5.95415 77.7632 7.13013 78.9391C8.30611 80.1151 9.90079 80.776 11.5641 80.776H15.3343V68.2246ZM63.7108 68.8747L73.1277 33.7315C73.4862 32.3934 72.6909 31.0162 71.3529 30.6572C70.0142 30.2987 68.637 31.0939 68.278 32.4326L58.8617 67.5752C58.5033 68.9132 59.2985 70.291 60.6365 70.6495C61.9752 71.0079 63.3524 70.2127 63.7108 68.8747ZM77.5985 39.8776L88.316 50.5952L77.5985 61.3121C76.6189 62.2923 76.6189 63.8828 77.5985 64.8623C78.578 65.8419 80.1691 65.8419 81.1487 64.8623L93.641 52.37C94.6212 51.3898 94.6212 49.7999 93.641 48.8198L81.1487 36.3274C80.1691 35.3478 78.578 35.3478 77.5985 36.3274C76.6189 37.307 76.6189 38.898 77.5985 39.8776ZM49.928 36.3274L37.4357 48.8198C36.4549 49.7999 36.4549 51.3898 37.4357 52.37L49.928 64.8623C50.9076 65.8419 52.4981 65.8419 53.4777 64.8623C54.4572 63.8828 54.4572 62.2923 53.4777 61.3121L42.7601 50.5952L53.4777 39.8776C54.4572 38.898 54.4572 37.307 53.4777 36.3274C52.4981 35.3478 50.9076 35.3478 49.928 36.3274ZM95.6604 10.4902V28.0618C95.6604 29.448 96.7846 30.5716 98.1708 30.5716H110.722L95.6604 10.4902Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Conference.php</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad9" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>Mails_inbox.pdf</h5>
                                                                        <h6 class="tovalidated">To Validate</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad11" id="">
                                                                        </div>
                                                                        <svg width="30" height="30" viewBox="0 0 60 61"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M52.333 0.5H7.66699C3.43934 0.5 0 3.93945 0 8.16711V52.833C0 57.0605 3.43934 60.5 7.66699 60.5H52.333C56.5607 60.5 60 57.0605 60 52.8329V8.16711C60 3.93945 56.5607 0.5 52.333 0.5ZM56.4659 52.833C56.4659 55.112 54.6118 56.9659 52.333 56.9659H7.66699C5.38805 56.9659 3.53402 55.1118 3.53402 52.833V46.3869L15.1655 36.4903C15.5899 36.1291 16.2091 36.1257 16.6376 36.4815L23.9236 42.5316C24.6261 43.1149 25.6574 43.0671 26.303 42.4208L43.615 25.0824C43.9279 24.7689 44.2927 24.7385 44.4831 24.7482C44.6729 24.7579 45.0333 24.8257 45.3125 25.1696L56.466 38.9028L56.4659 52.833ZM56.4659 33.2967L48.0558 22.9413C47.2218 21.9143 45.9855 21.2864 44.6641 21.2185C43.3437 21.1517 42.0489 21.6488 41.1141 22.5852L24.9413 38.7829L18.8955 33.7627C17.1425 32.307 14.6108 32.3221 12.8753 33.7988L3.53402 41.7467V8.16711C3.53402 5.88816 5.38805 4.03414 7.66699 4.03414H52.333C54.612 4.03414 56.4659 5.88816 56.4659 8.16711V33.2967Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M18.8876 7.88208C14.1889 7.88208 10.3665 11.7047 10.3665 16.4031C10.3665 21.1017 14.1891 24.9242 18.8876 24.9242C23.5861 24.9242 27.4086 21.1017 27.4086 16.4031C27.4086 11.7046 23.5862 7.88208 18.8876 7.88208ZM18.8876 21.3902C16.1376 21.3902 13.9005 19.1529 13.9005 16.4031C13.9005 13.6532 16.1376 11.4161 18.8876 11.4161C21.6375 11.4161 23.8746 13.6533 23.8746 16.4031C23.8746 19.1529 21.6375 21.3902 18.8876 21.3902Z"
                                                                                fill="#193567" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>people.jpg</h5>
                                                                        <h6 class="validated">Validated</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="kanban-bx">
                                                                    <div class="doc-img">
                                                                        <div class="form-check form-radio-success">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="rad12" id="">
                                                                        </div>
                                                                        <svg width="30" height="34" viewBox="0 0 96 128"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M95.2188 27.448L68.552 0.78125C68.052 0.28125 67.375 0 66.6665 0H10.6665C4.78375 0 0 4.78375 0 10.6667V117.334C0 123.216 4.78375 128 10.6667 128H85.3335C91.2163 128 96 123.216 96 117.333V29.3333C96 28.625 95.7188 27.948 95.2188 27.448ZM69.3333 9.10425L86.8958 26.6667H74.6665C71.7265 26.6667 69.3333 24.2735 69.3333 21.3335V9.10425ZM90.6667 117.333C90.6667 120.273 88.2735 122.666 85.3335 122.666H10.6667C7.72675 122.666 5.3335 120.273 5.3335 117.333V10.6667C5.3335 7.72675 7.72675 5.3335 10.6667 5.3335H64V21.3335C64 27.2162 68.7837 32 74.6667 32H90.6667V117.333Z"
                                                                                fill="#193567" />
                                                                            <path
                                                                                d="M61.5963 78.2838C59.1275 76.341 56.7812 74.3438 55.2188 72.7813C53.1875 70.75 51.3775 68.7813 49.8047 66.9063C52.258 59.3255 53.3335 55.4168 53.3335 53.3333C53.3335 44.4818 50.1355 42.6665 45.3335 42.6665C41.685 42.6665 37.3335 44.5623 37.3335 53.5885C37.3335 57.5678 39.5132 62.3985 43.8335 68.013C42.7762 71.2395 41.534 74.961 40.1382 79.1563C39.4662 81.1693 38.7373 83.0338 37.9663 84.7578C37.3388 85.0365 36.7293 85.3203 36.1408 85.6145C34.021 86.6745 32.008 87.6275 30.1408 88.513C21.625 92.5443 16 95.211 16 100.477C16 104.3 20.1537 106.666 24 106.666C28.9583 106.666 36.4453 100.044 41.914 88.8877C47.591 86.6482 54.6485 84.9893 60.2188 83.9503C64.6823 87.3825 69.612 90.6665 72 90.6665C78.612 90.6665 80 86.8435 80 83.6378C80 77.333 72.7968 77.333 69.3333 77.333C68.2578 77.3333 65.3725 77.651 61.5963 78.2838ZM24 101.333C22.4765 101.333 21.4452 100.615 21.3332 100.477C21.3332 98.5858 26.9712 95.914 32.4245 93.3308C32.7707 93.1668 33.1225 93.0025 33.4793 92.8333C29.474 98.6408 25.513 101.333 24 101.333ZM42.6668 53.5885C42.6668 48 44.4012 48 45.3335 48C47.219 48 48.0003 48 48.0003 53.3333C48.0003 54.4583 47.2503 57.2708 45.8778 61.6615C43.7838 58.4375 42.6668 55.6745 42.6668 53.5885ZM44.711 82.25C44.8777 81.7865 45.0392 81.3178 45.1955 80.8438C46.185 77.875 47.0757 75.2083 47.87 72.8073C48.9767 74.026 50.1695 75.2735 51.4482 76.552C51.9482 77.052 53.1877 78.177 54.839 79.5857C51.552 80.302 48.0547 81.19 44.711 82.25ZM74.6667 83.638C74.6667 84.836 74.6667 85.3333 72.1927 85.349C71.4662 85.1928 69.7865 84.2032 67.7135 82.7917C68.466 82.7085 69.0208 82.6667 69.3333 82.6667C73.2735 82.6667 74.3907 83.052 74.6667 83.638Z"
                                                                                fill="#193567" />
                                                                        </svg>


                                                                    </div>
                                                                    <div class="doc-content">
                                                                        <h5>invoice OpenValue.pdf</h5>
                                                                        <h6 class="inbox">Inbox</h6>
                                                                        <div class="bottom-kandoc">
                                                                            <p> 07/30/2023</p>
                                                                            <div><img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""></div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>




                    <div class="modal fade" id="create-section" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><span>New Section</span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-grp mb-0">
                                        <label class="form-label">Section name<span>*</span></label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light br-50 btn-md"
                                        data-bs-toggle="modal">Close</button>
                                    <button type="button" class="btn btn-primary br-50 btn-md">Create</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="create-folder" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><span>New Folder</span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-grp mb-0">
                                        <label class="form-label">Folder name<span>*</span></label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light br-50 btn-md"
                                        data-bs-toggle="modal">Close</button>
                                    <button type="button" class="btn btn-primary br-50 btn-md">Create</button>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="modal fade" id="colum-modal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><span>Columns</span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-grp mb-0">
                                        <label class="form-label mb-2">Select columns for folder Arshad</label>
                                        <div class="update-stg">

                                            <div class="drop__list drag-drop" id="drop-items">
                                                <div class="row mb-1 drop__card">
                                                    <div class="col-md-11 ps-35 pe-0">
                                                        <select class="form-control">
                                                            <option selected>Name</option>
                                                            <option>Tag</option>
                                                            <option>Owner</option>
                                                            <option>Type</option>
                                                            <option>Created On</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-1 dlt-stage">
                                                        <i class="far fa-trash-alt" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete"></i>
                                                    </div>
                                                </div>
                                                <div class="row mb-1 drop__card">
                                                    <div class="col-md-11 ps-35 pe-0">
                                                        <select class="form-control">
                                                            <option>Name</option>
                                                            <option selected>Tag</option>
                                                            <option>Owner</option>
                                                            <option>Type</option>
                                                            <option>Created On</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-1 dlt-stage">
                                                        <i class="far fa-trash-alt" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete"></i>
                                                    </div>
                                                </div>
                                                <div class="row mb-1 drop__card">
                                                    <div class="col-md-11 ps-35 pe-0">
                                                        <select class="form-control">
                                                            <option>Name</option>
                                                            <option>Tag</option>
                                                            <option selected>Owner</option>
                                                            <option>Type</option>
                                                            <option>Created On</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-1 dlt-stage">
                                                        <i class="far fa-trash-alt" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6 pl-3">
                                                    <a href="#" class="add-stage-link"><i
                                                            class="bx bx-plus-circle"></i>Add Stages</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio float-right">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="formRadio64" id="formRadio64" autocompleted="">
                                                        <label class="form-check-label" for="formRadio64">
                                                            Also apply to subfolders
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light br-50 btn-md"
                                        data-bs-toggle="modal">Close</button>
                                    <button type="button" class="btn btn-primary br-50 btn-md">Save</button>

                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="modal fade" id="retention-modal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><span>Edit Retention </span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row retention-modal">
                                        <p>You can choose to have files in this folder to be automatically deleted after
                                            certain time.</p>
                                        <div class="col-md-12">
                                            <div class="retention-edit">
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input retention-rad" type="radio"
                                                            name="formRad1" id="formRad1" value="1" checked>
                                                        <label class="form-check-label" for="formRad1">
                                                            Auto (inherit)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input retention-rad" type="radio"
                                                            name="formRad1" id="formRad2" value="2">
                                                        <label class="form-check-label" for="formRad2">
                                                            Active
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input retention-rad" type="radio"
                                                            name="formRad1" id="formRad3" value="3">
                                                        <label class="form-check-label" for="formRad3">
                                                            Inactive
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                        <div class="retention-content" id="retention-content2" style="display: none;">
                                            <div class="col-md-12">
                                                <div class="form-grp retention-content1">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="form-label">After</label>
                                                        <a href="#" class="advanced-days">Advanced</a>
                                                    </div>
                                                    <div class="d-flex">
                                                        <input class="form-control" type="number"
                                                            style="width: 20%;margin-right: 8px;">
                                                        <div class="select-inp" style="width: 40%;">
                                                            <select class="form-control" autocompleted="">

                                                                <option value="">Days</option>
                                                                <option value="">Weeks</option>
                                                                <option value="">Months</option>
                                                                <option value="">Years</option>


                                                            </select>
                                                            <i class="fas fa-chevron-down"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-grp retention-content2">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="form-label">After</label>
                                                        <a href="#" class="advanced-days">Simple</a>
                                                    </div>
                                                    <div class="d-flex">
                                                        <input class="form-control" type="number" placeholder="Days"
                                                            style="width: 24%;margin-right: 8px;">
                                                        <input class="form-control" type="number" placeholder="Weeks"
                                                            style="width: 24%;margin-right: 8px;">
                                                        <input class="form-control" type="number" placeholder="Months"
                                                            style="width: 24%;margin-right: 8px;">
                                                        <input class="form-control" type="number" placeholder="Years"
                                                            style="width: 24%;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <label class="form-label">Take the following action</label>
                                                    <div class="select-inp">
                                                        <select class="form-control" autocompleted="">
                                                            <option value="">Move to Recycle Bin</option>
                                                            <option value="">Delete permanently</option>
                                                        </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-grp subfoldr">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input" type="checkbox" name="formRad11"
                                                            id="formRad11">
                                                        <label class="form-check-label" for="formRad11">
                                                            Apply to subfolders
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light br-50 btn-md"
                                        data-bs-toggle="modal">Close</button>
                                    <button type="button" class="btn btn-primary br-50 btn-md">Save</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="workflow-modal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><span>Automated Workflow </span>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row workflow-modal">
                                        <p>You can choose to have files in this folder to be automatically deleted after
                                            certain time.</p>
                                        <div class="col-md-12">
                                            <div class="workflow-edit">
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input workflow-rad" type="radio"
                                                            name="wrkRad1" id="wrkRad1" value="1" checked>
                                                        <label class="form-check-label" for="wrkRad1">
                                                            Auto (inherit)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input workflow-rad" type="radio"
                                                            name="wrkRad1" id="wrkRad2" value="2">
                                                        <label class="form-check-label" for="wrkRad2">
                                                            Active
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input workflow-rad" type="radio"
                                                            name="wrkRad1" id="wrkRad3" value="3">
                                                        <label class="form-check-label" for="wrkRad3">
                                                            Inactive
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                        <div class="workflow-content" id="workflow-content2" style="display: none;">
                                            <div class="col-md-12">
                                                <div class="btn-group workflow-btns" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                                        autocomplete="off" checked="" value="1">
                                                    <label class="btn btn-success" for="btnradio1">Approval</label>

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                        autocomplete="off" value="2">
                                                    <label class="btn btn-success" for="btnradio2">DocuSign</label>

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                                        autocomplete="off" value="3">
                                                    <label class="btn btn-success" for="btnradio3">eID</label>

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4"
                                                        autocomplete="off" value="4">
                                                    <label class="btn btn-success"
                                                        for="btnradio4">Acknowledgement</label>
                                                </div>
                                                <div class="workflow-tab-content">
                                                    <div class="workflow-tab-content1">
                                                        <div class="form-grp">
                                                            <label for="">Notes</label>
                                                            <textarea name="" id="" cols="30" rows="3"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="workflow-tab-content2">
                                                        <div class="field-folderresolution-type">
                                                            <div class="form-grp">
                                                                <label for="">Type</label>
                                                                <div class="res-type-div">
                                                                    <div
                                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="resolution-type" id="res-typ1"
                                                                            checked>
                                                                        <label class="form-check-label" for="res-typ1">
                                                                            Parallel
                                                                        </label>
                                                                    </div>
                                                                    <div
                                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="resolution-type" id="res-typ2">
                                                                        <label class="form-check-label" for="res-typ2">
                                                                            Serial
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="move-wrkflw">
                                                            <div class="form-grp">
                                                                <div class="form-check form-switch form-switch-md"
                                                                    dir="ltr">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="move-wrk-check">
                                                                    <label class="form-check-label"
                                                                        for="move-wrk-check">Move after successful
                                                                        workflow</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="workflow-tab-content3" style="display: none;">
                                                        <div class="form-grp">
                                                            <label for="">After everyone has approved, move the document
                                                                to</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Choose a folder">
                                                        </div>
                                                    </div>
                                                    <div class="workflow-tab-content4">
                                                        <div class="update-stg">
                                                            <div class="drop__list drag-drop" id="drop-items1">
                                                                <div class="row mb-1 drop__card">
                                                                    <div class="col-md-11 ps-35 pe-0">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Invite (e-mail)">
                                                                    </div>

                                                                    <div class="col-lg-1 dlt-user">
                                                                        <i class="far fa-trash-alt"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Delete"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-1 drop__card">
                                                                    <div class="col-md-11 ps-35 pe-0">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Invite (e-mail)">
                                                                    </div>

                                                                    <div class="col-lg-1 dlt-user">
                                                                        <i class="far fa-trash-alt"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Delete"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-1 drop__card">
                                                                    <div class="col-md-11 ps-35 pe-0">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Invite (e-mail)">
                                                                    </div>

                                                                    <div class="col-lg-1 dlt-user">
                                                                        <i class="far fa-trash-alt"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Delete"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-6 pl-3">
                                                                    <a href="#" class="add-user-link"><i
                                                                            class="bx bx-plus-circle"></i>Add User</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="workflow-tab-content5" style="display: none;">
                                                        <div
                                                            class="form-check form-radio-outline form-radio-success evnt-radio">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="fmcheck1" id="fmcheck1">
                                                            <label class="form-check-label" for="fmcheck1">
                                                                I understand this action will consume 1 Envelope from
                                                                DocuSign account per file.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="workflow-tab-content6">
                                                        <div class="mb-2">
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="radio"
                                                                    name="fmcheck2" id="fmcheck2">
                                                                <label class="form-check-label" for="fmcheck2">
                                                                    Metadata is visible in workflow
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="radio"
                                                                    name="fmcheck3" id="fmcheck3">
                                                                <label class="form-check-label" for="fmcheck3">
                                                                    Related files are visible in workflow
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <div
                                                                class="form-check form-radio-outline form-radio-success evnt-radio">
                                                                <input class="form-check-input" type="radio"
                                                                    name="fmcheck4" id="fmcheck4">
                                                                <label class="form-check-label" for="fmcheck4">
                                                                    Apply to subfolders
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>



                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light br-50 btn-md"
                                        data-bs-toggle="modal">Close</button>
                                    <button type="button" class="btn btn-primary br-50 btn-md">Create</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="numbering-modal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><span>Automated File Numbering
                                        </span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row numbering-modal">
                                        <p>You can set up a numbering scheme for files in this folder.</p>
                                        <div class="col-md-12">
                                            <div class="numbering-edit">
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input numbering-rad" type="radio"
                                                            name="numberingRad1" id="numberingRad1" value="1" checked>
                                                        <label class="form-check-label" for="numberingRad1">
                                                            Auto (inherit)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input numbering-rad" type="radio"
                                                            name="numberingRad1" id="numberingRad2" value="2">
                                                        <label class="form-check-label" for="numberingRad2">
                                                            Active
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-grp">
                                                    <div
                                                        class="form-check form-radio-outline form-radio-success evnt-radio">
                                                        <input class="form-check-input numbering-rad" type="radio"
                                                            name="numberingRad1" id="numberingRad3" value="3">
                                                        <label class="form-check-label" for="numberingRad3">
                                                            Inactive
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                        <div class="numbering-content" id="numbering-content2" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <label class="form-label">Name</label>
                                                        <input class="form-control" type="text" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <label class="form-label">Scheme</label>
                                                        <div class="select-inp">
                                                            <select class="form-control"
                                                                id="choices-multiple-remove-button" placeholder="Select"
                                                                multiple>
                                                                <option value="" onclick="filterSelection('Author')">
                                                                    Number
                                                                </option>
                                                                <option value="">Parent number</option>
                                                                <option value="">Day (short)</option>
                                                                <option value="">Day (long)</option>
                                                                <option value="">Day of month (with 0)</option>
                                                                <option value="">Day of month (without 0)</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-grp">
                                                        <label class="form-label">Next Number</label>
                                                        <input class="form-control" type="number" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-grp">
                                                        <label class="form-label">Preview</label>
                                                        <input class="form-control" type="text" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <label class="form-label">Number the following items</label>
                                                        <input class="form-control" type="text" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-grp">
                                                        <label class="form-label">Reset frequency</label>
                                                        <div class="select-inp">
                                                            <select class="form-control" autocompleted="">

                                                                <option value="">Never</option>
                                                                <option value="">Yearly</option>
                                                                <option value="">Montly</option>
                                                                <option value="">Weekly</option>
                                                                <option value="">Daily</option>

                                                            </select>
                                                            <i class="fas fa-chevron-down"></i>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-2">
                                                        <div
                                                            class="form-check form-radio-outline form-radio-success evnt-radio">
                                                            <input class="form-check-input" type="radio"
                                                                name="numcheck2" id="numcheck2">
                                                            <label class="form-check-label" for="numcheck2">
                                                                Apply to subfolders
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-2">
                                                        <div
                                                            class="form-check form-radio-outline form-radio-success evnt-radio">
                                                            <input class="form-check-input" type="radio"
                                                                name="numcheck3" id="numcheck3">
                                                            <label class="form-check-label" for="numcheck3">
                                                                Items in folders inherit Parent Number
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>




                                        </div>



                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light br-50 btn-md"
                                        data-bs-toggle="modal">Close</button>
                                    <button type="button" class="btn btn-primary br-50 btn-md">Save</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="add-meta" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><span>New Metadata </span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <label class="form-label">Name</label>
                                                <input class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <label class="form-label">Description</label>
                                                <textarea name="" id="" cols="30" rows="3"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label class="form-label">Type</label>
                                                <div class="select-inp">
                                                    <select class="form-control" autocompleted="">

                                                        <option value="">String</option>
                                                        <option value="">Email</option>
                                                        <option value="">Integer</option>
                                                        <option value="">Datetime</option>


                                                    </select>
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex align-items-end">
                                            <div class="form-grp">
                                                <div
                                                    class="form-check form-radio-outline form-radio-success evnt-radio mb-2">
                                                    <input class="form-check-input" type="checkbox" name="formRadio41"
                                                        id="formRadio41">
                                                    <label class="form-check-label" for="formRadio41">
                                                        Required
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3 d-flex align-items-end">
                                            <div class="form-grp">
                                                <div
                                                    class="form-check form-radio-outline form-radio-success evnt-radio mb-2">
                                                    <input class="form-check-input" type="checkbox" name="formRadio42"
                                                        id="formRadio42">
                                                    <label class="form-check-label" for="formRadio42">
                                                        Recursive
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <label class="form-label">Include</label>
                                                <div class="select-inp">
                                                    <select class="form-control" id="choices-multiple-remove-button"
                                                        placeholder="Include" multiple>
                                                        <option value="" onclick="filterSelection('Author')">File
                                                        </option>
                                                        <option value="">Link</option>
                                                        <option value="">Folder</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light br-50 btn-md"
                                        data-bs-toggle="modal">Close</button>
                                    <button type="button" class="btn btn-primary br-50 btn-md">Create</button>

                                </div>
                            </div>
                        </div>
                    </div>




                    <script src="https://kit.fontawesome.com/49ccdaea81.js " crossorigin="anonymous "></script>
                    <script src="assets/libs/jquery/jquery.min.js"></script>
                    <script src="assets/libs/multiselect/choices.min.js"></script>
                    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
                    <script src="assets/libs/simplebar/simplebar.min.js"></script>
                    <script src="assets/libs/node-waves/waves.min.js"></script>
                    <script src="assets/js/pages/jquery.slim.min.js"></script>
                    <script src="assets/js/pages/popper.min.js"></script>
                    <script src="assets/js/pages/bootstrap.min.js"></script>
                    <script src="assets/libs/datepicker/semantic.min.js"></script>

                    <script src="assets/libs/select2/js/select2.min.js"></script>
                    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
                    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
                    <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
                    <script src="assets/libs/datepicker/datepicker.min.js"></script>
                    <script src="assets/js/pages/form-advanced.init.js"></script>
                    <script src="assets/libs/ckediter/ckeditor.js"></script>
                    <script src="assets/js/pages/bootstrap-taginput.js"></script>
                    <script src="assets/js/pages/mdb.min.js"></script>
                    <script src="assets/js/summernote-bs4.js"></script>
                    <script src="assets/js/sortable.min.js"></script>
                    <script src="assets/js/app.js"></script>


                    <script>
                        $(document).ready(function () {

                            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                                removeItemButton: true,
                                maxItemCount: 400,
                                searchResultLimit: 5,
                                renderChoiceLimit: 5
                            });


                        });
                    </script>

                    <script>
                        $(function () {
                            setTimeout(function () {
                                // $('.loader-mask').delay(350).fadeOut('slow')
                                $(".loader-mask").hide();
                            }, 1000)

                        })
                    </script>
                    <!-- <script>
            var $radioButtons = $('.radio-check-function input[type="radio"]');
            $radioButtons.click(function () {
                $radioButtons.each(function () {
                    $(this).parent().toggleClass('active', this.checked);
                });
            });
        </script> -->
                    <script>
                        $(".drpdwn-menu-btn").click(function () {
                            $(this).parent().children(".dropdown-menu").toggleClass("show");
                        });
                        $(".drpdwn-fg .dropdown-item").click(function () {
                            $(this).toggleClass("check");
                        });
                    </script>

                    <script>
                        var startX, startWidth, $handle, $table, pressed = false;

                        // mousedown
                        $('.table-resizable .resize').on('mousedown', function (event) {
                            // find index of 'td' in 'tr'
                            let index = $(this).parent().index();
                            // find 'th' according to the index value
                            $handle = $(this).parents('table').find('th').eq(index);
                            pressed = true;
                            startX = event.pageX;
                            startWidth = $handle.width();
                            $table = $handle.closest('.table-resizable').addClass('resizing');
                        });

                        // mousemove
                        $('.table-resizable th, .table-resizable td').on('mousemove', function (event) {
                            if (pressed) {
                                $handle.width(startWidth + (event.pageX - startX));
                            }
                        });

                        // mouseup
                        $('.table-resizable th, .table-resizable td').on('mouseup', function () {
                            if (pressed) {
                                $table.removeClass('resizing');
                                pressed = false;
                            }
                        });

                        // reset column width
                        $('.table-resizable thead').on('dblclick', function () {
                            // Reset column sizes on double click
                            $(this).find('th').css('width', '');
                        });
                    </script>

                    <script>
                        $('.selected-num i').on('click', function () {
                            $(this).closest(".selected-num").remove();
                        });

                        $(function () {

                            $(".page-content").on("click", function () {
                                $(".row-selected").toggle($(this).find(".check-input:checked").length >
                                    0);
                            })
                            $('input[name="Main_Checkbox"]').on("click", function () {
                                $('.check-input').prop('checked', this.checked);
                            });
                        });
                    </script>

                    <script>
                        $('.datestart').calendar({
                            type: 'date',
                            endCalendar: $('.dateend')
                        });
                        $('.dateend').calendar({
                            type: 'date',
                            startCalendar: $('.datestart')
                        });
                    </script>

                    <script>
                        function importData() {
                            let input = document.createElement('input');
                            input.type = 'file';
                            input.onchange = _ => {
                                // you can use this method to get file and perform respective operations
                                let files = Array.from(input.files);
                                console.log(files);
                            };
                            input.click();

                        }
                    </script>
                    <script>
                        const dropItems = document.getElementById("drop-items");
                        const dropItems1 = document.getElementById("drop-items1");

                        new Sortable(dropItems, {
                            animation: 150,
                            chosenClass: "sortable-chosen",
                            dragClass: "sortable-drag",
                            store: {
                                set: (sortable) => {
                                    const order = sortable.toArray();
                                    localStorage.setItem(sortable.options.group.name, order.join("|"));
                                },

                                get: (sortable) => {
                                    const order = localStorage.getItem(sortable.options.group.name);
                                    return order ? order.split("|") : [];
                                }
                            }
                        });
                        new Sortable(dropItems1, {
                            animation: 150,
                            chosenClass: "sortable-chosen",
                            dragClass: "sortable-drag",
                            store: {
                                set: (sortable) => {
                                    const order = sortable.toArray();
                                    localStorage.setItem(sortable.options.group.name, order.join("|"));
                                },

                                get: (sortable) => {
                                    const order = localStorage.getItem(sortable.options.group.name);
                                    return order ? order.split("|") : [];
                                }
                            }
                        });

                        $(document).on('click', '#drop-items .dlt-stage i', function () {
                            $(this).closest('.drop__card').hide();
                        });
                        $(document).on('click', '.dlt-user', function () {
                            $(this).closest('.drop__card').hide();
                        });
                        $(document).on('click', '.add-stage-link', function () {
                            newRowAdd =
                                '<div class="row mb-1 drop__card">' +
                                '<div class="col-md-11 ps-35 pe-0">' +
                                '<select class="form-control">' +
                                '<option selected>Name</option>' +
                                '<option>Tag</option>' +
                                '<option>Owner</option>' +
                                '<option>Type</option>' +
                                '<option>Created On</option>' +
                                '</select>' +
                                '</div>' +

                                '<div class="col-lg-1 dlt-stage">' +
                                '<i class="far fa-trash-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>' +
                                '</div>' +
                                '</div>';
                            $(this).closest('.update-stg').find('.drop__list').append(newRowAdd);
                        });
                        $(document).on('click', '.add-user-link', function () {
                            newRowAdd1 =
                                '<div class="row mb-1 drop__card">' +
                                '<div class="col-md-11 ps-35 pe-0">' +
                                '<input type="text" class="form-control" placeholder="Invite (e-mail)">' +
                                '</div>' +

                                '<div class="col-lg-1 dlt-user">' +
                                '<i class="far fa-trash-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>' +
                                '</div>' +
                                '</div>';

                            $(this).closest('.update-stg').find('.drop__list').append(newRowAdd1);
                        });


                        $(document).on('click', '.reminder-dlt', function () {
                            $(this).closest('.single-reminder').hide();
                        });
                    </script>
                    <script>
                        $(document).on('click', '.retention-rad', function () {
                            $(this).prop("checked", true)
                            var nmbr1 = $(this).val();
                            $(this).closest(".retention-modal").find(".retention-content").hide();
                            $(this).closest(".retention-modal").find("#retention-content" + nmbr1).show();
                        });
                        $(document).on('click', '.advanced-days', function () {
                            $(this).closest(".retention-content").toggleClass("advanced");

                        });
                    </script>
                    <script>
                        $(document).ready(function () {
                            $(document).on('click', '.workflow-rad', function () {
                                $(this).prop("checked", true)
                                var nmbr2 = $(this).val();
                                $(this).closest(".workflow-modal").find(".workflow-content").hide();
                                $(this).closest(".workflow-modal").find("#workflow-content" + nmbr2)
                                    .show();
                            });
                        });
                        $(document).ready(function () {
                            $(document).on('click', '.workflow-btns .btn-check', function () {
                                var btnchk = $(this).val();
                                if (btnchk == 1) {
                                    $(this).closest(".workflow-content").find(".workflow-tab-content1")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content2")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content4")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content5")
                                        .hide();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content6")
                                        .show();
                                    $(this).closest(".workflow-content").find(
                                        ".field-folderresolution-type").show();
                                } else if (btnchk == 2) {
                                    $(this).closest(".workflow-content").find(".workflow-tab-content1")
                                        .hide();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content2")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content4")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content5")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content6")
                                        .show();
                                    $(this).closest(".workflow-content").find(
                                        ".field-folderresolution-type").show();
                                } else if (btnchk == 3) {
                                    $(this).closest(".workflow-content").find(".workflow-tab-content1")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content2")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content4")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content5")
                                        .hide();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content6")
                                        .show();
                                    $(this).closest(".workflow-content").find(
                                        ".field-folderresolution-type").show();
                                } else {
                                    $(this).closest(".workflow-content").find(".workflow-tab-content1")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content2")
                                        .show();
                                    $(this).closest(".workflow-content").find(
                                        ".field-folderresolution-type").hide();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content4")
                                        .show();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content5")
                                        .hide();
                                    $(this).closest(".workflow-content").find(".workflow-tab-content6")
                                        .show();
                                }

                            });
                        });

                        $(document).on('click', '#move-wrk-check', function () {
                            if ($(this).is(":checked")) {
                                $(".workflow-tab-content3").show();
                            } else {
                                $(".workflow-tab-content3").hide();
                            }
                        });
                    </script>
                    <script>
                        $(document).ready(function () {
                            $(document).on('click', '.numbering-rad', function () {
                                $(this).prop("checked", true)
                                var nmbr3 = $(this).val();
                                $(this).closest(".numbering-modal").find(".numbering-content").hide();
                                $(this).closest(".numbering-modal").find("#numbering-content" + nmbr3)
                                    .show();
                            });
                        });
                    </script>
</body>

</html>