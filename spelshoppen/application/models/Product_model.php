<?php



class Product_model extends CI_Model{

		//Get all products
		public function get_products(){
			
			$this->db->select('*');
			$this->db->from('products');
			$query = $this->db->get();
			return $query->result();
		}

		//Get Single Product

		
		public function get_product_details($id){
			
			$this->db->select('*');
			$this->db->from('products');
			$this->db->where('id', $id);
			
			$query = $this->db->get();
			return $query->row();
			
		}
			  
			  
			//Get Categoru Product

		
		public function get_product_category(){
		
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('category_id', $this->uri->segment(3));
		$query = $this->db->get();
		

		return $query->result();
			
			
			
		//	$id = $this->uri->segment(3);
			
			
		//	$query = $this->db->query('SELECT * FROM products where category_id = $id  ');

			
		//	return $query->row();			
		}

		//Get categories
    
		public function get_categories(){

			$this->db->select('*');
			$this->db->from('categories');
			$query = $this->db->get();
			return $query->result();
	   }
	
	
		
		//Get products
		
		public function get_popular(){
			
			$this->db->select('P.*, COUNT(O.product_id) as total');
			$this->db->from('orders AS O');
			$this->db->join('products AS P', 'O.product_id = P.id', 'INNER');
			$this->db->group_by('O.product_id');
			$this->db->order_by('total', 'desc');
			$query = $this->db->get();
			return $query->result();
		}
		
		
		
		//Add order to database
		
		public function add_order($order_data){
			$insert = $this->db->insert('orders', $order_data);
			return $insert;
		}

	
		
		
}