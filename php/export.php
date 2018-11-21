<?php
//export.php
$connect = mysqli_connect("localhost", "root", "root", "panelplatform");
$output = '';
if(isset($_POST["export7"]) or isset($_POST['export30']))
{
    if (isset($_POST[export7])){
        $dt = date('Y-m-d', strtotime("+7 days"));
        $query = "SELECT * FROM contracts WHERE dataend<'$dt'";
    }

    if (isset($_POST['export30']))
    {
        $dt = date('Y-m-d', strtotime("+30 days"));
        echo $dt."<=<br>";
        $query = "SELECT * FROM contracts WHERE dataend <'$dt'";
    }


    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                        <th>Номер договора</th>
                        <th>Дата заключения</th>
                        <th>Дата окончания</th>
                        <th>Заказчик</th>
                        <th>Исполнитель</th>
                    </tr>
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
                    <tr>  
                         <td>'.$row["numberofoder"].'</td>  
                         <td>'.$row["datastart"].'</td>  
                         <td>'.$row["dataend"].'</td>  
                         <td>'.$row["namezakazchik"].'</td>  
                         <td>'.$row["nameispolnitel"].'</td>
                    </tr>
   ';
        }
        $output .= '</table>';
        $t = time();
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=table-'.$t.'.xls');
        echo $output;
    }
}
?>