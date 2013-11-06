<table style="width:100%;">
@if($count_request>0)
<tbody width="100%">
<tr>
<td class="span120 bold">Recruiter</td>
<td class="span120 bold">Hospital</td>
<td class="span150 bold">Location</td>
<td class="span100 bold">Status</td>
<td class="span150 bold">Release Documents</td>
<td class="span120 bold">Messages</td>
<td class="span150 bold">Job Accepted</td>
<td class="span120 bold">Comments</td>
</tr>
</tbody>
@foreach($connection_request as $key => $connection)
<tbody>
<tr>
<td>{{$connection["recruiter_name"]}}</td>
<td class="redunderline">{{$connection["hospital_name"]}}</td>
<td>{{$connection["location"]}}</td>
<td>
<select name="status_{{$status}}{{$key}}" id="status_{{$status}}{{$key}}" style="width:100px;" onchange="set_connections(this.value,{{$connection['record_id']}})">
<option value="">Select</option>
@if($status=='request')
@if($connection["comm_status"]==2)
<option value="AA" selected="selected">Accept</option>
<option value="AD">Decline</option>
<option value="AI">Ignore</option>
@endif
@if($connection["comm_status"]==-99999)
<option value="AA">Accept</option>
<option value="AD" selected="selected">Decline</option>
<option value="AI">Ignore</option>
@endif
@if($connection["comm_status"]==0)
<option value="AA">Accept</option>
<option value="AD">Decline</option>
<option value="AI" selected="selected">Ignore</option>
@endif
@endif
@if($status=='current')
@if($connection["comm_status"]==2)
<option value="AA" selected="selected">Connected</option>
<option value="AD">Remove</option>
@endif
@if($connection["comm_status"]==-99999)
<option value="AA">Connected</option>
<option value="AD" selected="selected">Remove</option>
@endif
@endif
@if($status=='deleted')
<option value="AA">Reconnect</option>
<option value="AF">Delete Forever</option>

@endif
</select>
</td>
<td>
<select name="document_release_{{$status}}{{$key}}" id="document_release_{{$status}}{{$key}}" style="width:100px;" onchange="set_connections(this.value,{{$connection['record_id']}})">
@if($connection["doc_release"]==1)
<option value="DY" selected="selected">Yes</option>
<option value="DN">No</option>
<option value="DH">Hold</option>
@endif
@if($connection["doc_release"]==0)
<option value="DY">Yes</option>
<option value="DN" selected="selected">No</option>
<option value="DH">Hold</option>
@endif
@if($connection["doc_release"]==2)
<option value="DY">Yes</option>
<option value="DN">No</option>
<option value="DH" selected="selected">Hold</option>
@endif
</select>
</td>
<td class="redunderline">3</td>
<td><input type="radio" name="job_accepted_{{$status}}{{$key}}" id="job_yes_{{$status}}{{$key}}"  />Yes&nbsp;<input type="radio" name="job_accepted_{{$status}}{{$key}}" id="job_no_{{$status}}{{$key}}"  />No</td>
<td><textarea name="comments_{{$status}}{{$key}}" id="comments_{{$status}}{{$key}}" style="width:100px;"></textarea></td>
</tr>
</tbody>
@endforeach
@endif
@if($count_request==0)
<tr><td style="text-align:center;"><span class="bold">No connections found</span></td></tr>
@endif
</table>              