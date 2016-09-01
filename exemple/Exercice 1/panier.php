
<table>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    <tr>
        <td>
            <p>Item #1</p>
        </td>  
        <td>
            <?php echo $_GET['quantity_item1']; ?>
        </td>
        <td>
            <?php
            $total =$_GET['quantity_item1']*$_GET['price_item1'];
            echo $total;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <p>Item #2</p>
        </td>  
        <td>
            <?php echo $_GET['quantity_item2']; ?>
        </td>
        <td>
            <?php
            $total =$_GET['quantity_item2']*$_GET['price_item2'];
            echo $total;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <p>Item #3</p>
        </td>  
        <td>
            <?php echo $_GET['quantity_item3']; ?>
        </td>
        <td>
            <?php
            $total =$_GET['quantity_item3']*$_GET['price_item3'];
            echo $total;
            ?>
        </td>
    </tr>
    <tr style="text-align: center">
        <td>
            <p>Item #4</p>
        </td>  
        <td>
            <?php echo $_GET['quantity_item4']; ?>
        </td>
        <td>
            <?php
            $total =$_GET['quantity_item4']*$_GET['price_item4'];
            echo $total;
            ?>
        </td>
    </tr>
    <tr style="text-align: center">
        <td>
            <p>Item #5</p>
        </td>  
        <td>
            <?php echo $_GET['quantity_item5']; ?>
        </td>
        <td>
            <?php
            $total =$_GET['quantity_item5']*$_GET['price_item5'];
            echo $total;
            ?>
        </td>
    </tr>
</table>