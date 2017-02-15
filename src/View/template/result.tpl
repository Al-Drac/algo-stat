<link rel="stylesheet" type="text/css" href="./src/Lib/algo.css">


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
{$quicksort.time} ms

<br><br>

<h2>Insertion: </h2>
<h4>List: </h4>
{foreach $insertion.list as $insert_num}
    {$insert_num} &nbsp; &nbsp;
{/foreach}
<br>
<h4>Temps: </h4>
{$insertion.time} ms
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
{$bulle.time} ms
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
{$selec.time} ms
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
<h4>Temps: </h4>
{$shell.time} ms
<br>
<h4>Boucle: </h4>
{$shell.loop}
<h2>Shell: </h2>
<h4>List: </h4>
{foreach $shell.list as $shell_num}
    {$shell_num} &nbsp; &nbsp;
{/foreach}
<br>
<!--<h4>Temps: </h4>
{$shell.time} ms
<br>-->
<h4>Boucle: </h4>
{$peigne.loop}

<br><br>

<h2>Peigne: </h2>
<h4>List: </h4>
{foreach $peigne.list as $peigne_num}
    {$peigne_num} &nbsp; &nbsp;
{/foreach}
<br>
<h4>Temps: </h4>
{$peigne.time} ms
<br>
<h4>Boucle: </h4>
{$peigne.loop}

<br><br>

<table>
    <tr>
        <th>Type de tri</th>
        <th>Tableau trié</th>
        <th>Temps de tri</th>
        <th>Nombre de boucles</th>
    </tr>
    <tr>
        <th></th>
        <td>
            {foreach $insertion.list as $insert_num}
                {$insert_num} &nbsp; &nbsp;
            {/foreach}
        </td>
        <td>
            {$insertion.time} ms
        </td>
        <td>
            {$insertion.loop}
        </td>
    </tr>
</table>