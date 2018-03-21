
Hello

<table>
<br />

{$date|date_format}

{foreach from=$people key=w item=k}
 <tr style="background: {cycle  values='#ff8080, #ffe6e6'}">
<td>{$w} </td>
<td>   {$k}</td>
</tr>
{/foreach}
</table>
