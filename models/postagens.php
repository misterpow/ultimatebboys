<?php


class Postagens extends model{
	private $nome;
	private $id;
		private $title;
		private $body;
		private $vdata;
		//private $pdo;
		private $amount;
		private $allposts;
		private $image;

	public function getId($i =''){
			$sql = "SELECT * FROM t_posts WHERE post_id =". "'$i'";
				$sql = $this->db->query($sql);
				$dado = $sql->fetchAll();
				if ($sql->rowCount() > 0) {
					foreach($dado as $valor){
						$this->id = $valor['post_id'];
						//$this->title = $dados['post_title'];
						return $this->id;
					}
			}

		}





public function getTitle($i =''){
			if (!empty($i) && is_numeric($i)) {
				$sql = "SELECT * FROM t_posts WHERE post_id =". "'$i'";
				$sql = $this->db->query($sql);
				$dado = $sql->fetchAll();
				if ($sql->rowCount() > 0) {
					foreach($dado as $valor){
						$this->title = $valor['post_title'];
						//$this->title = $dados['post_title'];
						return $this->title;
					}
				
				}
			}else{
				header("Location: index.php");
			}
		}
	public function getBody($i =''){
			//if (!empty($i)) {
				$sql = "SELECT * FROM t_posts WHERE post_id =". "'$i'";
				$sql = $this->db->query($sql);
				$dado = $sql->fetchAll();
				if ($sql->rowCount() > 0) {
					foreach($dado as $valor){
						$this->body = $valor['post_body'];
						//$this->title = $dados['post_title'];
						return $this->body;
					}
				
				//}
			}
		}
		public function getData($i =''){
			$sql = "SELECT * FROM t_posts WHERE post_id =". "'$i'";
				$sql = $this->db->query($sql);
				$dado = $sql->fetchAll();
				if ($sql->rowCount() > 0) {
					foreach($dado as $valor){
						$this->vdata = $valor['post_data'];
						//$this->title = $dados['post_title'];
						return $this->vdata;
					}
				
				//}
			}

		}

			public function getImage($i = ''){
			$sql = "SELECT * FROM t_posts WHERE post_id =". "'$i'";
				$sql = $this->db->query($sql);
				$dado = $sql->fetchAll();
				if ($sql->rowCount() > 0) {
					foreach($dado as $valor){
						$this->image = $valor['post_image'];
						//$this->title = $dados['post_title'];
						return $this->image;
					}
				
				//}
			}

		}
		public function getAmount(){
			$sql = "SELECT * FROM t_posts";
			$sql = $this->db->query($sql);
			$this->amount = $sql->rowCount();
			return $this->amount;


		}
				public function getAllPosts($li = ''){
			$sql = "SELECT * FROM t_posts ORDER BY post_id DESC ";
			if (!empty($li)) {
				$sql .="LIMIT $li";
			}
			$sql = $this->db->query($sql);
			$this->allposts = $sql->fetchAll();
			return $this->allposts;

		}


	}