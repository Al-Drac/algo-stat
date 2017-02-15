<link rel="stylesheet" type="text/css" href="./src/Lib/algo.css" xmlns="http://www.w3.org/1999/html">
    <form action ="" method = 'post'>
        <p>Combien de données voulez-vous trier ?</p>
        <input name='size' type="radio" value="10">10
        <input name='size' type="radio" value="100">100
        <input name='size' type="radio" value="1000">1000
        <input name='size' type="radio" value="10000">10000
        <br>
        <p>LIST</p>
        <input name='list' type="checkbox" value="randomNumbers">random
        <input name='list' type="checkbox" value="sortedNumbers">sorted
        <input name='list' type="checkbox" value="sortedReverseNumbers">sorted Reverse
        <input name='list' type="checkbox" value="almostSortedNumbers">almost Sorted
        <br>
        <p>Quel type de tri voulez-vous utiliser ?</p>
        <input name='func[]' type="checkbox" value="triInsrt"> insrt
        <input name='func[]' type="checkbox" value="triBulle"> bulle
        <input name='func[]' type="checkbox" value="quicksort"> quicksort
        <input name='func[]' type="checkbox" value="triShell"> shell
        <input name='func[]' type="checkbox" value="triSelec"> selec
        <input name='func[]' type="checkbox" value="triFusion"> fusion
        <input name='func[]' type="checkbox" value="triPeigne"> peigne
        <br><br>
        <input type="submit" value="YOLO">
    </form>
