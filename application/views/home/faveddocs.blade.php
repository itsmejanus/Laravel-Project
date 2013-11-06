<table>
<tbody width="100%">
<tr>
<td class="span120 bold">Physician</td>
<td class="span300 bold">Location</td>
<td class="span30 bold">&nbsp;</td>
<td class="span30 bold">&nbsp;</td>
<td class="span30 bold">&nbsp;</td>
</tr>
</tbody>
@foreach($docsByFaved as $key=>$favdocs) 
<tbody>
<tr>
<td>{{$favdocs->name}}</td>
<td>{{$favdocs->location}}</td>
<td><img src="img/recruiter/connect.png" alt="connect icon" onclick="connect_physician('{{$favdocs->user_id}}')"></td>
<td><img src="img/recruiter/email.png" alt="email icon"></td>
<td><img src="img/recruiter/trash.png" alt="trash icon"></td>
</tr>
</tbody>
@endforeach
</table>