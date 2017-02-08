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
            {foreach $quicksort.list as $quick_num}
                {$quick_num}
            {/foreach}
        </td>
    </table>
<br>
<h4>Temps: </h4>
{$quicksort.time}

<br><br>

<h2>Insertion: </h2>
<h4>List: </h4>
{foreach $insertion.list as $insert_num}
    {$insert_num} &nbsp; &nbsp;
{/foreach}
<br>
<h4>Temps: </h4>
{$insertion.time}
<br>
<h4>Boucle: </h4>
{$insertion.loop}

<br><br>

<h2>Bulle: </h2>
<h4>List: </h4>
{foreach $bulle.list as $bulle_num}
    {$bulle_num} &nbsp; &nbsp;
{/foreach}
<br>
<h4>Temps: </h4>
{$bulle.time}
<br>
<h4>Boucle: </h4>
{$bulle.loop}

<br><br>

<h2>Selection: </h2>
<h4>List: </h4>
{foreach $selec.list as $selec_num}
    {$selec_num} &nbsp; &nbsp;
{/foreach}
<br>
<h4>Temps: </h4>
{$selec.time}
<br>
<h4>Boucle: </h4>
{$selec.loop}

<br><br>

<h2>Shell: </h2>
<h4>List: </h4>
{foreach $shell.list as $shell_num}
    {$shell_num} &nbsp; &nbsp;
{/foreach}
<br>
<!--<h4>Temps: </h4>
{$shell.time}
<br>-->
<h4>Boucle: </h4>
{$shell.loop}
