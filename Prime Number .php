<!DOCTYPE html>
<html>

<head>
    <title>Prime Number </title>
    <style>

fieldset {
    font: 1em Verdana, Geneva, sans-serif;
    text-transform: none;
    color: whitesmoke;
    background: grey;
    border: thin solid #333;
    }

    err {
        color: red;
    }

    </style>
</head>

<body>


<fieldset>
    <form method="post">
       
        <div>
            <h1>Type any number to display prime numbers</h1>
        </div>
        <table>
            <tr>
                <td><label>Enter Number:</label></td>
                <td>
                    <input type="text" name="prime" accept="image/*">
                </td>
            </tr>

            <tr> <br>
                <td>
                    <button type="submit" name="btnsave">
                        <span></span>&nbsp;Save
                    </button>
                </td>
            </tr>
        </table><br>



    </form>
    </div>

</body>

</html>

<?php
if (isset($_POST['btnsave'])) {

    $in = $_POST['prime'];
    if(empty($in)){
        $in = 1;
    }
    for ($i = 2; $i <= $in - 1; $i++) {
        if ($in % $i == 0) {
            $value = true;
        }
    }
    if ($in == 1){
        echo "This " . $in . "  is not a Prime or compund Number"; 
    }
    elseif (isset($value) && $value) {
        echo "This " . $in . "  is not a Prime Number";
    } else {
        
        echo "This " . $in . "  is a Prime Number";
    }
}



?>

</fieldset>
