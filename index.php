<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Mô tả</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Mảng chứa danh sách sản phẩm
            $products = [
                ['id' => 1, 'name' => 'Sản phẩm 1', 'price' => 100000, 'description' => 'Mô tả sản phẩm 1'],
                ['id' => 2, 'name' => 'Sản phẩm 2', 'price' => 150000, 'description' => 'Mô tả sản phẩm 2'],
                ['id' => 3, 'name' => 'Sản phẩm 3', 'price' => 200000, 'description' => 'Mô tả sản phẩm 3'],
                // Thêm sản phẩm khác vào đây nếu cần
            ];
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>" . $product['id'] . "</td>";
                echo "<td>" . $product['name'] . "</td>";
                echo "<td>" . number_format($product['price']) . " VNĐ</td>";
                echo "<td>" . $product['description'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        
    </table>

    
</body>

</html>
