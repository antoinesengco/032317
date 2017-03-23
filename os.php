<!DOCTYPE html>
<html>
<head>
	<title>Operating System</title>
	<script type="text/javascript">
	
		document.writeln("<h2>Operating Systems</h2>");
var osys = { "Microsoft" : [
{ "Name" : "Windows", "OSTYPE" : "Windows10", "TOM" : "Computer" },
],
"Apple" : [
{ "Name" : "MacOs", "OSTYPE" : "Sierra", "TOM" : "Laptop" },
],
"Linux" : [
{ "Name" : "Linux", "OSTYPE" : "Kernel", "TOM" : "Computer" },
]
}
var i = 0
document.writeln("<table border='2'><tr>");
for(i=0;i<osys.Microsoft.length;i++)
{
document.writeln("<td>");
document.writeln("<table border='1' width=100 >");
document.writeln("<tr><td><b>Name</b></td><td width=50>"+ osys.Microsoft[i].Name+"</td></tr>");
document.writeln("<tr><td><b>OSTYPE</b></td><td width=50>"+ osys.Microsoft[i].OSTYPE +"</td></tr>");
document.writeln("<tr><td><b>TOM</b></td><td width=50>"+ osys.Microsoft[i].TOM +"</td></tr>");
document.writeln("</table>");
document.writeln("</td>");
}
for(i=0;i<osys.Apple.length;i++)
{
document.writeln("<td>");
document.writeln("<table border='1' width=100 >");
document.writeln("<tr><td><b>Name</b></td><td width=50>"+ osys.Apple[i].Name+"</td></tr>");
document.writeln("<tr><td><b>OSTYPE</b></td><td width=50>"+ osys.Apple[i].OSTYPE+"</td></tr>");
document.writeln("<tr><td><b>TOM</b></td><td width=50>"+ osys.Apple[i].TOM+"</td></tr>");
document.writeln("</table>");
document.writeln("</td>");
}
for(i=0;i<osys.Linux.length;i++)
{
document.writeln("<td>");
document.writeln("<table border='1' width=100 >");
document.writeln("<tr><td><b>Name</b></td><td width=50>"+ osys.Linux[i].Name+"</td></tr>");
document.writeln("<tr><td><b>OSTYPE</b></td><td width=50>"+ osys.Linux[i].OSTYPE+"</td></tr>");
document.writeln("<tr><td><b>TOM</b></td><td width=50>"+ osys.Linux[i].TOM+"</td></tr>");
document.writeln("</table>");
document.writeln("</td>");
}
document.writeln("</tr></table>");

</script>

</head>
<body>



</body>
</html>