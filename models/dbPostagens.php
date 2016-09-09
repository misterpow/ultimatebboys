	<?php

	class Posts extends model{
		private $id;
		private $title;
		private $body;
		private $vdata;
		//private $pdo;
		private $amount;
		private $allposts;
		private $image;


		public function getTitle($i =''){
			//if (!empty($i)) {
				$sql = "SELECT * FROM posts_pagina WHERE post_id =". "'$i'";
				$sql = $this->db->query($sql);
				$dado = $sql->fetchAll();
				if ($sql->rowCount() > 0) {
					foreach($dado as $valor){
						$this->title = $valor['post_title'];
						//$this->title = $dados['post_title'];
						return $this->title;
					}
				
				//}
			}
		}
	public function getBody($i =''){
			//if (!empty($i)) {
				$sql = "SELECT * FROM posts_pagina WHERE post_id =". "'$i'";
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
			$sql = "SELECT * FROM posts_pagina WHERE post_id =". "'$i'";
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
			$sql = "SELECT * FROM posts_pagina WHERE post_id =". "'$i'";
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
			$sql = "SELECT * FROM posts_pagina";
			$sql = $this->db->query($sql);
			$this->amount = $sql->rowCount();
			return $this->amount;


		}
				public function getAllPosts(){
			$sql = "SELECT * FROM posts_pagina ORDER BY post_id DESC";
			$sql = $this->db->query($sql);
			$this->allposts = $sql->fetchAll();
			return $this->allposts;

		}

	}



	?>