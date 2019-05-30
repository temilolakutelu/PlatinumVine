<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->library('session');
    }
      public function drycleaning()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Dry Cleaning & Shoe Repair Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/drycleaning", $data);

    }
        public function shoe_repair()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Shoe Repair',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/shoe_repair", $data);

    }
    public function pet_services()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Pet Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/pet_services/tab", $data);

    }
     public function pet1()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => "Elliot's House",
            'category_data' => $category,
        );

        $this->template->load('template2', "services/pet_services/pet1", $data);

    }
      public function pet2()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => "The DogFather",
            'category_data' => $category,
        );

        $this->template->load('template2', "services/pet_services/pet2", $data);

    }
      public function pet3()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => "Embark",
            'category_data' => $category,
        );

        $this->template->load('template2', "services/pet_services/pet3", $data);

    }
      public function pet4()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => "Base Paws",
            'category_data' => $category,
        );

        $this->template->load('template2', "services/pet_services/pet4", $data);

    }
      public function pet5()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => "Paw Tracker",
            'category_data' => $category,
        );

        $this->template->load('template2', "services/pet_services/pet5", $data);

    }
    public function concierge()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Concierge Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/concierge/tab", $data);

    }
    public function frontdesk()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Front Desk Services',
            'category_data' => $category,
        );
        $this->template->load('template2', "services/concierge/frontdesk", $data);

    }
     public function concierge_inc()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Concierge INC Services',
            'category_data' => $category,
        );
        $this->template->load('template2', "services/concierge/concierge", $data);

    }
       public function errand()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Errand Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/errand", $data);

    }
    public function housecleaning()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'House Cleaning Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/house_cleaning", $data);

    }
    public function culinary()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Culinary Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/tab", $data);

    }
      public function catering()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Catering Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/catering", $data);

    }
         public function east_meets()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Catering Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/east_meets", $data);

    }
         public function season_to_taste()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Catering Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/season_to_taste", $data);

    }
         public function above_and_beyond()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Catering Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/above_and_beyond", $data);

    }
         public function cooking()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Cooking Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/cooking", $data);

    }
         public function personal_chef()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Personal Chef Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/chef", $data);

    }
         public function pre_prepared_meals()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Pre-prepared Meals',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/pre_prepared_meals", $data);

    }
         public function cupcakes()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Wicked Good Cupcakes',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/cupcakes", $data);

    }
         public function boston_chai()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Boston Chai Party',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/boston", $data);

    }
         public function latenite()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Late Nite Eats',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/culinary/latenite", $data);

    }
    public function entertainment()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Entertainment',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/entertainment", $data);

    }
     public function wellness()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Health And Wellness',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/tab", $data);

    }
     public function fitness_apparel()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Fitness Aopparel',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/fitness_apparel", $data);

    }
     public function personal_fitness()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Personal Fitness',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/personal_fitness", $data);

    }
     public function stacey()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Personal Fitness',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/stacey", $data);

    }
      public function jenn()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Personal Fitness',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/jenn", $data);

    }
      public function wavehealth()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Personal Fitness',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/wavehealth", $data);

    }
      public function equinox()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Personal Fitness',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/equinox", $data);

    }
  public function exclusive_spas()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Exclusive Spas',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/spa", $data);

    }
     public function nutrition()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Nutrition',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/nutrition", $data);

    }
      public function hailey()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Nutrition',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/hailey", $data);

    }
       public function centralsquare()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Nutrition',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/centralsquare", $data);

    }
     public function aestheticians()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'aestheticians',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/aesthetician", $data);

    }
     public function medspa()
    {
        $category = $this->Category_model->get_categories();
        $data = array(
            'title' => 'Seaport Medspa',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/wellness/medspa", $data);

    }
     public function event()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Wedding And Event Planning',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/event/tab", $data);

    }
      public function rafanelli()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Wedding And Event Planning',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/event/rafanelli", $data);

    }
      public function corinthian()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Wedding And Event Planning',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/event/corinthian", $data);

    }
      public function vip()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Wedding And Event Planning',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/event/vip", $data);

    }
      public function lovepop()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Wedding And Event Planning',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/event/lovepop", $data);

    }
     public function transportation()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Transportation And Automative Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/transportation/tab", $data);

    }
      public function davel()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Transportation And Automative Services',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/transportation/davel", $data);

    }
     public function delivery()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Delivery Of Beer , Wine And Spiritss',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/delivery/tab", $data);

    }
    public function catered_vacation()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Concierge Catered Vacations',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/vacation/tab", $data);

    }
     public function inspiration()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Concierge Catered Vacations',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/vacation/inspiration", $data);

    }
     public function barbados()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Concierge Catered Vacations',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/vacation/barbados", $data);

    }
     public function virgin()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Concierge Catered Vacations',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/vacation/virgin", $data);

    }
     public function woodstock()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Concierge Catered Vacations',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/vacation/woodstock", $data);

    }
     public function where()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'Concierge Catered Vacations',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/vacation/where", $data);

    }
     public function home()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'House And Home',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/home/tab", $data);

    }
      public function furnishing()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'House And Home',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/home/furnishing", $data);

    }
      public function architecture()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'House And Home',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/home/architecture", $data);

    }
      public function persian()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'House And Home',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/home/persian", $data);

    }
     public function clarem()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'House And Home',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/home/claremont", $data);

    }
   
      public function computer()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'House And Home',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/home/computer", $data);

    }
      public function moving()
    {
        $category = $this->Category_model->get_categories();

        $data = array(
            'title' => 'House And Home',
            'category_data' => $category,
        );

        $this->template->load('template2', "services/home/moving", $data);

    }
}
