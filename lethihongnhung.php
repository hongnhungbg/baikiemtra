<?php
//1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkEvenNumber($number){
    if ($number % 2 == 0) {
        echo "So $number la so chan";
    } else {
        echo "\n So $number khong phai la so chan";
    }
}
$number =24;
checkEvenNumber($number);
echo "<br>";

//2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function total($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
$sum = total($n);
echo "Tong cua cac so tu 1 den $n la: $sum";
echo "<br>";

//3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function printMultiplicationTable() {
    for ($i = 1; $i < 10; $i++) {
        echo "Bang cuu chuong $i:<br>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result <br>";
        }
        echo "<br>";
    }
}
printMultiplicationTable();

//4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
$string = "Dai hoc Thuong Mai";
$word = "hoc";
function checkWordInString($string, $word) {
    if (strpos($string, $word) !== false) {
        echo "Tu '$word' thuoc chuoi '$string'";
    } else {
        echo "Tu '$word' khong thuoc chuoi '$string'";
    }
}
checkWordInString($string, $word);
echo "<br>";

//5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
$array = [155, 230, 882, 206, 104];
function findMinMaxValue($array) {
    $min = $array[0];
    $max = $array[0];
 
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
        if ($value > $max) {
            $max = $value;
        }
    }
    echo "Gia tri nho nhat trong mang la: $min<br>";
    echo "Gia tri lon nhat trong mang la: $max";
}
findMinMaxValue($array);
echo "<br>";

//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
$array = [155, 230, 882, 206, 104];
function sortArrayAscending($array) {
    sort($array);
    return $array;
}
$sortedArray = sortArrayAscending($array);
echo "Mang sap xep tang dan la: " . implode(", ", $sortedArray);
echo "<br>";

//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial(){
    $n = 4;  
    $x = 1;
    for($i=1; $i <= $n-1; $i++)  
    {  
     $x*=($i+1);   
    }  
    echo "Giai thua cua $n = $x";
}
calculateFactorial();
echo "<br>";

//8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
$start = 1;
$end = 10;
function isPrimeNumber($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimeNumbers($start, $end) {
    echo "Cac so nguyen to trong khoang tu $start den $end la: ";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrimeNumber($i)) {
            echo $i . " ";
        }
    }
}
$primeNumbers = findPrimeNumbers($start, $end);
echo "<br>";

//9.Viết chương trình PHP để tính tổng của các số trong một mảng.
$array = [155, 230, 882, 206, 104];
function sumOfArray($array) {
    $sum = 0;
    foreach ($array as $number) {
        $sum += $number;
    }
    return $sum;
}
$sum = sumOfArray($array);
echo "Tong cua cac so trong mang la: $sum";
echo "<br>";

//10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n)
{
    $fibonacciArray = array(0, 1);// Mảng ban đầu chứa 2 số Fibonacci đầu tiên
    for ($i = 2; $i < $n; $i++){
        $fibonacciArray[$i] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }
    return $fibonacciArray;
}
// Hàm in ra các số Fibonacci trong một khoảng cho trước
$start = 0;
$end = 58;
function printFibonacciInRange($start, $end)
{
    $fibonacciArray = fibonacci($end);// Tính tất cả các số Fibonacci cho đến số Fibonacci thứ $end

    foreach ($fibonacciArray as $fibonacci) {
        if ($fibonacci >= $start && $fibonacci <= $end) {
            echo $fibonacci . " ";
        }
    }
}
echo "Cac so Fibonacci trong khoang tu $start den $end la: ";
printFibonacciInRange($start, $end);
echo "<br>";

//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
//Ví dụ: 153 là số Armstrong bởi vì 1^3 + 5^3 + 3^3 = 153.
function ArmstrongNumber($number)
{
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 153;
if (ArmstrongNumber($number)) {
    echo "Day la so Armstrong";
} else {
    echo "Day khong la so Armstrong";
}
echo "<br>";

//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
    // Kiểm tra vị trí hợp lệ
    if ($position < 0 || $position > count($array))
    {
        echo "Vi tri chen khong hop le";
        return $array;
    }
    // Chia mảng thành hai phần: phần trước vị trí chèn và phần sau vị trí chèn
    $array1 = array_slice($array, 0, $position);
    $array2 = array_slice($array, $position);
    // Thêm phần tử vào mảng
    $array1[] = $element;
    // Kết hợp hai phần lại thành một mảng mới
    $newArray = array_merge($array1, $array2);
    return $newArray;
}
// Mảng ban đầu
$originalArray = array(1, 2, 3, 4, 5);
// Phần tử và vị trí chèn
$elementToInsert = 10;
$insertPosition = 3;
// Chèn phần tử vào mảng
$resultArray = insertElement($originalArray, $elementToInsert, $insertPosition);
// In kết quả
print_r($resultArray);
echo "<br>";

//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}
$originalArray = array(1, 2, 2, 3, 4, 4, 5, 6, 6);
$uniqueArray = removeDuplicates($originalArray);
print_r($uniqueArray);
echo "<br>";

//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition($array, $element) {
    $position = array_search($element, $array);
    if ($position !== false) {
        return $position;
    } else {
        return -1; // Trả về -1 nếu phần tử không được tìm thấy trong mảng
    }
}
$originalArray = array(1, 2, 3, 4, 5);
$elementToFind = 2;
$position = findElementPosition($originalArray, $elementToFind);
echo "Vi tri cua phan tu $elementToFind trong mang la: $position";
echo "<br>";

//15.Viết chương trình PHP để đảo ngược một chuỗi.
$string = "hello";
function reverseString($string){
    return strrev($string);
}
echo reverseString($string);
echo "<br>";

//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array){
    $count = count($array);
    return $count;
}
$array = array(1,4,8,9);
$count = countElements($array);
echo "So luong phan tu trong mang la: $count";
echo "<br>";

//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
$originalString = "hello";
function isPalindrome($string) {
    // Loại bỏ khoảng trắng và chuyển đổi chuỗi về chữ thường
    $string = strtolower(str_replace(' ', '', $string));
    // Đảo ngược chuỗi
    $reversedString = strrev($string);
    // So sánh chuỗi gốc với chuỗi đảo ngược
    if ($string === $reversedString) {
        return true;
    } else {
        return false;
    }
}
if (isPalindrome($originalString)) {
    echo "Day la chuoi Palindrome";
} else {
    echo "Day khong phai la chuoi Palindrome";
}
echo "<br>";

//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countElementOccurrences($array, $element) {
    // Sử dụng hàm array_count_values để đếm số lần xuất hiện của các phần tử trong mảng
    $occurrences = array_count_values($array);
    // Kiểm tra nếu phần tử tồn tại trong mảng đếm
    if (isset($occurrences[$element])) {
        return $occurrences[$element];
    } else {
        return 0; // Trả về 0 nếu phần tử không xuất hiện trong mảng
    }
}

$originalArray = array(11, 25, 3, 11, 4, 45);
$elementToCount = 11;
$occurrences = countElementOccurrences($originalArray, $elementToCount);
echo "So lan xuat hien cua phan tu $elementToCount trong mang la: $occurrences";
echo "<br>";

//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
$originalArray = array(1, 20, 8, 14, 48);
function sortArrayDescending($array) {
    // Sử dụng hàm rsort để sắp xếp mảng theo thứ tự giảm dần
    rsort($array);
    return $array;
}
$sortedArray = sortArrayDescending($originalArray);
echo "Mang sap xep giam dan la: ";
print_r($sortedArray);
echo "<br>";

//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
// Function để thêm một phần tử vào đầu mảng
$array = [1, 20, 8, 14, 48];
function addElementToBeginning($array, $element) {
    array_unshift($array, $element);
    return $array;
}
$arrayAfterAddingToBeginning = addElementToBeginning($array, 0);
echo "Mang sau khi them vao dau la: ";
print_r($arrayAfterAddingToBeginning);
echo "<br>";

// Function để thêm một phần tử vào cuối mảng
function addElementToEnd($array, $element) {
    $array[] = $element;
    return $array;
}
$arrayAfterAddingToEnd = addElementToEnd($array, 81);
echo "Mang sau khi them vao cuoi la: ";
print_r($arrayAfterAddingToEnd);
echo "<br>";

//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
$array = array(54, -20, 87, 18, 44);
function findSecondLargest($array) {
    rsort($array);
    return $array[1];
}
$secondLargest = findSecondLargest($array);
echo "So lon thu hai trong mang la: " . $secondLargest;
echo "<br>";
    
//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
//Tim UCLN
$a = 30;
$b = 40;
function findTheGreatestCommonDivisorOfTwoPositiveIntegers($a, $b){
    if ($b == 0) return $a;
    return findTheGreatestCommonDivisorOfTwoPositiveIntegers($b, $a % $b);
}
echo ("UCLN cua $a va $b la: " . findTheGreatestCommonDivisorOfTwoPositiveIntegers($a, $b));
echo "<br>";

//Tim BCNN
$a = 30;
$b = 40;
function findTheLeastCommonMultipleOfTwoPositiveIntegers($a, $b){
    return ($a * $b);
}
echo ("BCNN cua $a va $b la: " . findTheLeastCommonMultipleOfTwoPositiveIntegers($a, $b));
echo "<br>";

//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
//Một số hoàn hảo là số nguyên dương mà tổng tất cả các ước số thực sự của nó (không tính chính nó) bằng chính nó.
//Ví dụ: 28 có các ước số là 1, 2, 4, 7, 14 và tổng của chúng là 28.
$number = 28;
function isPerfectNumber($number){
    if ($number <= 0) {
        return false;
    }
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}
if (isPerfectNumber($number)) {
    echo "Day la so hoan hao";
} else {
    echo "Day khong phai la so hoan hao";
}
echo "<br>";

//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
$array = [22, 70, 16, 6, 95];
function findLargestOddNumber($array) {
    $largestOddNumber = null;
    foreach ($array as $number) {
        if ($number % 2 != 0) {
            if ($largestOddNumber === null || $number > $largestOddNumber) {
                $largestOddNumber = $number;
            }
        }
    }
    return $largestOddNumber;
}
$result = findLargestOddNumber($array);
if ($result !== null) {
    echo "So le lon nhat trong mang la: $result";
} else {
    echo "Khong co so le nao trong mang.";
}
echo "<br>";

//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
$number = 17;
if (isPrime($number)) {
    echo "Day la so nguyen to";
} else {
    echo "Day khong phai la so nguyen to";
}
echo "<br>";

//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
$array = [2, -8, 7, 26, -6, 9];
function findLargestPositiveNumber($array) {
    $largestPositiveNumber = null;
    foreach ($array as $number) {
        if ($number > 0 && ($largestPositiveNumber === null || $number > $largestPositiveNumber)) {
            $largestPositiveNumber = $number;
        }
    }
    return $largestPositiveNumber;
}
$result = findLargestPositiveNumber($array);
if ($result !== null) {
    echo "So duong lon nhat trong mang là: $result";
} else {
    echo "Khong co so duong nao trong mang";
}
echo "<br>";

//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
$array = [2, -8, 7, 26, -5, 9];
function findLargestNegativeNumber($array) {
    $largestNegativeNumber = null;
    foreach ($array as $number) {
        if ($number < 0 && ($largestNegativeNumber === null || $number > $largestNegativeNumber)) {
            $largestNegativeNumber = $number;
        }
    }
    return $largestNegativeNumber;
}
$result = findLargestNegativeNumber($array);
if ($result !== null) {
    echo "So am lon nhat trong mang là: $result";
} else {
    echo "Khong co so am nao trong mang";
}
echo "<br>";

//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
$n = 10;
function sumOfOddNumbers($n) {
    $sum = 0;
    if ($n % 2 === 0) {
        $n--;
    }
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
if ($n < 1) {
    echo "Vui long nhap mot so nguyen duong lon hon 0.";
} else {
    $result = sumOfOddNumbers($n);
    echo "Tong cac so le tu 1 den $n la: $result";
}
echo "<br>";

//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function isPerfectSquare($number){
    $root = sqrt($number);
    return ($root * $root == $number);
}
function findPerfectSquares($start, $end){
    for($i=$start; $i<=$end; $i++)
    {
        if(isPerfectSquare($i))
        {
            echo $i." la so chinh phuong.<br>";
        }
    }
}
$start = 1;
$end = 10;
findPerfectSquares($start, $end);

//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function checkStringIsSubstringOfAnotherString(){
    $string = 'K56 Dai hoc thuong mai';
    $substring = 'hoc';
    if(strpos($string, $substring) !== false)
    {
        echo "Co ton tai";
    } 
    else 
    {
        echo "Khong ton tai";
    }
}
checkStringIsSubstringOfAnotherString(); 
?>