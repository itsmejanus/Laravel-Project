<table>
<tbody>
<tbody width="100%">
<tr>
<td class="span160 bold">Physician</td>
<td class="span160 bold">Hospital</td>
</tr>
</tbody>
@foreach($connection_request as $key=>$con)
<tbody>
<tr>
<td>{{$con["recruiter_name"]}}</td>
<td>{{$con["hospital_name"]}}</td>
</tr>
</tbody>
@endforeach  
</table>