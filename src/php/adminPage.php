<?php
session_start();
?>
<!DOCTYPE html>
<?php include 'header.php'; ?>

<html lang = "en">
<head>
  <title>ADMIN PAGE</title>
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
  <link rel="stylesheet" href="../css/adminPage.css"/>
  <table>

  <tr>
  <td> <button type="button" name="button"><a href = "admin_insert_update.php" id="admin">Update/Insert Items</a></button>  </td>
</tr>
<tr>
<td><button type="button" name="button"><a href = "admin_delete.php" id="admin">Delete Items</a></button>  </td>
</tr>
<tr>
  <td><button type="button" name="button"><a href = "admin_manage_customer.php" id="admin">Search Customer</a></button>  </td>
</tr>
<!-- <tr>
  <td><button type="button" name="button"><a href = "admin_update_customer.php" id="admin">Add/Update Customer</a></button> </td>
</tr> -->
<tr>
  <td><button type="button" name="button"><a href = "admin_order.php" id="admin">ALL Orders</a></button> </td>
</tr>
<tr>
  <td><button type="button" name="button"><a href = "inventory.php" id="admin">Inventory</a></button> </td>
</tr>
  </table>
</head>

<?php include 'footer.php'; ?>
