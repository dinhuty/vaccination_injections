<?php
require("header.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT * FROM services WHERE name LIKE '%$search%' ORDER BY id ASC LIMIT 10";

$result = mysqli_query($connection, $sql);

echo '<div class="relative overflow-x-auto">';
echo '<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 w-[40px]">
                    STT
                </th>
                <th scope="col" class="px-6 py-3 w-[600px]">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 w-[40px]">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>';
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];

    echo '<tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                    ' . $id . ' 
                </th>
                <td class="px-6 py-4">
                    ' . $name . '
                </td>
                <td class="px-6 py-4">
                      ' . $price . '
                </td>
                <td class="px-6 py-4">
                     ' . $description . '
                </td>
                <td class="px-6 py-4 text-blue-700 cursor-pointer hover:opacity-70 font-sm">
                    Đăng ký
                </td>
            </tr>';
}
echo '</tbody>
    </table>
</div>';
