<?php
class Model {
	
	public $dbhandle;
	public function __construct($rel_path)
	{
		//print new Exception('sqlite:'.$rel_path.'/db/drinks.db');
		$dsn = 'sqlite:'.$rel_path.'/db/drinks.db';
		try {	
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
		}
		catch (PDOEXception $e) {
			echo "Database connection failed -- see error for further details";
        	print new Exception($e->getMessage());
    	}
	}

	public function closeConnection(){
		$this->dbhandle = Null;
	}
	
	public function dbRecreateTables()
	{
		try {
			// Rebuild Brand Data Table
			$query = file_get_contents("AlterBrandTable.sql");
			$this->dbhandle->exec($query);

			// Rebuild Product Data Table
			$query = file_get_contents("AlterProductTable.sql");
			$this->dbhandle->exec($query);
			
			return "Rebuilt all tables in drinks.db";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetMainPageData(){
		//echo("Na is a butt");
		$data = $this->dbGetData("*", "Brand_Data");
		return $data;
	}

	private function dbGetData(string $query, string $tgt){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT '.$query.' FROM '.$tgt;
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				if ($query === "*"){
					if ($tgt === "Brand_Data"){
						$result[$i]['brand'] = $data['brand'];
						$result[$i]['title'] = $data['title'];
						$result[$i]['subtitle'] = $data['subtitle'];
						$result[$i]['description'] = $data['description'];
					}else{
						$result[$i]['brand'] = $data['brand']; // Not used in the view, instead using the fake dbGetBrand() function above
						$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
						$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
						$result[$i]['modelTitle'] = $data['modelTitle'];
						$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
						$result[$i]['modelDescription'] = $data['modelDescription'];
					}
				} else {
					$result[$i] = $data;
				}
				
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}

	public function dbGetBrand()
	{
		return $this -> dbGetData("brand", "Product_Data");
	}

	public function dbGetX3DData()
	{
		return $this -> dbGetData("*", "Product_Data");
	}

	public function dbGetProducts()
	{
		return $this -> dbGetData("modelTitle", "Product_Data");
	}
	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke Light',
			'image3D_1' => 'Coke Light',

			'model_2' => 'Coke Zero',
			'image3D_2' => 'Coke Zero',

			'model_3' => 'Coke',
			'image3D_3' => 'Coke',

			'model_4' => 'Dr Pepper',
			'image3D_4' => 'Dr Pepper',

			'model_5' => 'Fanta',
			'image3D_5' => 'Fanta',

			'model_6' => 'Sprite',
			'image3D_6' => 'Sprite'
		);
	}
}
?>