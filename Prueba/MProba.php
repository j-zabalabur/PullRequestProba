<?php
$zenb1=3;
$zenb2=4;
$zenb3=4;
echo nl2br("Lehen zenbakia: ".$zenb1."\nBigarren zenbakia: ".$zenb2."\n");
echo nl2br("Batuketa: ".$zenb1+$zenb2+$zenb3."\n");
$guztira=$zenb1+$zenb2+$zenb3;
echo nl2br("Kenketa: ".$zenb1-$zenb2."\n");
?>

<?php
    class Conexion{
        private $con;

        public function __construct() {
            $this->con = new mysqli("localhost", "root", "", "retrobits");
        }
        
        public function getCon(){
            return $this->con;
        }

        public function closeCon(){
            return $this->con->close();
        }
    }

?>
<?php
echo nl2br("Biderketa: ".$zenb1*$zenb2."\n");
echo nl2br("Zatiketa: ".$zenb1/$zenb2."\n");
echo "Hondarra: ".$zenb1%$zenb2;
echo "<br>";
echo "Lerro jauziaren proba";
?>