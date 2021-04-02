<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Preloader | Minible - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Bootstrap Css -->
    <link
      href="{{ asset('assets/backend/css/bootstrap.rtl.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/backend/css/app.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome.min.css') }}">

  
  </head>

  <body>

    <!-- Loader -->
    <div id="preloader">
      <div id="status">
        <div class="spinner">
          <i class="uil-shutter-alt spin-icon"></i>
        </div>
      </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
              <a href="index" class="logo logo-dark">
                <span class="logo-sm">
                  <img src="assets/images/logo-sm.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                  <img src="assets/images/logo-dark.png" alt="" height="20" />
                </span>
              </a>

              <a href="index" class="logo logo-light">
                <span class="logo-sm">
                  <img src="assets/images/logo-sm.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                  <img src="assets/images/logo-light.png" alt="" height="20" />
                </span>
              </a>
            </div>

            <button
              type="button"
              class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"
            >
              <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
              <div class="position-relative">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
                <span class="uil-search"></span>
              </div>
            </form>
          </div>

          <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                id="page-header-search-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="uil-search"></i>
              </button>
              <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown"
              >
                <form class="p-3">
                  <div class="form-group m-0">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search..."
                        aria-label="Recipient's username"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                          <i class="mdi mdi-magnify"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="dropdown d-inline-block language-switch">
              <button
                type="button"
                class="btn header-item waves-effect"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  src="assets/images/flags/us.jpg"
                  alt="Header Language"
                  height="16"
                />
                <span class="align-middle">English</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a href="index/en" class="dropdown-item notify-item">
                  <img
                    src="assets/images/flags/us.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">English</span>
                </a>

                <!-- item-->
                <a href="index/es" class="dropdown-item notify-item">
                  <img
                    src="assets/images/flags/spain.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">Spanish</span>
                </a>

                <!-- item-->
                <a href="index/de" class="dropdown-item notify-item">
                  <img
                    src="assets/images/flags/germany.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">German</span>
                </a>

                <!-- item-->
                <a href="index/it" class="dropdown-item notify-item">
                  <img
                    src="assets/images/flags/italy.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">Italian</span>
                </a>

                <!-- item-->
                <a href="index/ru" class="dropdown-item notify-item">
                  <img
                    src="assets/images/flags/russia.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">Russian</span>
                </a>
              </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="uil-apps"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <div class="px-lg-2">
                  <div class="row g-0">
                    <div class="col">
                      <a class="dropdown-icon-item" href="#">
                        <img
                          src="assets/images/brands/github.png"
                          alt="Github"
                        />
                        <span>GitHub</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="dropdown-icon-item" href="#">
                        <img
                          src="assets/images/brands/bitbucket.png"
                          alt="bitbucket"
                        />
                        <span>Bitbucket</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="dropdown-icon-item" href="#">
                        <img
                          src="assets/images/brands/dribbble.png"
                          alt="dribbble"
                        />
                        <span>Dribbble</span>
                      </a>
                    </div>
                  </div>

                  <div class="row g-0">
                    <div class="col">
                      <a class="dropdown-icon-item" href="#">
                        <img
                          src="assets/images/brands/dropbox.png"
                          alt="dropbox"
                        />
                        <span>Dropbox</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="dropdown-icon-item" href="#">
                        <img
                          src="assets/images/brands/mail_chimp.png"
                          alt="mail_chimp"
                        />
                        <span>Mail Chimp</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="dropdown-icon-item" href="#">
                        <img src="assets/images/brands/slack.png" alt="slack" />
                        <span>Slack</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                data-bs-toggle="fullscreen"
              >
                <i class="uil-minus-path"></i>
              </button>
            </div>

            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="uil-bell"></i>
                <span class="badge bg-danger rounded-pill">3</span>
              </button>
              <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown"
              >
                <div class="p-3">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="m-0 font-size-16">Notifications</h5>
                    </div>
                    <div class="col-auto">
                      <a href="#!" class="small"> Mark all as read</a>
                    </div>
                  </div>
                </div>
                <div data-simplebar style="max-height: 230px">
                  <a href="" class="text-reset notification-item">
                    <div class="d-flex align-items-start">
                      <div class="avatar-xs me-3">
                        <span
                          class="avatar-title bg-primary rounded-circle font-size-16"
                        >
                          <i class="uil-shopping-basket"></i>
                        </span>
                      </div>
                      <div class="flex-1">
                        <h6 class="mt-0 mb-1">Your order is placed</h6>
                        <div class="font-size-12 text-muted">
                          <p class="mb-1">
                            If several languages coalesce the grammar
                          </p>
                          <p class="mb-0">
                            <i class="mdi mdi-clock-outline"></i> 3 min ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="" class="text-reset notification-item">
                    <div class="d-flex align-items-start">
                      <img
                        src="assets/images/users/avatar-3.jpg"
                        class="me-3 rounded-circle avatar-xs"
                        alt="user-pic"
                      />
                      <div class="flex-1">
                        <h6 class="mt-0 mb-1">James Lemire</h6>
                        <div class="font-size-12 text-muted">
                          <p class="mb-1">
                            It will seem like simplified English.
                          </p>
                          <p class="mb-0">
                            <i class="mdi mdi-clock-outline"></i> 1 hours ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="" class="text-reset notification-item">
                    <div class="d-flex align-items-start">
                      <div class="avatar-xs me-3">
                        <span
                          class="avatar-title bg-success rounded-circle font-size-16"
                        >
                          <i class="uil-truck"></i>
                        </span>
                      </div>
                      <div class="flex-1">
                        <h6 class="mt-0 mb-1">Your item is shipped</h6>
                        <div class="font-size-12 text-muted">
                          <p class="mb-1">
                            If several languages coalesce the grammar
                          </p>
                          <p class="mb-0">
                            <i class="mdi mdi-clock-outline"></i> 3 min ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="" class="text-reset notification-item">
                    <div class="d-flex align-items-start">
                      <img
                        src="assets/images/users/avatar-4.jpg"
                        class="me-3 rounded-circle avatar-xs"
                        alt="user-pic"
                      />
                      <div class="flex-1">
                        <h6 class="mt-0 mb-1">Salena Layfield</h6>
                        <div class="font-size-12 text-muted">
                          <p class="mb-1">
                            As a skeptical Cambridge friend of mine occidental.
                          </p>
                          <p class="mb-0">
                            <i class="mdi mdi-clock-outline"></i> 1 hours ago
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="p-2 border-top d-grid">
                  <a
                    class="btn btn-sm btn-link font-size-14 text-center"
                    href="javascript:void(0)"
                  >
                    <i class="uil-arrow-circle-right me-1"></i> View More..
                  </a>
                </div>
              </div>
            </div>

            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item waves-effect"
                id="page-header-user-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  class="rounded-circle header-profile-user"
                  src="{{ auth()->user()->image ? '/' . auth()->user()->image->url : '/storage/images/man-avatar.jfif' }}"
                  alt="Header Avatar"
                />
                <span
                  class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"
                  >Admin</span
                >
                <i
                  class="uil-angle-down d-none d-xl-inline-block font-size-15"
                ></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="{{ route('admin.show',auth()->user()->id) }}"
                  ><i
                    class="uil uil-user-circle font-size-18 align-middle text-muted me-1"
                  ></i>
                  <span class="align-middle">مشاهده پروفایل</span></a
                >
                <a class="dropdown-item" href="#"
                  ><i
                    class="uil uil-wallet font-size-18 align-middle me-1 text-muted"
                  ></i>
                  <span class="align-middle">My Wallet</span></a
                >
                <a class="dropdown-item d-block" href="#"
                  ><i
                    class="uil uil-cog font-size-18 align-middle me-1 text-muted"
                  ></i>
                  <span class="align-middle">Settings</span>
                  <span class="badge bg-soft-success rounded-pill mt-1 ms-2"
                    >03</span
                  ></a
                >
                <a class="dropdown-item" href="#"
                  ><i
                    class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"
                  ></i>
                  <span class="align-middle">Lock screen</span></a
                >
                <a
                  class="dropdown-item"
                  href="{{ route('admin.logout') }}"
                  ><i
                    class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"
                  ></i>
                  <span class="align-middle">خروج</span></a
                >
                <form
                  id="logout-form"
                  action="logout"
                  method="POST"
                  style="display: none"
                >
                  <input
                    type="hidden"
                    name="_token"
                    value="irDboVrIO3ytDzHOgYz43zKQf4gNOWCjqwSxN6vp"
                  />
                </form>
              </div>
            </div>

            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item noti-icon right-bar-toggle waves-effect"
              >
                <i class="uil-cog"></i>
              </button>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <a href="index" class="logo logo-dark">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-dark.png" alt="" height="20" />
            </span>
          </a>

          <a href="index" class="logo logo-light">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-light.png" alt="" height="20" />
            </span>
          </a>
        </div>

        <button
          type="button"
          class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"
        >
          <i class="fa fa-fw fa-bars"></i>
        </button>

        <div data-simplebar class="sidebar-menu-scroll">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                <a href="index">
                  <i class="uil-home-alt"></i
                  ><span class="badge rounded-pill bg-primary float-end"
                    >01</span
                  >
                  <span>داشبورد</span>
                </a>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-store"></i>
                  <span>مطالب</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{ route('post.index') }}">نمایش همه</a></li>
                  <li><a href="{{ route('post.create') }}">جدید</a></li>
                  <li><a href="{{ route('post.trash') }}">زباله دان</a></li>
                  <li><a href="ecommerce-orders">Orders</a></li>
                  <li><a href="ecommerce-customers">Customers</a></li>
                  <li><a href="ecommerce-cart">Cart</a></li>
                  <li><a href="ecommerce-checkout">Checkout</a></li>
                  <li><a href="ecommerce-shops">Shops</a></li>
                  <li><a href="ecommerce-add-product">Add Product</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-store"></i>
                  <span>دسته بندی</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{ route('category.index') }}">نمایش همه</a></li>
                  <li><a href="{{ route('category.index') }}">جدید</a></li>
                  <li><a href="{{ route('category.trash') }}">زباله دان</a></li>
                  <li><a href="ecommerce-orders">Orders</a></li>
                  <li><a href="ecommerce-customers">Customers</a></li>
                  <li><a href="ecommerce-cart">Cart</a></li>
                  <li><a href="ecommerce-checkout">Checkout</a></li>
                  <li><a href="ecommerce-shops">Shops</a></li>
                  <li><a href="ecommerce-add-product">Add Product</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-window-section"></i>
                  <span>Layouts</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                  <li>
                    <a href="javascript: void(0);" class="has-arrow"
                      >Vertical</a
                    >
                    <ul class="sub-menu" aria-expanded="true">
                      <li><a href="layouts-dark-sidebar">Dark Sidebar</a></li>
                      <li>
                        <a href="layouts-compact-sidebar">Compact Sidebar</a>
                      </li>
                      <li><a href="layouts-icon-sidebar">Icon Sidebar</a></li>
                      <li><a href="layouts-boxed">Boxed Width</a></li>
                      <li><a href="layouts-preloader">Preloader</a></li>
                      <li>
                        <a href="layouts-colored-sidebar">Colored Sidebar</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript: void(0);" class="has-arrow"
                      >Horizontal</a
                    >
                    <ul class="sub-menu" aria-expanded="true">
                      <li><a href="layouts-horizontal">Horizontal</a></li>
                      <li>
                        <a href="layouts-hori-topbar-dark">Dark Topbar</a>
                      </li>
                      <li>
                        <a href="layouts-hori-boxed-width">Boxed Width</a>
                      </li>
                      <li><a href="layouts-hori-preloader">Preloader</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="menu-title">Apps</li>

              <li>
                <a href="calendar" class="waves-effect">
                  <i class="uil-calender"></i>
                  <span>Calendar</span>
                </a>
              </li>

              <li>
                <a href="chat" class="waves-effect">
                  <i class="uil-comments-alt"></i>
                  <span class="badge rounded-pill bg-warning float-end"
                    >New</span
                  >
                  <span>Chat</span>
                </a>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-store"></i>
                  <span>Ecommerce</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="ecommerce-products">Products</a></li>
                  <li><a href="ecommerce-product-detail">Product Detail</a></li>
                  <li><a href="ecommerce-orders">Orders</a></li>
                  <li><a href="ecommerce-customers">Customers</a></li>
                  <li><a href="ecommerce-cart">Cart</a></li>
                  <li><a href="ecommerce-checkout">Checkout</a></li>
                  <li><a href="ecommerce-shops">Shops</a></li>
                  <li><a href="ecommerce-add-product">Add Product</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-envelope"></i>
                  <span>Email</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="email-inbox">Inbox</a></li>
                  <li><a href="email-read">Read Email</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-invoice"></i>
                  <span>Invoices</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="invoices-list">Invoice List</a></li>
                  <li><a href="invoices-detail">Invoice Detail</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-book-alt"></i>
                  <span>Contacts</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="contacts-grid">User Grid</a></li>
                  <li><a href="contacts-list">User List</a></li>
                  <li><a href="contacts-profile">Profile</a></li>
                </ul>
              </li>

              <li class="menu-title">Pages</li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-user-circle"></i>
                  <span>Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="auth-login">Login</a></li>
                  <li><a href="auth-register">Register</a></li>
                  <li><a href="auth-recoverpw">Recover Password</a></li>
                  <li><a href="auth-lock-screen">Lock Screen</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-file-alt"></i>
                  <span>Utility</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="pages-starter">Starter Page</a></li>
                  <li><a href="pages-maintenance">Maintenance</a></li>
                  <li><a href="pages-comingsoon">Coming Soon</a></li>
                  <li><a href="pages-timeline">Timeline</a></li>
                  <li><a href="pages-faqs">FAQs</a></li>
                  <li><a href="pages-pricing">Pricing</a></li>
                  <li><a href="pages-404">Error 404</a></li>
                  <li><a href="pages-500">Error 500</a></li>
                </ul>
              </li>

              <li class="menu-title">Components</li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-flask"></i>
                  <span>UI Elements</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="ui-alerts">Alerts</a></li>
                  <li><a href="ui-buttons">Buttons</a></li>
                  <li><a href="ui-cards">Cards</a></li>
                  <li><a href="ui-carousel">Carousel</a></li>
                  <li><a href="ui-dropdowns">Dropdowns</a></li>
                  <li><a href="ui-grid">Grid</a></li>
                  <li><a href="ui-images">Images</a></li>
                  <li><a href="ui-lightbox">Lightbox</a></li>
                  <li><a href="ui-modals">Modals</a></li>
                  <li><a href="ui-rangeslider">Range Slider</a></li>
                  <li><a href="ui-session-timeout">Session Timeout</a></li>
                  <li><a href="ui-progressbars">Progress Bars</a></li>
                  <li><a href="ui-sweet-alert">Sweet-Alert</a></li>
                  <li><a href="ui-tabs-accordions">Tabs & Accordions</a></li>
                  <li><a href="ui-typography">Typography</a></li>
                  <li><a href="ui-video">Video</a></li>
                  <li><a href="ui-general">General</a></li>
                  <li><a href="ui-colors">Colors</a></li>
                  <li><a href="ui-rating">Rating</a></li>
                  <li><a href="ui-notifications">Notifications</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="waves-effect">
                  <i class="uil-shutter-alt"></i>
                  <span class="badge rounded-pill bg-info float-end">6</span>
                  <span>Forms</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="form-elements">Basic Elements</a></li>
                  <li><a href="form-validation">Validation</a></li>
                  <li><a href="form-advanced">Advanced Plugins</a></li>
                  <li><a href="form-editors">Editors</a></li>
                  <li><a href="form-uploads">File Upload</a></li>
                  <li><a href="form-xeditable">Xeditable</a></li>
                  <li><a href="form-repeater">Repeater</a></li>
                  <li><a href="form-wizard">Wizard</a></li>
                  <li><a href="form-mask">Mask</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-list-ul"></i>
                  <span>Tables</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="tables-basic">Bootstrap Basic</a></li>
                  <li><a href="tables-datatable">Datatables</a></li>
                  <li><a href="tables-responsive">Responsive</a></li>
                  <li><a href="tables-editable">Editable</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-chart"></i>
                  <span>Charts</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="charts-apex">Apex</a></li>
                  <li><a href="charts-chartjs">Chartjs</a></li>
                  <li><a href="charts-flot">Flot</a></li>
                  <li><a href="charts-knob">Jquery Knob</a></li>
                  <li><a href="charts-sparkline">Sparkline</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-streering"></i>
                  <span>Icons</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="icons-unicons">Unicons</a></li>
                  <li><a href="icons-boxicons">Boxicons</a></li>
                  <li><a href="icons-materialdesign">Material Design</a></li>
                  <li><a href="icons-dripicons">Dripicons</a></li>
                  <li><a href="icons-fontawesome">Font Awesome</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-location-point"></i>
                  <span>Maps</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="maps-google">Google</a></li>
                  <li><a href="maps-vector">Vector</a></li>
                  <li><a href="maps-leaflet">Leaflet</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="uil-share-alt"></i>
                  <span>Multi Level</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                  <li><a href="javascript: void(0);">Level 1.1</a></li>
                  <li>
                    <a href="javascript: void(0);" class="has-arrow"
                      >Level 1.2</a
                    >
                    <ul class="sub-menu" aria-expanded="true">
                      <li><a href="javascript: void(0);">Level 2.1</a></li>
                      <li><a href="javascript: void(0);">Level 2.2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      <!-- Left Sidebar End -->
      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">


        @yield('content')
        <!-- End Page-content -->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear());
                </script>
                © Minible.
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                  Crafted with <i class="mdi mdi-heart text-danger"></i> by
                  <a
                    href="https://themesbrand.com/"
                    target="_blank"
                    class="text-reset"
                    >Themesbrand</a
                  >
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <!-- Right Sidebar -->
    <div class="right-bar">
      <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">
          <h5 class="m-0 me-2">Settings</h5>

          <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
            <i class="mdi mdi-close noti-icon"></i>
          </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
          <div class="mb-2">
            <img
              src="assets/images/layouts/layout-1.jpg"
              class="img-fluid img-thumbnail"
              alt=""
            />
          </div>
          <div class="form-check form-switch mb-3">
            <input
              type="checkbox"
              class="form-check-input theme-choice"
              id="light-mode-switch"
              checked
            />
            <label class="form-check-label" for="light-mode-switch"
              >Light Mode</label
            >
          </div>

          <div class="mb-2">
            <img
              src="assets/images/layouts/layout-2.jpg"
              class="img-fluid img-thumbnail"
              alt=""
            />
          </div>
          <div class="form-check form-switch mb-3">
            <input
              type="checkbox"
              class="form-check-input theme-choice"
              id="dark-mode-switch"
              data-bsStyle="assets/css/bootstrap-dark.min.css"
              data-appStyle="assets/css/app-dark.min.css"
            />
            <label class="form-check-label" for="dark-mode-switch"
              >Dark Mode</label
            >
          </div>

          <div class="mb-2">
            <img
              src="assets/images/layouts/layout-3.jpg"
              class="img-fluid img-thumbnail"
              alt=""
            />
          </div>
          <div class="form-check form-switch mb-5">
            <input
              type="checkbox"
              class="form-check-input theme-choice"
              id="rtl-mode-switch"
              data-appStyle="assets/css/app.rtl.css"
            />
            <label class="form-check-label" for="rtl-mode-switch"
              >RTL Mode</label
            >
          </div>
        </div>
      </div>
      <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/node-waves.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery-counterup.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/backend/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/backend/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/backend/js/fa.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sweet-alert.js') }}"></script>

    @yield('footer')
  </body>
</html>
