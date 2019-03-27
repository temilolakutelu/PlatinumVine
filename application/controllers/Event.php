<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller
{

    public function __construct()
    {
        Parent::__construct();
        $this->load->model("Calendar_model");
    }

    public function index()
    {
        $this->load->view("calendar", array());
    }
    public function get_events()
    {
        // Our Start and End Dates
        $start = $this->input->get("start");
        $end = $this->input->get("end");

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $start_format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $end_format = $enddt->format('Y-m-d H:i:s');

        $events = $this->Calendar_model->get_events($start_format, $end_format);

        $data_events = array();

        foreach($events ->result() as $r) {

            $data_events[] = array(
                "id" => $r->ID,
                "title" => $r->title,
                "description" => $r->description,
                "end" => $r->end,
                "start" => $r->start
            );
        }

        echo json_encode(array("events" => $data_events));
        exit();
 }

 public function add_event() 
{
    /* Our calendar data */
    $name = $this->input->post("name", TRUE);
    $desc = $this->input->post("description", TRUE);
    $start_date = $this->input->post("start_date", TRUE);
    $end_date = $this->input->post("end_date", TRUE);

    // echo $start_date;
    if(!empty($start_date)) {
            $sd = date('Y-m-d H:i:s', strtotime($start_date));
            
    //    $start_date = $sd->format('Y-m-d H:i:s');
    //    $start_date_timestamp = $sd->getTimestamp();
    } else {
       $start_date = date("Y-m-d H:i:s", time());
       $start_date_timestamp = time();
    }

    if(!empty($end_date)) {
            $ed =date('Y-m-d H:i:s', strtotime($start_date));
    //    $end_date_timestamp = $ed->getTimestamp();
    } else {
       $end_date = date("Y-m-d H:i:s", time());
       $end_date_timestamp = time();
    }

    $this->Calendar_model->add_event(array(
       "title" => $name,
       "description" => $desc,
       "start" => $sd,
       "end" => $ed
       )
    );

    redirect(site_url("event"));
}

public function edit_event()
     {
          $eventid = intval($this->input->post("eventid"));
          $event = $this->Calendar_model->get_event($eventid);
          if($event->num_rows() == 0) {
               echo"Invalid Event";
               exit();
          }

          $event->row();

          /* Our calendar data */
          $name = $this->input->post("name");
          $desc = $this->input->post("description");
          $start_date = $this->input->post("start_date");
          $end_date = $this->input->post("end_date");
          $delete = intval($this->input->post("delete"));

          if(!$delete) {

               if(!empty($start_date)) {
                $sd = date('Y-m-d H:i:s', strtotime($start_date));
                   
               } else {
                    $start_date = date("Y-m-d H:i:s", time());
                    $start_date_timestamp = time();
               }

               if(!empty($end_date)) {
                $ed = date('Y-m-d H:i:s', strtotime($end_date));
               } else {
                    $end_date = date("Y-m-d H:i:s", time());
                    $end_date_timestamp = time();
               }

               $this->Calendar_model->update_event($eventid, array(
                    "title" => $name,
                    "description" => $desc,
                    "start" => $sd,
                    "end" => $ed,
                    )
               );

          } else {
               $this->Calendar_model->delete_event($eventid);
          }

          redirect(site_url("event"));
     }
}
 