<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<h2>XMLHttpRequest Obyekt</h2>

<button type="button" onclick="yukla()">Yunalishlarni chiqarish</button>
<br><br>
<table id="demo"></table>

<script>
function yukla() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    myFunction(this);
  }
  xhttp.open("GET", "cd_catalog.xml");
  xhttp.send();
}
function myFunction(xml) {
  const xmlDoc = xml.responseXML;
  const x = xmlDoc.getElementsByTagName("CD");
  let table="<tr><th>Davlat</th><th>Shahar</th></tr>";
  for (let i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</body>
</html>
