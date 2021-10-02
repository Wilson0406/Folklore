<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feedback</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
 
<?php
    //include the library
    include "libchart/libchart/classes/libchart.php";
 
    //new pie chart instance
    $chart = new PieChart( 500, 300 );
 
    //data set instance
    $dataSet = new XYDataSet();
    
    //actual data
    //get data from the database
    
    //include database connection
    include 'db_connect.php';
 
    //query all records from the database
    $query = "select count(*) from customer";
    $query1 = "select count(*) from provider";

    $result1 = $mysqli->query( $query );
 
    //get number of rows returned
    $num_results1 = $result1->num_rows;
 
    if( $num_results1 > 0){
    
        while( $row1 = $result1->fetch_assoc() ){
            extract($row1);
            $dataSet->addPoint(new Point("{$name} {$ratings})", $ratings));
        }
    
        $chart->setDataSet($dataSet);
 
        //set chart title
        $chart->setTitle("Tiobe Top Programming Languages for June 2020");
        
        //render as an image and store under "generated" folder
        $chart->render("generated/1.png");
    
        //pull the generated chart where it was stored
        echo "<img alt='Pie chart'  src='generated/1.png' style='border: 1px solid gray;'/>";
    
    }else{
        echo "No programming languages found in the database.";
    }
?>
 
</body>
</html>