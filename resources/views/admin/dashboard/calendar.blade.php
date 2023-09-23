@extends('admin.layout.admin_mainlayout')

@section("title-section")
Calendar
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/fullcalendar.min.css" rel="stylesheet" />
     <link href="{{ URL::to('/') }}/dist/css/calendar.css" rel="stylesheet" />
     <!-- <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
@endsection

@section("admin-jq-section")
<!-- All Jquery -->
     <!-- -------------------------------------------------------------- -->
     <script src="{{ URL::to('/') }}/assets/libs/jquery/dist/jquery.min.js"></script>
     <script src="{{ URL::to('/') }}/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
     <!-- Bootstrap tether Core JavaScript -->
     <script src="{{ URL::to('/') }}/assets/libs/popper.js/popper.min.js"></script>
     <script src="{{ URL::to('/') }}/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
     <!-- apps -->
     <script src="{{ URL::to('/') }}/dist/js/app.min.js"></script>
     <script src="{{ URL::to('/') }}/dist/js/app.init.js"></script>
     <script src="{{ URL::to('/') }}/dist/js/app-style-switcher.js"></script>
     <!-- slimscrollbar scrollbar JavaScript -->
     <script src="{{ URL::to('/') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
     <script src="{{ URL::to('/') }}/assets/extra-libs/sparkline/sparkline.js"></script>
     <!--Wave Effects -->
     <script src="{{ URL::to('/') }}/dist/js/waves.js"></script>
     <!--Menu sidebar -->
     <script src="{{ URL::to('/') }}/dist/js/sidebarmenu.js"></script>
     <!--Custom JavaScript -->
     <script src="{{ URL::to('/') }}/dist/js/feather.min.js"></script>
     <script src="{{ URL::to('/') }}/dist/js/custom.min.js"></script>
     <!--This page JavaScript -->
     <script src="{{ URL::to('/') }}/assets/libs/moment/min/moment.min.js"></script>
     <script src="{{ URL::to('/') }}/dist/js/fullcalendar.min.js"></script>
     <script>
       !(function ($) {
  "use strict";

  var CalendarApp = function () {
    this.$body = $("body");
    (this.$calendar = $("#calendar")),
      (this.$event = "#calendar-events div.calendar-events"),
      (this.$categoryForm = $("#add-new-event form")),
      (this.$extEvents = $("#calendar-events")),
      (this.$modal = $("#my-event")),
      (this.$saveCategoryBtn = $(".save-category")),
      (this.$calendarObj = null);
  };

  /* on drop */
  (CalendarApp.prototype.onDrop = function (eventObj, date) {
    var $this = this;
    // retrieve the dropped element's stored Event Object
    var originalEventObject = eventObj.data("eventObject");
    var $categoryClass = eventObj.attr("data-class");
    // we need to copy it, so that multiple events don't have a reference to the same object
    var copiedEventObject = $.extend({}, originalEventObject);
    // assign it the date that was reported
    copiedEventObject.start = date;
    if ($categoryClass) copiedEventObject["className"] = [$categoryClass];
    // render the event on the calendar
    $this.$calendar.fullCalendar("renderEvent", copiedEventObject, true);
    // is the "remove after drop" checkbox checked?
    if ($("#drop-remove").is(":checked")) {
      // if so, remove the element from the "Draggable Events" list
      eventObj.remove();
    }
  }),
    /* on click on event */
    (CalendarApp.prototype.onEventClick = function (calEvent, jsEvent, view) {
      var $this = this;
      var form = $("<form></form>");
      form.append("<label>Change event name</label>");
      form.append(
        "<div class='input-group'><input class='form-control' type=text value='" +
          calEvent.title +
          "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>"
      );
      $this.$modal.show();
      $(".bckdrop").addClass("show");
      $(".bckdrop").removeClass("hide");
      $this.$modal
        .find(".delete-event")
        .show()
        .end()
        .find(".save-event")
        .hide()
        .end()
        .find(".modal-body")
        .empty()
        .prepend(form)
        .end()
        .find(".delete-event")
        .unbind("click")
        .click(function () {
          $this.$calendarObj.fullCalendar("removeEvents", function (ev) {
            return ev._id == calEvent._id;
          });
          $this.$modal.hide("hide");
          $(".bckdrop").addClass("hide");
          $(".bckdrop").removeClass("show");
        });
      $this.$modal.find("form").on("submit", function () {
        calEvent.title = form.find("input[type=text]").val();
        $this.$calendarObj.fullCalendar("updateEvent", calEvent);
        $this.$modal.hide("hide");
        $(".bckdrop").addClass("hide");
        $(".bckdrop").removeClass("show");
        return false;
      });
    }),
    /* on select */
    (CalendarApp.prototype.onSelect = function (start, end, allDay) {
      var $this = this;
      $this.$modal.show();
      $(".bckdrop").addClass("show");
      $(".bckdrop").removeClass("hide");
      var form = $("<form></form>");
      form.append("<div class='row'></div>");
      form
        .find(".row")
        .append(
          "<div class='col-md-6'><div class='form-group'><label class='control-label'>Event Name</label><input class='form-control' placeholder='Insert Event Name' type='text' name='title'/></div></div>"
        )
        .append(
          "<div class='col-md-6'><div class='form-group'><label class='control-label'>Category</label><select class='form-select' name='category'></select></div></div>"
        )
        .find("select[name='category']")
        .append("<option value='bg-danger'>Danger</option>")
        .append("<option value='bg-success'>Success</option>")
        .append("<option value='bg-primary'>Primary</option>")
        .append("<option value='bg-info'>Info</option>")
        .append("<option value='bg-warning'>Warning</option></div></div>");
      $this.$modal
        .find(".delete-event")
        .hide()
        .end()
        .find(".save-event")
        .show()
        .end()
        .find(".modal-body")
        .empty()
        .prepend(form)
        .end()
        .find(".save-event")
        .unbind("click")
        .click(function () {
          form.submit();
          $(".bckdrop").addClass("hide");
          $(".bckdrop").removeClass("show");
        });
      // $this.$modal.find(".close-dialog").click(function () {
      //   $this.$modal.hide("hide");
      //   $(".bckdrop").addClass("hide");
      //   $(".bckdrop").removeClass("show");
      // });
      // $this.$modal.find(".close-dialog").click(function () {
      //   console.log("clicked");
      // });
      $this.$modal.find(".close-dialog").click(function () {
        $this.$modal.hide("hide");
        $(".bckdrop").addClass("hide");
        $(".bckdrop").removeClass("show");
        $this.$modal.hide();
        // $("body").removeClass("modal-open");
      });
      $("body").addClass("modal-open");
      $this.$modal.find("form").on("submit", function () {
        var title = form.find("input[name='title']").val();
        var beginning = form.find("input[name='beginning']").val();
        var ending = form.find("input[name='ending']").val();
        var categoryClass = form
          .find("select[name='category'] option:checked")
          .val();
        if (title !== null && title.length != 0) {
          $this.$calendarObj.fullCalendar(
            "renderEvent",
            {
              title: title,
              start: start,
              end: end,
              allDay: false,
              className: categoryClass,
            },
            true
          );
          $this.$modal.hide("hide");
          $(".bckdrop").addClass("hide");
          $(".bckdrop").removeClass("show");
        } else {
          alert("You have to give a title to your event");
        }
        return false;
      });
      $this.$calendarObj.fullCalendar("unselect");
    }),
    (CalendarApp.prototype.enableDrag = function () {
      //init events
      $(this.$event).each(function () {
        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()), // use the element's text as the event title
        };
        // store the Event Object in the DOM element so we can get to it later
        $(this).data("eventObject", eventObject);
        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 999,
          revert: true, // will cause the event to go back to its
          revertDuration: 0, //  original position after the drag
        });
      });
    });
  /* Initializing */
  (CalendarApp.prototype.init = function () {
    this.enableDrag();
    /*  Initialize the calendar  */
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var form = "";
    var today = new Date($.now());

    var defaultEvents = [
     @foreach($exreq as $row)
      {
        title: "Request-{{ $row->request_id  }}",
        start: "<?php echo date('Y-m-d',strtotime($row->exchange_date)); ?>",
        className: "bg-danger",
        <?php if($row->exchange_status=="pending") 
        { ?>
        url:"/admin/exchange/pending/details/<?php echo $row->request_id; ?>"
        <?php }  
        else if($row->exchange_status=="complete") 
        { ?>
          url:"/admin/exchange/complete/details/<?php echo $row->request_id; ?>"
        <?php } 
        else if($row->exchange_status=="approved")
        {?>
        url:"/admin/exchange/approved/details/<?php echo $row->request_id; ?>"
        <?php  }
        else if($row->exchange_status=="Admin complete"){?>
        url:"/admin/exchange/admin_complete/details/<?php echo $row->request_id; ?>"
        <?php
        }
        else if($row->exchange_status=="assigned"){ ?>
        url:"/admin/exchange/assigned/details/<?php echo $row->request_id; ?>"
        <?php
        }
        else if($row->exchange_status=="canceled"){ ?>
        url:"/admin/exchange/cancel/details/<?php echo $row->request_id; ?>"
        <?php
        }
        ?>
      },
      @endforeach
    
    ];

    var $this = this;
    $this.$calendarObj = $this.$calendar.fullCalendar({
      
      defaultView: "month",
      handleWindowResize: true,
     
      events: defaultEvents,
      editable: false,
      droppable: false, // this allows things to be dropped onto the calendar !!!
      eventLimit: false, // allow "more" link when too many events
      selectable: false,
     
    });
  }),
    //init CalendarApp
    ($.CalendarApp = new CalendarApp()),
    ($.CalendarApp.Constructor = CalendarApp);
})(window.jQuery),
  //initializing CalendarApp
  $(window).on("load", function () {
    $.CalendarApp.init();
  });

     </script>
@endsection

@section("admin-calendar-section")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Calendar </h3>
             </div>
            
           </div>
           <div class="row">
             <div class="col-md-12">
               <div class="card">
                 <div class="">
                   <div class="row">
                     <div class="">
                       <div class="card-body calender-sidebar">
                         <div id="calendar"></div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- BEGIN MODAL -->
           <div class="modal" id="my-event">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header d-flex align-items-center">
                   <h4 class="modal-title"><strong>Add Event </strong></h4>
                   <button type="button" class="btn-close close-dialog" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body"></div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary close-dialog waves-effect" data-bs-dismiss="modal" aria-label="Close">
                    Close
                   </button>
                   <button type="button" class="btn btn-success save-event waves-effect waves-light">
                    Create event
                   </button>
                   <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-bs-dismiss="modal">
                    Delete
                   </button>
                 </div>
               </div>
             </div>
           </div>
           <div class="modal-backdrop bckdrop hide"></div>
           <!-- Modal Add Category -->
           <div class="modal none-border" id="add-new-event">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header d-flex align-items-center">
                   <h4 class="modal-title"><strong>Add </strong> a category </h4>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                   <form>
                     <div class="row">
                       <div class="col-md-6">
                         <label class="control-label">Category Name </label>
                         <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                       </div>
                       <div class="col-md-6">
                         <label class="control-label">Choose Category Color </label>
                         <select class="form-select form-white" data-placeholder="Choose a color..." name="category-color">
                           <option value="success" />Success 
                           <option value="danger" />Danger 
                           <option value="info" />Info 
                           <option value="primary" />Primary 
                           <option value="warning" />Warning 
                           <option value="inverse" />Inverse 
                         </select>
                       </div>
                     </div>
                   </form>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="
                      btn btn-danger
                      waves-effect waves-light
                      save-category
                    " data-bs-dismiss="modal">
                    Save
                   </button>
                   <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                    Close
                   </button>
                 </div>
               </div>
             </div>
           </div>
           <!-- END MODAL -->
         </div>
@endsection