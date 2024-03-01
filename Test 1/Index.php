<?php
function A000124($n) {
    $sequence = [];
    for ($i = 1; $i <= $n; $i++) {
        $sequence[] = pow($i, 3) - pow($i - 1, 3);
    }
    return $sequence;
}

$input = isset($_GET['input']) ? intval($_GET['input']) : 0;
if ($input > 0) {
    $sequence = A000124($input);
    echo implode('-', $sequence) . "\n";
} else {
    echo "Please provide an input value greater than 0.\n";
}
?>

<form>
    Input: <input type="number" name="input" value="<?php echo $input; ?>">
    <input type="submit" value="Generate Sequence">
</form>