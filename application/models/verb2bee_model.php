<?php
class Verb2bee_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	function update_stat($field) {

		$date_now = date('Y-m-d');
		$sql = "SELECT * FROM stat WHERE view_date = '".$date_now."'";
		$query = $this->db->query($sql);
		
		if ($query->num_rows > 0) {
			$q = $this->db->query($sql)->row();
			$value_current = $q->$field;
			$data = array(
				$field => $value_current + 1
			);
			$this->db->where('view_date', $date_now);
			$this->db->update('stat', $data); 
		} else {
			$value_current = 0;
			$data = array(
				$field => 1,
				'view_date' => date('Y-m-d'),
			);
			$this->db->insert('stat', $data); 
		}
		
	}
	
	function traffic($page) { 
		
		$ip = $this->input->ip_address();
		
		if (1==1) {
			$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
			$country = $details->country;
			$city = $details->city;
		} else {
			$country = 'N/A';
			$city = 'N/A';
		}

		$data = array(
			'page' => $page,
			'ip_address' => $this->input->ip_address(),
			'country' => $country,
			'city' => $city,
			'view_time' => date('Y-m-d H:i:s')
		);
		
		$this->db->insert('traffic',$data);
		
		//////////////////////////////////
		
		$date_now = date('Y-m-d');
		$sql = "SELECT * FROM stat WHERE view_date = '".$date_now."'";
		$query = $this->db->query($sql)->row();
		
		if (!empty($query)) {
			
			$sql = "SELECT count(*) c FROM traffic WHERE (DATE_FORMAT(view_time,'%Y-%m-%d') = '".$date_now."') AND (ip_address = '".$this->input->ip_address."')";
			$query1 = $this->db->query($sql)->row();
			
			if ($query1->c == 1) {
			
				if ($country == 'TH') {
					$data = array('view_th' => $query->view_th + 1);
				} else {
					$data = array('view_other' => $query->view_other + 1);
				}
				$this->db->where('view_date',$date_now);
				$this->db->update('stat', $data);
				
			}
		}
		
	}
	
	function update_stat_book() {

		$date_now = date('Y-m-d');
		$sql = "SELECT * FROM stat WHERE view_date = '".$date_now."'";
		$query = $this->db->query($sql);
		
		if ($query->num_rows > 0) {
			$q = $this->db->query($sql)->row();
			$value_current = $q->view_book;
			$data = array(
				'view_book' => $value_current + 1
			);
			$this->db->where('view_date', $date_now);
			$this->db->update('stat', $data); 
			
			$q = $this->db->query($sql)->row();
			$value_current_home = $q->view_home;
			$data = array(
				'view_home' => $value_current - 2
			);
			$this->db->where('view_date', $date_now);
			$this->db->update('stat', $data);
		} else {
			$value_current = 0;
			$data = array(
				$field => 1,
				'view_date' => date('Y-m-d'),
			);
			$this->db->insert('stat', $data); 
		}
		
	}
	
	function get_user_id_by_username($username) {
		$sql = "SELECT user_id
				FROM bitauth_users
				WHERE (username = '".$username."')";
		$query = $this->db->query($sql);
		$query1 = $this->db->query($sql)->row();
		if ($query->num_rows > 0) {
			return $query1->user_id;
		} else {
			return 0;
		}
	}
	
	function get_all_category() {
		$sql = "SELECT * FROM category";
		return $this->db->query($sql);
	}
	
	function get_all_orders($user_id) {
		$sql = "SELECT * FROM orders WHERE user_id = ".$user_id." ORDER BY order_date DESC";
		return $this->db->query($sql);
	}
	
	function get_all_purchase() {
		$sql = "SELECT * FROM orders ORDER BY order_date DESC";
		return $this->db->query($sql);
	}
	
	function get_all_stat() {
		$sql = "SELECT * FROM stat ORDER BY view_date DESC";
		return $this->db->query($sql);
	}
	
	function get_all_mail_read() {
		$sql = "SELECT * FROM mail_read WHERE is_read = 1 ORDER BY read_time DESC";
		return $this->db->query($sql);
	}
	
	function get_statmobile() {
		$sql = "SELECT * FROM stat WHERE DATE_FORMAT(view_date,'%Y-%m-%d') = '".date('Y-m-d')."'";
		return $this->db->query($sql);
	}

	function get_all_traffic() {
		$sql = "SELECT * FROM traffic ORDER BY id DESC";
		return $this->db->query($sql);
	}
	
	function get_all_customer() {
		$sql = "SELECT * FROM buvnqe0coyaaa35hmusn43ldrt7ury";
		return $this->db->query($sql);
	}
	
	function get_all_message() {
		$sql = "SELECT * FROM message ORDER BY id DESC";
		return $this->db->query($sql);
	}
	
	function get_all_user() {
		$sql = "SELECT u.user_id,u.username, u.active, u.last_login, d.fullname, d.email, d.register_date
				FROM bitauth_users u
				LEFT JOIN bitauth_userdata d 
				ON d.user_id = u.user_id
				ORDER BY d.register_date DESC";
		return $this->db->query($sql);
	}
	
	function get_category_by_id($id) {
		$sql = "SELECT * FROM category WHERE id = ".$id;
		return $this->db->query($sql);
	}
	
	function get_customer_by_id($id) {
		$sql = "SELECT * FROM buvnqe0coyaaa35hmusn43ldrt7ury WHERE HRVWp7s1tvHnZdvZwXcjcYCjBX8tPa = ".$id;
		return $this->db->query($sql);
	}
	
	function get_order_by_id($id) {
		$sql = "SELECT * FROM orders WHERE id = ".$id;
		return $this->db->query($sql);
	}
	
	function get_purchase_by_id($id) {
		$sql = "SELECT * FROM orders WHERE id = ".$id;
		return $this->db->query($sql);
	}
	
	function get_user_by_user_id($user_id) {
		$sql = "SELECT u.user_id,u.username, u.active, u.last_login, d.fullname, d.email
				FROM bitauth_users u
				LEFT JOIN bitauth_userdata d ON d.user_id = u.user_id
				WHERE u.user_id = ".$user_id;
		return $this->db->query($sql);
	}
	
	function get_all_promotion() {
		$sql = "SELECT * FROM promotion ORDER BY updated_date DESC";
		return $this->db->query($sql);
	}
	
	function get_promotion_by_id($id) {
		$sql = "SELECT * FROM promotion WHERE id = ".$id;
		return $this->db->query($sql);
	}
	
	function get_all_article() {
		$where_sql = '';
		if ($this->session->userdata('p_category_id') != null) {
			$where_sql = ' WHERE category_id = '.$this->session->userdata('p_category_id').' ';
		}
		$sql = "SELECT a.*,c.category_name 
				FROM article a
				LEFT JOIN category c
				ON c.id = a.category_id ".$where_sql."
				ORDER BY updated_date DESC";
		return $this->db->query($sql);
	}
	
	function get_article_by_id($id) {
		$sql = "SELECT * FROM article WHERE id = ".$id;
		return $this->db->query($sql);
	}
	
	function check_have_category($id) {

	    $sql = "SELECT * FROM article WHERE category_id = ".$id;
	    $query = $this->db->query($sql);

	    if ($query->num_rows() > 0){
	    	return true;
	    }
	    else {
	    	return false;
	    }
	}
	
	function get_category_id_by_category_name($category_name) {

	    $sql = "SELECT * FROM category WHERE category_name = '".$category_name."'";
	    $query = $this->db->query($sql);
	    $q = $this->db->query($sql)->row();

	    if ($query->num_rows() > 0){
	    	return $q->id;
	    }
	    else {
	    	return 0;
	    }
	}
	
	function get_activation_code($username) {

	    $sql = "SELECT * FROM bitauth_users WHERE username = '".$username."'";
	    $query = $this->db->query($sql);
	    $q = $this->db->query($sql)->row();

	    if ($query->num_rows() > 0){
	    	return $q->activation_code;
	    }
	    else {
	    	return 0;
	    }
	}
	
	function get_running() {

	    $sql = "SELECT * FROM running WHERE id = 1";
	    $query = $this->db->query($sql);
	    $q = $this->db->query($sql)->row();

	    if ($query->num_rows() > 0){
	    	return $q->running;
	    }
	    else {
	    	return 0;
	    }
	}
	
	function get_id_by_title($title) {

	    $sql = "SELECT * FROM article WHERE title = '".$title."'";
	    $query = $this->db->query($sql);
	    $q = $this->db->query($sql)->row();

	    if ($query->num_rows() > 0){
	    	return $q->id;
	    }
	    else {
	    	return 0;
	    }
	}
	
	function get_paged_list_article($category_id, $limit = 2, $offset = 0) {
		
		$sql = "SELECT a.*,c.category_name FROM article a
				LEFT JOIN category c
				ON c.id = a.category_id
				WHERE a.category_id = ".$category_id;
		$sql .=	" ORDER BY a.updated_date DESC LIMIT ".$offset." , ".$limit;
		return $this->db->query($sql);
	} 
	
	function count_all_article($category_id) {	
		
		$sql = "SELECT count(*) AS c FROM article WHERE category_id = ".$category_id;
		
		$query = $this->db->query($sql)->row();
		return $query->c;

	}
	
	function increase_download() {	
		
		$sql = 'SELECT * FROM download_count WHERE id = 1';
		$query = $this->db->query($sql)->row();
		$download_current = $query->download_count;
		
		$data = array(
			'download_count' => $download_current + 1
		);
		
		$this->db->where('id',1);
		$this->db->update('download_count',$data);
		
		return true;

	}

	function get_download_count() {	
		
		$sql = 'SELECT * FROM download_count WHERE id = 1';
		$query = $this->db->query($sql)->row();
		$download_current = $query->download_count;

		return $download_current;

	}
	
	function get_latest_article() {
		
		$sql = "SELECT a.*,c.category_name FROM article a
				LEFT JOIN category c
				ON c.id = a.category_id ";
		$sql .=	" ORDER BY a.updated_date DESC LIMIT 0 , 3";
		return $this->db->query($sql);
	} 
	
	function get_first_article() {
		
		$sql = "SELECT a.*,c.category_name FROM article a
				LEFT JOIN category c
				ON c.id = a.category_id 
				WHERE a.category_id = 2";
		$sql .=	" ORDER BY a.updated_date DESC LIMIT 0 , 1";
		return $this->db->query($sql);
	} 
	
	function get_first_promotion() {
		
		$sql = "SELECT * FROM promotion";
		$sql .=	" ORDER BY updated_date DESC LIMIT 0 , 1";
		return $this->db->query($sql);
	} 
	
	function get_relate_article($category_id,$id) {
		
		$sql = "SELECT a.*,c.category_name 
				FROM article a
				LEFT JOIN category c
				ON c.id = a.category_id 
				WHERE (a.category_id = ".$category_id.") AND (a.id <> ".$id.")";
		$sql .=	" ORDER BY a.updated_date DESC LIMIT 0 , 3";
		return $this->db->query($sql);
	} 
	
	public function encode($number) {

		$len = strlen($number);
		$str = '';
		for ($i = 0;$i < $len;$i++) {
			$n = substr($number, $i, 1);
			if ($n == 1) { $n_str = 'wn0VD9UPyAhCuv5SafNH'; }
			if ($n == 0) { $n_str = 'Yh8g1vP8MSMLdXItPRQ6'; }
			$str .= $n_str;
		}
		return $str;
	}
	
	public function decode($string) {
		$len = strlen($string);
		$l = $len % 20;
		if ($l == 0) {
			$count = $len / 20;
			$str = '';
			for ($i=0; $i<$count; $i++) {
				$s = substr($string, $i*20,20);
				if ($s == 'wn0VD9UPyAhCuv5SafNH') { 
					$s_str = '1'; 
				} elseif ($s == 'Yh8g1vP8MSMLdXItPRQ6') { 
					$s_str = '0'; 
				} else {
					return 0;
				}
				
				$str .= $s_str;
			}
			return $str;
		} else {
			return 0;
		}
	}
	
	function get_current_company_time() {
		$sql = "SELECT * FROM mail_setting WHERE id = 1";
		return $this->db->query($sql);
	}
	
	function get_current_candidate_time() {
		$sql = "SELECT * FROM mail_setting WHERE id = 1";
		return $this->db->query($sql);
	}
	
	function get_current_mail_index() {
		$sql = "SELECT * FROM mail_setting WHERE id = 1";
		return $this->db->query($sql);
	}
	
	function GetVolumeLabel($drive) {
       // Try to grab the volume name
       if (preg_match('#Volume Serial Number is (.*)\n#i', shell_exec('dir '.$drive.':'), $m)) {
          $volname = ' ('.$m[1].')';
       } else {
           $volname = '';
       }
	   return $volname;
	}

}

?>