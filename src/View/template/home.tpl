<link rel="stylesheet" type="text/css" href="./src/Lib/algo.css" xmlns="http://www.w3.org/1999/html">
    <form>
        <p>Combien de données voulez-vous trier ?</p>
        <input type="radio" value="10">10
        <input type="radio" value="100">100
        <input type="radio" value="1000">1000
        <input type="radio" value="10000">10000
        <p>Quel type de tri voulez-vous utiliser ?</p>
        <input type="checkbox" value="triInsrt">
        <input type="checkbox" value="triBulle">
        <input type="checkbox" value="quicksort">
        <input type="checkbox" value="triShell">
        <input type="checkbox" value="triSelec">
        <input type="checkbox" value="triFusion">
        <input type="checkbox" value="triPeigne">
    </form>

        <p>Résultats</p>
    <table>
        <th>Nombres triés par QuickSort</th>
        <td>
            {foreach $quicksort as $quick_num}
                {$quick_num}
            {/foreach}
        </td>
    </table>
