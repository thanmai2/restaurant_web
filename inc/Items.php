<?php
	class Items {

		public $con;
		public $id;
		public $name;
		public $price;
		public $img;
        public function __construct($con) {
			$this->con = $con;
			
		//	$query = mysqli_query($this->con, "SELECT * FROM product'");
		//	$result = mysqli_fetch_array($query);

		//	$this->name = $result['name'];
		//	$this->price = $result['price'];
	       // $this->img = $result['img'];
        }

		public function getName() {
			return $this->name;
		}

		public function getPrice() {
			return $this->price;
		}

		public function getImg() {
			return $this->img;
		}

	
		public function getData() {

            $sql="SELECT * FROM product";
            $result=mysqli_query($this->con,$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }

			

		}
}
?>