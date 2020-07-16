public getData() {
			$this->con = $con;
			$this->id = $id;

			$query = mysqli_query($this->con, "SELECT * FROM product");
			$result = mysqli_fetch_array($query);
            if(mysqli_num_rows($result>0){
                return $result;
            }
        }
    }