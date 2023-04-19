<?php
function get_numbers() {
    $numbers = array(1, 2, 3, 4, 5);
    return $numbers;
}
// 要渲染一個陣列，您可以使用 PHP 的 print_r() 函數。這個函數會以易於閱讀的方式打印陣列的內容。以下是一個例子：
$numbers = get_numbers();
print_r($numbers);
$numbers = get_numbers();
// 在這個例子中，我們首先調用 get_numbers() 函數，然後將返回的陣列賦值給 $numbers 變數。最後，我們使用 print_r() 函數打印 $numbers 陣列的內容。

// 如果您需要在 HTML 頁面上渲染一個陣列，您可以使用 PHP 的 foreach 迴圈來遍歷陣列，並將每個元素插入到 HTML 中。以下是一個例子：
echo '<ul>';
foreach ($numbers as $number) {
    echo '<li>' . $number . '</li>';
}
echo '</ul>';

?>