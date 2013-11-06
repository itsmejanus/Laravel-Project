<table>
<tbody width="100%">
<tr>
<td class="span120 bold">Physician</td>
<td class="span300 bold">Hospital</td>
<td class="span30 bold">&nbsp;</td>
<td class="span30 bold">&nbsp;</td>
<td class="span30 bold">&nbsp;</td>
</tr>
</tbody>
@foreach($docsByHome as $key=>$docs)
<tbody>
<tr>
<td>{{$docs->name}}</td>
<td>{{$docs->alias}}</td>
<td><img src="img/recruiter/connect.png" alt="connect icon"></td>
<td><img src="img/recruiter/email.png" alt="email icon"></td>
<td><img src="img/recruiter/trash.png" alt="trash icon"></td>
</tr>
</tbody>
@endforeach
</table>