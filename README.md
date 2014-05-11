codeigniter-crud
================

Basic "MY_Model" class to create a simple CRUD with codeigniter


Install
==

1. Put the file MY_Model.php in the application/core folder.

2. Extend your own model with MY_Model class.

3. Declare the database table associate with the model


	class user_model extends MY_Model {
		protected $table = 'user';
		
		// Your code here
	}
	


How to use
==

The 4 CRUD functions (create, find, update, delete) can be call directly from your controller like that :

	class Test extends CI_Controller {
	
		public function index() {
			$this->load->model('user_model');
			$users = $this->user_model->find(array('name' => 'bob'));
		}
	
	}


More
==

If you speak french, more information on this tuto : http://deercreation.fr/article/developper-un-systeme-de-crud-avec-codeigniter
