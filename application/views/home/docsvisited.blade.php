<table>
<tbody>
<tbody width="100%">
<tr>
<td class="span160 bold">Physician</td>
<td class="span160 bold">Hospital</td>
</tr>
</tbody>
@foreach($docsByVisited as $key=>$docs)
<tbody>
<tr>
<td>{{$docs["name"]}}</td>
<td>{{$docs["alias"]}}</td>
</tr>
</tbody>
@endforeach
</table>