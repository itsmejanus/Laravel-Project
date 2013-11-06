<table>
<tbody width="100%">
<tr>
<td class="span120 bold">Physician</td>
<td class="span120 bold">Hospital</td>
<td class="span100 bold">Message</td>
<td class="span100 bold">Documents on File</td>
<td class="span30 bold">&nbsp;</td>
<td class="span30 bold">&nbsp;</td>
</tr>
</tbody>
@foreach($connectedDocs as $key=>$docs)
<tbody>
<tr>
<td>{{$docs->docname}}</td>
<td class="redunderline">{{$docs->hospname}}</td>
<td>{{$docs->msg_count}}</td>
<td>
@if($docs->doc_release==0)
Request
@endif
@if($docs->doc_release==2)
Yes
@endif
</td>
<td><img src="img/recruiter/email.png" alt="email icon"></td>
<td><img src="img/recruiter/trash.png" alt="trash icon"></td>
</tr>
</tbody>
@endforeach
</table>