
<?php
	$file = file_get_contents('text_file.txt');
	$array=preg_split('/\s+/', $file);
	$counts=array_count_values(str_word_count($file, 1);
?>
 <html>
 <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'word');
            data.addColumn('string', 'quantity');
	    data.addRows([
          <?php foreach($counts as $key => $value) {
                   echo "['". $key ."', '". $value ."'],";
	} 
   ?>
        
]);
	

        
        var options = {'title':'Word frequency in a text',
                       'width': 100%,
                       'height': 100%};

        
        var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        chart.draw(data, options);
      }
    </script>
  
     </head>
     <body>
    <div id="piechart_div"></div>
    </body>
    </html>


   
