<html>

<head>
<title>EntryForm Example : Display Form</title>
<style>
body  { font-family:Verdana;
        color:maroon;
        background-color:aliceblue; }
input { font-family:Verdana; width:"1in"; }
td    { text-align:left; }
</style>
</head>

<body>
<h2>Data from EntryForm Example</h2>

<pre style="font-weight:bold;font-size:120%">
<?php print_r($_POST);?>
</pre>

<table cellpadding="5">
<tr> <th>Field</th>    <th>Value</th>                       </tr>
<tr> <td>Name</td>     <td><?php echo $_POST["name"];?></td>    </tr>
<tr> <td>Zipcode</td>  <td><?php echo $_POST["zipcode"];?></td> </tr>
<tr> <td>Gender</td>   <td><?php echo $_POST["gender"];?></td>  </tr>
<tr> <td>Student?</td> 
     <td><?php  if (isset($_POST["student"]))
                {
                    echo "true";
                }
                else
                {
                    echo "false";
                }
              ?>
     </td>
</tr>
</table>

<p>Comments:     <?php echo $_POST["comments"]?></p>

<p>Hidden Field: <?php echo $_POST["hidden"]?></p>

</body>

</html>