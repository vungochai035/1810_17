<?php 
$posts =[



	"title" => "tieu de bai viet 3 ",
	"content" => "noi dung bai viet 3",


];


$postss =[


[
	"title" => "tieu de bai viet 1 ",
	"content" => "noi dung bai viet 1",
],

[

"title" => "tieu de bai viet 2 ",
	"content" => "noi dung bai viet 2",
],


[
"title" => "tieu de bai viet 3 ",
	"content" => "noi dung bai viet 3",

],


];

$newpost =[


[
	"title" => "tieu de bai viet mới 1 ",
	"content" => "noi dung bai viet mới 1",
],

[

"title" => "tieu de bai viet mới 2 ",
	"content" => "noi dung bai viet mới 2",
],

];


 ?>
 <table border="1" >
 	<tr>
 		
 		<th>title</th>
 		<th>content</th>
 	</tr>

 	<tr>
 		<?php 
 		 
        echo "<tr>";
        foreach ($posts as $key => $value) {
        	echo "<td>$value</td>";
        }

 			 		
 		echo "</tr>";




 		 ?>
 	</tr>
 </table>



<h1>List postss</h1>
 <table border="1">
 	<thead>
 		<th>title</th>
 		<th>content</th>
 	</thead>


 	<tbody>
 		<?php 	
 		foreach ($postss as $key =>  $value) {
 			echo "<tr>";
 					echo "<td>" . $value['title'] . "</td>";
 					echo "<td>" . $value['title'] . "</td>";
 			echo "</tr>";
 		}

 		for ($i=0; $i < count($newpost) ; $i++) { 
 			echo "<tr>";
 					echo "<td>" . $newpost[$i]['title'] . "</td>";
 					echo "<td>" . $newpost[$i]['title'] . "</td>";
 			echo "</tr>";
 			
 		}



 		 ?>
 	</tbody>
 </table>


