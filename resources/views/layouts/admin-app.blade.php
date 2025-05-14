<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Favicons -->
     <link rel="apple-touch-icon" sizes="180x180" href="{{asset('users/assets/img/favicon/favicon.png')}}" >
     <link rel="icon" type="image/png" sizes="32x32" href="{{asset('users/assets/img/favicon/favicon.png')}}" >
     <link rel="icon" type="image/png" sizes="16x16" href="{{asset('users/assets/img/favicon/favicon.png')}}" >
     <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest')}}" >
     <meta name="msapplication-TileColor" content="#da532c">
     <meta name="theme-color" content="#ffffff">

    <!-- plugin css -->
    <link href="{{asset('admins/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('admins/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{asset('admins/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    {{-- FilePond Multiple File Upload --}}
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet">

    {{-- imageuploadify --}}
    <link href="{{asset('admins/assets/css/imageuploadify.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{asset('admins/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('admins/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <!-- Select2 Style -->
    
    <link href="{{asset('admins/assets/css/select2.min.css')}}" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">

</head>

<body>
    <div id="layout-wrapper">

      <header id="page-topbar">
        <div class="layout-width">
          <div class="navbar-header">
            @include('admin.flash-message')
            <div class="d-flex">
              <button type="button"
                title="Menu Icon"
                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                id="topnav-hamburger-icon"
              >
                <span class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </button>

              <!-- App Search-->
              <form class="app-search d-none d-md-block">
                <!--<div class="position-relative">-->
<!--                  <input
                    type="text"
                    class="form-control"
                    placeholder="بحث .."
                    autocomplete="off"
                    id="search-options"
                    value=""
                  />-->
<!--                  <span class="mdi mdi-magnify search-widget-icon"></span>
                  <span
                    class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                    id="search-close-options"
                  ></span>
                </div>-->
                <div
                  class="dropdown-menu dropdown-menu-lg"
                  id="search-dropdown"
                >
                  <div data-simplebar style="max-height: 320px">
                    <!-- item-->
                    <div class="dropdown-header">
                      <h6 class="text-overflow text-muted mb-0 text-uppercase">
                        Recent Searches
                      </h6>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                      <a
                        href="index.html"
                        class="btn btn-soft-secondary btn-sm btn-rounded"
                        >how to setup <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                      <a
                        href="index.html"
                        class="btn btn-soft-secondary btn-sm btn-rounded"
                        >buttons <i class="mdi mdi-magnify ms-1"></i
                      ></a>
                    </div>
                    <!-- item-->
                    <div class="dropdown-header mt-2">
                      <h6 class="text-overflow text-muted mb-1 text-uppercase">
                        Pages
                      </h6>
                    </div>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>Analytics Dashboard</span>
                    </a>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>Help Center</span>
                    </a>

                    <!-- item-->
                    <a
                      href="javascript:void(0);"
                      class="dropdown-item notify-item"
                    >
                      <i
                        class="ri-user-settings-line align-middle fs-18 text-muted me-2"
                      ></i>
                      <span>My account settings</span>
                    </a>

                    <!-- item-->
                    <div class="dropdown-header mt-2">
                      <h6 class="text-overflow text-muted mb-2 text-uppercase">
                        Members
                      </h6>
                    </div>

                    <div class="notification-list">
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="../assets/images/users/avatar-2.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">Angela Bernier</h6>
                            <span class="fs-11 mb-0 text-muted">Manager</span>
                          </div>
                        </div>
                      </a>
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="../assets/images/users/avatar-3.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">David Grasso</h6>
                            <span class="fs-11 mb-0 text-muted"
                              >Web Designer</span
                            >
                          </div>
                        </div>
                      </a>
                      <!-- item -->
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item notify-item py-2"
                      >
                        <div class="d-flex">
                          <img
                            src="../assets/images/users/avatar-5.jpg"
                            class="me-3 rounded-circle avatar-xs"
                            alt="user-pic"
                          />
                          <div class="flex-1">
                            <h6 class="m-0">Mike Bunch</h6>
                            <span class="fs-11 mb-0 text-muted"
                              >React Developer</span
                            >
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="text-center pt-3 pb-1">
                    <a
                      href="pages-search-results.html"
                      class="btn btn-primary btn-sm"
                      >View All Results <i class="ri-arrow-right-line ms-1"></i
                    ></a>
                  </div>
                </div>
              </form>
            </div>

            <div class="d-flex align-items-center">
              <div class="dropdown d-md-none topbar-head-dropdown header-item">
                <button
                  type="button"
                  class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                  id="page-header-search-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-search fs-22"></i>
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
                          placeholder="Search ..."
                          aria-label="Recipient's username"
                        />
                        <button class="btn btn-primary" type="submit">
                          <i class="mdi mdi-magnify"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>


              <div class="dropdown ms-sm-3 header-item topbar-user">
                <button
                  type="button"
                  class="btn"
                  id="page-header-user-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-flex align-items-center">
                    <img
                      class="rounded-circle header-profile-user"
                      src="{{ asset('images/favicon.ico')}}"
                      alt="Header Avatar"
                    />
<!--                    <span class="text-start ms-xl-2">
                      <span
                        class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"
                        >محمد علي</span
                      >
                      <span
                        class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text"
                        >محاسب</span
                      >
                    </span>-->
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <a class="dropdown-item" href="{{route('admin.change-password.form')}}"
                    ><i
                      class="mdi mdi-logout text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle" data-key="t-logout"
                      >Change Password</span
                    ></a
                  >
                  <a class="dropdown-item" href="{{route('admin.logout')}}"
                    ><i
                      class="mdi mdi-logout text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle" data-key="t-logout"
                      >Logout</span
                    ></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

        <div class="app-menu navbar-menu">
             <!--LOGO--> 
            <div class="navbar-brand-box" style="display: none;">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../assets/images/logo-sm.png" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/images/logo.png" alt="" height="90">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <div class="group">
                            <h6 class="submenu-hdr">Main</h6>
                            <li class="nav-item">
                                <a href="{{route('admin.home')}}" class="nav-link"  title=" Dashboard">  <i class="las la-home"></i> <span>Dashboard </span></a>
                            </li> 
                        </div>

                        <div class="group">
                            <h6 class="submenu-hdr">Emails</h6>
                            <li class="nav-item">
                                <a href="{{route('admin.emails.index')}}" class="nav-link"  title="Projects">  <i class="las la-dolly"></i><span>Emails</span> </a>
                            </li>

                           
                        </div>

                        <div class="group">
                            <h6 class="submenu-hdr">Admins</h6>
                            <li class="nav-item">
                                <a href="{{route('admin.admins.index')}}" class="nav-link"  title="Projects">  <i class="las la-dolly"></i><span>Admins</span> </a>
                            </li>

                           
                        </div>

                        

                      
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
         <div class="vertical-overlay"></div>
    </div>
    @yield('content')

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
   

    <!-- JAVASCRIPT -->
    <script src="{{asset('admins/assets/js/layout.js')}}"></script>
     
    <script src="{{asset('admins/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admins/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admins/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('admins/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admins/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('admins/assets/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('admins/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map-->
    <script src="{{asset('admins/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('admins/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{asset('admins/assets/js/pages/dashboard-analytics.init.js')}}"></script>

    <!-- apexcharts init -->
    <script src="{{asset('admins/assets/js/pages/apexcharts-column.init.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{asset('admins/assets/js/pages/dashboard-crm.init.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{asset('admins/assets/libs/chart.js/chart.min.js')}}"></script>

    <!-- chartjs init -->
    <script src="{{asset('admins/assets/js/pages/chartjs.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('admins/assets/js/app.js')}}"></script>

  

     <!-- select2 -->
     <script src="{{asset('admins/assets/js/cdnjs.cloudflare.com_ajax_libs_jquery_3.2.1_jquery.min.js')}}"></script>

     <script src="{{asset('admins/assets/js/select2.min.js')}}"></script>


     <!-- fileUpload -->
    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    </script>



 <!-- Upload multi images plugin -->
   <script>
    //I added event handler for the file upload control to access the files properties.
      document.addEventListener("DOMContentLoaded", init, false);

      //To save an array of attachments
      var AttachmentArray = [];

      //counter for attachment array
      var arrCounter = 0;

      //to make sure the error message for number of files will be shown only one time.
      var filesCounterAlertStatus = false;

      //un ordered list to keep attachments thumbnails
      var ul = document.createElement("ul");
      ul.className = "thumb-Images";
      ul.id = "imgList";

      function init() {
        //add javascript handlers for the file upload event
        document
          .querySelector("#files")
          .addEventListener("change", handleFileSelect, false);
      }

      //the handler for file upload event
      function handleFileSelect(e) {
        
        //to make sure the user select file/files
        if (!e.target.files) return;

        //To obtaine a File reference
        var files = e.target.files;

        

        // Loop through the FileList and then to render image files as thumbnails.
        var checkIdExists = document.getElementById("imgList");
        if(checkIdExists) {
          document.getElementById("imgList").textContent = '';
        }

          for (var i = 0, f; (f = files[i]); i++) {
          //instantiate a FileReader object to read its contents into memory
          var fileReader = new FileReader();

          // Closure to capture the file information and apply validation.
          fileReader.onload = (function(readerEvt) {
            return function(e) {
              //Apply the validation rules for attachments upload
              ApplyFileValidationRules(readerEvt);

              //Render attachments thumbnails.
              RenderThumbnail(e, readerEvt);

              //Fill the array of attachment
              FillAttachmentArray(e, readerEvt);
            };
          })(f);

          // Read in the image file as a data URL.
          // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
          // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
          fileReader.readAsDataURL(f);
        }
        document
          .getElementById("files")
          .addEventListener("change", handleFileSelect, false);
      }

      //To remove attachment once user click on x button
      jQuery(function($) {
        $("div").on("click", ".img-wrap .close", function() {
          var id = $(this)
            .closest(".img-wrap")
            .find("img")
            .data("id");

          //to remove the deleted item from array
          var elementPos = AttachmentArray.map(function(x) {
            return x.FileName;
          }).indexOf(id);
          if (elementPos !== -1) {
            AttachmentArray.splice(elementPos, 1);
          }

          //to remove image tag
          $(this)
            .parent()
            .find("img")
            .not()
            .remove();

          //to remove div tag that contain the image
          $(this)
            .parent()
            .find("div")
            .not()
            .remove();

          //to remove div tag that contain caption name
          $(this)
            .parent()
            .parent()
            .find("div")
            .not()
            .remove();

          //to remove li tag
          var lis = document.querySelectorAll("#imgList li");
          for (var i = 0; (li = lis[i]); i++) {
            if (li.innerHTML == "") {
              li.parentNode.removeChild(li);
            }
          }
        });
      });

      //Apply the validation rules for attachments upload
      function ApplyFileValidationRules(readerEvt) {
        //To check file type according to upload conditions
        if (CheckFileType(readerEvt.type) == false) {
          alert(
            "The file (" +
              readerEvt.name +
              ") does not match the upload conditions, You can only upload jpg/png/gif files"
          );
          e.preventDefault();
          return;
        }

        //To check file Size according to upload conditions
        if (CheckFileSize(readerEvt.size) == false) {
          alert(
            "The file (" +
              readerEvt.name +
              ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
          );
          e.preventDefault();
          return;
        }

        //To check files count according to upload conditions
        if (CheckFilesCount(AttachmentArray) == false) {
          if (!filesCounterAlertStatus) {
            filesCounterAlertStatus = true;
            alert(
              "You have added more than 10 files. According to upload conditions you can upload 10 files maximum"
            );
          }
          e.preventDefault();
          return;
        }
      }

      //To check file type according to upload conditions
      function CheckFileType(fileType) {
        if (fileType == "image/jpeg") {
          return true;
        } else if (fileType == "image/png") {
          return true;
        } else if (fileType == "image/gif") {
          return true;
        } else {
          return false;
        }
        return true;
      }

      //To check file Size according to upload conditions
      function CheckFileSize(fileSize) {
        if (fileSize < 900000) {
          return true;
        } else {
          return false;
        }
        return true;
      }

      //To check files count according to upload conditions
      function CheckFilesCount(AttachmentArray) {
        //Since AttachmentArray.length return the next available index in the array,
        //I have used the loop to get the real length
        var len = 0;
        for (var i = 0; i < AttachmentArray.length; i++) {
          if (AttachmentArray[i] !== undefined) {
            len++;
          }
        }
        //To check the length does not exceed 10 files maximum
        if (len > 9) {
          return false;
        } else {
          return true;
        }
      }

      //Render attachments thumbnails.
      function RenderThumbnail(e, readerEvt) {
        var li = document.createElement("li");
        ul.appendChild(li);
        li.innerHTML = [
          '<div class="img-wrap"> <span class="close">&times;</span>' +
            '<img class="thumb" src="',
          e.target.result,
          '" title="',
          escape(readerEvt.name),
          '" data-id="',
          readerEvt.name,
          '"/>' + "</div>"
        ].join("");

        var div = document.createElement("div");
        div.className = "FileNameCaptionStyle";
        li.appendChild(div);
        div.innerHTML = [readerEvt.name].join("");
        document.getElementById("Filelist").insertBefore(ul, null);
      }

      //Fill the array of attachment
      function FillAttachmentArray(e, readerEvt) {
        AttachmentArray[arrCounter] = {
          AttachmentType: 1,
          ObjectType: 1,
          FileName: readerEvt.name,
          FileDescription: "Attachment",
          NoteText: "",
          MimeType: readerEvt.type,
          Content: e.target.result.split("base64,")[1],
          FileSizeInBytes: readerEvt.size
        };
        arrCounter = arrCounter + 1;
      }
  </script>
 



    <!-- calculator code -->
    <script type='text/javascript'>
        // display value
        function displayValue(val) {
        document.getElementById("calc-result").value += val;
        }

        // evaluates the digit and return result
        function solve() {
        let x = document.getElementById("calc-result").value;
        let y = eval(x);
        document.getElementById("calc-result").value = y;
        }

        // clear the result
        function clearResult() {
        document.getElementById("calc-result").value = "";
        }
    </script> 


    <!-- google pie chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);

        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]
        ]);

        var options = {
            title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }

        $(window).on("throttledresize", function (event) {
            var options = {
                width: '100%',
                height: 'auto'
            };

            var data = google.visualization.arrayToDataTable([]);
            drawChart(data, options);
        });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
        @yield('js')

</body>


</html>
