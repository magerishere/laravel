@extends('layouts.backend.main')

@section('content')
<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
            <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-flex align-items-center justify-content-between">
<h4 class="mb-0">Read Email</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
        <li class="breadcrumb-item active">Read Email</li>
    </ol>
</div>

</div>
</div>
</div>
<!-- end page title -->
<div class="row">
<div class="col-12">
<!-- Left sidebar -->
<div class="email-leftbar card">
    <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
        Compose
    </button>
    <div class="mail-list mt-4">
        <a href="#" class="active"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i> Inbox
            <span class="ms-1 float-end">(18)</span></a>
        <a href="#"><i class="mdi mdi-star-outline font-size-16 align-middle me-2"></i>Starred</a>
        <a href="#"><i class="mdi mdi-diamond-stone font-size-16 align-middle me-2"></i>Important</a>
        <a href="#"><i class="mdi mdi-file-outline font-size-16 align-middle me-2"></i>Draft</a>
        <a href="#"><i class="mdi mdi-email-check-outline font-size-16 align-middle me-2"></i>Sent Mail</a>
        <a href="#"><i class="mdi mdi-trash-can-outline font-size-16 align-middle me-2"></i>Trash</a>
    </div>

    <h6 class="mt-4">Labels</h6>

    <div class="mail-list mt-1">
        <a href="#"><span class="mdi mdi-circle-outline text-info float-end"></span>Theme Support</a>
        <a href="#"><span class="mdi mdi-circle-outline text-warning float-end"></span>Freelance</a>
        <a href="#"><span class="mdi mdi-circle-outline text-primary float-end"></span>Social</a>
        <a href="#"><span class="mdi mdi-circle-outline text-danger float-end"></span>Friends</a>
        <a href="#"><span class="mdi mdi-circle-outline text-success float-end"></span>Family</a>
    </div>

    <h6 class="mt-4">Chat</h6>

    <div class="mt-2">
        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Scott Median</p>
                <p class="text-muted text-truncate">Hello</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Julian Rosa</p>
                <p class="text-muted text-truncate">What about our next..</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-4.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">David Medina</p>
                <p class="text-muted text-truncate">Yeah everything is fine</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-6.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Jay Baker</p>
                <p class="text-muted text-truncate">Wow that's great</p>
            </div>
        </a>

    </div>
</div>
<!-- End Left sidebar -->

<!-- Right Sidebar -->
<div class="email-rightbar mb-3">

    <div class="card">
        <div class="btn-toolbar p-3" role="toolbar">
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                </button>
                <div class="dropdown-menu" style="margin: 0px;">
                    <a class="dropdown-item" href="#">Updates</a>
                    <a class="dropdown-item" href="#">Social</a>
                    <a class="dropdown-item" href="#">Team Manage</a>
                </div>
            </div>
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                </button>
                <div class="dropdown-menu" style="margin: 0px;">
                    <a class="dropdown-item" href="#">Updates</a>
                    <a class="dropdown-item" href="#">Social</a>
                    <a class="dropdown-item" href="#">Team Manage</a>
                </div>
            </div>

            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    More <i class="mdi mdi-dots-vertical ms-2"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Mark as Unread</a>
                    <a class="dropdown-item" href="#">Mark as Important</a>
                    <a class="dropdown-item" href="#">Add to Tasks</a>
                    <a class="dropdown-item" href="#">Add Star</a>
                    <a class="dropdown-item" href="#">Mute</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="d-flex align-items-start mb-4">
                <img class="d-flex me-3 rounded-circle avatar-sm" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                <div class="flex-1">
                    <h5 class="font-size-14 my-1">Humberto D. Champion</h5>
                    <small class="text-muted">support@domain.com</small>
                </div>
            </div>

            <h4 class="mt-0 font-size-16">This Week's Top Stories</h4>

            <p>Dear Lorem Ipsum,</p>
            <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in
                fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum
                volutpat massa vulputate molestie. In at felis ac velit maximus convallis.
            </p>
            <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id
                lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus
                fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia lacus, vel tincidunt mi nibh sit
                amet lorem.</p>
            <p>Sincerly,</p>
            <hr>

            <div class="row">
                <div class="col-xl-2 col-6">
                    <div class="card border shadow-none">
                        <img class="card-img-top img-fluid" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/small/img-3.jpg" alt="Card image cap">
                        <div class="py-2 text-center">
                            <a href="" class="fw-medium">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-6">
                    <div class="card border shadow-none">
                        <img class="card-img-top img-fluid" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/small/img-4.jpg" alt="Card image cap">
                        <div class="py-2 text-center">
                            <a href="" class="fw-medium">Download</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply"></i> Reply</a>
        </div>

    </div>
</div>
<!-- card -->

</div>
<!-- end Col-9 -->

</div>
<!-- end row -->

<!-- Modal -->
<div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="composemodalTitle">New Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
    </div>
    <div class="modal-body">
        <form>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="To">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="mb-3">
                
                    <textarea id="email-editor" name="area" aria-hidden="true" style="display: none;"></textarea><div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; height: 200px;"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="menubar" data-alloy-tabstop="true" class="tox-menubar"><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">File</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Edit</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">View</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Insert</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Format</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Tools</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" data-alloy-tabstop="true" unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Table</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button></div><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Undo" title="Undo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Redo" title="Redo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button title="Formats" aria-label="Formats" aria-haspopup="true" type="button" unselectable="on" tabindex="-1" class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke" aria-expanded="false" style="user-select: none;"><span class="tox-tbtn__select-label">Paragraph</span><div class="tox-tbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Bold" title="Bold" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Italic" title="Italic" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Align left" title="Align left" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align center" title="Align center" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align right" title="Align right" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Justify" title="Justify" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><div aria-pressed="false" aria-label="Bullet list" title="Bullet list" role="button" aria-haspopup="true" unselectable="on" tabindex="-1" class="tox-split-button" aria-disabled="false" aria-expanded="false" aria-describedby="aria_2955265941691617522258163" style="user-select: none;"><span role="presentation" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1z" fill-rule="evenodd"></path></svg></span></span><span role="presentation" tabindex="-1" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" id="aria_2955265941691617522258163" style="display: none;">To open the popup, press Shift+Enter</span></div><div aria-pressed="false" aria-label="Numbered list" title="Numbered list" role="button" aria-haspopup="true" unselectable="on" tabindex="-1" class="tox-split-button" aria-disabled="false" aria-expanded="false" aria-describedby="aria_38021691711617522258163" style="user-select: none;"><span role="presentation" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 110-2zM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 01-.5-.5V5h-.5a.5.5 0 010-1H6zm-1 8.8l.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 01-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 00-.2-.2H4.5a.5.5 0 01-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3zM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 010-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 110-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 110-1H6c.6 0 1 .4 1 1z" fill-rule="evenodd"></path></svg></span></span><span role="presentation" tabindex="-1" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" id="aria_38021691711617522258163" style="display: none;">To open the popup, press Shift+Enter</span></div><button aria-label="Decrease indent" title="Decrease indent" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm1.6-3.8a1 1 0 01-1.2 1.6l-3-2a1 1 0 010-1.6l3-2a1 1 0 011.2 1.6L6.8 12l1.8 1.2z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Increase indent" title="Increase indent" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 011.2-1.6l3 2a1 1 0 010 1.6l-3 2a1 1 0 11-1.2-1.6z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Insert/edit image" title="Insert/edit image" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M5 15.7l3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7zM5 18V19h3l2.8-2.9-2-2L5 17.9zm14-3l-2.5-2.4-6.4 6.5H19v-4zM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 01-1-1V4c0-.6.4-1 1-1zm6 8a2 2 0 100-4 2 2 0 000 4z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Print" title="Print" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M18 8H6a3 3 0 00-3 3v6h2v3h14v-3h2v-6a3 3 0 00-3-3zm-1 10H7v-4h10v4zm.5-5c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5 1.5.7 1.5 1.5-.7 1.5-1.5 1.5zm.5-8H6v2h12V5z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Preview" title="Preview" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M3.5 12.5c.5.8 1.1 1.6 1.8 2.3 2 2 4.2 3.2 6.7 3.2s4.7-1.2 6.7-3.2a16.2 16.2 0 002.1-2.8 15.7 15.7 0 00-2.1-2.8c-2-2-4.2-3.2-6.7-3.2a9.3 9.3 0 00-6.7 3.2A16.2 16.2 0 003.2 12c0 .2.2.3.3.5zm-2.4-1l.7-1.2L4 7.8C6.2 5.4 8.9 4 12 4c3 0 5.8 1.4 8.1 3.8a18.2 18.2 0 012.8 3.7v1l-.7 1.2-2.1 2.5c-2.3 2.4-5 3.8-8.1 3.8-3 0-5.8-1.4-8.1-3.8a18.2 18.2 0 01-2.8-3.7 1 1 0 010-1zm12-3.3a2 2 0 102.7 2.6 4 4 0 11-2.6-2.6z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Insert/edit media" title="Insert/edit media" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 01-1-1V4c0-.6.4-1 1-1zm1 2v14h14V5H5zm4.8 2.6l5.6 4a.5.5 0 010 .8l-5.6 4A.5.5 0 019 16V8a.5.5 0 01.8-.4z" fill-rule="nonzero"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><div aria-pressed="false" aria-label="Text color" title="Text color" role="button" aria-haspopup="true" unselectable="on" tabindex="-1" class="tox-split-button" aria-disabled="false" aria-expanded="false" aria-describedby="aria_4584861761731617522258168" style="user-select: none;"><span role="presentation" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><g fill-rule="evenodd"><path id="tox-icon-text-color__color" d="M3 18h18v3H3z"></path><path d="M8.7 16h-.8a.5.5 0 01-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 01-.5.6h-.8a.5.5 0 01-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4zm2.6-7.6l-.6 2a.5.5 0 00.5.6h1.6a.5.5 0 00.5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4z"></path></g></svg></span></span><span role="presentation" tabindex="-1" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" id="aria_4584861761731617522258168" style="display: none;">To open the popup, press Shift+Enter</span></div><div aria-pressed="false" aria-label="Background color" title="Background color" role="button" aria-haspopup="true" unselectable="on" tabindex="-1" class="tox-split-button" aria-disabled="false" aria-expanded="false" aria-describedby="aria_7046736901751617522258169" style="user-select: none;"><span role="presentation" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><g fill-rule="evenodd"><path id="tox-icon-highlight-bg-color__color" d="M3 18h18v3H3z"></path><path fill-rule="nonzero" d="M7.7 16.7H3l3.3-3.3-.7-.8L10.2 8l4 4.1-4 4.2c-.2.2-.6.2-.8 0l-.6-.7-1.1 1.1zm5-7.5L11 7.4l3-2.9a2 2 0 012.6 0L18 6c.7.7.7 2 0 2.7l-2.9 2.9-1.8-1.8-.5-.6"></path></g></svg></span></span><span role="presentation" tabindex="-1" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" id="aria_7046736901751617522258169" style="display: none;">To open the popup, press Shift+Enter</span></div><button aria-label="Emoticons" title="Emoticons" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M9 11c.6 0 1-.4 1-1s-.4-1-1-1a1 1 0 00-1 1c0 .6.4 1 1 1zm6 0c.6 0 1-.4 1-1s-.4-1-1-1a1 1 0 00-1 1c0 .6.4 1 1 1zm-3 5.5c2.1 0 4-1.5 4.4-3.5H7.6c.5 2 2.3 3.5 4.4 3.5zM12 4a8 8 0 100 16 8 8 0 000-16zm0 14.5a6.5 6.5 0 110-13 6.5 6.5 0 010 13z" fill-rule="nonzero"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="email-editor_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-0 for help." class="tox-edit-area__iframe" __idm_frm__="252"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"><div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div></div><button type="button" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__wordcount">0 words</button><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5" rel="noopener" target="_blank" tabindex="-1" aria-label="Powered by Tiny">Powered by Tiny</a></span></div><div title="Resize" aria-hidden="true" class="tox-statusbar__resize-handle"><svg width="10" height="10"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>
                
            </div></form>

        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
    </div>
</div>
</div>
</div>
    </div> <!-- content -->
</div>
@endsection