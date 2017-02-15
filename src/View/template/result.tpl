<link rel="stylesheet" type="text/css" href="./src/Lib/algo.css">

<h1>Résultats :</h1>
<table class="table-fill">
    <tr>
        <th class="text-left">Type de tri</th>
        <th class="text-left">Tableau trié</th>
        <th class="text-left">Temps de tri</th>
        <th class="text-left">Nombre de boucles</th>
    </tr>
    {foreach from = $result key=k item=value}
    <tr>
        <th class="text-left">{$k}</th>
        <td class="data">
            <div class="overFlow">
                {foreach $value.list as $insert_num}
                    {$insert_num}
                {/foreach}
            </div>
        </tdclass>
        <td>
            {$value.time} ms
        </td>
        <td>
            {$value.loop}
        </td>
    </tr>
    {/foreach}
</table>

