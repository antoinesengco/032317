<!DOCTYPE html>
<html>
<head>
	<title>Semester</title>
	
</head>
<body>

<?php
  $sem =  array(
			array("SubjectCode" => "IT341", "SubjectName" => "WebApp", "Catalog" => 43312, "Grade" => "A"),
			array("SubjectCode" => "IT211", "SubjectName" => "CISCO", "Catalog" => 43422, "Grade" => "A+"),
			array("SubjectCode" => "CS342", "SubjectName" => "OS", "Catalog" => 43312, "Grade" => "A"),
			array("SubjectCode" => "CS351", "SubjectName" => "DBMS", "Catalog" => 41112, "Grade" => "A+"),
			array("SubjectCode" => "NSCI111", "SubjectName" => "PHYSICS 1", "Catalog" => 41312, "Grade" => "B+"),
			array("SubjectCode" => "ACTG100", "SubjectName" => "ACTG&SAP", "Catalog" => 44312, "Grade" => "A"),
			array("SubjectCode" => "HUMA101", "SubjectName" => "Philo of Man", "Catalog" => 43412, "Grade" => "B+"),
			array("SubjectCode" => "PHYED", "SubjectName" => "PE 4", "Catalog" => 46312, "Grade" => "A+"),
			);
?>


<script type="text/javascript">
		var sem = JSON.parse('<?php echo json_encode($sem); ?>')
		sem.push({"SubjectCode": "IT342", "SubjectName" :  "Intro To Multimedia" , "Catalog" : 62196 , "Grade" : "A+"});
		sem.push({"SubjectCode": "MATH101", "SubjectName" : "Algebra" , "Catalog" : 3214 , "Grade" : "A+"});
		sem.push({"SubjectCode": "MATH202", "SubjectName" : "Calculus" , "Catalog" : 631596 , "Grade" : "B+"});
		document.writeln("<table border='2'><tr>");
		for(i=0;i<sem.length;i++){
document.writeln("<td>");
document.writeln("<table border='1' width=100 >");
document.writeln("<tr><td><b>SubjectCode</b></td><td width=50>"+ sem[i].SubjectCode+"</td></tr>");
document.writeln("<tr><td><b>SubjectName</b></td><td width=50>"+ sem[i].SubjectName +"</td></tr>");
document.writeln("<tr><td><b>Catalog</b></td><td width=50>"+ sem[i].Catalog +"</td></tr>");
document.writeln("<tr><td><b>Grade</b></td><td width=50>"+ sem[i].Grade +"</td></tr>");
document.writeln("</table>");
document.writeln("</td>");
}
document.writeln("</tr></table>");

	</script>
</body>
</html>
