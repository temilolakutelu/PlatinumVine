<link rel="stylesheet" href="http://fullcalendar.io/releases/fullcalendar/3.10.0/fullcalendar.min.css">
<script src='http://fullcalendar.io/releases/fullcalendar/3.10.0/lib/moment.min.js'></script>
<script src='http://fullcalendar.io/releases/fullcalendar/3.10.0/lib/jquery.min.js'></script>
<script src='http://fullcalendar.io/releases/fullcalendar/3.10.0/fullcalendar.min.js'></script>


<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2>Events Calendar</h2>

            <div id="calendar">

            </div>

        </div>
    </div>
</div>

<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        outline: none !important;
    }

    #calendar>.fc-toolbar>.fc-left>*,
    #calendar>.fc-toolbar>.fc-left>.btn-group>*,
    #calendar>.fc-toolbar>.fc-right>*,
    #calendar>.fc-toolbar>.fc-right>.btn-group>* {
        color: white;
        background: #080c12;
        outline: none!important;
        border: 1px solid;
    }

    #calendar>.fc-toolbar>.fc-left>.btn-group>*:hover,
    #calendar>.fc-toolbar>.fc-left>.btn-group>*:active,
    #calendar>.fc-toolbar>.fc-right>.btn-group>*:hover,
    #calendar>.fc-toolbar>.fc-right>.btn-group>*:active,
        {
        background: grey;
        outline: none !important;
    }
</style>

<div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-content">
        <div class="modal-header">

            <h4 class="modal-title" id="myModalLabel"></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        </div>
    </div>

</div>




<script type="text/javascript">
    $(document).ready(function() {

        var date_last_clicked = null;

        $('#calendar').fullCalendar({
            themeSystem: 'bootstrap4',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
            },
            weekNumbers: true,
            eventLimit: true,
            eventSources: [{
                events: function(start, end, timezone, callback) {
                    $.ajax({
                        url: '<?php echo base_url() ?>event/get_events',
                        dataType: 'json',
                        data: {
                            // our hypothetical feed requires UNIX timestamps
                            start: start.unix(),
                            end: end.unix()
                        },
                        success: function(msg) {
                            var events = msg.events;
                            callback(events);
                        }
                    });
                }
            }, ],
            eventClick: function(event, jsEvent, view) {
                $('.modal-title').html(event.title);
                $('.modal-body').html(event.description);
                // Get the modal
                $('#editModal').css('display', 'block');
                $('.close').click(function() {
                    $('#editModal').css('display', 'none');
                })
                // When the user clicks anywhere outside of the modal, close it
                $(document).on("click", function(event) {
                    if ($(event.target).has(".modal-content").length) {
                        $('#editModal').css('display', 'none');
                    }
                });
            },
        });
    });
</script> 