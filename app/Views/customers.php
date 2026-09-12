<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>

<h1>Customer Accounts</h1>

/Home</a> |
/aboutAbout</a> |
/customersCustomers</a> |
/usersUsers</a>

<table border="1">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
    <tr>
        <td><?= $customer['fullname']; ?></td>
        <td><?= $customer['email']; ?></td>
        <td><?= $customer['phone']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>