 <?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "search";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST['katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";
//$sql = "SELECT DISTINCT nama_file,token,tokenstem FROM `dokumen` WHERE token like '%$hasil%'";

echo $hasil;
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nama file: " . $row["nama_file"]. " - Token: " . $row["token"]. " " . $row["tokenstem"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

///

?>